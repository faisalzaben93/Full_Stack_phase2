@extends('layouts.app')
@section('content')
<!--  My Items Form -->
<section class="homepage-form bg-light">	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card border-0">
					<div class="card-header bg-light border-0">
						<div class="row text-center">
							<div  class="col col-lg-12">
								<h3 class="card-title text-muted">My Items</h3>
							</div>							
						</div>
					</div>
					<div class="card-body bg-light">	
						<div class="row w-100">
							@foreach($items as $item)
							 <div class="col-sm-6 col-lg-3">
								<div class="card my-4" >
									<div class="row">
										<div class="col-md-2">
											<span class="badge badge-secondary float-left">${{ $item->item_price}}</span>
											<img class="img-thumbnail float-right" src="{{asset('storage/items/'.$item->item_image)}}"onerror="this.src='/img/defaultUser.PNG'" alt="Card image cap"width="195px"
											height="195px" >
										</div>
									</div>
									<div class="card-body">
									<!-- must cjange item product--->
									<a class="nav-link card-title text-primary" href="{{route('account.product.edit',array($item->item_id))}}">{{ $item->item_name}}</a>
									<p class="card-text">{{ $item->item_description}}</p>
									<p class="card-text text-secondary"><small class="text-muted">{{ $item->create_at}}</small></p>
									</div>
								</div>
							</div>
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
<!-- Homepage Form-->
@endsection

