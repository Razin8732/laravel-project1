@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>
        <div class="container">

            <div class="row">
                <div class="col-3 border h-100"></div>
                <div class="col-9 border" style="padding:0;">
                    <div class="row" style="margin: 0!important;padding:0!important;">
                        <!-- product 1 -->
                        @foreach ($products as $product)

                            <div class="col-4 border-0 product-card">
                                <div class="image p-3 pb-5"><img class="w-100" src="/img/{{ $product['p_img'] }}"
                                        alt="product image"></div>
                                <div class="overflow-hidden product-title">
                                    <a href="#" class="stretched-link">
                                        {{ $product['p_title'] }}
                                    </a>
                                </div>
                                <div class="row" style="padding: 0px 0px 0px 12px;">
                                    <div class="col rounded product-rating">
                                        {{ $product['p_rating'] }}
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                        </svg>
                                    </div>
                                    <div class="col product-raters"> ({{ $product['p_raters'] }})</div>
                                </div>
                                <div class="row" style="padding: 10px 10px 20px 10px;">
                                    <div class="col product-finalprice"> ₹{{ $product['p_final_price'] }} </div>
                                    <div class="col product-price">₹{{ $product['p_price'] }}</div>
                                    <div class="col product-discount"> {{ $product['p_price_discount'] }}% off </div>
                                </div>
                                <div class="row">
                                    <div class="col col-6 p-2 btn-container">
                                        
                                    <a href="/cart/{{ $product['p_id'] }}" class="pointer form-control pl-0 btn btn-lg addToCart-Btn addToCart-BuyNow-Btn">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            Add To Cart
                                        </a>
                                    </div>
                                    <div class="col col-6 p-2 btn-container">
                                        <button class="pointer form-control pl-0 btn btn-lg BuyNow-Btn addToCart-BuyNow-Btn">
                                            <i class="fa fa-bolt" aria-hidden="true"></i>
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
        </div>
    </body>

    </html>


@endsection
