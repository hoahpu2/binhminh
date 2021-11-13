@extends('layout.index')
@section('content')
    <div class="clear"></div>
    <p class="category-name">Tin tuc</p>
    @foreach($news as $item)
    <div class="news">
        <a href="{{url('tin-tuc'.'/'.$item->N_alias)}}" class="news-img">
            <img src="{{asset('resources/upload/news'.'/'.$item->N_avatar)}}" alt="">
        </a>
        <div class="news-content">
            <a href="{{url('tin-tuc'.'/'.$item->N_alias)}}" class="news-title">{{$item->N_title}}</a>
            <p class="new-desc">{!! str_limit($item->N_content,400) !!}</p>
            <a href="{{url('tin-tuc'.'/'.$item->N_alias)}}" class="read-more">Đọc tiếp</a>
        </div>

    </div>
    @endforeach
@endsection