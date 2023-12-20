@extends ('layouts.app')
@section('main')
<!-- Hero Section -->
<div class="container-fluid bg-dark text-white p-5">
    <div class="row align-items-center">
       <!-- Left Side (Image) -->
<div class="col-md-6">
    <img src="{{ asset('products/' . $product->image) }}" alt="Product Image" class="img-fluid mx-auto" style="max-width: 50%;">
</div>


        <!-- Right Side (Description) -->
        <div class="col-md-6">
            <h1 class="display-4">{{$product->name}}</h1>
            <p class="lead">{{$product->description}}</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional, for certain features like dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection