@extends('admin.layout')
@section('content')
<section class="content">

  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="{{url('resources/upload/useradmin/').'/'.$user->avatar}}" alt="User profile picture">

          <h3 class="profile-username text-center">{{$user->name}}</h3>

          <p class="text-muted text-center">Software Engineer</p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Followers</b> <a class="pull-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>Following</b> <a class="pull-right">543</a>
            </li>
            <li class="list-group-item">
              <b>Friends</b> <a class="pull-right">13,287</a>
            </li>
          </ul>

          <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
        </div>
        <!-- /.box-body -->
      </div>

    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
          <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="settings">
                <form class="form-horizontal" method="POST" action="{!! route('admin.user.postAdd',10) !!}" enctype="multipart/form-data"  autocomplete="off">
                  @include('admin.massage')
                  @if ($errors->has('avatar'))
                        <span style="color:red;text-align: center;">{{$errors->first('avatar')}}</span>
                      @endif
                  @csrf
                  <input type="hidden" name="id" value="{{$user->id}}">
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$user->name}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$user->email}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="old_password" class="col-sm-2 control-label">Mật khẩu cũ</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Mật khẩu cũ">
                      @if ($errors->has('old_password'))
                        <span style="color:red">{{$errors->first('old_password')}}</span>
                      @endif
                      @if(Session::has('old_passwords'))
                        <p style="color: red;text-align: left">{!! Session::get('old_passwords') !!}</p>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Mật khẩu mới</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu mới">
                      @if ($errors->has('password'))
                        <span style="color:red">{{$errors->first('password')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="re_password" class="col-sm-2 control-label">Nhập lại mật khẩu</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="re_password" name="re_password" placeholder="Nhập lại mật khẩu">
                      @if ($errors->has('re_password'))
                        <span style="color:red">{{$errors->first('re_password')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="file-4" class="col-sm-2 control-label">Avatar</label>
                    <div class="col-sm-10">
                      <input id="file-4" type="file" name="avatar" class="file" data-upload-url="#" data-theme="fas">
                      {{-- <input type="file" class="form-control" name="avatar" id="avatar"> --}}
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          {{-- <input type="checkbox"> I agree to the <a href="#">terms and conditions</a> --}}
                        </label>
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      @endsection