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
                            <div class="row col-md-12">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="nametext" aria-describedby="name" name="name" placeholder="Nome">
                                    <small id="name" class="form-text text-muted">Digite o nome do Colaborador</small>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" class="form-control cell" id="nametext" aria-describedby="name" name="cell" placeholder="Exemplo: (00) 0 0000-0000">
                                    <small id="name" class="form-text text-muted">Digite o celular do Colaborador</small>
                                </div>
                            </div>
                            <div class="row col-md-12 access-collaborator">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" class="form-control email" id="nametext" aria-describedby="name" name="email" placeholder="E-mail">
                                    <small id="name" class="form-text text-muted">Digite o e-mail do Colaborador</small>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="password" class="form-control password" id="nametext" aria-describedby="name" name="password" placeholder="Senha">
                                    <small id="name" class="form-text text-muted">Escolha uma senha</small>
                                </div>
                            </div>
                           
                            <div class="col-md-4">
                                <h4 class="card-title">Este colaborador terá acesso ao sistema?</h4>
                                
                            </div>
                            <div class="col-md-2">
                                
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input acess-collaborator-false" value="off" id="acessCollaboratorFalse" name="check-collaborator" checked="">
                                        <label class="custom-control-label" for="acessCollaboratorFalse">Não</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input acess-collaborator-true" value="on" id="acessCollaboratorTrue" name="check-collaborator">
                                        <label class="custom-control-label" for="acessCollaboratorTrue">Sim</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h4 class="card-title">Este colaborador é um fornecedor?</h4>
                                
                            </div>
                            <div class="col-md-2">
                                
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input check-colaborador" value="off" id="customControlValidation2" name="check-provider" checked="">
                                        <label class="custom-control-label" for="customControlValidation2">Não</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input check-fornecedor" value="on" id="customControlValidation3" name="check-provider">
                                        <label class="custom-control-label" for="customControlValidation3">Sim</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row col-md-12 col-sm-12 data-provider">
                                
                                <div class="col-md-12 col-sm-12 form-group" style="margin-top: 20px">
                                    <h4 class="card-title">Primeiro Endereço</h4>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="nametext" aria-describedby="name" name="street" placeholder="Rua/Av.">
                                    <small id="name" class="form-text text-muted">Digite o nome da Rua/Av.</small>
                                </div>
                                <div class="col-md-2 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="nametext" aria-describedby="name"  name="number" placeholder="Numero">
                                    <small id="name" class="form-text text-muted">Digite o número</small>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group">
                                    <input type="text" class="form-control cep" id="nametext" aria-describedby="name"  name="cep"  placeholder="Exemplo: 00000-000">
                                    <small id="name" class="form-text text-muted">Digite o CEP</small>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="nametext" aria-describedby="name"name="city" placeholder="Cidade">
                                    <small id="name" class="form-text text-muted">Digite a Cidade</small>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="nametext" aria-describedby="name"  name="state" placeholder="Estado">
                                    <small id="name" class="form-text text-muted">Digite o estado</small>
                                </div>
                                <div class="col-md-12 col-sm-12 form-group" style="margin-top: 20px">
                                    <h4 class="card-title">Segundo Endereço</h4>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="nametext" aria-describedby="name" name="street-2" placeholder="Rua/Av.">
                                    <small id="name" class="form-text text-muted">Digite o nome da Rua/Av.</small>
                                </div>
                                <div class="col-md-2 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="nametext" aria-describedby="name" name="number-2" placeholder="Numero">
                                    <small id="name" class="form-text text-muted">Digite o número</small>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group">
                                    <input type="text" class="form-control cep" id="nametext" aria-describedby="name" name="cep-2" placeholder="Exemplo: 00000-000">
                                    <small id="name" class="form-text text-muted">Digite o CEP</small>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="nametext" aria-describedby="name" name="city-2" placeholder="Cidade">
                                    <small id="name" class="form-text text-muted">Digite a Cidade</small>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="nametext" aria-describedby="name" name="state-2" placeholder="Estado">
                                    <small id="name" class="form-text text-muted">Digite o estado</small>
                                </div>

                            </div> 
                            
                        </div>
                        <div class="col-md-12 col-sm-12 margin-button">
                            <button type="submit"  class="btn btn-info" >SALVAR</button>
                            <a href="{{ route('colaborador.index') }}">
                                <button type="button" id="btnCadastrarCliente" class="btn btn-info" >CANCELAR</button>
                            </a>
                        </div>
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