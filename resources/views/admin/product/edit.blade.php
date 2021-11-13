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
          <h3 class="box-title">Sửa sản phẩm</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{!! route('admin.product.postEdit',$id) !!}" class="form-horizontal" method="POST" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <div class="box-body">
            @if(Session::has('avatar_error'))
            <p style="color: red;text-align: center">{!! Session::get('avatar_error') !!}</p><br>
            @endif
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Tên sản phẩm</label>
              <div class="col-sm-6">
                <input type="text" value="{{$a_Pros['PR_name']}}" required="" class="form-control" name="PR_name" id="inputEmail3" placeholder="Tên sản phẩm">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="danhmuc">Menu</label>
              <div class="col-sm-4">
                <select id="danhmuc" name="CA_id" required="" class="form-control select2">
                  @foreach($a_Cates as $key=>$a_cate)
                  <option <?php echo ($key == $a_Pros['PR_CA_id']) ? 'selected' : '';
                          echo (strpos($a_cate, '&nbsp;') === false) ? 'disabled' : ''; ?> value="{{$key}}">{!!$a_cate!!}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <!-- <div class="form-group">
             <label class="col-sm-2 control-label" for="danhmuc">Danh mục</label>
             <div class="col-sm-4">
              <select id="danhmuc" name="CC_id" class="form-control select2">
                @foreach($a_Catecontent as $a_catecon)
                  <option <?php echo ($a_catecon['CC_id'] == $a_Pros['PR_CC_id']) ? 'selected' : ''; ?> value="{{$a_catecon['CC_id']}}">{!!$a_catecon['CC_name']!!}</option>
                @endforeach
             </select>
           </div>
         </div> -->
            <!-- <div class="form-group">
          <label for="price" class="col-sm-2 control-label">Giá</label>
          <div class="col-sm-3">
            <input type="number" value="{{$a_Pros['PR_price']}}" name="PR_price" class="form-control" id="price" placeholder="Giá">
          </div>
        </div>
        <div class="form-group">
          <label for="sale" class="col-sm-2 control-label">Giảm giá</label>
          <div class="col-sm-3">
            <input type="number" value="{{$a_Pros['PR_sale']}}" class="form-control" name="PR_sale" id="sale" placeholder="Giảm giá">
          </div>
        </div>
        <div class="form-group">
          <label for="quantity" class="col-sm-2 control-label">Số lượng</label>
          <div class="col-sm-3">
            <input type="number" value="{{$a_Pros['PR_quantity']}}" required="" name="PR_quantity" class="form-control" id="quantity" placeholder="Số lượng">
          </div>
        </div> -->
            <div class="form-group">
              <label for="masp" class="col-sm-2 control-label">Từ khóa tìm kiếm</label>
              <div class="col-sm-2">
                <input type="text" maxlength="20" value="{{$a_Pros['PR_SKU']}}" name="PR_SKU" class="form-control" id="masp" placeholder="Mã sản phẩm">
              </div>
            </div>
            <!-- <div class="form-group">
          <label for="producer" class="col-sm-2 control-label">Nhà cung cấp</label>
          <div class="col-sm-3">
            <input type="text" value="{{$a_Pros['PR_producer']}}" name="PR_producer" class="form-control" id="producer" placeholder="Nhà cung cấp">
          </div>
        </div> -->
            <div class="form-group">
              <label for="descrip" class="col-sm-2 control-label">Mô tả</label>
              <div class="col-sm-6">
                <textarea class="form-control" rows="3" name="PR_descript" id="descrip" placeholder="{{$a_Pros['PR_sortDesc']}}">{{$a_Pros['PR_sortDesc']}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="editor1" class="col-sm-2 control-label">Mô tả chi tiết</label>
              <div class="col-sm-9">
                <!-- tools box -->
                {{-- <div class="box-body"> --}}
                <textarea id="editor1" name="PR_detail" rows="10" cols="80">
                {{$a_Pros['PR_content']}}
                </textarea>
                {{-- </div> --}}
              </div>
            </div>
            <div class="form-group">
              <label for="file-4" class="col-sm-2 control-label">Hình đại diện</label>
              <div class="col-sm-5">
                {{-- <input type="file" name="avatar" class="form-control" id="avatar" placeholder="Mã sản phẩm"> --}}
                <input id="file-4" type="file" name="avatar" class="file" data-upload-url="#" data-theme="fas">
              </div>
              <div class="col-sm-5">
                <img class="thumbnail" src="{{url('resources/upload/product/')}}/{{$a_Pros['PR_avatar']}}" alt="{{$a_Pros['PR_avatar']}}" width="200px" height="200px">
              </div>
            </div>
            <div class="form-group">
              <label for="file-4" class="col-sm-2 control-label">Hình ảnh kèm theo</label>
              <div class="col-sm-8">
                {{-- <input type="file" name="subavatar[]" multiple class="form-control" id="subavatar" placeholder="Mã sản phẩm"> --}}
                <input id="file-4" type="file" name="subavatar[]" multiple class="file" data-upload-url="#" data-theme="fas">
                {{-- <div class="file-preview">
            <div class=" file-drop-zone">
              <div class="file-preview-thumbnails"> --}}
                <input type="hidden" name="images_delete" value="">
                @foreach($sub_image as $s_image)
                <div class="file-preview-frame krajee-default kv-preview-thumb aaa" data-fileindex="0" data-template="image">
                  <div class="kv-file-content">
                    <img src="{{url('resources/upload/product/images_detail/')}}/{{$s_image['IM_url']}}" class="file-preview-image kv-preview-data" title="Jellyfish.jpg" alt="Jellyfish.jpg" style="width:auto;height:auto;max-width:100%;max-height:100%;">
                  </div>
                  <div class="file-thumbnail-footer">
                    <div class="file-footer-caption" title="Jellyfish.jpg">
                      <div class="file-caption-info">{{$s_image['IM_url']}}</div>
                      {{-- <div class="file-size-info"> <samp>(757.52 KB)</samp></div> --}}
                    </div>
                    <div class="file-thumb-progress kv-hidden">
                      <div class="progress">
                        <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                          Initializing...
                        </div>
                      </div>
                    </div>
                    <div class="file-upload-indicator" title="Not uploaded yet"><i class="fas fa-plus-circle text-warning"></i></div>

                    <div class="clearfix"></div>
                  </div>
                  <button type="button" id="{{$s_image['IM_id']}}" class="kv-file-remove btn btn-sm btn-kv btn-default btn-outline-secondary" title="Remove file"><i class="fas fa-trash-alt"></i></button>
                </div>
                @endforeach
                {{-- </div>
            </div>
            </div> --}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input name="PR_status" <?php echo ($a_Pros['PR_status'] == 1) ? 'checked' : '' ?> type="checkbox" value="1"> Hiển thị trang chủ
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-info pull-left">Sign in</button>
              <button class="btn btn-default"><a href="{{ url()->previous() }}">Cancel</a></button>
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