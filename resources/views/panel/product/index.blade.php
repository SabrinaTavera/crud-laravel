@extends('layouts.panel')

@section('body')

<div class="page-wrapper">
    <div class="container-fluid">   
        
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <h4 class="card-title">Produtos Cadastrados</h4>
                        </div>
                        <div class="col-md-3 col-sm-12" style="display: flex; justify-content: flex-start">
                            <a href="{{ route('colaborador.create') }}">
                                <button type="button" id="btnCadastrarCliente" class="btn btn-info" >Cadastrar Produto</button>
                            </a>
                        </div>
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <!--<h6 class="card-title mt-5"><i class="mr-1 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Table With
                        Outside Padding</h6>-->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome Usuário</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <a>
                                             <i  class="icon-magnifier"></i>
                                        </a>
                                        &nbsp;
                                        <a>
                                             <i  class="icon-note"></i>
                                        </a>
                                        &nbsp;
                                        <a>
                                             <i  class="icon-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
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
