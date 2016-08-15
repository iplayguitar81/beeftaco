

@extends('layout')
@section('title', 'Home')

@section('content')

<div class="col-md-8">
    @if(Session::has('message'))
        <div class="alert alert-info" style="color:red;">
            {{Session::get('message')}}
        </div>
    @endif

        @foreach($scores as $item)


            @php
                $versus_or_at="";
                $away_nick_dash="$item->afname";
                $home_nick_dash="";
                $home_or_away="";



            @endphp



            @if ($item->h_initials=='POR')
                @php
                    $versus_or_at="VS.";

                    $home_or_away = c.afname.downcase+'<span class="box_total_h2"> '+c.atotal+"</span><br/>at<br/> portland trail blazers <span class='box_total_h2'>"+c.htotal+"</span>";
                @endphp


            @endif



            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">

                    <table class="header_last_game">
                        <tr><th colspan="3">{{$item->datey}}</th></tr>
                        <tr><td>img<br/> {{$item->h_initials}}<br/><span class='slider_score'>{{$item->htotal}}</span></td><td>{!!$versus_or_at!!}<br/><br/>{!!$win_or_loss.html_safe!!}></td><td>img<br/> {{$items->a_initials}}<br/><span class='slider_score'>{{c.atotal}}</span></td></tr>
                        <tr><td colspan="3"><div data-uk-button-radio>Link to game  </div></td></tr>
                  </table>


			</div>
        </div>



		@endforeach




    @foreach($posts as $item)
    <article class="text-center">


        <h1 class="main-article-titles Ripper" >
            <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ $item->title }}</a>
        </h1>
        <p class="subheader-main" style="font-family: Boogaloo, cursive; font-size:2em;">{{ $item->subHead}}</p>
        {{--{{$posts-> $item->user }}--}}

        {{--{{//$users::where('id','like',$item->user_id) -> name()}}--}}
        <p class="">Written by
            <?
            //below is one way to get the name of the author.....
            ?>

            @if($item->user_id != null)
            <? $author = App\User::find($item->user_id)->name; ?>

            {{$author}}
            @endif
            {{--@foreach($records as $record)--}}

                {{--{{$record->name}}--}}
                {{--@endforeach--}}

            on {{ $item->created_at->format('M dS Y') }}</p>

        <p>
            <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-responsive center-block" src="../images/{{ $item->imgPath}}"></a>
        </p>

            {{--{{//# way to declare variables in view next line......}}--}}
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
            $variable =substr($variable,0, 50);
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


    $(document).ready(function() {

        var owl = $("#owl-demo");

        owl.owlCarousel({

            navigation : true

        });

    })



</script>


