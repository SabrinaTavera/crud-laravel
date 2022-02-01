@extends('layouts.panel')

@section('body')
   
<div class="page-wrapper">
    <div class="container-fluid">   
        
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <h4 class="card-title">Editar Produto</h4>
                        </div>
                       
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <form action="{{ route('prod.update', $product->id) }}" method="POST">
                        @csrf 
                        <div class="row">
                            <div class="col-md-2 col-sm-6 form-group">
                                <h4 class="card-title aling-title">Nome:</h4>                                
                            </div>
                            <div class="col-md-6 col-sm-6 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="name" value="{{$product->name}}" name="name" placeholder="Nome">
                            </div>
                            <div class="col-md-2 col-sm-6 form-group">
                                <h4 class="card-title aling-title">Estoque:</h4>                                
                            </div>
                            <div class="col-md-2 col-sm-6 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="stock" value="{{$product->stock}}" name="stock" placeholder="Estoque">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <h4 class="card-title aling-title">Descrição:</h4>                                
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="description" placeholder="Descrição do produto">{{$product->description}}</textarea>
                                </div>
                                
                            </div>
                            <div class="col-md-2 col-sm-6 form-group">
                                <h4 class="card-title aling-title">Preço:</h4>                                
                            </div>
                            <div class="col-md-2 col-sm-6 form-group">
                                <input type="text" class="form-control" id="nametext" aria-describedby="price" value="{{  number_format($product['price'], 2, ',', '.') }}" name="price" placeholder="Preço">
                                
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