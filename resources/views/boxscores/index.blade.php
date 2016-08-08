@extends('layout')
@section('content')
@section('title', 'Blog')
<div class="col-md-12">
    <h1>Posts &nbsp;&nbsp;&nbsp;</h1>



    @can('isAdmin')
        <div class="panel panel-success pull-right"> <div class="panel-heading">
                <h3 class="panel-title">Welcome {{Auth::user()->name}}</h3> </div>
            <div class="panel-body">
                <a href="{{ url('/boxscores/create') }}" class="btn btn-primary btn-sm">Add New Post</a>
                &nbsp;
                <a href="{{ url('/boxscores/file_upload') }}" class="btn btn-success btn-sm">Import CSV Posts</a>
                &nbsp;
                <a href="{{ url('/boxscores/file_export') }}" class="btn btn-warning btn-sm">Export Excel All Posts</a>

            </div>
        </div>
    @endcan
    <table class="table">
        <thead>
        <tr>
            <th>{{ trans('boxscores.title') }}</th><th>{{ trans('boxscores.subhead') }}</th><th>Date</th><th>{{ trans('boxscores.body') }}</th><th>Image</th>@can('isAdmin')<th>Actions</th>@endcan
        </tr>
        </thead>
        <tbody>
        {{-- */$x=0;/* --}}
        @foreach($boxscores as $item)
            {{-- */$x++;/* --}}
            <tr>
                {{--<td>{{ $x }}</td>--}}
                <td><a href="{{ route('boxscores.show', [$item->id, str_slug($item->title)]) }}">{{ $item->title }}</a> <span class="pull-left"><br/>
                        {{--{{'Post images: '. $item->images()->count() }}--}}
                    </span></td><td>{{ $item->subHead }}</td><td>{{ $item->created_at->format('M dS Y') }}</td><td>

                    {{strip_tags(str_limit($item->body, 20))}}

                </td><td><img class="img-responsive thumbnail" src="../images/{{ $item->imgPath}}"></td>
                @can('isAdmin')

                    @if($item->user_id == $user)

                        <td>
                            <a href="{{ url('/boxscores/' . $item->id . '/edit') }}" class="btn btn-success">{{Auth::user()->name}}- -Update Post</a><br/><br/>
                            {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/posts', $item->id],
                            'style' => 'display:inline'
                            ]) !!}


                            {!! Form::submit(Auth::user()->name.' - -Delete Post', ['class' => 'btn btn-danger']) !!}

                            @endif

                            {!! Form::close() !!}
                        </td>
                        @endcan
            </tr>

        @endforeach
        </tbody>
    </table>
    <div class="pagination"> {!! $boxscores->render() !!} </div>


    {{--@foreach($boxscore as $item)--}}

    {{--<article class="uk-article">--}}

    {{--<h1 class="uk-article-title"><a href="{{ url('boxscores', $item->id) }}">{{ $item->title }}</a></h1>--}}
    {{--<p class="uk-article-lead">{{$item->subHead}}</p>--}}
    {{--<p class="uk-article-meta">{{ $item->created_at }}</p>--}}

    {{--<div class="uk-grid">--}}
    {{--<div class="uk-width-medium-1-2 uk-push-1-2"><img class="uk-responsive-width" src="../images/{{ $item->imgPath}}"></div>--}}
    {{--<div class="uk-width-medium-1-2 uk-pull-1-2">{{$item->body}}</div>--}}
    {{--</div>--}}





    {{--</article>--}}
    {{--<hr class="uk-article-divider">--}}
    {{--@endforeach--}}
    {{--<p>{{ print_r($route) }}</p> heres where i need to figure out how to
    display the route name better.....
    --}}
</div>
@endsection