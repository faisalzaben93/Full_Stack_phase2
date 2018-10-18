@extends('layouts.admin')
@section('content')


    <!-- /.content-header -->
    <section class="content">
        <!-- general form elements -->
        <div class="box box-warning my-5">
            <div class="box-header">
                <h3 class="box-title">Edit Category</h3>
            </div>            <form  role="form" method="post" action="{{ route('admin.categories.update',$category->id) }}" >
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="form-group row col-sm-6">
                         <label class="control-label" for="exampleInputEmail1">English Name</label>
                            <input name="name_en" type="text" class="form-control" id="exampleInputEmail1" value="{{$category->name_en}}">

                    </div>
                    <div class="form-group col-sm-6">
                            <label class="control-label" for="exampleInputPassword1">Arabic Name</label>
                            <input name="name_ar" type="text" class="form-control" id="exampleInputPassword1" value="{{$category->name_ar}}">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-warning" value="Save">Save</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>

@endsection


