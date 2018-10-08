
@extends('layouts.app')
@section('content')
    <section class="homepage-form bg-light">	
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card bg-light border-0">
                    <div class="card-header bg-light border-0 ">
                        <div class="row text-center">
                            <div  class="col col-lg-12">
                                <h3 class="card-title text-muted py-2">{{$categories->category_name}}</h3>
                            </div>							
                        </div>
                    </div>
                    <div class="card-body bg-light border-0 w-100 mt-2">
                        <div class="row w-100">
                            @foreach($items as $item)
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card my-4" >
                                    <!-- must call items here--->
                                        <img class="img-thumbnail" src="{{asset('storage/items/'.$item->item_image)}}" onerror="this.src='/img/defaultUser.PNG'" height="195px"
                                        width="195px">
                                        <span class="badge badge-secondary">${{$item->item_price}}</span>
                                        <div class="card-body">
                                            <!-- must change item product--->
                                            <a class="nav-link card-title text-primary" href="{{route('account.product.show',$item->item_id)}}">{{$item->item_name}}</a>
                                            <p class="card-text">{{$item->item_description}}</p>
                                            <p class="card-text text-secondary"><small class="text-muted">{{$item->create_at}}</small></p>
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
  </section>	        
@endsection

  
