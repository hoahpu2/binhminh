@extends('admin.layout')
@section('content')
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><b>{!!$c_header[2]!!}</b></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{!! route('admin.cate.postAdd') !!}"  autocomplete="off">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="CA_name" class="col-sm-2 control-label">Tiêu đề </label>
            
              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" disabled class="form-control" id="CA_name" placeholder="Tên Menu" value="{{$a_Cate->CU_title}}">
              </div>
            </div>
            <div class="form-group">
              <label for="CA_name" class="col-sm-2 control-label">Tên khách hàng </label>
            
              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" disabled class="form-control" id="CA_name" placeholder="Tên Menu" value="{{$a_Cate->CU_name}}">
              </div>
            </div>
            <div class="form-group">
              <label for="CA_parent" class="col-sm-2 control-label">Địa chỉ</label>

              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" disabled class="form-control" id="CA_name" placeholder="Tên Menu" value="{{$a_Cate->CU_address}}">
              </div>
            </div>
            <div class="form-group">
              <label for="CA_number" class="col-sm-2 control-label">Số điện thoại </label>
            
              <div class="col-sm-5">
                <input type="text" name="CA_number" required="required" disabled class="form-control" id="CA_number" placeholder="Vị trí" value="{{$a_Cate->CU_phone}}" >
              </div>
            </div>
            <div class="form-group">
              <label for="CA_number" class="col-sm-2 control-label">Địa chỉ Email </label>
            
              <div class="col-sm-5">
                <input type="text" name="CA_number" required="required" disabled class="form-control" id="CA_number" placeholder="Vị trí" value="{{$a_Cate->CU_email}}" >
              </div>
            </div>
            <div class="form-group">
              <label for="CA_number" class="col-sm-2 control-label">Nội dung </label>
            
              <div class="col-sm-5">
                <textarea class="form-control" rows="3" name="PR_descript" id="descrip" disabled placeholder="Enter ..."> {{$a_Cate->CU_content}}</textarea>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-5"></div>
              <div class="col-sm-5">
                <button class="btn btn-default"><a href="{{route('admin.request.index')}}">Back</a></button>
              </div>              
            </div>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  @endsection