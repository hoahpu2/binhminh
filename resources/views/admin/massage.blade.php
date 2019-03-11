@if(Session::has('flash_message'))
{{-- <div class="row"> --}}
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="alert alert-{!! Session::get('flash_lever') !!}">
			{!! Session::get('flash_message') !!}
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		</div>
	</div>
{{-- </div> --}}
@endif