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
        <form class="form-horizontal" method="POST" action="{!! route('admin.slider.postAdd') !!}" enctype="multipart/form-data"  autocomplete="off">
          @csrf
          <div class="box-body">

          {{-- <div class="container my-4"> --}}
            {{-- <div class="form-group">
                <div class="col-sm-5">
                    <input id="file-4" type="file" class="file" data-upload-url="#" data-theme="fas">
                </div>
            </div> --}}
          {{-- </div> --}}
            @if(Session::has('avatar_error'))
              <p style="color: red;text-align: center">{!! Session::get('avatar_error') !!}</p><br>
            @endif
            <div class="form-group">
              <label for="file-4" class="col-sm-2 control-label">Ảnh tiêu đề</label>

              <div class="col-sm-5">
                <input id="file-4" type="file" name="SL_url" class="file" data-upload-url="#" data-theme="fas">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="SL_alt" class="col-sm-2 control-label">Tiêu đề</label>

              <div class="col-sm-5">
                <input type="text" name="SL_alt" class="form-control" id="SL_alt" placeholder="Tên tiêu đề">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="editor1" class="col-sm-2 control-label">Mô tả chi tiết</label>
              <div class="col-sm-9">
                <!-- tools box -->
                {{-- <div class="box-body pad"> --}}
                <textarea id="editor1" name="SL_detail" rows="10" cols="80">
                {{old('SL_detail')}}
                </textarea>
                {{-- </div> --}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" checked name="SL_status" value="1"> Hiển thị trang chủ
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
                <button class="btn btn-default"><a href="{{route('admin.slider.index')}}">Cancel</a></button>
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