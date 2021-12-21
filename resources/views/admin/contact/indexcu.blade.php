@extends('admin.layout')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><b></b></h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>STT</th>
                            <th>tên khách hàng</th>
                            <th>Công ty</th>
                            <th>Số điện thoại</th>
                            <th>Thời gian gửi</th>
                            <th>Xem chi tiết</th>
                        </tr>
                        @foreach($contact as $element)
                        <tr>
                            <td>
                                {{$loop->index+1}}
                            </td>
                            <td>
                                {{$element['name']}}
                            </td>
                            <td>
                                {{$element['company']}}
                            </td>
                            <td>
                                {{$element['number']}}
                            </td>
                            <td>
                                {{$element['created_at']}}
                            </td>

                            <td>
                                <a href="{{route('admin.contactCu.getDetail',['id' =>$element['id']])}}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection