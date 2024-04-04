@extends('layouts.app')
@section('content')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-center">
                    <a>
                        <img src="{{ asset('uploads/' . $products->image) }}" style="max-width: 350px; height: auto; margin-top:2%" />
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class="text-dark">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="mt-4 mt-md-0">
                    <h4 class="title text-dark">{{ $products->title }}</h4>
                    <div class="d-flex flex-row my-3">
                        <div class="text-warning mb-1 me-2">
                            <i class="fa fa-star" style="color:orange"></i>
                            <i class="fa fa-star" style="color:orange"></i>
                            <i class="fa fa-star" style="color:orange"></i>
                            <i class="fa fa-star" style="color:orange"></i>
                            <i class="fa fa-star" style="color:orange"></i>
                            <span class="ms-1">5</span>
                        </div>
                    </div>
                    <span style="color: green; font-weight: bold;">{{ __('message.In stock') }}</span>
                    <div>
                        <h4>{{ $products->price }} <span style="color: green; font-weight: bold;">{{ __('message.SAR') }}</span></h4>
                    </div>
                    <div>
                        <h4 class="col-3">{{ __('message.Description') }}: {{ $products->description }}</h4>
                    </div>
                    <hr />
                    <div style="margin-top:2%"> 
                    <a href="#" style="background-color: black;  padding: 5px; color: white"> {{__('message.Buy Now')}} </a>
                                <a href="{{route('add-to-cart', $products->id)}}" style="background-color: #4b5552; padding: 5px; color: white"> <i class="bx bx-cart"></i> {{__('message.Add to cart')}} </a>
                                <a href="#" style="background-color: #979694;color: black;  padding: 5px;"> <i class="bx bx-heart"></i> {{__('message.Save')}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
