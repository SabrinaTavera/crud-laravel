<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Collaborator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributors = User::all();

        
        
        return view('panel.colaborador.index', compact('contributors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.colaborador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {

        
        if($request['check-provider'] =='on')
            $request['tipo'] = 'f';
        else
            $request['tipo'] = 'c';

        $user_id = $user->create($request->all())->id;

        if($request['check-provider'] =='on'){
          
            $endereco1 = new  Address();
            $endereco1->street  = $request->input('street');
            $endereco1->number  = $request->input('number');
            $endereco1->cep     = $request->input('cep');
            $endereco1->city    = $request->input('city');
            $endereco1->state   = $request->input('state');
            $endereco1->user_id   = $user_id;
            
            
            $endereco1->save();
            
            $endereco2 = new  Address();
            $endereco2->street  = $request->input('street-2');
            $endereco2->number  = $request->input('number-2');
            $endereco2->cep     = $request->input('cep-2');
            $endereco2->city    = $request->input('city-2');
            $endereco2->state   = $request->input('state-2');
            $endereco2->user_id   = $user_id;
            
            $endereco2->save();
        }
       
    

        
        
        return redirect()->action([CollaboratorController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collaborator = User::find($id);
        if(isset($collaborator)){
            if($collaborator->tipo == 'f'){
                
                $addresses = DB::table('addresses')
                ->where('user_id', '=', $collaborator->id)
                ->get();
                            
              
                return view('panel.colaborador.show',['collaborator' => $collaborator, 'addresses' => $addresses]);
            }
            return view('panel.colaborador.show',['collaborator' => $collaborator]);
            
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collaborator = User::find($id);
        if(isset($collaborator)){
            return view('panel.colaborador.show', compact(['collaborator']));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaborator $collaborator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $collaborator = User::find($id);
        if($collaborator['email'] != 'admin@admin')
            $collaborator->delete();

        return redirect()->action([CollaboratorController::class, 'index']);
        
    }

    public function inactive(){
 
        $contributors = DB::table('users')
                ->whereNotNull('deleted_at')
                ->get();
        // dd($products);
        return view('panel.colaborador.inactive', compact('contributors'));
    }

    public function active($id){

        
        $affected = DB::table('users')
              ->where('id', $id)
              ->update(['deleted_at' => null]);
        
        return redirect()->action([CollaboratorController::class, 'inactive']);
    }
}
