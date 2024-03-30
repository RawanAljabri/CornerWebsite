@extends('layouts.base')

@section('content')
<div class="container">
  <main style="margin-top: 58px;">
    <div class="container pt-4">
      @if($errors->any())
      <div class="alert alert-danger">
        <ul class="list-unstyled">
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="card mt-5">
        <div class="card-body bg-white">
          <form action="{{ route('update') }}" method="post">
            @csrf
            <div class="row mt-3" style="font-size: larger; font-weight: bold;">
              <input type="hidden" name="id" value="{{ $products['id'] }}" />
              <div class="col">

                <label for="product_code" class="mt-3">Product ID</label>
                <input type="text" name="product_code" class="form-control p-1" id="product_code"
                  value="{{ $products->product_code }}">

                <label for="title" class="mt-3">Product Name</label>
                <input type="text" name="title" class="form-control p-1" id="title" value="{{ $products->title }}">

                <label for="description" class="mt-3">Product Description</label>
                <textarea name="description" class="form-control p-1" id="description">{{ $products->description }}</textarea>

                <label for="price" class="mt-3">Product Price</label>
                <input type="text" name="price" class="form-control p-1" id="price" value="{{ $products->price }}">

              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <button class="btn btn-danger" type="button" onclick="cancelEdit()">Cancel</button>
                <button class="btn btn-success" type="submit">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</div>

<script>
  function cancelEdit() {
      window.location.href = "{{ route('products') }}";
      setTimeout(function() {
          var successMessage = document.querySelector('.alert-success');
          if (successMessage) {
              successMessage.remove();
          }
      }, 3000);
  }
</script>

@endsection