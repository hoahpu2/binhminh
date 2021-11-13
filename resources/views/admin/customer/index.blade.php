@extends('admin.layout')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><b><button class="btn btn-default"><a href="{{route('admin.request.preview')}}">Yêu cầu đã xem</a></button></b></h3>

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
          @include('admin.massage')
          <table class="table table-hover">
            <tr>
              <th>STT</th>
              <th>Tên K/H</th>
              <th>Tiêu đề</th>
              <th>Ngày tạo</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Trạng thái</th>
            </tr>
            @foreach($a_Cate as $element)
            <tr>
              <td>
               {{$loop->index+1}}
             </td>
             <td>
              <a href="{{route('admin.request.detail',$element['CU_id'])}}" title="Xem chi tiết">{{$element['CU_name']}}</a>
            </td>
            <td>
              {{$element['CU_title']}}
            </td>
            <td>
              {{$element['created_at']}}
            </td>
            <td>
              {{$element['CU_phone']}}
            </td>
            <td>
              {{$element['CU_address']}}
            </td>
            <td>
             <span class="label label-success">Chưa đọc</span>  
             {{-- <span class="label label-danger">Ẩn</span> --}}
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