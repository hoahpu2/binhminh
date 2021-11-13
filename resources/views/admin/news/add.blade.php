@extends('admin.layout')
@section('content')
<section class="content">
  <div class="row">
    <!-- left column -->

    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-12">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm mới tin tức</h3>
        </div>
        
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{!! route('admin.news.postAdd') !!}" class="form-horizontal" method="POST" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <div class="box-body">
            @if(Session::has('avatar_error'))
              <p style="color: red;text-align: center">{!! Session::get('avatar_error') !!}</p><br>
            @endif
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Tiêu đề tin tức</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" required="" name="N_title" id="inputEmail3" placeholder="Tiêu đề tin tức" value="{{old('N_title')}}">
                @if ($errors->has('N_title'))
                  <span style="color:red">{{$errors->first('N_title')}}</span>
                @endif
              </div>
            </div>
        <div class="form-group">
          <label for="editor1" class="col-sm-2 control-label">Nội dung tin tức</label>
          <div class="col-sm-9">
            <!-- tools box -->
            {{-- <div class="box-body pad"> --}}
              <textarea id="editor1" name="N_content" rows="10" cols="80">
                 {{old('N_content')}}
              </textarea>
            {{-- </div> --}}
          </div>
        </div>
        <div class="form-group">
          <label for="file-4" class="col-sm-2 control-label">Hình đại diện</label>
          <div class="col-sm-5">
            <input id="file-4" type="file" required="" name="avatar" class="file" data-upload-url="#" data-theme="fas">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input name="N_status" checked type="checkbox" value="1"> Hiển thị trang chủ
              </label>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="box-footer">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <button type="submit" class="btn btn-info pull-left">Lưu</button>
          <button class="btn btn-default"><a href="{{route('admin.news.index')}}">Quay lại</a></button>
        </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
  <!-- /.box -->
  <!-- general form elements disabled -->
  <!-- /.box -->
</div>
<!--/.col (right) -->
</div>
<!-- /.row -->
</section>
@endsection