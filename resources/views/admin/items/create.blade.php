@extends('layouts.admin')
@section('content')

    <!-- /.content-header -->
    <section class="content my-5 ">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Add Category</h3>
                </div>
                <!-- form start -->
                <form role="form" method="post" action="{{ route('admin.categories.store') }}" >
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <div class="box-body">
                            <div class="form-group col-sm-6">
                                <label class="control-label" for="exampleInputEmail1">English Name</label>
                                 <input name="name_en" type="text" class="form-control col-sm-4" id="exampleInputEmail1"placeholder="Type a category in english language ">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class=" control-label" for="exampleInputPassword1">Arabic Name</label>
                                <input name="name_ar" type="text" class="form-control"id="exampleInputPassword1" placeholder="Type a category in arabic language ">
                            </div>
                        </div><!--/.row-->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" value="Save">Add</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
    </section>

@endsection