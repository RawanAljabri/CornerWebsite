@extends('layouts.app')
@section('content')



     <!-- CATIGORIES -->

     <div class="categories" id="categories">
        <ul>
            <li><a href="#">{{__('message.Chairs')}}</a></li>
            <li><a href="#">{{__('message.Sofas')}}</a></li>
            <li><a href="#">{{__('message.Tables')}}</a></li>
            <li><a href="#">{{__('message.Lamps')}}</a></li>
        </ul>
    </div>
    <h2 style="text-align: center; color: rgb(75, 61, 34)"> {{__('message.Our Trending Products')}} 🔥</h2>
    <hr />


    <!-- PRODUCT  -->
    <div class="products">
        @foreach ($products as $products)
        <div class="row">
            <img src="{{ asset('uploads/' . $products->image) }}">
                        <div class="product-text">
                <h3>{{__('message.PRODUCT TITLE')}} {{$products->title}}</h3>
            </div>
            <div>
                <h4> {{__('message.PRODUCT DESCRIPTION')}} {{$products->description}}</h4>
                <h4>{{__('message.PRODUCT PRICE')}} {{$products->price}} <span style="color:green; font-weight: 500;">{{__('message.SAR')}}</span></h4>
            </div>
            <div> <button type="button" class="cart-btn"><i class="bx bx-cart"> </i></button> </div>
        </div>
        @endforeach
    </div>

</body>
@endsection
</html>