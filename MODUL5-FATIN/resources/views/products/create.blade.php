@extends('template')

@section('content')
<br><br>
   
            <h2 style="padding-left: 40%;">Input Product</h2><br><br>
 
<form action="{{ route('products.store') }}" method="POST" style="margin-left: 20%; margin-right:20%;">
    @csrf
 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name</strong>
                <input type="text" name="product_name" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price</strong>
                <div class="group">
                    <label >$ USD <input type="text" class="price" name="price" style="width: 610px;"></label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" style="height:150px" name="description" ></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock</strong>
                <input type="text" class="form-control" name="stock" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image File Input</strong>
                <input type="file" class="form-control" name="image" >
            </div>
        </div>
        <div class=" col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>
    </div>
</div>
 
</form>
@endsection
