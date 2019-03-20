@extends('layout.index')
@section('content')
    <div class="clear"></div>
    <div class="news-detail">
        @if(isset($news))
        {!! $news->N_content !!}
        @else
            <img  style=" max-width: 100%;margin: 0 auto;display: block;" src="{{asset('images/404.jpg')}}" alt="">
        @endif
    </div>
@endsection