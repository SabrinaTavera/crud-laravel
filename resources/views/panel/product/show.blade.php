@extends('layouts.panel')

@section('body')
   
<div class="page-wrapper">
    <div class="container-fluid">   
        
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <h4 class="card-title">Dados do produto</h4>
                        </div>
                       
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf 
                        <div class="row">
                            <div class="col-md-2 col-sm-6 form-group">
                                    <h4 class="card-title">Nome do produto:</h4>
                            </div>     
                            <div class="col-md-4 col-sm-6 form-group">
                                <p class="text-muted">
                                    {{$product->name}}
                                </p>       
                            </div>
                            <div class="col-md-2 col-sm-6 form-group">
                                    <h4 class="card-title">Quant. Estoque:</h4>
                            </div>     
                            <div class="col-md-1 col-sm-6 form-group">
                                <p class="text-muted">
                                    {{$product->stock}}
                                </p>       
                            </div>
                            <div class="col-md-1 col-sm-6 form-group">
                                    <h4 class="card-title">Preço:</h4>
                            </div>     
                            <div class="col-md-2 col-sm-6 form-group">
                                <p class="text-muted">
                                    {{  'R$ '.number_format($product->price, 2, ',', '.') }}
                                </p>       
                            </div>
                            <div class="col-md-2 col-sm-6 form-group">
                                    <h4 class="card-title">Descrição:</h4>
                            </div>     
                            <div class="col-md-10 col-sm-6 form-group">
                                <p class="text-muted">
                                    {{  $product->description}}
                                </p>       
                            </div>
                            
                        </div>
                        <div class="col-md-12 col-sm-12" style="margin-top: 60px">
                            <a href="{{ route('product.index') }}" >
                                <button type="button" class="btn btn-info" >VOLTAR</button>
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