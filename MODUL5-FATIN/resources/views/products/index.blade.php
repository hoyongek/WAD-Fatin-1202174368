@extends('template')
 
@section('content')
<br><br>

     <a class="btn btn-dark" href="{{ route('products.create') }}" style="margin-left: 45%;" > Add Product </a><br><br>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach ($products as $product)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $product->product_name }}</td>
            <td class="text-center">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST"> 
                    <a class="btn btn-primary btn-sm" href="{{ route('products.update_product',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $products->links() !!}
 
@endsection
