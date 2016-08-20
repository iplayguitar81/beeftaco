

@extends('layout')
@section('title', 'Home')

@section('content')

<div class="col-md-8">
    @if(Session::has('message'))
        <div class="alert alert-info" style="color:red;">
            {{Session::get('message')}}
        </div>
    @endif


    @foreach($posts as $item)
    <article class="text-center">


        <h1 class="main-article-titles Ripper" >
            <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ $item->title }}</a>
        </h1>
        <p class="subheader-main Bebas">{{ $item->subHead}}</p>
        {{--{{$posts-> $item->user }}--}}

        {{--{{//$users::where('id','like',$item->user_id) -> name()}}--}}
        <p class="">Written by


            @if($item->user_id != null)
            <? $author = App\User::find($item->user_id)->name; ?>

            {{$author}}
            @endif


            on {{ $item->created_at->format('M dS Y') }}</p>

        <p>
            <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-responsive center-block" src="../images/{{ $item->imgPath}}"></a>
        </p>

        {{--*/ @ $rate_sum = 0; $rate_count=0; $rate_avg=0; $rate_pct=0;  /*--}}


        @foreach($ratings as $rating)
        @if($rating->post_id ==$item->id)

     {{--*/ @ $rate_sum+=$rating->rating; $rate_count++; $rate_avg=$rate_sum/$rate_count; $rate_pct=($rate_avg/5)*100 /*--}}




            {{--<p>{{$rating->rating}}</p>--}}
            {{--<p>{{$rating->rate_message}}</p>--}}

            @else


            @endif


        @endforeach


        <br/>


        {{--<div class="row">--}}
            {{--<div class="col-md-8">--}}

                {{--{{'Rating Avg: '.round($rate_avg,2)}}/5--}}
                {{--<br/>--}}
                {{--{{'# of Ratings: '.$rate_count}}--}}

                {{--<div class="rating center-block"><div class="stars"></div><div class="back" style="width:{{$rate_pct}}%;"></div></div>--}}


            {{--</div>--}}

        {{--</div>--}}

        <br/>

<!--            --><?//$ratings= $ratings($item->id)?>

        {{--<p>Average Rating: {{$ratings->averageRating}}</p>--}}
        {{--<p>Rating %: {{$ratings->ratingPercent}}</p>--}}

{{--{{$variable = str_limit($item->body, 100)}}--}}
   <?

            $variable= strip_tags($item->body);
            $variable =substr($variable,0, 150);
       // $variable = (str_limit($item->body, 100));
       // $variable= htmlentities($variable);
        ?>
       <p class="article-texterson">{{$variable}} ...</p>
      {{--<p>  {{strip_tags((str_limit($item->body, 100)))}}...</p>--}}
        <br/>
            <a class="btn btn-danger btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>
            <a style="margin-top:.2em;" class="btn btn-primary btn-md active" href="#">Comments</a>
        <hr>

    </article>

    @endforeach

<br/>
        <br/>
        <div class="pagination"> {!! $posts->render() !!} </div>

        <div class="col-md-12 blogShort">
            <div class="col-md-12">


            <h1>Title 1</h1>
            </div>

            <div class="col-md-3">

                <img style="height:150px;width:150px;margin-right: 1em;" src="" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">

            </div>


            <div class="col-md-9">
            <em>This snippet use <a href="#">Written By: </a></em>
            <article><p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum.
                </p></article>
            <a class="btn btn-blog pull-right marginBottom10" href="#">READ MORE</a>
        </div>


</div>

</div>
<br/>

<br/>

<div class="col-md-3">
    @include('sidebar')
</div>


@endsection
<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}"></script>
<script src="{{url('/js/lightslider.js')}}"></script>
<script>

    $(document).ready(function() {
        $("#content-slider").lightSlider({
            loop:true,
            keyPress:true
        })});






</script>


