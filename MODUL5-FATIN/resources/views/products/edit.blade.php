@extends('template')
 <br><br><br>
@section('content')
<div class="card">
<div class="card-body" style="margin-left: 200px; margin-right: 200px; margin-top:50px;">

                <h2>Update Product</h2><br>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name</strong>
                    <input type="text" name="product_name" value="{{ $product->product_name }}" placeholder="Product Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <div class="group">
                        <label>$ USD</label>
                        <input type="text" name="price" value="{{ $product->price }}">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" style="height:150px" name="description" value="{{ $product->description }}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stock</strong>
                    <input type="text" class="form-control" style="height:150px" name="stock" value="{{ $product->stock }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image File Input</strong>
                    <input type="file" class="form-control" style="height:150px" name="image" value="{{ $product->image }}">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-dark">Update</button>
            </div>
        </div>
    </div>
</div>
    </form>
@endsection