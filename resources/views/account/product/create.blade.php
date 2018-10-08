@extends('layouts.app')
@section('content')
	<!-- Create Item Form -->
<section class="main-profile bg-light">	
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<h1 class="text-title text-secondary text-center my-2 px-0">Create New Item</h1>
            <div class="card bg-light my-2">
                <div class="card-header py-2">
					<div class="row">
						<div  class="col col-md-12">
							<p  class="text-title text-white justify-content-left">Create New Item</p>
						</div>	
					</div>
				</div>
                <div class="card-body">
					<form method="POST" action="{{ route('account.product.store') }}" enctype="multipart/form-data">
						<input type="hidden" name="_token"value="{{csrf_token()}}">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group row">
									<div class="col-md-3 text-right">
										<label class="font-weight-bold" for="item_name" >Name</label>
									</div>
									<div class="col-md-9">
										<span>  
											<i class="fas fa-asterisk validate-asterisk" aria-hidden="true"></i>
										</span>
										<input placeholder="Name of The Item" id="item_name" type="text" class="form-control d-inline" name="item_name" value="" required >
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-3 text-right">
										<label class="font-weight-bold" for="name" >Description</label>
									</div>
									<div class="col-md-9">
										<span>
											<i class="fas fa-asterisk validate-asterisk" aria-hidden="true"></i>
										</span>
										<input placeholder="Description of The Item" id="item_description" type="text" class="form-control " name="item_description" value="" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-3 text-right">
										<label class="font-weight-bold" for="name" >Price</label>
									</div>
									<div class="col-md-9">
										<span>
											<i class="fas fa-asterisk validate-asterisk" aria-hidden="true"></i>
										</span>
										<input placeholder="Price of Item" id="item_price" type="text" class="form-control required" name="item_price" value="" required >
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-3 text-right">
										<label class="text-right" for="name" >Country</label>
									</div>
									<div class="col-md-9">
										<span>
											<i class="fas fa-asterisk validate-asterisk" aria-hidden="true"></i>
										</span>
										<input class="form-control required" placeholder="Country of Made" id="item_country" type="text"  name="item_country" value="" required autofocus>
									</div>
								</div>
								<div class="form-group row text-right">
									<div class="col-md-3 text-right">
										<label class="text-right" for="inputState">Category</label>
										</div>
									<div class="col-md-9">
										<select class="form-control" id="category" name="category">
											@foreach($categories as $category)
											<option value="{{ $category->category_id }}">
											{{  $category->category_name }}
											</option>
											@endforeach
										</select>							 
									</div>
								</div>
								<div class="form-group row text-right">
									<div class="col-md-3">
										<label for="name" >Image</label>
									</div>
									<div class="col-md-9">
										<input id="item_image" type="file" class="form-control border-muted" name="item_image" value=""
										onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
									</div>
								</div>		
							</div>
							<dil0v class="col-md-4">
								<div class="row">
								<div class="card border border-muted">
									<div class="card-header bg-white border-0">
										<div class="row">
											<div class="col-md-2">
												<span class="badge badge-secondary">$900</span>
											</div>
											<div class="col-md-12">
												<img id="image" class="img-thumbnail" onerror="this.src='/img/defaultUser.PNG'"src="{{ asset('img\defaultUser.png') }}"alt="Card image cap" hieght="195"width="195">
											</div>
										</div>
									</div>								
									<div class="card-body border-0">
									<!--onkeyup event-->
								<a href="" class="nav-link text-left weight-bold">Item Name</a>
								<p class="card-text" value>Item description</p>
								</div>
							</div>
						  </div>
						</div>
							<div class="form-group row mb-0">
								<div class="col-md-9">
									<button type="submit" class="btn btn-primary text-white">
									Add Item
									</button>
								</div>
							</div>
						</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>	
<!-- Created Item Form-->
@endsection

