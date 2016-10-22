@extends('layout')
@section('title', 'Retro News')
@section('content')

    {{--@php--}}

    {{--//$news = serialize($news);--}}
    {{--@endphp--}}

    <h1 class="article-title-show">retro news</h1>


{{$news}}



    @foreach($news as $item)
    <div class="row">
        <div class="col-sm-4"><a href="#" class=""><img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive"></a>
            <span>{{$item->mainImg_caption}}</span>
        </div>
        <div class="col-sm-8">


            <h3 class="title">{{ $item->title}}</h3>
            <p class="text-muted">{{$item->subHead}}</p>
            <p class="text-muted">Presented by <a href="#">{{$item->user_id}}</a></p>
            <p>{{$item->body}}</p>



        </div>
    </div>
    <hr/>
@endforeach


    <br/>


    <a href="{{url('/news')}}">Back To All News...</a>

@endsection