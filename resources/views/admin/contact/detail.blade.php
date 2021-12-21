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
                    <div class="form-group">
                        <label for="CT_linkYoutu" class="col-sm-2 control-label">Tên khách hàng</label>

                        <div class="col-sm-5">
                            <input type="text" name="CT_linkYoutu" class="form-control" id="CT_linkYoutu" placeholder="Tên khách hàng" value="{{$contact['name']}}">
                            @if ($errors->has('CA_name'))
                            <span style="color:red">{{$errors->first('CA_name')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="CT_number" class="col-sm-2 control-label">Số điện thoại</label>

                            <div class="col-sm-5">
                                <input type="text" name="CT_number" class="form-control" id="CT_number" placeholder="Số điện thoại" value="{{$contact['number']}}">
                                @if ($errors->has('CA_name'))
                                <span style="color:red">{{$errors->first('CA_name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CT_address" class="col-sm-2 control-label">Địa chỉ</label>

                            <div class="col-sm-5">
                                <input type="text" name="CT_address" class="form-control" id="CT_address" placeholder="Địa chỉ" value="{{$contact['address']}}">
                                @if ($errors->has('CA_name'))
                                <span style="color:red">{{$errors->first('CA_name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CT_linkFace" class="col-sm-2 control-label">Tên công ty</label>

                            <div class="col-sm-5">
                                <input type="text" name="CT_linkFace" class="form-control" id="CT_linkFace" placeholder="Tên công ty" value="{{$contact['company']}}">
                                @if ($errors->has('CA_name'))
                                <span style="color:red">{{$errors->first('CA_name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CT_linkGoogle" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-5">
                                <input type="text" name="CT_linkGoogle" class="form-control" id="CT_linkGoogle" placeholder="Email" value="{{$contact['email']}}">
                                @if ($errors->has('CA_name'))
                                <span style="color:red">{{$errors->first('CA_name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="editor1" class="col-sm-2 control-label">Lời nhắn</label>
                            <div class="col-sm-9">
                                <!-- tools box -->
                                {{-- <div class="box-body pad"> --}}
                                <textarea id="editor1" name="CT_content" rows="10" cols="80">
                                {{$contact['message']}}
                                </textarea>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-5"></div>
                            <div class="col-sm-5">
                            <button class="btn btn-default"><a href="{{route('admin.contactCu.index')}}">Quay lại</a></button>
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