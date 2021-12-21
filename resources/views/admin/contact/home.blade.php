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
                <form class="form-horizontal" method="POST" action="{!! route('admin.sanphamHome.postAdd') !!}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="CA_name" class="col-sm-3 control-label">Tiêu đề cho sản phẩm hiển thị ngoài trang chủ</label>

                            <div class="col-sm-5">
                                <input type="text" name="CA_name" class="form-control" id="CA_name" placeholder="Tên tiêu đề" value="{{$contact->CA_name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CT_number" class="col-sm-3 control-label">Chọn loại sản phẩm hiển thị (khuyến khích 5 s/p)</label>

                        </div>
                        @foreach($a_GetCategory as $a_GetCategorys)
                        <div class="form-group">
                            <label for="CT_address" class="col-sm-3 control-label"></label>
                            <div class="col-sm-5">
                                <div class="checkbox">
                                    <label>
                                    <input type="checkbox" <?php echo in_array($a_GetCategorys['CA_id'], $contact->CA_alias) ? 'checked' : '' ?> name="CA_alias[]" value="{{$a_GetCategorys['CA_id']}}">
                                    {{$a_GetCategorys['CA_name']}}
                                    </label>
                                </div>
                            </div>
                        </div>
                        @if(!empty($a_GetCategorys['subMenu']))
                            @foreach($a_GetCategorys['subMenu'] as $menu_2)
                            <div class="form-group">
                                <label for="CT_address" class="col-sm-4 control-label"></label>
                                <div class="col-sm-5">
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox" <?php echo in_array($menu_2['CA_id'], $contact->CA_alias) ? 'checked' : '' ?> name="CA_alias[]" value="{{$menu_2['CA_id']}}">
                                        {{$menu_2['CA_name']}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($menu_2['subMenu']))
                                @foreach($menu_2['subMenu'] as $menu_3)
                                <div class="form-group">
                                    <label for="CT_address" class="col-sm-5 control-label"></label>
                                    <div class="col-sm-5">
                                        <div class="checkbox">
                                            <label>
                                            <input type="checkbox" <?php echo in_array($menu_3['CA_id'], $contact->CA_alias) ? 'checked' : '' ?> name="CA_alias[]" value="{{$menu_3['CA_id']}}">
                                            {{$menu_3['CA_name']}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                            @endforeach
                        @endif
                        @endforeach
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-5"></div>
                            <div class="col-sm-5">
                            <button type="submit" class="btn btn-info">Lưu lại</button>
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