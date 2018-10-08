@extends('layouts.app')
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
                                        <img class="img-thumbnail" src="{{asset('storage/items/'.$item->item_image)}}" alt="Card image cap" height="350px" width="270px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row my-2">
                                            <div class="col-md-12 pt-2">
                                                <h3 class="text-title">{{$item->item_name}}</h3>
                                            </div>
                                            <div class="col-md-12 pt-2">
                                                <p class="text-title d-inline">{{$item->item_description}}</p>
                                            </div>
                                        </div>          
                                        <div class="row bg-light-e my-2">
                                            <div class="col-md-3 pt-2">
                                               <span> <i class="far fa-calendar-alt"></i></span>
                                                <p class="text-title d-inline">Added Date</p>
                                            </div>
                                            <div class="col-md-9 pt-2">
                                                <p class="text-title d-inline">: {{$item->created_at}}</p>
                                            </div>
                                        </div>                                      
                                          <div class="row my-2">							
                                            <div class="col-md-3 pt-2">
                                                <i class="far fa-money-bill-alt"></i>
                                                <p class="text-title d-inline">price</p>
                                            </div>
                                            <div class="col-md-9 pt-2">
                                                <p class="text-title d-inline">: ${{$item->item_price}}</p>
                                            </div>
                                        </div>
                                        <div class="row bg-light-e my-2">
                                            <div class="col-md-3 pt-2">
                                                <span><i class="fas fa-building"></i></span>
                                                <p class="text-title d-inline">Made In</p>
                                            </div>
                                            <div class="col-md-9 pt-2">
                                                <p class="text-title d-inline">: {{$item->item_country}}</p>
                                            </div>
                                        </div>
                                        <div class="row my-2">							
                                            <div class="col-md-3 pt-2">
                                                <span><i class="fas fa-tags"></i>
                                                <p class="text-title d-inline">Category</p>
                                            </span>
                                            </div>
                                            <div class="col-md-9 pt-2">
                                                <a class="nav-link p-0 d-inline"  href=""><span class="text-dark">:</span>{{$name}}</a>
                                            </div>
                                        </div>
                                        <div class="row my-2 bg-light-e">							
                                            <div class="col-md-3 pt-2 w-100">
                                                <span><i class="fas fa-user"></i></span>
                                                <p class="text-title d-inline w-100"><span class="text-dark">:</span>Added By</p>
                                            </div>
                                            <div class="col-md-9 pt-2">
                                                <a class="nav-link p-0" href=""> <span class="text-dark">:</span>{{$username}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @guest
                                <hr>
                                <div class="row border py-2 my-2" style="border-left:0px !important;border-right:0!important;" >
                                    <div class="col-md-12">
                                        <a class="nav-link d-inline pr-1" href="route('login')">Login</a>or<a class="nav-link d-inline px-1" href="route('register')">Signup</a>To Add Comment
                                    </div>
                                </div>
                                <hr>
                                @else
                                    <hr>
                                        <div class="row border my-2" style="border-left:0px !important;border-right:0!important;" >
                                            <div class="col-md-4"></div>
                                            <div class="col-md-8">
                                                <form method="POST" action="{{route('addComment',$item->item_id)}}" >
                                                 <input type="hidden" name="_token"value="{{csrf_token()}}">
                                                 <div class="form-group row">
                                                    <div class="col-md-12"> 
                                                        <label class="text-weight-normal" for="comment">Add Your Comment </label>
                                                    </div>
                                                    <div class="col-md-12"> <textarea pattern=".{1,}"  id="comment"name="comment" type="text" rows="5" cols="50">
                                                        </textarea>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-primary nav-link text-white " >Add Comment</button>
                                                    </div>
                                                 </div>
                                             </div>
                                         </div>
                                    <hr>
                                @endguest 
                                @if(isset($comments))
                                @foreach($comments as $comment)
                                <div class="row">
                                    <div class="col-md-3 items-aling-right">
                                        <img src="{{ asset('storage/users/'.$comment['user']->image) }}" onerror="this.src='/img/defaultUser.PNG'" class="img-thumbnail img-comment rounded-circle"/>
                                        <P class="text-title ">{{$comment['user']->username}}</P>
                                    </div>
                                    <div class="col-md-9">
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                <hr>                
                                </div>
                                    @endforeach
                                    @endif                    
                        </div><!-- car-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>	
@endsection