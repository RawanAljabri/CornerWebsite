@extends('layouts.app')
@section('content')

 <!-- HEADER -->
 <section class="main-home">
        <div class="main-text">
            <h1>{{__('message.Elevate your space')}}<br> {{__('message.with elegant furniture')}}</h1>
            <a href="{{route('chairs')}}" class="main-btn">{{__('message.Shop Now')}}</a> <!-- صفحة جديدة للمنتجات -->
        </div>
    </section>


     <!-- CATIGORIES -->

     <div class="categories" id="categories">
        <ul>
            <li><a href="{{route('chairs')}}">{{__('message.Chairs')}}</a></li>
            <li><a href="#">{{__('message.Sofas')}}</a></li>
            <li><a href="#">{{__('message.Tables')}}</a></li>
            <li><a href="#">{{__('message.Lamps')}}</a></li>
        </ul>
    </div>
    <h3 style="text-align: center; color: rgb(75, 61, 34)"> {{__('message.Our Trending Products')}} 🔥</h3>
    <hr />


    <!-- PRODUCT  -->
    <div class="products">
        @foreach ($products as $products)
        <div class="row">
            <img src="{{ asset('uploads/' . $products->image) }}">
                        <div class="product-text">
                <h4>{{__('message.PRODUCT TITLE')}} {{$products->title}}</h4>
            </div>
            <div>
                <h4> {{__('message.PRODUCT DESCRIPTION')}} {{$products->description}}</h4>
                <h4>{{__('message.PRODUCT PRICE')}} {{$products->price}} <span style="color:green; font-weight: 500;">{{__('message.SAR')}}</span></h4>
            </div>
            <div> <a href="{{ route('show-details', $products->id) }}"> <button type="button"
            style="background-color: #979694;; margin-top: 10px;  padding: 5px 30px; color: black; width: 100%; font-size: medium;">{{__('message.Details')}}</button> </a></div>        </div>
        @endforeach
    </div>

</body>
@endsection
</html>