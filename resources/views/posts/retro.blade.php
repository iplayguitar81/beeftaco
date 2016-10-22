@extends('layout')
@section('title', 'Retro News')
@section('content')

    {{--@php--}}

    {{--//$news = serialize($news);--}}
    {{--@endphp--}}

    <h1 class="article-title-show">retro news</h1>


{{$news}}
{{$news->imgPath}}




    <hr><div class="row">
        <div class="col-sm-4"><a href="#" class=""><img src="" class="img-responsive"></a>
        </div>
        <div class="col-sm-8">
            <h3 class="title">How to Fight Fraud with Artificial Intelligence and Intelligent Analytics</h3>
            <p class="text-muted"><span class="glyphicon glyphicon-lock"></span> Available Exclusively for Premium Members</p>
            <p>Could artificial intelligence have been used to prevent the high-profile Target breach? The concept is not so far-fetched. Organizations such as Mastercard and RBS WorldPay have long relied on artificial intelligence to detect fraudulent transaction patterns and prevent card.</p>

            <p class="text-muted">Presented by <a href="#">Ellen Richey</a></p>

        </div>
    </div>
    <hr>



    <br/>


    <a href="{{url('/news')}}">Back To All News...</a>

@endsection