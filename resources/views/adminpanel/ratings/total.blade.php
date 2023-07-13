@extends('layouts.main')

@section('content_body')

<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
    <!--Order Listing-->
    <div class="product-list">
        
        <div class="row border-bottom mb-4">
            <div class="col-sm-8 pt-2">
                <h6 class="mb-4 bc-header">Order listing of category</h6>
            </div>
        </div>
        
        <div class="table-responsive product-list">
            
            <table class="table table-bordered table-striped mt-0" id="productList">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>price</th>
						<th>Time Of Purchase</th>
					</tr>
                </thead>
                <tbody>
                @foreach ($stores as $store)
                    <tr>
                        <td>{{ $store-> id }}</td>
                        <td>{{ $store-> name }}</td>
						<td>{{ $store-> price }}</td>
						<td></td>
                    </tr>
                 @endforeach
            </table>
        </div>
    </div>
</div>
    @stop




















						@foreach ($stores as $store)
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
                                    <figure> <img src="{{ asset('/upload/product/'.$store->image) }}" alt=""></figure>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>{{ $store->name }}</span></a>
									<div class="wrap-price"><span class="product-price">{{ $store->phone}}</span></div>
									<div class="product-rating">
							@php
							 $xx = number_format( $store->avg)
							 @endphp
							@for($i=1; $i<=5; $i++)
								@if($i <= $xx )
								<i class="fa fa-star" aria-hidden="true"></i>
								@else
								<i class="fa fa-star color-g" aria-hidden="true"></i>
								@endif
							@endfor
                            </div>
									<a href="#" class="btn add-to-cart">( {{$store->count}} REVIEWS COUNT)</a>
							</div>
							</div>
						</li>
						@endforeach
				