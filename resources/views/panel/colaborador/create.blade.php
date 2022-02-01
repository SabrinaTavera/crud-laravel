@extends('layouts.panel')

@section('body')
   
<div class="page-wrapper">
    <div class="container-fluid">   
        
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <h4 class="card-title">Cadastro Colaborador</h4>
                        </div>
                       
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <form action="{{ route('colaborador.store') }}" method="POST">
                        @csrf 
                        <div class="row">
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Nome">
                                <small id="name" class="form-text text-muted">Digite o nome do Colaborador</small>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="E-mail">
                                <small id="name" class="form-text text-muted">Digite o e-mail do Colaborador</small>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Telefone">
                                <small id="name" class="form-text text-muted">Digite o telefone do Colaborador</small>
                            </div>
                           
                            <div class="col-md-6">
                                <h4 class="card-title">Este colaborador é um fornecedor?</h4>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked">
                                        <label class="custom-control-label" for="customControlValidation2">Não</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked">
                                        <label class="custom-control-label" for="customControlValidation3">Sim</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 form-group" style="margin-top: 20px">
                                <h4 class="card-title">Primeiro Endereço</h4>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Rua/Av.">
                                <small id="name" class="form-text text-muted">Digite o nome da Rua/Av.</small>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Numero">
                                <small id="name" class="form-text text-muted">Digite o número</small>
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="CEP">
                                <small id="name" class="form-text text-muted">Digite o CEP</small>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Cidade">
                                <small id="name" class="form-text text-muted">Digite a Cidade</small>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Estado">
                                <small id="name" class="form-text text-muted">Digite o estado</small>
                            </div>
                            <div class="col-md-12 col-sm-12 form-group" style="margin-top: 20px">
                                <h4 class="card-title">Segundo Endereço</h4>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Rua/Av.">
                                <small id="name" class="form-text text-muted">Digite o nome da Rua/Av.</small>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Numero">
                                <small id="name" class="form-text text-muted">Digite o número</small>
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="CEP">
                                <small id="name" class="form-text text-muted">Digite o CEP</small>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Cidade">
                                <small id="name" class="form-text text-muted">Digite a Cidade</small>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Estado">
                                <small id="name" class="form-text text-muted">Digite o estado</small>
                            </div>
                            
                        </div>
                        <button type="button" id="btnCadastrarCliente" class="btn btn-info" >SALVAR</button>
                        <a href="{{ route('colaborador') }}">
                            <button type="button" id="btnCadastrarCliente" class="btn btn-info" >CANCELAR</button>
                        </a>
                    </form>
                    
                       
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