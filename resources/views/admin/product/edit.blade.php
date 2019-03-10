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
          <h3 class="box-title">Thêm mới sản phẩm</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{!! route('admin.product.postEdit',$a_Pros['PR_id']) !!}" class="form-horizontal" method="POST" enctype="multipart/form-data" autocomplete="off">
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
             <label class="col-sm-2 control-label" for="danhmuc">Danh mục</label>
             <div class="col-sm-4">
              <select id="danhmuc" name="CA_id" required="" class="form-control select2">
                @foreach($a_Cates as $a_cate)
                  <option <?php echo($a_cate['CA_id']==$a_Pros['PR_CA_id'])?'selected':'' ?> value="{{$a_cate['CA_id']}}">{{$a_cate['CA_name']}}</option>
                @endforeach
             </select>
           </div>
         </div>
         <div class="form-group">
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
        </div>
        <div class="form-group">
          <label for="masp" class="col-sm-2 control-label">Mã sản phẩm</label>
          <div class="col-sm-2">
            <input type="text" value="{{$a_Pros['PR_SKU']}}" name="PR_SKU" class="form-control" id="masp" placeholder="Mã sản phẩm">
          </div>
        </div>
        <div class="form-group">
          <label for="producer" class="col-sm-2 control-label">Nhà cung cấp</label>
          <div class="col-sm-3">
            <input type="text" value="{{$a_Pros['PR_producer']}}" name="PR_producer" class="form-control" id="producer" placeholder="Nhà cung cấp">
          </div>
        </div>
        <div class="form-group">
          <label for="descrip" class="col-sm-2 control-label">Mô tả</label>
          <div class="col-sm-6">
            <textarea class="form-control" rows="3" name="PR_descript" id="descrip" placeholder="{{$a_Pros['PR_sortDesc']}}">{{$a_Pros['PR_sortDesc']}}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="editor1" class="col-sm-2 control-label">Chi tiết</label>
          <div class="col-sm-9">
            <!-- tools box -->
            <div class="box-body pad">
              <textarea id="editor1" name="PR_detail" rows="10" cols="80">
                {{$a_Pros['PR_content']}}
              </textarea>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="file-4" class="col-sm-2 control-label">Hình đại diện</label>
          <div class="col-sm-5">
            {{-- <input type="file" name="avatar" class="form-control" id="avatar" placeholder="Mã sản phẩm"> --}}
            <input id="file-4" type="file" name="avatar" class="file" data-upload-url="#" data-theme="fas">
          </div>
          <div class="col-sm-5">
            <img  class="thumbnail" src="{{url('resources/upload/product/')}}/{{$a_Pros['PR_avatar']}}" alt="{{$a_Pros['PR_avatar']}}"  width="200px" height="200px">
          </div>
        </div>
        <div class="form-group">
          <label for="file-4" class="col-sm-2 control-label">Hình ảnh kèm theo</label>
          <div class="col-sm-8">
            {{-- <input type="file" name="subavatar[]" multiple class="form-control" id="subavatar" placeholder="Mã sản phẩm"> --}}
            <input id="file-4" type="file" name="subavatar[]" multiple class="file" data-upload-url="#" data-theme="fas">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input name="PR_status" <?php echo($a_Pros['PR_status']==1)?'checked':'' ?> type="checkbox" value="1"> Hiển thị trang chủ
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
          <button class="btn btn-default"><a href="{{route('admin.product.index')}}">Cancel</a></button>
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