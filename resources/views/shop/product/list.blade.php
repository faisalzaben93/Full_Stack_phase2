@extend('layouts.app')
@section('content')
<section class="create-form bg-light">	
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-title text-secondary text-center px-0">{{$item->item_name}}</h1>
                <div class="card bg-light border-0">	
                    <div class="card-body border-0 bg-light">
                        <div class="container">
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <img class="img-thumbnail" src="{{asset('storage/items/'.$item->item_image)}} "alt="Card image cap" height="195px" width="195px">
                                </div>
                                <div class="col-md-8">
                                    <div class="row my-2">
                                        <div class="col-md-12 pt-2">
                                            <h3 class="text-title">{{$item->item_name}}</h3>
                                        </div>
                                        <div class="col-md-12 pt-2">
                                            <p class="text-title">{{$item->item_description}}</p>
                                        </div>
                                    </div>
                                    <div class="row bg-secondary my-2">
                                        <div class="col-md-2 pt-2">
                                            <i class="far fa-calendar-alt"></i>
                                            <p class="text-title">Added Date</p>
                                        </div>
                                        <div class="col-md-10 pt-2">
                                            <p class="text-title">: {{$item->created_at}}</p>
                                        </div>
                                    </div>
                                    <div class="row my-2">							
                                        <div class="col-md-2 pt-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <p class="text-title ">price</p>
                                        </div>
                                        <div class="col-md-10 pt-2">
                                            <p class="text-title">: {{$item->item_price}}</p>
                                        </div>
                                    </div>
                                    <div class="row bg-secondary my-2">
                                        <div class="col-md-2 pt-2">
                                            <i class="far fa-caret-square-right"></i>
                                            <p class="text-title">Made In</p>
                                        </div>
                                        <div class="col-md-10 pt-2">
                                            <p class="text-title">: {{$item->item_country}}</p>
                                        </div>
                                    </div>                                       
                                    <div class="row my-2">							
                                        <div class="col-md-2 pt-2">
                                            <p class="text-title ">Category</p>
                                        </div>
                                        <div class="col-md-10 pt-2">
                                            <a class="nav-link p-0" href="">: {{$name}}</a>
                                        </div>
                                    </div>
                                    <div class="row my-2 bg-secondary">							
                                        <div class="col-md-2 pt-2">
                                            <p class="text-title">Added By</p>
                                        </div>
                                        <div class="col-md-10 pt-2">
                                            <a class="nav-link p-0" href="">: {{$username}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                            <div class="row border py-2 my-2" >
                                <div class="col-md-12">
                                    <a class="nav-link d-inline pr-1" href="">Login</a>or<a class="nav-link d-inline px-1" href="">Signup</a>To Add Comment
                                </div>
                            </div>
                        </div><!-- car-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>	
@endsection