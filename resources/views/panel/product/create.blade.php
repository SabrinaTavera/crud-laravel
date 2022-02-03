@extends('layouts.panel')

@section('body')
   
<div class="page-wrapper">
    <div class="container-fluid">   
        
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <h4 class="card-title">Cadastro Produto</h4>
                        </div>
                       
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf 
                        <div class="row">
                            <div class="col-md-6 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" name="name" placeholder="Nome" required>
                                <small id="name" class="form-text text-muted">Digite o nome do Produto</small>
                            </div>
                            <div class="col-md-3 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="stock" name="stock" placeholder="Estoque" required>
                                <small id="name" class="form-text text-muted">Digite quantidade estoque</small>
                            </div>
                            <div class="col-md-3 col-sm-12 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="price" name="price" placeholder="Preço" required>
                                <small id="name" class="form-text text-muted">Digite o valor do produto</small>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="description" placeholder="Descrição do produto"></textarea>
                                </div>
                                <small id="name" class="form-text text-muted">Digite a descrição (informações) do produto</small>
                            </div>
                           
                            
                        </div>
                        <button type="submit" id="btnCadastrarCliente" class="btn btn-info" >SALVAR</button>
                        <a href="{{ route('product.index') }}">
                            <button type="button" class="btn btn-info" >CANCELAR</button>
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