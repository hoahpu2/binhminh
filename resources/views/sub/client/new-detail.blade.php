@extends('layout.index')
@section('content')
    <div class="clear"></div>
    <div class="news-detail" style="padding-top:20px;">
        @if(isset($news))
            <p style="
      font-weight: bold;
    font-size: 23px;">{{$news->N_title}}</p>
        {!! $news->N_content !!}
        @else
            <img  style=" max-width: 100%;margin: 0 auto;display: block;" src="{{asset('images/404.jpg')}}" alt="">
        @endif
    </div>
@endsection