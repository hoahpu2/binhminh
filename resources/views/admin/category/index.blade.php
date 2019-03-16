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
          @include('admin.massage')
          <table class="table table-hover">
            <tr>
              <th>STT</th>
              <th>Tên Menu</th>
              <th>Ngày tạo</th>
              <th>Ngày sửa</th>
              <th>Menu cha</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
            @foreach($a_Cate as $element)
            <tr>
              <td>
               {{$loop->index+1}}
             </td>
             <td>
              {{$element['CA_name']}}
            </td>
            <td>
              {{$element['created_at']}}
            </td>
            <td>
              {{$element['updated_at']}}
            </td>
            <td>
              {{$element['parentId']}}
            </td>
            <td>
             @if($element['CA_status'] == 1)
             <span class="label label-success">Hiện</span>  
             @else
             <span class="label label-danger">Ẩn</span>
             @endif
           </td>

           <td>
            <a href="{{route('admin.cate.getEdit',['id' =>$element['CA_en_id']])}}" class="btn btn-sm btn-primary">
              <i class="fa fa-pencil"></i>
            </a>
            <a href="javascript:;" onclick ="confirmRemove('{{route('admin.cate.getDelete',['id' =>$element['CA_en_id']])}}')" class="btn btn-sm btn-danger">
              <i class="fa fa-remove"></i>
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