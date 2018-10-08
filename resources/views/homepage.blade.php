@extends('layouts.app')
@section('content')
  <section class="homepage-form bg-light">	
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card border-0 bg-light">
                        <div class="card-header bg-light border-0">
                            <div class="row text-center">
                                <div  class="col col-lg-12">
                                    <h3 class="card-title text-muted">Home Page</h3>
                                </div>							
                            </div>
                        </div>
                        <div class="card-body bg-light border-0">	
                            <div class="row w-100">
                            @foreach($items as $item)
                              <div class="col-sm-6 col-lg-3">
                                  <div class="card my-4" >
                                    <!-- must call items here--->
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                             <span class="badge badge-secondary">${{ $item->item_price}}</span>
                                        </div>
                                        <div class="col-md-10">
                                             <img class="img-thumbnail"  src="{{asset('storage/items/'.$item->item_image)}}" onerror="this.src='/img/defaultUser.PNG'" alt="Card image cap"  min-hieght="195px" min-width="195px" height="195px" width="195px">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- must cjange item product--->
                                        <a class="nav-link card-title text-primary" href="{{ route('shop.product.show', $item->item_id) }}">{{ $item->item_name }}</a>
                                        <p class="card-text">{{ $item->item_description }}</p>
                                        <p class="card-text text-secondary"><small class="text-muted">{{ $item->created_at }}</small></p>
                                    </div>
                                </div>
                              </div>
                              @endforeach
                        </div>
                    </div>
                    {{ $items->appends(request()->query())->links()  }}
                </div>
            </div>
        </div>
    </section>	        
@endsection

  
