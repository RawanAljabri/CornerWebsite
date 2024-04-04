@extends('layouts.app')

@section('content')

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<div class="container" style="margin-top: 10%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('message.Shopping Cart')}}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>{{__('message.Image')}}</th>
                                    <th>{{__('message.Title')}}</th>
                                    <th>{{__('message.Price')}}</th>
                                    <th>{{__('message.Tax')}}</th>
                                    <th>{{__('message.Discount')}}</th>
                                    <th>{{__('message.Net')}}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartItems as $item)
                                <tr>
                                    <td><img src="{{ asset('uploads/' . $item->image) }}" style="height: 100px; width: 100px;"></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->tax }}</td>
                                    <td>{{ $item->discount }}</td>
                                    <td>{{ $item->Net }}</td>
                                    <td><a href="{{route('deleteCartItemForUser', ['id' => $item->id])}}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 2%;">
                @php
                $total = 0;
                @endphp

                @foreach($cartItems as $item)
                @php
                $total += $item->Net;
                @endphp
                @endforeach
                <h3 style="text-align: end; font-weight: bold;">{{__('message.Total')}}: {{$total}} <span style="color:green">{{__('message.SAR')}}</span></h3> 
                
                <div class="row">
                    <a href="#" style="text-align: center; background-color: black; width: 15%;  padding: 10px 5px; color: white"> {{__('message.Buy Now')}} </a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection