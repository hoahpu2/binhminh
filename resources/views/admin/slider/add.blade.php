@extends('admin.layout')
@section('content')
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{!! route('admin.cate.getAdd',isset($a_CateOne[0]['CA_id'])?$a_CateOne[0]['CA_id']:0) !!}">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Số điện thoại</label>

              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" class="form-control" id="inputEmail3" placeholder="Tên danh mục" value="<?php echo isset($a_CateOne[0]['CA_name'])?$a_CateOne[0]['CA_name']:'' ?>">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ</label>

              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" class="form-control" id="inputEmail3" placeholder="Tên danh mục" value="<?php echo isset($a_CateOne[0]['CA_name'])?$a_CateOne[0]['CA_name']:'' ?>">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Đường dẫn Facebook</label>

              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" class="form-control" id="inputEmail3" placeholder="Tên danh mục" value="<?php echo isset($a_CateOne[0]['CA_name'])?$a_CateOne[0]['CA_name']:'' ?>">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Đường dẫn Google</label>

              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" class="form-control" id="inputEmail3" placeholder="Tên danh mục" value="<?php echo isset($a_CateOne[0]['CA_name'])?$a_CateOne[0]['CA_name']:'' ?>">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Đường dẫn Youtube</label>

              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" class="form-control" id="inputEmail3" placeholder="Tên danh mục" value="<?php echo isset($a_CateOne[0]['CA_name'])?$a_CateOne[0]['CA_name']:'' ?>">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ Email</label>

              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" class="form-control" id="inputEmail3" placeholder="Tên danh mục" value="<?php echo isset($a_CateOne[0]['CA_name'])?$a_CateOne[0]['CA_name']:'' ?>">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <!-- <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="CA_status" value="1" <?php echo (isset($a_CateOne[0])&&$a_CateOne[0]['CA_status']==1)?'checked':'aa' ?> > Hiển thị trang chủ
                  </label>
                </div>
              </div>
            </div> -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-5"></div>
              <div class="col-sm-5">
                <button type="submit" class="btn btn-info pull-center">Sign in</button>
                <button class="btn btn-default">Cancel</button>
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