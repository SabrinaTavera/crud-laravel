@extends('layouts.panel')

@section('body')
   
<div class="page-wrapper">
    <div class="container-fluid">   
        
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <h4 class="card-title">Dados Colaborador</h4>
                        </div>
                       
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    
                        
                        <div class="row">
                            
                            <div class="row col-md-12">
                                <div class="col-md-1 col-sm-6 form-group">
                                    <h4 class="card-title">Nome:</h4>
                                </div>     
                                <div class="col-md-5 col-sm-6 form-group">
                                    <p class="text-muted">
                                        {{$collaborator->name}}
                                    </p>       
                                </div>                            
                                <div class="col-md-1 col-sm-6 form-group">
                                    <h4 class="card-title">Celular:</h4>
                                </div>     
                                <div class="col-md-5 col-sm-6 form-group">
                                    <p class="text-muted">
                                        {{$collaborator->cell}}
                                    </p>       
                                </div>                            
                                <div class="col-md-1 col-sm-6 form-group">
                                    <h4 class="card-title">E-mail:</h4>
                                </div>     
                                <div class="col-md-5 col-sm-6 form-group">
                                    <p class="text-muted">
                                        {{$collaborator->email}}
                                    </p>       
                                </div>                            
                                <div class="col-md-1 col-sm-6 form-group">
                                    <h4 class="card-title">Tipo:</h4>
                                </div>     
                                <div class="col-md-5 col-sm-6 form-group">
                                    <p class="text-muted">
                                        @if ($collaborator['tipo'] == 'f')
                                            Fornecedor
                                        @else
                                            Colaborador
                                        @endif
                                    </p>       
                                </div>   
                                @if($collaborator['tipo'] === 'f')
                                    
                                
                                    @foreach ($addresses as $address)
                     
                                            <br>
                                            <hr style="width: 100%">
                                            <div class="col-md-12 col-sm-12 form-group">
                                                <h4>Endereço</h4>
                                            </div>  
                                            
                                            <br>
                                      
                                            <div class="col-md-1 col-sm-6 form-group">
                                                <h4 class="card-title">Rua/Av:</h4>
                                            </div>     
                                            <div class="col-md-5 col-sm-6 form-group">
                                                <p class="text-muted">
                                                    {{$address->street}}
                                                </p>       
                                            </div>  
                                            <div class="col-md-1 col-sm-6 form-group">
                                                <h4 class="card-title">Número</h4>
                                            </div>     
                                            <div class="col-md-5 col-sm-6 form-group">
                                                <p class="text-muted">
                                                    {{$address->number}}
                                                </p>       
                                            </div>  
                                            <div class="col-md-1 col-sm-6 form-group">
                                                <h4 class="card-title">Cidade</h4>
                                            </div>     
                                            <div class="col-md-5 col-sm-6 form-group">
                                                <p class="text-muted">
                                                    {{$address->city}}
                                                </p>       
                                            </div>  
                                            <div class="col-md-1 col-sm-6 form-group">
                                                <h4 class="card-title">Estado</h4>
                                            </div>     
                                            <div class="col-md-5 col-sm-6 form-group">
                                                <p class="text-muted">
                                                    {{$address->state}}
                                                </p>       
                                            </div>  
                                            <div class="col-md-1 col-sm-6 form-group">
                                                <h4 class="card-title">CEP</h4>
                                            </div>     
                                            <div class="col-md-5 col-sm-6 form-group">
                                                <p class="text-muted">
                                                    {{$address->cep}}
                                                </p>       
                                            </div>  
                                                             
                                    @endforeach 
                                @endif
                                </div>
                                <div class="col-md-12 col-sm-12 margin-button">
                            
                                    <a href="{{ route('colaborador.index') }}">
                                    <button type="button" id="btnCadastrarCliente" class="btn btn-info" >VOLTAR</button>
                                    </a>
                        </div>
                    
                    
                       
                </div>
            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center text-muted">
        All Rights Reserved by Adminmart. Designed and Developed by <a
            href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
@endsection