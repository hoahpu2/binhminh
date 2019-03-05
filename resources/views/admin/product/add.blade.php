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
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tên sản phẩm</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
	                <label class="col-sm-2 control-label">Danh mục</label>
	                <div class="col-sm-4">
		                <select class="form-control select2">
			                <option selected="selected">Alabama</option>
			                <option>Alaska</option>
			                <option>California</option>
			                <option>Delaware</option>
			                <option>Tennessee</option>
			                <option>Texas</option>
			                <option>Washington</option>
		                </select>
		            </div>
	            </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Giá</label>

                  <div class="col-sm-3">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Giảm giá</label>

                  <div class="col-sm-3">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Số lượng</label>

                  <div class="col-sm-3">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Mã sản phẩm</label>

                  <div class="col-sm-2">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nhà cung cấp</label>

                  <div class="col-sm-3">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Mô tả</label>

                  <div class="col-sm-6">
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Chi tiết</label>

                  <div class="col-sm-9">
                    <!-- tools box -->
		              <div class="box-body pad">
			              <form>
			                    <textarea id="editor1" name="editor1" rows="10" cols="80">
			                                            This is my textarea to be replaced with CKEditor.
			                    </textarea>
			              </form>
			          </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Hiển thị trang chủ
                      </label>
                    </div>
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