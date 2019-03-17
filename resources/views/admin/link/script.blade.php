<!-- jQuery 3.1.1 -->
<script src="{{ url('admin/') }}/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('admin/') }}/bootstrap/js/bootstrap.min.js"></script>

<script src="{{ url('admin/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ url('admin/') }}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin/') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('admin/') }}/dist/js/demo.js"></script>
<script src="{{ url('admin/') }}/ckeditor/ckeditor.js"></script>
<script src="{{ url('admin/') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

{{-- <script src="{{ url('admin/bootbox')}}/bootstrap.bundle.min.js" crossorigin="anonymous"></script> --}}
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
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });
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
    $(document).ready(function() {
        $('.kv-file-remove').click(function(){alert('aaaa');
             $(this).parent(".kv-preview-thumb").remove();

             var currentId = $(this).attr('id');
             var images_delete = $('input[name="images_delete"]').val();
             var result = images_delete + ',' + currentId;
             $('input[name="images_delete"]').val(result);

        });
        //     $('.img_del').on('click', function() {
        //         var currentId = $(this).attr('href');
        //         var images_delete = $('input[name="images_delete"]').val();
        //         var result = images_delete + ',' + currentId;
        //         $('input[name="images_delete"]').val(result);
        //         return false;
        //     });
        $('#CA_parent').change(function(){
            if ($('#CA_parent').val() == 0) {
                $('#CA_number').attr("required","required");
                $('.vitri').css("display", "block");
            } else {
                $('#CA_number').removeAttr("required");
                $('.vitri').css("display", "none");
            }
        });
        if ($('#CA_parent').val() != 0) {
            $('#CA_number').removeAttr("required");
            $('.vitri').css("display", "none");
        }
    });
</script>
<script type="text/javascript">
    function confirmRemove(url){
            bootbox.confirm({
    message: "Bạn có chắc chắn muốn xóa?",
    buttons: {
        confirm: { 
            label: 'có',
            className: 'btn-danger'
        },
        cancel: {
            label: 'không',
            className: 'btn-success'
        }
    },
    callback: function (result) {
       if(result){
         window.location.href = url;
       }
    }
});
    }
</script>