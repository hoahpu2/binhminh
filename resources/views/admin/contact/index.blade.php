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
        <form class="form-horizontal" method="POST" action="{!! route('admin.contact.postAdd',1000) !!}">
          @csrf
          <input type="hidden" name="id" value="{{$contact[0]['CT_id']}}">
          <div class="box-body">
            <div class="form-group">
              <label for="CT_number" class="col-sm-2 control-label">Số điện thoại</label>

              <div class="col-sm-5">
                <input type="text" name="CT_number"  class="form-control" id="CT_number" placeholder="Số điện thoại" value="{{$contact[0]['CT_number']}}">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="CT_address" class="col-sm-2 control-label">Địa chỉ</label>

              <div class="col-sm-5">
                <input type="text" name="CT_address"  class="form-control" id="CT_address" placeholder="Địa chỉ" value="{{$contact[0]['CT_address']}}">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="CT_linkFace" class="col-sm-2 control-label">Đường dẫn Facebook</label>

              <div class="col-sm-5">
                <input type="text" name="CT_linkFace"  class="form-control" id="CT_linkFace" placeholder="Đường dẫn Facebook" value="{{$contact[0]['CT_linkFace']}}">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="CT_linkGoogle" class="col-sm-2 control-label">Đường dẫn Google</label>

              <div class="col-sm-5">
                <input type="text" name="CT_linkGoogle"  class="form-control" id="CT_linkGoogle" placeholder="Đường dẫn Google" value="{{$contact[0]['CT_linkGoogle']}}">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="CT_linkYoutu" class="col-sm-2 control-label">Đường dẫn Youtube</label>

              <div class="col-sm-5">
                <input type="text" name="CT_linkYoutu"  class="form-control" id="CT_linkYoutu" placeholder="Đường dẫn Youtube" value="{{$contact[0]['CT_linkYoutu']}}">
                @if ($errors->has('CA_name'))
                  <span style="color:red">{{$errors->first('CA_name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="CT_Email" class="col-sm-2 control-label">Địa chỉ Email</label>

              <div class="col-sm-5">
                <input type="text" name="CT_Email"  class="form-control" id="CT_Email" placeholder="Example@gmail.com" value="{{$contact[0]['CT_Email']}}">
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
                <button type="reset" class="btn btn-default">Cancel</button>
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