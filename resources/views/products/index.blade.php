@extends('layouts.app')
@section('main')
<div class="container">
    <div class="text-right">
        <a href="products/create" class="btn btn-success mt-2">New Product</a>
    </div>

    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
        <tr>
                <td>{{ $loop->index+1 }}</td>
                <td> <a href="products/{{$product->id}}/details" class=""><strong>{{  $product->name }}</strong></a></td>
                <td><img src="products/{{  $product->image }}"class="image-thumbnail" width="50px" height="50px"/></td>
                <td>
               
                  <a href="products/{{$product->id}}/edit" class="btn btn-primary m-2">Edit</a>
                  <a href="products/{{$product->id}}/delete" class="btn btn-danger m-2">Delete</a>
              </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
