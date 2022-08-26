@extends('layouts.app', ['pageSlug' => 'indexProduct'])
@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-mb-5">
                    @include('alerts.success')
                        <h1 class="text-white">{{ __('Product') }}</h1>
                        @foreach ($products as $product) 
                        <div class ="item {{$product['id']==1?'active':''}}">              
                        <a href="{{route('product.detail',$product['id'])}}">

                        <img src="data:image/jpg;base64,{{ base64_encode($product->image) }}"/></a>
                            <h4 class="text-lead text-light">
                            <h class="tim-icons icon-minimal-right"></h>
                                {{$product->name}}
                            </h4>
                            <p class="text-lead text-light">
                            <i class="tim-icons icon-coins"></i>
                                {{ $product->price}}
                            </p>
                            <p class="text-lead text-light">
                            <i class="tim-icons icon-alert-circle-exc"></i>
                                {{ $product->description}}
                            </p>
                                <a href="{{ url('users/addToCart/'.$product->id) }}" class="btn btn-success btn-block text-center" role="button">Add to cart</a> 
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
