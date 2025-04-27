@extends('master')

@section('title')
Home Page
@endsection
@section('content')
<main class="home">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        NEW PRODUCTS
                    </h3>
                </div>
            </div>
            <div class="row">
                @foreach ($latestProducts as $latestProduct)
                <div class="col-3">
                    <figure>
                        <div class="thumbnail">
                            @if ($latestProduct -> sales_price > 0)
                            <div class="status">
                                Promotion
                            </div>
                            @endif
                            <a href="/product-details/{{ $latestProduct -> id }}">
                                <img  src="http://127.0.0.1/profile/{{ $latestProduct -> thumbnail }}" alt="">
                            </a>
                        </div>
                        <div class="detail">
                            <div class="price-list">
                                @if($latestProduct -> sales_price <= 0)
                                    <div class="regular-price"> US {{ $latestProduct -> regular_price }} </div>
                            @endif
                            @if ($latestProduct -> sales_price > 0)
                            <div class="regular-price "><strike> US {{ $latestProduct -> regular_price }}</strike></div>
                            <div class="sale-price ">US {{ $latestProduct -> sales_price }} </div>
                            <div class="sale-price text-danger"> {{ number_format((($latestProduct -> regular_price - $latestProduct -> sales_price) / $latestProduct -> regular_price) * 100,2)}} % Off</div>
                            @endif
                        </div>
                        <h5 class="title">{{ $latestProduct -> name }}</h5>
                </div>
                </figure>
            </div>
            @endforeach
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        PROMOTION PRODUCTS
                    </h3>
                </div>
            </div>
            <div class="row">
                @foreach ($promotionProducts as $promotionProduct)
                <div class="col-3">
                    <figure>
                        <div class="thumbnail">
                            <div class="status">
                                Promotion
                            </div>
                            <a href="/product-details/{{ $promotionProduct -> id }}">
                                <img src="http://127.0.0.1/profile/{{ $promotionProduct -> thumbnail }}" alt="">
                            </a>
                        </div>
                        <div class="detail">
                            <div class="price-list">
                                @if($latestProduct -> sales_price <= 0)
                                    <div class="regular-price"> US {{ $promotionProduct -> regular_price }} </div>
                                @endif
                                @if ($promotionProduct -> sales_price > 0)
                                    <div class="regular-price "><strike> US {{ $promotionProduct -> regular_price }}</strike></div>
                                    <div class="sale-price ">US {{ $promotionProduct -> sales_price }}</div>
                                    <div class="sale-price text-danger"> {{ number_format((($promotionProduct -> regular_price - $promotionProduct -> sales_price) / $promotionProduct -> regular_price) * 100,2)}} % Off</div>
                                @endif
                            </div>
                            <h5 class="title">{{ $promotionProduct -> name }}</h5>
                        </div>
                    </figure>
                </div>

                @endforeach


            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        POPULAR PRODUCTS
                    </h3>
                </div>
            </div>
            <div class="row">
                @foreach ($mostViewsProducts as $mostViewProduct)
                <div class="col-3">
                    <figure>
                        <div class="thumbnail">
                            @if($mostViewProduct -> sales_price > 0)
                            <div class="status">
                                Promotion
                            </div>
                            @endif
                            <a href="/product-details/{{ $mostViewProduct -> id }}">
                                <img  src="http://127.0.0.1/profile/{{$mostViewProduct->thumbnail}}" alt="">
                            </a>
                        </div>
                        <div class="detail">
                            <div class="price-list">
                                @if($mostViewProduct -> sales_price <= 0)
                                    <div class="regular-price">US {{ $mostViewProduct -> regular_price }}</div>
                                @endif
                                @if($mostViewProduct -> sales_price > 0)
                                    <div class="regular-price "><strike> US {{ $mostViewProduct -> regular_price }}</strike></div>
                                    <div class="sale-price ">US {{ $mostViewProduct -> sales_price }}</div>
                                    <div class="sale-price text-danger"> {{ number_format((($mostViewProduct -> regular_price - $mostViewProduct -> sales_price) / $mostViewProduct -> regular_price) * 100,2)}} % Off</div>
                                @endif
                            </div>
                            <h5 class="title">{{ $mostViewProduct -> name }}</h5>
                        </div>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main>
@endsection