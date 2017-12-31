@extends('layout')
@section('title', 'Retro News')
@section('content')

    {{--@php--}}

    {{--//$news = serialize($news);--}}
    {{--@endphp--}}

    <h1 class="article-title-show">retro/oldschool news</h1>


    <p class="text-center">Here you can get the inside scoop on all of the latest retro trail blazers fans news!</p>
    <br/>
    <hr>

    @foreach($news as $item)

        <div class="row">
            <div class="col-sm-4"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive"></a>
                <span>{{$item->mainImg_caption}}</span>
            </div>
            <div class="col-sm-8">


                <h3 class="title"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ $item->title}}</a></h3>
                <p class="text-muted">{{$item->subHead}}</p>
                <p class="text-muted">Written by <a href="#">{{written_by($item->user_id)}}</a> on {{gameDate($item->created_at)}} </p>
                <p>{{snippet($item->body)}}...<a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">READ MORE</a></p>



            </div>
        </div>
        <hr/>
@endforeach


    <br/>


    <a href="{{url('/news')}}">Back To All News...</a>

@endsection