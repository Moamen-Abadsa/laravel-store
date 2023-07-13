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
                        <td>{{ $store->name }}</td>
						<td>{{ $store-> price }}</td>
						<td>{{ $store->created_at }}</td>
                    </tr>
                 @endforeach
            </table>
        </div>
    </div>
</div>
    @stop





