@extends('layouts.app')
@section('content')
<!-- Create Item Form -->
<section class="main-profile bg-light">	
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<h1 class="text-title text-secondary text-center px-0 my-3">Edit New Item</h1>
            <div class="card">
                <div class="card-header py-0">
					<div class="row">
						<div  class="col col-md-12">
							<p  class="text-title text-white justify-content-left">edit New Item</p>
						</div>	
						
					</div>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('account.product.update',array($item->item_id)) }}" enctype="multipart/form-data">
						@method('PUT')
						@csrf
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
									<input id="item_name" type="text" class="form-control d-inline" name="item_name" value="{{$item->item_name}}" required autofocus
									>
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
									<input id="item_description" type="text" class="form-control required" name="item_description" value="{{$item->item_description}}" required autofocus>
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
									<input  id="item_price" type="text" class="form-control required" name="item_price" value="{{$item->item_price}}"required autofocus
									onkeyup="lookup(this.value)">
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
									<input class="form-control required" placeholder="Country of Made" id="item_country" type="text"  name="item_country" value="{{$item->item_country}}" required autofocus>
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
									<input id="item_image" type="file" class="form-control border-muted" name="item_image"
									onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
								</div>
							</div>		
						</div>
						<div class="col-md-4">
						<div class="row">
								<div class="card">
								<img class="img-thumbnail" id="image" src="{{ asset('storage/items/'.$item->item_image) }}" onerror="this.src='/img/defaultUser.PNG'"alt="Card image cap">
							<span class="badge badge-secondary"id="item_p" value="{{$item->item_price}}"></span>
							<div class="card-body">
								<!--onkeyup event-->
								<a href="" class="nav-link text-left" id="item_n" >{{$item->item_name}}</a>
								<p class="card-text"id ="item_c" value="">{{$item->item_conutry}}</p>
							</div>
							</div>
							</div>
						</div>
						<div class="form-group row mb-0">
							<div class="col-md-9 offset-md-3 ">
								<button type="submit" class="btn btn-primary">
								Add Item
								</button>
							</div>
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
@endsection('content')

