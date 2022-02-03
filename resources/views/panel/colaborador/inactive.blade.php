@extends('layouts.panel')

@section('body')

<div class="page-wrapper">
    <div class="container-fluid">   
        
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <h4 class="card-title">Colaboradores Inativos</h4>
                        </div>
                      
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <!--<h6 class="card-title mt-5"><i class="mr-1 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Table With
                        Outside Padding</h6>-->
                                {{--  {{dd($products)}}  --}}
                        @if (sizeof($contributors) )
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nome Colaborador</th>
                                            <th scope="col">Tipo</th>                                    
                                            <th scope="col">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($contributors as $collaborator)
                                        <tr>
                                            <td>{{$collaborator->name}}</td>
                                            <td>
                                                @if ($collaborator->tipo == 'f')
                                                    Fornecedor
                                                @else
                                                    Colaborador
                                                @endif
                                                
                                            </td>
                                            <td>
                                                &nbsp;
                                           
                                                &nbsp;
                                                    <a href="{{ route('collaborator.active', $collaborator->id) }}">
                                                        <i  class="fas fa-low-vision"></i>
                                                    </a>
                                            </td>

                                        </tr>
                                        @endforeach 
                                    
                                    </tbody>
                                </table>
                        
                            </div>
                         @else
                        <br>
                        <h5> Não há colaboradores inativos </h5>
                        
                        @endif
                       
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
