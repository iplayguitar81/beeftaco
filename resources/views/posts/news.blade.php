@extends('layout')
@section('title', 'News')
@section('content')


<h1 class="article-title-show">news by category</h1>


<div class="container text-center">

    <div class="row">


        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">team news</a></li>
            <li><a data-toggle="tab" href="#menu1">league news</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>team news</h3>

                @foreach($news as $item)


                    <div class="row">
                        <div class="col-sm-4"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive"></a>
                           <br/> <span>{{$item->mainImg_caption}}</span>
                        </div>
                        <div class="col-sm-8">


                            <h2 class="secondary-posts-title"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ $item->title}}</a></h2>
                            <p class="text-muted">Written by <a href="#">{{written_by($item->user_id)}}</a> on {{gameDate($item->created_at)}} </p>
                            <p class="text-muted">{{$item->subHead}}</p>

                            <p>{{snippet($item->body)}}...<a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">READ MORE</a></p>


                        </div>

                        <hr/>


                    </div>




                @endforeach

                <br/>

                <button type="submit" class="btn btn-danger btn-md active" onclick="window.location='{{url('news/general')}}';" >All Team News...</button>

            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>league news</h3>


                @foreach($nbanews as $item)


                    <div class="row">
                        <div class="col-sm-4"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive"></a>
                            <br/> <span>{{$item->mainImg_caption}}</span>
                        </div>
                        <div class="col-sm-8">


                            <h2 class="secondary-posts-title"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ $item->title}}</a></h2>
                            <p class="text-muted">Written by <a href="#">{{written_by($item->user_id)}}</a> on {{gameDate($item->created_at)}} </p>
                            <p class="text-muted">{{$item->subHead}}</p>

                            <p>{{snippet($item->body)}}...<a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">READ MORE</a></p>


                        </div>

                        <hr/>


                    </div>




                @endforeach



                <br/>

                <button type="submit" class="btn btn-danger btn-md active" onclick="window.location='{{url('news/nba')}}';" >All League News...</button>


            </div>

        </div>

        <br/>



        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#past">past blazers</a></li>
            <li><a data-toggle="tab" href="#retro">retro news</a></li>
        </ul>

        <div class="tab-content">
            <div id="past" class="tab-pane fade in active">
                <h3>past blazers</h3>

                @foreach($former_players as $item)


                    <div class="row">
                        <div class="col-sm-4"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive"></a>
                            <br/> <span>{{$item->mainImg_caption}}</span>
                        </div>
                        <div class="col-sm-8">


                            <h2 class="secondary-posts-title"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ $item->title}}</a></h2>
                            <p class="text-muted">Written by <a href="#">{{written_by($item->user_id)}}</a> on {{gameDate($item->created_at)}} </p>
                            <p class="text-muted">{{$item->subHead}}</p>

                            <p>{{snippet($item->body)}}...<a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">READ MORE</a></p>


                        </div>

                        <hr/>


                    </div>




                @endforeach


                <br/>

                <button type="submit" class="btn btn-danger btn-md active" onclick="window.location='{{url('news/former-players')}}';" >All Alum News...</button>


            </div>
            <div id="retro" class="tab-pane fade">
                <h3>retro news</h3>


                @foreach($retronews as $item)


                    <div class="row">
                        <div class="col-sm-4"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img src="../images/md-img-{{ $item->imgPath}}" class="img-responsive"></a>
                            <br/> <span>{{$item->mainImg_caption}}</span>
                        </div>
                        <div class="col-sm-8">


                            <h2 class="secondary-posts-title"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ $item->title}}</a></h2>
                            <p class="text-muted">Written by <a href="#">{{written_by($item->user_id)}}</a> on {{gameDate($item->created_at)}} </p>
                            <p class="text-muted">{{$item->subHead}}</p>

                            <p>{{snippet($item->body)}}...<a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">READ MORE</a></p>


                        </div>

                        <hr/>


                    </div>




                @endforeach


                <br/>
                <button type="submit" class="btn btn-danger btn-md active" onclick="window.location='{{url('news/retro')}}';" >All Retro News...</button>

            </div>

        </div>




    </div>

</div>


@endsection

