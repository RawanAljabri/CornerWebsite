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

                <div class="d-flex align-items-center justify-content-between">
                    <h1 class="mb-0"> Cart Items </h1>
                </div>
                <hr />

                <div class="m-2"></div>
                <table class="table table-hover text-center">
                    <thead class="table-success">
                        <tr>
                            <th>#</th>
                            <th>User ID</th>
                            <th>Product ID</th>
                            <th>Product Title</th>
                            <th>Price</th>
                            <th>Tax</th>
                            <th>Discount</th>
                            <th>Net</th>
                            <th>Total</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($cart as $item)
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->product_code }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->tax }}</td>
                        <td>{{ $item->discount }}</td>
                        <td>{{ $item->Net }}</td>
                        <td>{{ $item->total }}</td>
                        <td>  <a href="{{ route('deleteCartItem', ['id' => $item->id]) }}" ><i class="fa fa-trash text-danger"></i></a></td>

                    </tbody>
                    @endforeach

                </table>
            </div>
    </main>
</div>

@endsection