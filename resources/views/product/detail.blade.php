@extends('layouts.app', ['pageSlug' => 'detailProduct'])

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="text-align-left">
            <h class="tim-icons icon-minimal-left"></h>
            <a href="/product">Back</a>
            </div>
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                <div class="col-md-7 col-mb-5">
                        <h1 class="text-white">{{ __('Product Detail') }}</h1>
                        <img src="data:image/jpg;base64,{{ base64_encode($products->image) }}"/></a>
                        <h4 class="text-lead text-light">
                            <h class="tim-icons icon-minimal-right "></h>
                                {{$products->name}}
                            </h4>
                            <p class="text-lead text-light">
                            <i class="tim-icons icon-coins"></i>
                                {{ $products->price}}
                            </p>
                            <p class="text-lead text-light">
                            <i class="tim-icons icon-alert-circle-exc" ></i>
                                {{ $products->description}}
                            </p>
                            <a href="{{ url('users/addToCart/'.$products->id) }}" class="btn btn-success btn-block text-center" role="button">Add to cart</a> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
