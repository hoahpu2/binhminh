<!-- jQuery 3.1.1 -->
<script src="{{ url('admin/') }}/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('admin/') }}/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ url('admin/') }}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin/') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('admin/') }}/dist/js/demo.js"></script>
<script src="{{ url('admin/') }}/ckeditor/ckeditor.js"></script>
<script src="{{ url('admin/') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>