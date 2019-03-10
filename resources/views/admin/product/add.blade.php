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
        <form action="{!! route('admin.product.postAdd') !!}" class="form-horizontal" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Tên sản phẩm</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="PR_name" id="inputEmail3" placeholder="Tên sản phẩm">
              </div>
            </div>
            <div class="form-group">
             <label class="col-sm-2 control-label" for="danhmuc">Danh mục</label>
             <div class="col-sm-4">
              <select id="danhmuc" name="CA_id" class="form-control select2">
                @foreach($a_Cates as $a_cate)
                  <option value="{{$a_cate['CA_id']}}">{{$a_cate['CA_name']}}</option>
                @endforeach
             </select>
           </div>
         </div>
         <div class="form-group">
          <label for="price" class="col-sm-2 control-label">Giá</label>
          <div class="col-sm-3">
            <input type="number" name="PR_price" class="form-control" id="price" placeholder="Giá">
          </div>
        </div>
        <div class="form-group">
          <label for="sale" class="col-sm-2 control-label">Giảm giá</label>
          <div class="col-sm-3">
            <input type="number" class="form-control" name="PR_sale" id="sale" placeholder="Giảm giá">
          </div>
        </div>
        <div class="form-group">
          <label for="quantity" class="col-sm-2 control-label">Số lượng</label>
          <div class="col-sm-3">
            <input type="number" name="PR_quantity" class="form-control" id="quantity" placeholder="Số lượng">
          </div>
        </div>
        <div class="form-group">
          <label for="masp" class="col-sm-2 control-label">Mã sản phẩm</label>
          <div class="col-sm-2">
            <input type="text" name="PR_SKU" class="form-control" id="masp" placeholder="Mã sản phẩm">
          </div>
        </div>
        <div class="form-group">
          <label for="producer" class="col-sm-2 control-label">Nhà cung cấp</label>
          <div class="col-sm-3">
            <input type="text" name="PR_producer" class="form-control" id="producer" placeholder="Nhà cung cấp">
          </div>
        </div>
        <div class="form-group">
          <label for="descrip" class="col-sm-2 control-label">Mô tả</label>
          <div class="col-sm-6">
            <textarea class="form-control" rows="3" name="PR_descript" id="descrip" placeholder="Enter ..."></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="editor1" class="col-sm-2 control-label">Chi tiết</label>
          <div class="col-sm-9">
            <!-- tools box -->
            <div class="box-body pad">
              <textarea id="editor1" name="PR_detail" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
              </textarea>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input name="PR_status" type="checkbox" value="1"> Hiển thị trang chủ
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="file-4" class="col-sm-2 control-label">Hình đại diện</label>
          <div class="col-sm-5">
            <input id="file-4" type="file" name="avatar" class="file" data-upload-url="#" data-theme="fas">
            {{-- <input type="file" name="avatar" class="form-control" id="avatar" placeholder="Mã sản phẩm"> --}}
          </div>
        </div>
        <div class="form-group">
          <label for="file-fr" class="col-sm-2 control-label">Hình ảnh kèm theo</label>
          <div class="col-sm-8">
            {{-- <input id="file-fr" name="file-fr[]" type="file" multiple> --}}
            <input id="file-4" type="file" name="subavatar[]" multiple class="file" data-upload-url="#" data-theme="fas">
            {{-- <input type="file" name="subavatar[]" multiple class="form-control" id="file-4"> --}}
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-info pull-right">Sign in</button>
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