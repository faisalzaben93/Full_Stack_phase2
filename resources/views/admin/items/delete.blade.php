@extends('layouts.admin')
@section('content')


    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-danger my-5">
                        <div class="box-header">
                            <h3 class="box-title">Delete</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example" class="table table-hover" role="grid"
                                           aria-describedby="example2_info">
                                        <tbody>
                                        <tr role="row" class="even">
                                            <th  rowspan="1" colspan="1"  >ID</th>
                                            <td>{{ $categories->id }}</td>
                                        </tr>
                                        <tr role="row" class="even">

                                            <th class="" tabindex="0" aria-controls="" rowspan="1" colspan="1" >English Name</th>
                                            <td>{{ $categories->name_en }}</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <th class="" tabindex="0" aria-controls="" rowspan="1" colspan="1" >Arabic Name</th>
                                            <td>{{ $categories->name_ar }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer clearfix">
                            <a href="{{ route('list') }}" class="btn btn-info pull-left">Back</a>
                            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()"
                               class="btn btn-danger pull-right">Delete</a>
                            <form action="{{ route('admin.categories.destroy',$categories->id) }}" method="post">
                                @method('DELETE')
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
    </section>

    <td>
@endsection