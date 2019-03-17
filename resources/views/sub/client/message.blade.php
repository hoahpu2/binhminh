@if(Session::has('flash_message'))
       <p style="color: white; padding: 5px; background: #4cae4c;">{!! Session::get('flash_message') !!} </p>
@endif