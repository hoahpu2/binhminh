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
        @include('admin.massage')
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{!! route('admin.cate.postEdit',isset($a_CateOne[0]['CA_en_id'])?$a_CateOne[0]['CA_en_id']:0) !!}"  autocomplete="off">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="CA_name" class="col-sm-2 control-label">Tên danh mục <span style="color: red"> *</span></label>
            
              <div class="col-sm-5">
                <input type="text" name="CA_name" required="required" class="form-control" id="CA_name" placeholder="Tên danh mục" value="<?php echo isset($a_CateOne[0]['CA_name'])?$a_CateOne[0]['CA_name']:'' ?>">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="CA_parent" class="col-sm-2 control-label">Danh mục cha</label>

              <div class="col-sm-5">
                <select name="CA_parent" class="form-control select2" id="CA_parent">
                  <option value="0">Danh mục cha</option>
                  @foreach($a_Cates as $cate)
                  <option value="{{$cate['CA_id']}}" <?php echo($cate['CA_status']==1)?'':'disabled'; echo(isset($a_CateOne[0])&&$a_CateOne[0]['CA_parentId'] == $cate['CA_id'])?' selected':''; echo($a_CateOne[0]['CA_id'] == $cate['CA_id'])?'disabled':'' ?> >{{$cate['CA_name']}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <!-- <div class="form-group vitri">
              <label for="CA_number" class="col-sm-2 control-label">Vị trí <span style="color: red"> *</span></label>
            
              <div class="col-sm-2">
                <input type="number" name="CA_number" required="required" class="form-control" id="CA_number" placeholder="Vị trí" value="{{$a_CateOne[0]['CA_number']}}">
                @if ($errors->has('CA_number'))
                  <span style="color:red">{{$errors->first('CA_number')}}</span>
                @endif
              </div>
            </div> -->
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="CA_status" value="1" <?php echo (isset($a_CateOne[0])&&$a_CateOne[0]['CA_status']==1)?'checked':'' ?> > Hiển thị trang chủ
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
                <button class="btn btn-default"><a href="{{route('admin.cate.index')}}">Cancel</a></button>
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