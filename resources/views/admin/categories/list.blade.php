@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Categories</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">

            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>English Name</th>
                    <th>Arabic Name</th>
                    <th>Action</th>
                </tr>
                @foreach($categories as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name_en }}</td>
                        <td>{{ $c->name_ar }}</td>
                        <td>
                            <a href="{{ route('details',$c->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('admin.categories.edit',$c->id) }}" class="btn btn-info">Edit</a>
                            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                            <form action="{{ route('admin.categories.destroy',$c->id) }}" method="post">
                                @method('DELETE')
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>


@endsection