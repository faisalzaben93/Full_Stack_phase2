@extends('layouts.app')

@section('content')
<!--  Main Profile Form -->
<section class="main-profile bg-light">	
	  <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<h1 class="text-title text-secondary text-center py-2">My profile</h1>
				<div class="card bg-light ">
					<div class="card-header py-2">
						<div class="row">
							<div  class="col col-md-12">
								<p  class="text-title text-white justify-content-left">My Information</p>
							</div>	
						</div>
					</div>
						<div class="card-body bg-white">
							<div class="container">
								<div class="row bg-light my-2">
									<div class="col-md-3 pt-2">
											<span><i class="fas fa-lock-open"></i></span>
										<p class="text-title d-inline">Login Name</p>
                  </div>
                  <!-- retrive username from DB-->
									<div class="col-md-9 pt-2">
										<p class="text-title d-inline">{{ $user->username }}</p>
									</div>
								</div>
								<div class="row my-3 ">
									<div class="col-md-3 pt-2">
										<i class="far fa-envelope"></i>
										<p class="text-title d-inline">Email</p>
                  </div>
                  <!-- retrive email from DB-->							
									<div class="col-md-9 pt-2">
										<p class="text-title d-inline">{{ $user->email }}</p>
									</div>
								</div>
								<div class="row bg-light my-2">
									<div class="col-md-3 pt-2">
										<span><i class="far fa-calendar-alt"></i></span>
											<p class="text-title d-inline">Registered Date</p>
									</div>
									<div class="col-md-9 pt-2">
                    <!-- retrive email from DB-->							
										<p class="text-title">{{ $user->created_at }}</p>
									</div>
								</div>
								<div class="row my-2 pt-2">
									<div class="col-md-3 pl-0">
                    <!-- must add route for edit profile-->
                  <a href="{{ route('account.profile.edit',$user->id) }}" class="btn btn-white border border-muted">Edit Information</a>
									</div>
								</div>								
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
</section>	
<!-- Main Profile Form-->
  @endsection
