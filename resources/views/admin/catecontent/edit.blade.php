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
        <form class="form-horizontal" method="POST" action="{!! route('admin.catecontent.postEdit',isset($a_CateOne[0]['CC_en_id'])?$a_CateOne[0]['CC_en_id']:0) !!}"  autocomplete="off">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="CA_name" class="col-sm-2 control-label">Tên danh mục <span style="color: red"> *</span></label>
            
              <div class="col-sm-5">
                <input type="text" name="CC_name" required="required" class="form-control" id="CA_name" placeholder="Tên danh mục" value="<?php echo isset($a_CateOne[0]['CC_name'])?$a_CateOne[0]['CC_name']:'' ?>">
                @if ($errors->has('CC_name'))
              <span style="color:red">{{$errors->first('CC_name')}}</span>
            @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="CC_status" value="1" <?php echo (isset($a_CateOne[0])&&$a_CateOne[0]['CC_status']==1)?'checked':'aa' ?> > Hiển thị trang chủ
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-5"></div>
              <div class="col-sm-5">
                <button type="submit" class="btn btn-info pull-center">Sign in</button>
                <button class="btn btn-default"><a href="{{route('admin.catecontent.index')}}">Cancel</a></button>
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