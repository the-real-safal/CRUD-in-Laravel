@extends('layouts.app')
@section('main')
    <div class="container mt-5">
        <form method="POST" action="/products/store" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" >Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter your name">
                @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}} </span>
                @endif
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" value="{{old('description')}} rows="3"
                    placeholder="Enter a description"></textarea>
                @if($errors->has('description'))
                <span class="text-danger">{{$errors->first('description')}} </span>
                @endif
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if($errors->has('image'))
                <span class="text-danger">{{$errors->first('image')}} </span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional, for certain features like dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection