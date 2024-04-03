@extends('layouts.app')

@section('content')

@if($title === 'chair')
    <h3 style="text-align: center; color: rgb(75, 61, 34); margin-top: 5%;"> {{__('message.Products')}} </h3>
    <hr />
    <div class="products">
        @foreach ($products as $product)
        <div class="row">
            <img src="{{ asset('uploads/' . $product->image) }}">
            <div class="product-text">
                <h4>{{__('message.PRODUCT TITLE')}} {{$product->title}}</h4>
            </div>
            <div>
                <h4> {{__('message.PRODUCT DESCRIPTION')}} {{$product->description}}</h4>
                <h4>{{__('message.PRODUCT PRICE')}} {{$product->price}} <span
                        style="color:green; font-weight: 500;">{{__('message.SAR')}}</span></h4>
            </div>
            <div style="margin-top: 1%; text-align: center; display:flex;">
                <a href="{{ route('add-to-cart', $product->id) }}"
                    style="background-color: #4b5552; padding: 5px 30px; color: white"> <i class="bx bx-cart"></i>
                    {{__('message.Add to cart')}} </a>
                <a href="{{ route('show-details', $product->id) }}"
                    style="background-color: #979694; padding: 5px 30px; color: black">{{__('message.Details')}}
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endif

@endsection
