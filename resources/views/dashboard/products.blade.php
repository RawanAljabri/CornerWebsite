@extends('layouts.base')

@section('content')
<div class="container">
    <main style="margin-top: 58px;">
        <div class="container pt-4">
            <div class="container">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Add New Product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

                            </div>

                            <div class="modal-body " style="font-size: larger; font-weight: bold;">
                                <form action="{{ route('createproducts') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label class="mt-3">Product ID:</label>
                                    <input type="text" class="form-control" name="product_code" required>

                                    <label class="mt-3">Product Name:</label>
                                    <input type="text" class="form-control" name="title" required>

                                    <label class="mt-3">Product Description:</label>
                                    <textarea type="text" class="form-control" name="description" required></textarea>

                                    <label for="image">Product Image</label>
                                    <input type="file" class="form-control"  name="image" id="image" required>

                                    <label class="mt-3">Product Price:</label>
                                    <input type="text" class="form-control" name="price" required>

                                    <button type="submit" class="btn btn-success mt-3">Save</button>
                                    <button type="button" class="btn btn-danger mt-3"
                                        data-bs-dismiss="modal">Cancel</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h1 class="mb-0"> Products List </h1>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Add
                        Product
                    </a>
                </div>
                <hr />
                <form action="{{ route('products') }}" method="GET">

                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search for...">
                        <button type="submit" name="action" value="search"><i class="fa fa-search"></i></button>
                        <button type="submit" name="action" class="btn btn-dark" value="showAll">Show All
                            Products</button>
                    </div>
                </form>

                <div class="m-2"></div>
                @if(Session::has('success'))
                <div class="alert alert-success " style="font-weight: bold;">
                    {{Session::get('success')}}
                </div>
                @endif
                <table class="table table-hover">
                    <thead class="table-success">
                        <tr>
                            <th>#</th>
                            <th>Product ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $items)
                        <tr>
                            <td>{{$items->id}}</td>
                            <td>{{$items->product_code}} </td>
                            <td>{{$items->title}} </td>
                            <td>{{$items->description}}</td>
                            <td><img src="{{ asset('uploads/' . $items->image) }}" width="100px" ></td>
                            <td>{{$items->price}} <span style="color: green;">SAR</span></td>

                            <td><a href="{{route('del',['id'=>$items['id']])}}"><i class="fa fa-trash text-danger"
                                        aria-hidden="true"></i></a></td>
                            <td><a href="{{route('edit',['id'=>$items['id']])}}"><i class="fa fa-edit text-success"
                                        aria-hidden="true"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </main>
</div>

@endsection
