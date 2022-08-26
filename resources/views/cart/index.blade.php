@extends('layouts.app', ['pageSlug' => 'indexCart'])
@section('title', 'Cart')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
@section('content')

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:40%">Product</th>
            <th style="width:10%">Name</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        @php
            $total = 0;
        @endphp
        @foreach($carts as $cart)
                            @php
                                $total +=  $cart->product->price * $cart->quantity;
                            @endphp
                        <tr class="product_data">
                            <td class="hidden pb-4 md:table-cell">
                            <a href="{{route('product.detail',$cart->product['id'])}}">
                                <img src="data:image/jpg;base64,{{ base64_encode($cart->product->image) }}"/></a>
                                </a>
                            </td>
                            <td class="justify-center md:justify-end md:flex mt-6">
                                <div class="w-20 h-10">
                                    <div class="custom-number-input h-10 w-32">
                                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                            {{ $cart->product->name }}

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="justify-center md:justify-end md:flex mt-6 ">
                                <div class="w-20 h-10">
                                    <div class="custom-number-input h-10 w-32">
                                    {{$cart->product->price}}$
                                    </div>
                                </div>
                            </td>
                            <td class="justify-center md:justify-end md:flex mt-6 quantity">
                                <div class="w-20 h-10">
                                    <input type="hidden" class="product_id" value="{{$cart->product_id}}">
                                    <div class="custom-number-input h-10 w-32">
                                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                        
                                        <button class="btn btn-sm btn-danger changeQuantity decreBtn">
                                            -
                                        </button>
                                            <input class="form-control qty-input" value="{{$cart->quantity}}" ></input>
                                            <button class="btn btn-sm btn-success changeQuantity increBtn">
                                                +
                                            </button> 
                                        
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="justify-center md:justify-end md:flex mt-6">
                                <div class="w-20 h-10">
                                    <div class="custom-number-input h-10 w-32">
                                    {{$cart->product->price}}$
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
        </tbody>

        </tbody>
        <tfoot>
        <tr>
            <td><a href="{{ url('/product') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="3" class="hidden-xs"></td> <!--cái này để tạo khoảng cách để chúng k đứng gần nhau !-->
            <td class="hidden-xs text-center">
                <strong>Total Price : {{ number_format($total) }} $
            </strong>
        </td>
        </tr>
        </tfoot>
    </table>

@endsection

@section('scripts')
<script> 
    $(document).ready(function () {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $('.increBtn').click(function (e) {
    e.preventDefault();
    var incre_value = $(this).closest('.quantity').find('.qty-input').val();
    var value = parseInt(incre_value, 10);
    value = isNaN(value) ? 0 : value;
        if(value<50){
        value++;
        $(this).closest('.quantity').find('.qty-input').val(value);
    }

});

$('.decreBtn').click(function (e) {
    e.preventDefault();
    var decre_value = $(this).closest('.quantity').find('.qty-input').val();
    var value = parseInt(decre_value, 10);
    value = isNaN(value) ? 0 : value;
        if(value>1){
        value--;
        $(this).closest('.quantity').find('.qty-input').val(value);
    }

});

$('.changeQuantity').click(function (e) {
    e.preventDefault();

    var product_id = $(this).closest('.product_data').find('.product_id').val();
    var qty = $(this).closest('.product_data').find('.qty-input').val();

    data = {
        'product_id' : product_id,
        'product_qty' : qty,
    }    
    $.ajax({
        method: "POST",
        url: "update-cart",
        data: data,
        success: function(respone){
            window.location.reload();
        }
    });
});
});

</script>