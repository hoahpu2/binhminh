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

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ url('admin/upload') }}/js/plugins/sortable.js" type="text/javascript"></script>
<script src="{{ url('admin/upload') }}/js/fileinput.js" type="text/javascript"></script>
<script src="{{ url('admin/upload') }}/js/locales/fr.js" type="text/javascript"></script>
<script src="{{ url('admin/upload') }}/js/locales/es.js" type="text/javascript"></script>
<script src="{{ url('admin/upload') }}/themes/fas/theme.js" type="text/javascript"></script>
<script src="{{ url('admin/upload') }}/themes/explorer-fas/theme.js" type="text/javascript"></script>

@if(isset($asset[2]))
	<script>
	  $(function () {
	    // Replace the <textarea id="editor1"> with a CKEditor
	    // instance, using default configuration.
	    CKEDITOR.replace('editor1',{
            filebrowserBrowseUrl : '{{url('admin/')}}/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '{{url('admin/')}}/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl : '{{url('admin/')}}/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl : '{{url('admin/')}}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '{{url('admin/')}}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '{{url('admin/')}}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        })
	    //bootstrap WYSIHTML5 - text editor
	    $('.textarea').wysihtml5()
	  })
	</script>
@endif

<script>
	// $("#file-4").fileinput({
 //        theme: 'fas',
 //        uploadExtraData: {kvId: '10'}
 //    });
    // $(".btn-warning").on('click', function () {
    //     var $el = $("#file-4");
    //     if ($el.attr('disabled')) {
    //         $el.fileinput('enable');
    //     } else {
    //         $el.fileinput('disable');
    //     }
    // });
    // $(".btn-info").on('click', function () {
    //     $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
    // });
</script>