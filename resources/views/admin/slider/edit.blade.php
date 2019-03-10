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
        <form class="form-horizontal" method="POST" action="{!! route('admin.slider.postEdit',$slider->SL_en_id) !!}" enctype="multipart/form-data">
          @csrf
          <div class="box-body">

          {{-- <div class="container my-4"> --}}
            {{-- <div class="form-group">
                <div class="col-sm-5">
                    <input id="file-4" type="file" class="file" data-upload-url="#" data-theme="fas">
                </div>
            </div> --}}
          {{-- </div> --}}

            <div class="form-group">
              <label for="file-4" class="col-sm-2 control-label">Slider</label>

              <div class="col-sm-5">
                <input id="file-4" type="file" name="SL_url" class="file" data-upload-url="#" data-theme="fas">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
              <div class="col-sm-5">
                <img src="{{url('resources/upload/slider/')}}/{{$slider->SL_url}}" alt="" class="thumbnail" width="400" height="200">
              </div>
            </div>
            <div class="form-group">
              <label for="SL_alt" class="col-sm-2 control-label">Alt</label>

              <div class="col-sm-5">
                <input type="text" name="SL_alt" class="form-control" id="SL_alt" placeholder="Tên danh mục" value="{{$slider->SL_alt}}">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="SL_status" value="1" <?php echo($slider->SL_status==1)?'checked':'' ?>> Hiển thị trang chủ
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