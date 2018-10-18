@extends('layouts.admin')
@section('content')

    <!-- /.content-header -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
        <!-- /.box-header -->
        <!-- form start -->
            <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="confirm Password">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <input type="file" id="exampleInputFile">

                      <img src=".{{}}" class="help-block">
                    </div>
                  </div>
              <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
            </form>
        </div>

@endsection