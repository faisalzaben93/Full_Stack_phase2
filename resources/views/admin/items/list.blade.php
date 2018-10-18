@extends('layouts.admin')
@section('content')

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Categories</h3>
                            </div>                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Category ID</th>
                                        <th>English Name</th>
                                        <th>Arabic Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $c)
                                        <tr>
                                            <td>{{ $c->id }}</td>
                                            <td>{{ $c->name_en }}</td>
                                            <td>{{ $c->name_ar }}</td>
                                            <td class="">
                                                <a href="{{ route('details',$c->id) }}" class="btn btn-info mx-3">Details</a>
                                                <a href="{{ route('admin.categories.edit',$c->id) }}" class="btn btn-warning mx-3">Edit</a>
                                                <a href="{{route('delete',$c->id) }}" class="btn btn-danger mx -3">Delete</a>

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
        </div>
    </section>

    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        })
    </script>
    <!-- /.col -->
                <!-- /.row -->
            <!-- /.content -->


@endsection