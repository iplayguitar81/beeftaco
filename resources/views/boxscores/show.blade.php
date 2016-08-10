@extends('layout')
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=409035349261019";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@section('title', $boxscore->game_string)
@section('content')




    <div class="row">
    <div class="col-md-12">

    <article class="center-block">
        {{--<h1 class="article-title-show" style="font-family: Pacifico, cursive;font-size:4em;line-height:1.2em;text-align:center;"></h1>--}}

        {{-- */ $game_date = strtotime($boxscore->datey); $game_date=date("F d Y", $game_date); /* --}}
        <p class="subheader-main" style="text-align:center;font-family: Boogaloo, cursive; font-size:3em;">{{ $game_date}}</p>

        @if($boxscore->h_initials =='POR')
            {{-- */ $home_or_away = $boxscore->afname."<span class='box_total_h2'> ".$boxscore->atotal."</span><br/>at<br/> portland trail blazers <span class='box_total_h2'>".$boxscore->htotal."</span>" /* --}}

            @if ($boxscore->htotal > $boxscore->atotal )
                {{-- */ $win_or_loss ="<span class='win_loss_box_show_win'>W</span>" /* --}}
                @else

            @endif
            @if ($boxscore->htotal < $boxscore->atotal )
                {{-- */ $win_or_loss ="<span class='win_loss_box_show_loss'>L</span>" /* --}}
            @else

            @endif

{{--This is where I need to add the boxscore recap stuff.....--}}

            @endif

@if($boxscore->a_initials=="POR")
            {{-- */ $home_or_away = "portland trail blazers <span class='box_total_h2'> ".$boxscore->atotal."</span><br/>at<br/> portland trail blazers <span class='box_total_h2'>".$boxscore->atotal."</span><br/>at</br> ".$boxscore->hfname. " <span class='box_total_h2'>".$boxscore->htotal."</span>"  /* --}}

            @if ($boxscore->atotal > $boxscore->htotal )
                {{-- */ $win_or_loss ="<span class='win_loss_box_show_win'>W</span>" /* --}}
                @endif

            @if ($boxscore->atotal < $boxscore->htotal )
                {{-- */ $win_or_loss ="<span class='win_loss_box_show_loss'>L</span>" /* --}}
            @endif

            {{--This is where I need to add the boxscore recap stuff.....--}}

    @endif

        {{--This is where I need to add Starter stuff and DRY logic.....--}}


@if($boxscore->ap1_starter == '1')

            {{-- */  $astart_class1='starter' /* --}}
    @else

    @endif
        @if($boxscore->ap2_starter == '1')

            {{-- */  $astart_class2='starter' /* --}}
        @else

        @endif

        @if($boxscore->ap3_starter == '1')

            {{-- */  $astart_class3='starter' /* --}}
        @else

        @endif

        @if($boxscore->ap4_starter == '1')

            {{-- */  $astart_class4='starter' /* --}}
        @else

        @endif

        @if($boxscore->ap5_starter == '1')

            {{-- */  $astart_class5='starter' /* --}}
        @else

        @endif

        @if($boxscore->ap6_starter == '1')

            {{-- */  $astart_class6='starter' /* --}}

            @php
                $astart_class6='starter';
            @endphp
        @else
            @php
                $astart_class6='not';
            @endphp
        @endif

        @if($boxscore->ap7_starter == '1')

            @php
                $astart_class7='starter';
            @endphp
        @else
            @php
                $astart_class7='not';
            @endphp
        @endif
        @if($boxscore->ap8_starter == '1')

            @php
                $astart_class8='starter';
            @endphp
        @else
            @php
                $astart_class8='not';
            @endphp
        @endif

        @if($boxscore->ap9_starter == '1')

            @php
                $astart_class9='starter';
            @endphp
        @else
            @php
                $astart_class9='not';
            @endphp
        @endif


        @if($boxscore->ap10_starter == '1')

            @php
                $astart_class10='starter';
            @endphp
        @else
            @php
                $astart_class10='not';
            @endphp
        @endif

        @if($boxscore->ap11_starter == '1')

            @php
                $astart_class11='starter';
            @endphp
        @else
            @php
                $astart_class11='not';
            @endphp
        @endif

        @if($boxscore->ap12_starter == '1')

            @php
                $astart_class12='starter';
            @endphp
        @else
            @php
                $astart_class12='not';
            @endphp
        @endif


        @if($boxscore->ap13_starter == '1')

            @php
                $astart_class13='starter';
            @endphp
        @else
            @php
                $astart_class13='not';
            @endphp
        @endif


    @if($boxscore->hp1_starter == '1')

            {{-- */  $hstart_class1='starter' /* --}}
        @else

        @endif
        @if($boxscore->hp2_starter == '1')

            {{-- */  $hstart_class2='starter' /* --}}
        @else

        @endif

        @if($boxscore->hp3_starter == '1')

            {{-- */  $hstart_class3='starter' /* --}}
        @else

        @endif

        @if($boxscore->hp4_starter == '1')

            {{-- */  $hstart_class4='starter' /* --}}
        @else

        @endif

        @if($boxscore->hp5_starter == '1')

            {{-- */  $hstart_class5='starter' /* --}}
        @else

        @endif

        @if($boxscore->hp6_starter == '1')

            {{-- */  $hstart_class6='starter' /* --}}
        @else

        @endif

        @if($boxscore->hp7_starter == '1')

            {{-- */  $hstart_class7='starter' /* --}}
        @else

        @endif

        @if($boxscore->hp8_starter == '1')

            {{-- */  $hstart_class8='starter' /* --}}
        @else

        @endif

        @if($boxscore->hp9_starter == '1')

            {{-- */  $hstart_class9='starter' /* --}}
        @else

        @endif

        @if($boxscore->hp10_starter == '1')

            {{-- */  $hstart_class10='starter' /* --}}
        @else

        @endif
        @if($boxscore->hp11_starter == '1')

            {{-- */  $hstart_class11='starter' /* --}}
        @else

        @endif
        @if($boxscore->hp12_starter == '1')

            {{-- */  $hstart_class12='starter' /* --}}
        @else

        @endif

        @if($boxscore->hp13_starter == '1')

            {{-- */  $hstart_class13='starter' /* --}}
        @else

        @endif


        {{-- */ $away_total_to =$boxscore->ap1_to.$boxscore->ap2_to.$boxscore->ap3_to.$boxscore->ap4_to.$boxscore->ap5_to.$boxscore->ap6_to.$boxscore->ap7_to.$boxscore->ap8_to.$boxscore->ap9_to.$boxscore->ap10_to.$boxscore->ap11_to.$boxscore->ap12_to.$boxscore->ap13_to /* --}}
        {{-- */ $home_total_to =$boxscore->hp1_to.$boxscore->hp2_to.$boxscore->hp3_to.$boxscore->hp4_to.$boxscore->hp5_to.$boxscore->hp6_to.$boxscore->hp7_to.$boxscore->hp8_to.$boxscore->hp9_to.$boxscore->hp10_to.$boxscore->hp11_to.$boxscore->hp12_to.$boxscore->hp13_to /* --}}


        <div class='box_score'><h2 class='story_h2'><span class='article_title'>{!! $home_or_away !!}</span><br/><span class='box_arena_h2'>{{$boxscore->arena}} | </span><span class='box_start_date_h2'>Insert Date</span><br/>{!! $win_or_loss !!}</h2></div>

        <table id='last_game_period_box'>
            <tr><th>&nbsp;</th><th>&nbsp;</th><th>1</th><th>2</th><th>3</th><th>4</th><th>T</th></tr>
            <tr><td class='logo_box' ></td><td>{{$boxscore->a_initials}}</td><td>{{$boxscore->aq1}}</td><td>{{$boxscore->aq2}}</td><td>{{$boxscore->aq3}}</td><td>{{$boxscore->aq4}}</td><td>{{$boxscore->atotal}}</td></tr>
            <tr><td class='logo_box' ></td><td>{{$boxscore->h_initials}}</td><td>{{$boxscore->hq1}}</td><td>{{$boxscore->hq2}}</td><td>{{$boxscore->hq3}}</td><td>{{$boxscore->hq4}}</td><td>{{$boxscore->htotal}}</td></tr>

        </table>

        <table id='boxscore_away'>
            <tr style='border: 1px inset #000;'><th style='border: 1px inset #000;' colspan='19'>{{ $boxscore->afname }} <span class='digit_box_total'>{{ $boxscore->atotal }}</span></th></tr>
            <tr style='border: 1px inset #000;font-weight:800;'><td style='border: 1px inset #000;'>PLAYER</td><td style='border: 1px inset #000;'>MIN</td><td style='border: 1px inset #000;'>PTS</td><td style='border: 1px inset #000;'>FGM-A</td><td style='border: 1px inset #000;' class='hide_box_column'>3PM-A</td><td style='border: 1px inset #000;'>FTM-A</td><td style='border: 1px inset #000;' class='hide_box_column'>O-REB</td><td style='border: 1px inset #000;' class='hide_box_column'>D-REB</td><td style='border: 1px inset #000;'>REB</td><td style='border: 1px inset #000;'>AST</td><td style='border: 1px inset #000;' class='hide_box_column'>STL</td><td style='border: 1px inset #000;' class='hide_box_column'>BLK</td><td style='border: 1px inset #000;' class='hide_box_column'>TO</td><td style='border: 1px inset #000;'>PF</td><td style='border: 1px inset #000;' class='hide_this'>STARTER</td></tr>

            <tr style='border: 1px inset #000;'><td class='{{ $astart_class1 }}'> {{$boxscore->ap1_name}}</td><td class='{{ $astart_class1 }}' style='border: 1px inset #000;'>{{$boxscore->ap1_min}}</td><td class='{{ $astart_class1 }}' style='border: 1px inset #000;'>{{$boxscore->ap1_pts}}</td><td class='{{ $astart_class1 }}' style='border: 1px inset #000;'>{{ $boxscore->ap1_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class1 }} hide_box_column'>{{ $boxscore->ap1_3pma }}</td><td class='{{ $astart_class1 }}' style='border: 1px inset #000;'>{{ $boxscore->ap1_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class1 }} hide_box_column'>{{ $boxscore->ap1_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class1 }} hide_box_column'>{{ $boxscore->ap1_dreb }}</td><td class='{{ $astart_class1 }}' style='border: 1px inset #000;'>{{ $boxscore->ap1_reb }}</td><td class='{{ $astart_class1 }}' style='border: 1px inset #000;'>{{ $boxscore->ap1_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class1 }} hide_box_column'>{{ $boxscore->ap1_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class1 }} hide_box_column'>{{ $boxscore->ap1_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class1 }} hide_box_column'>{{ $boxscore->ap1_to }}</td><td class='{{ $astart_class1 }}' style='border: 1px inset #000;'>{{ $boxscore->ap1_pf }}</td></tr>
            <tr style='border: 1px inset #000;'><td class='{{ $astart_class2 }}' >{{$boxscore->ap2_name}}</td><td class='{{ $astart_class2 }}' style='border: 1px inset #000;'>{{$boxscore->ap2_min}}</td><td class='{{ $astart_class2 }}' style='border: 1px inset #000;'>{{$boxscore->ap2_pts}}</td><td class='{{ $astart_class2 }}' style='border: 1px inset #000;'>{{ $boxscore->ap2_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class2 }} hide_box_column'>{{ $boxscore->ap2_3pma }}</td><td class='{{ $astart_class2 }}' style='border: 1px inset #000;'>{{ $boxscore->ap2_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class2 }} hide_box_column'>{{ $boxscore->ap2_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class2 }} hide_box_column'>{{ $boxscore->ap2_dreb }}</td><td class='{{ $astart_class2 }}' style='border: 1px inset #000;'>{{ $boxscore->ap2_reb }}</td><td class='{{ $astart_class2 }}' style='border: 1px inset #000;'>{{ $boxscore->ap2_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class2 }} hide_box_column'>{{ $boxscore->ap2_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class2 }} hide_box_column'>{{ $boxscore->ap2_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class2 }} hide_box_column'>{{ $boxscore->ap2_to }}</td><td class='{{ $astart_class2 }}' style='border: 1px inset #000;'>{{ $boxscore->ap2_pf }}</td></tr>
            <tr style='border: 1px inset #000;'><td class='{{ $astart_class3 }}'>{{$boxscore->ap3_name}}</td><td class='{{ $astart_class3 }}' style='border: 1px inset #000;'>{{$boxscore->ap3_min}}</td><td class='{{ $astart_class3 }}' style='border: 1px inset #000;'>{{$boxscore->ap3_pts}}</td><td class='{{ $astart_class3 }}' style='border: 1px inset #000;'>{{ $boxscore->ap3_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class3 }} hide_box_column'>{{ $boxscore->ap3_3pma }}</td><td class='{{ $astart_class3 }}' style='border: 1px inset #000;'>{{ $boxscore->ap3_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class3 }} hide_box_column'>{{ $boxscore->ap3_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class3 }} hide_box_column'>{{ $boxscore->ap3_dreb }}</td><td class='{{ $astart_class3 }}' style='border: 1px inset #000;'>{{ $boxscore->ap3_reb }}</td><td class='{{ $astart_class3 }}' style='border: 1px inset #000;'>{{ $boxscore->ap3_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class3 }} hide_box_column'>{{ $boxscore->ap3_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class3 }} hide_box_column'>{{ $boxscore->ap3_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class3 }} hide_box_column'>{{ $boxscore->ap3_to }}</td><td class='{{ $astart_class3 }}' style='border: 1px inset #000;'>{{ $boxscore->ap3_pf }}</td></tr>
            <tr style='border: 1px inset #000;'><td class='{{ $astart_class4 }}'>{{$boxscore->ap4_name}}</td><td class='{{ $astart_class4 }}' style='border: 1px inset #000;'>{{$boxscore->ap4_min}}</td><td class='{{ $astart_class4 }}' style='border: 1px inset #000;'>{{$boxscore->ap4_pts}}</td><td class='{{ $astart_class4 }}' style='border: 1px inset #000;'>{{ $boxscore->ap4_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class4 }} hide_box_column'>{{ $boxscore->ap4_3pma }}</td><td class='{{ $astart_class4 }}' style='border: 1px inset #000;'>{{ $boxscore->ap4_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class4 }} hide_box_column'>{{ $boxscore->ap4_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class4 }} hide_box_column'>{{ $boxscore->ap4_dreb }}</td><td class='{{ $astart_class4 }}' style='border: 1px inset #000;'>{{ $boxscore->ap4_reb }}</td><td class='{{ $astart_class4 }}' style='border: 1px inset #000;'>{{ $boxscore->ap4_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class4 }} hide_box_column'>{{ $boxscore->ap4_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class4 }} hide_box_column'>{{ $boxscore->ap4_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class4 }} hide_box_column'>{{ $boxscore->ap4_to }}</td><td class='{{ $astart_class4 }}' style='border: 1px inset #000;'>{{ $boxscore->ap4_pf }}</td></tr>
            <tr style='border: 1px inset #000;'><td class='{{ $astart_class5 }}'>{{$boxscore->ap5_name}}</td><td class='{{ $astart_class5 }}' style='border: 1px inset #000;'>{{$boxscore->ap5_min}}</td><td class='{{ $astart_class5 }}' style='border: 1px inset #000;'>{{$boxscore->ap5_pts}}</td><td class='{{ $astart_class5 }}' style='border: 1px inset #000;'>{{ $boxscore->ap5_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class5 }} hide_box_column'>{{ $boxscore->ap5_3pma }}</td><td class='{{ $astart_class5 }}' style='border: 1px inset #000;'>{{ $boxscore->ap5_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class5 }} hide_box_column'>{{ $boxscore->ap5_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class5 }} hide_box_column'>{{ $boxscore->ap5_dreb }}</td><td class='{{ $astart_class5 }}' style='border: 1px inset #000;'>{{ $boxscore->ap5_reb }}</td><td class='{{ $astart_class5 }}' style='border: 1px inset #000;'>{{ $boxscore->ap5_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class5 }} hide_box_column'>{{ $boxscore->ap5_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class5 }} hide_box_column'>{{ $boxscore->ap5_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class5 }} hide_box_column'>{{ $boxscore->ap5_to }}</td><td class='{{ $astart_class5 }}' style='border: 1px inset #000;'>{{ $boxscore->ap5_pf }}</td></tr>
            <tr style='border: 1px inset #000;'><td class='{{ $astart_class6 }}'>{{$boxscore->ap6_name}}</td><td class='{{ $astart_class6 }}' style='border: 1px inset #000;'>{{$boxscore->ap6_min}}</td><td class='{{ $astart_class6 }}' style='border: 1px inset #000;'>{{$boxscore->ap6_pts}}</td><td class='{{ $astart_class6 }}' style='border: 1px inset #000;'>{{ $boxscore->ap6_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class6 }} hide_box_column'>{{ $boxscore->ap6_3pma }}</td><td class='{{ $astart_class6 }}' style='border: 1px inset #000;'>{{ $boxscore->ap6_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class6 }} hide_box_column'>{{ $boxscore->ap6_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class6 }} hide_box_column'>{{ $boxscore->ap6_dreb }}</td><td class='{{ $astart_class6 }}' style='border: 1px inset #000;'>{{ $boxscore->ap6_reb }}</td><td class='{{ $astart_class6 }}' style='border: 1px inset #000;'>{{ $boxscore->ap6_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class6 }} hide_box_column'>{{ $boxscore->ap6_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class6 }} hide_box_column'>{{ $boxscore->ap6_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class6 }} hide_box_column'>{{ $boxscore->ap6_to }}</td><td class='{{ $astart_class6 }}' style='border: 1px inset #000;'>{{ $boxscore->ap6_pf }}</td></tr>
            <tr style='border: 1px inset #000;'><td class='{{ $astart_class7 }}'>{{$boxscore->ap7_name}}</td><td class='{{ $astart_class7 }}' style='border: 1px inset #000;'>{{$boxscore->ap7_min}}</td><td class='{{ $astart_class7 }}' style='border: 1px inset #000;'>{{$boxscore->ap7_pts}}</td><td class='{{ $astart_class7 }}' style='border: 1px inset #000;'>{{ $boxscore->ap7_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class7 }} hide_box_column'>{{ $boxscore->ap7_3pma }}</td><td class='{{ $astart_class7 }}' style='border: 1px inset #000;'>{{ $boxscore->ap7_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class7 }} hide_box_column'>{{ $boxscore->ap7_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class7 }} hide_box_column'>{{ $boxscore->ap7_dreb }}</td><td class='{{ $astart_class7 }}' style='border: 1px inset #000;'>{{ $boxscore->ap7_reb }}</td><td class='{{ $astart_class7 }}' style='border: 1px inset #000;'>{{ $boxscore->ap7_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class7 }} hide_box_column'>{{ $boxscore->ap7_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class7 }} hide_box_column'>{{ $boxscore->ap7_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class7 }} hide_box_column'>{{ $boxscore->ap7_to }}</td><td class='{{ $astart_class7 }}' style='border: 1px inset #000;'>{{ $boxscore->ap7_pf }}</td></tr>


@if( notNullValue($boxscore->ap8_name) )

    <tr style='border: 1px inset #000;'><td class='{{ $$astart_class8 }}'>{{$boxscore->ap8_name}}</td><td class='{{ $$astart_class8 }}' style='border: 1px inset #000;'>{{$boxscore->ap8_min}}</td><td class='{{ $$astart_class8 }}' style='border: 1px inset #000;'>{{$boxscore->ap8_pts}}</td><td class='{{ $$astart_class8 }}' style='border: 1px inset #000;'>{{ $boxscore->ap8_fgma }}</td><td style='border: 1px inset #000;' class='{{ $$astart_class8 }} hide_box_column'>{{ $boxscore->ap8_3pma }}</td><td class='{{ $$astart_class8 }}' style='border: 1px inset #000;'>{{ $boxscore->ap8_ftma }}</td><td style='border: 1px inset #000;' class='{{ $$astart_class8 }} hide_box_column'>{{ $boxscore->ap8_oreb }}</td><td style='border: 1px inset #000;' class='{{ $$astart_class8 }} hide_box_column'>{{ $boxscore->ap8_dreb }}</td><td class='{{ $$astart_class8 }}' style='border: 1px inset #000;'>{{ $boxscore->ap8_reb }}</td><td class='{{ $$astart_class8 }}' style='border: 1px inset #000;'>{{ $boxscore->ap8_ast }}</td><td style='border: 1px inset #000;' class='{{ $$astart_class8 }} hide_box_column'>{{ $boxscore->ap8_stl }}</td><td style='border: 1px inset #000;' class='{{ $$astart_class8 }} hide_box_column'>{{ $boxscore->ap8_blk }}</td><td style='border: 1px inset #000;' class='{{ $$astart_class8 }} hide_box_column'>{{ $boxscore->ap8_to }}</td><td class='{{ $$astart_class8 }}' style='border: 1px inset #000;'>{{ $boxscore->ap8_pf }}</td></tr>
@else

@endif


@if( notNullValue($boxscore->ap9_name) )

    <tr style='border: 1px inset #000;'><td class='{{ $astart_class9 }}'>{{$boxscore->ap9_name}}</td><td class='{{ $astart_class9 }}' style='border: 1px inset #000;'>{{$boxscore->ap9_min}}</td><td class='{{ $astart_class9 }}' style='border: 1px inset #000;'>{{$boxscore->ap9_pts}}</td><td class='{{ $astart_class9 }}' style='border: 1px inset #000;'>{{ $boxscore->ap9_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class9 }} hide_box_column'>{{ $boxscore->ap9_3pma }}</td><td class='{{ $astart_class9 }}' style='border: 1px inset #000;'>{{ $boxscore->ap9_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class9 }} hide_box_column'>{{ $boxscore->ap9_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class9 }} hide_box_column'>{{ $boxscore->ap9_dreb }}</td><td class='{{ $astart_class9 }}' style='border: 1px inset #000;'>{{ $boxscore->ap9_reb }}</td><td class='{{ $astart_class9 }}' style='border: 1px inset #000;'>{{ $boxscore->ap9_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class9 }} hide_box_column'>{{ $boxscore->ap9_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class9 }} hide_box_column'>{{ $boxscore->ap9_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class9 }} hide_box_column'>{{ $boxscore->ap9_to }}</td><td class='{{ $astart_class9 }}' style='border: 1px inset #000;'>{{ $boxscore->ap9_pf }}</td></tr>
@else

@endif

@if( notNullValue($boxscore->ap10_name) )
    <tr style='border: 1px inset #000;'><td class='{{ $astart_class10 }}'>{{$boxscore->ap10_name}}</td><td class='{{ $astart_class10 }}' style='border: 1px inset #000;'>{{$boxscore->ap10_min}}</td><td class='{{ $astart_class10 }}' style='border: 1px inset #000;'>{{$boxscore->ap10_pts}}</td><td class='{{ $astart_class10 }}' style='border: 1px inset #000;'>{{ $boxscore->ap10_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class10 }} hide_box_column'>{{ $boxscore->ap10_3pma }}</td><td class='{{ $astart_class10 }}' style='border: 1px inset #000;'>{{ $boxscore->ap10_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class10 }} hide_box_column'>{{ $boxscore->ap10_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class10 }} hide_box_column'>{{ $boxscore->ap10_dreb }}</td><td class='{{ $astart_class10 }}' style='border: 1px inset #000;'>{{ $boxscore->ap10_reb }}</td><td class='{{ $astart_class10 }}' style='border: 1px inset #000;'>{{ $boxscore->ap10_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class10 }} hide_box_column'>{{ $boxscore->ap10_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class10 }} hide_box_column'>{{ $boxscore->ap10_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class10 }} hide_box_column'>{{ $boxscore->ap10_to }}</td><td class='{{ $astart_class10 }}' style='border: 1px inset #000;'>{{ $boxscore->ap10_pf }}</td></tr>
@else

@endif


@if( notNullValue($boxscore->ap11_name)  )

    <tr style='border: 1px inset #000;'><td class='{{ $astart_class11 }}'>{{$boxscore->ap11_name}}</td><td class='{{ $astart_class11 }}' style='border: 1px inset #000;'>{{$boxscore->ap11_min}}</td><td style='border: 1px inset #000;'>{{$boxscore->ap11_pts}}</td><td style='border: 1px inset #000;'>{{ $boxscore->ap11_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class11 }} hide_box_column'>{{ $boxscore->ap11_3pma }}</td><td class='{{ $astart_class11 }}' style='border: 1px inset #000;'>{{ $boxscore->ap11_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class11 }} hide_box_column'>{{ $boxscore->ap11_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class11 }} hide_box_column'>{{ $boxscore->ap11_dreb }}</td><td class='{{ $astart_class11 }}' style='border: 1px inset #000;'>{{ $boxscore->ap11_reb }}</td><td class='{{ $astart_class11 }}' style='border: 1px inset #000;'>{{ $boxscore->ap11_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class11 }} hide_box_column'>{{ $boxscore->ap11_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class11 }} hide_box_column'>{{ $boxscore->ap11_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class11 }} hide_box_column'>{{ $boxscore->ap11_to }}</td><td class='{{ $astart_class11 }}' style='border: 1px inset #000;'>{{ $boxscore->ap11_pf }}</td></tr>
@else

@endif

@if( notNullValue($boxscore->ap12_name)  )

    <tr style='border: 1px inset #000;'><td class='{{ $astart_class12 }}'>{{$boxscore->ap12_name}}</td><td class='{{ $astart_class12 }}' style='border: 1px inset #000;'>{{$boxscore->ap12_min}}</td><td class='{{ $astart_class12 }}' style='border: 1px inset #000;'>{{$boxscore->ap12_pts}}</td><td class='{{ $astart_class12 }}' style='border: 1px inset #000;'>{{ $boxscore->ap12_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class12 }} hide_box_column'>{{ $boxscore->ap12_3pma }}</td><td class='{{ $astart_class12 }}' style='border: 1px inset #000;'>{{ $boxscore->ap12_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class12 }} hide_box_column'>{{ $boxscore->ap12_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class12 }} hide_box_column'>{{ $boxscore->ap12_dreb }}</td><td class='{{ $astart_class12 }}' style='border: 1px inset #000;'>{{ $boxscore->ap12_reb }}</td><td class='{{ $astart_class12 }}' style='border: 1px inset #000;'>{{ $boxscore->ap12_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class12 }} hide_box_column'>{{ $boxscore->ap12_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class12 }} hide_box_column'>{{ $boxscore->ap12_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class12 }} hide_box_column'>{{ $boxscore->ap12_to }}</td><td class='{{ $astart_class12 }}' style='border: 1px inset #000;'>{{ $boxscore->ap12_pf }}</td></tr>
@else

@endif

@if( notNullValue($boxscore->ap13_name) )

    <tr style='border: 1px inset #000;'><td class='{{ $astart_class13 }}'>{{$boxscore->ap13_name}}</td><td class='{{ $astart_class13 }}' style='border: 1px inset #000;'>{{$boxscore->ap13_min}}</td><td class='{{ $astart_class13 }}' style='border: 1px inset #000;'>{{$boxscore->ap13_pts}}</td><td class='{{ $astart_class13 }}' style='border: 1px inset #000;'>{{ $boxscore->ap13_fgma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class13 }} hide_box_column'>{{ $boxscore->ap13_3pma }}</td><td class='{{ $astart_class13 }}' style='border: 1px inset #000;'>{{ $boxscore->ap13_ftma }}</td><td style='border: 1px inset #000;' class='{{ $astart_class13 }} hide_box_column'>{{ $boxscore->ap13_oreb }}</td><td style='border: 1px inset #000;' class='{{ $astart_class13 }} hide_box_column'>{{ $boxscore->ap13_dreb }}</td><td class='{{ $astart_class13 }}' style='border: 1px inset #000;' >{{ $boxscore->ap13_reb }}</td><td class='{{ $astart_class13 }}' style='border: 1px inset #000;'>{{ $boxscore->ap13_ast }}</td><td style='border: 1px inset #000;' class='{{ $astart_class13 }} hide_box_column'>{{ $boxscore->ap13_stl }}</td><td style='border: 1px inset #000;' class='{{ $astart_class13 }} hide_box_column'>{{ $boxscore->ap13_blk }}</td><td style='border: 1px inset #000;' class='{{ $astart_class13 }} hide_box_column'>{{ $boxscore->ap13_to }}</td><td class='{{ $astart_class13 }}' style='border: 1px inset #000;'>{{ $boxscore->ap13_pf }}</td><td style='border: 1px inset #000;' class='{{ $astart_class13 }} hide_this'>{{$a_starter12}}</td></tr>

@else

@endif
<tr style='border: 1px inset #000;font-weight:800;'>
  <td  style='border: 1px inset #000;' colspan='2'>{{ $boxscore->a_nick }} <br/>Totals</td><td style='border: 1px inset #000;'>{{ $boxscore->atotal }}</td><td style='border: 1px inset #000;'>{{ $boxscore->awaytfgma }}</td><td style='border: 1px inset #000;' class='hide_box_column'>{{ $boxscore->awayt3fgma }}</td><td style='border: 1px inset #000;'>{{ $boxscore->awaytftma }}</td><td style='border: 1px inset #000;' class='hide_box_column'>{{ $boxscore->awaytoreb }}</td><td style='border: 1px inset #000;' class='hide_box_column'>{{ $boxscore->awaytdreb }}</td><td style='border: 1px inset #000;'>{{ $boxscore->arebt }}</td><td style='border: 1px inset #000;'>{{ $boxscore->aastt }}</td><td style='border: 1px inset #000;' class='hide_box_column'>{{ $boxscore->astlt }}</td><td style='border: 1px inset #000;' class='hide_box_column'>{{ $boxscore->ablkt }}</td><td style='border: 1px inset #000;' class='hide_box_column'>{{away_total_to }}</td><td colspan='2' style='border: 1px inset #000;'>{{ $boxscore->awaytpf }}</td></tr>

</table>



    <p class="uk-article-lead"></p>
    <br/>
    <div class="center-block text-center">


    </div>


</article>
            </div>

        </div>

    </div>

    </div>
</div>
{{--<div class="row">--}}
    {{--<br/>--}}
{{--<div class="col-md-12 text-center">--}}
    {{--<input id="input-id" type="text" class="rating" name="starRate" data-size="md" readonly="true" value="{{$rating_avg}}" diabled="true" >--}}
    {{--<span style="text-align:center;font-family: Boogaloo, cursive; font-size:2em;"> Overall Average Article Rating: {{round($rating_avg,2)}}/5 Stars</span>--}}
    {{--*/ @ $hide_rating_form = false; /*--}}
    {{--<p>Number of Ratings: {{$rating_count}}</p>--}}

    {{--@can('loggedIn')--}}
        {{--@if( $hide_rating_form == false)--}}
            {{--<div class="alert-warning"><p class="text-center">You have already rated this article!  :D We assure you your rating has been figured into the total score!</p></div>--}}

        {{--@endif--}}
    {{--@endcan--}}
    {{--</div>--}}
{{--</div>--}}
    <br/>


    <br/>

    <h2 class="text-center" style="font-family: Pacifico, cursive;font-size:2em;line-height:1.2em;color:#E63C4D;text-align:center;">Leave a Facebook Comment!</h2>
    <div class="fb-comments center-block" data-href="https://www.bowtiesoft.com/boxscores/{{$boxscore->id}}/{{str_slug($boxscore->game_string)}}" data-numposts="10"></div>

    <br/>

<a href="{{url('boxscores')}}">

    <button type="submit" class="btn btn-primary center-block btn-md">Back to All Boxscores</button>
</a>
&nbsp;
<a href="{{url('/')}}">

    <button type="submit" class="btn btn-success center-block btn-md">Back Home</button>
</a>

</div>




@endsection

{{--<script src="{{url('/js/jquery.js')}}"></script>--}}


<script src="{{url('/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{url('/js/star-rating.js')}}"></script>
<script src="{{url('/js/owl.carousel.js')}}"></script>
<script src="{{url('/js/photoswipe.min.js')}}"></script>
<script src="{{url('/js/photoswipe-ui-default.min.js')}}"></script>
<script>

$(function(){

    // Drawing the HTML for PhotoSwipe
    function buildPswdHtml(){
        $("body").append([
            '<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">',
            '  <div class="pswp__bg"></div>',
            '  <div class="pswp__scroll-wrap">',
            '    <div class="pswp__container">',
            '      <div class="pswp__item"></div>',
            '      <div class="pswp__item"></div>',
            '      <div class="pswp__item"></div>',
            '    </div>',
            '    <div class="pswp__ui pswp__ui--hidden">',
            '      <div class="pswp__top-bar">',
            '          <div class="pswp__counter"></div>',
            '          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>',
            '          <button class="pswp__button pswp__button--share" title="Share"></button>',
            '          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>',
            '          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>',
            '          <div class="pswp__preloader">',
            '            <div class="pswp__preloader__icn">',
            '              <div class="pswp__preloader__cut">',
            '                <div class="pswp__preloader__donut"></div>',
            '              </div>',
            '            </div>',
            '          </div>',
            '      </div>',
            '      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">',
            '        <div class="pswp__share-tooltip"></div> ',
            '      </div>',
            '      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>',
            '      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>',
            '      <div class="pswp__caption">',
            '        <div class="pswp__caption__center"></div>',
            '      </div>',
            '    </div>',
            '  </div>',
            '</div>'
        ].join(""));
    }


    // From the gallery, get the items for PhotoSwipe
    function getGalleryItems($gallery){
        var items = [];

        $gallery.find("a").each(function(){
            var $anchor = $(this),
                    size = $anchor.attr("data-size").split("x"),
                    title = $anchor.attr("data-title"),
                    item = {
                        el: $anchor.get(0),
                        src: $anchor.attr("href"),
                        w: parseInt(size[0]),
                        h: parseInt(size[1])
                    };

            // caption
            if( title ) item.title = title;

            items.push(item);
        });

        return items;
    }


    //Opening the PhotoSwipe
    function openGallery($gallery, index, items, pswpOptions){
        var $pswp = $(".pswp"),
                owl = $gallery.data("owlCarousel"),
                gallery;

        //Set an option value
        var options = $.extend(true, {
            // Image number to open
            index: index,

            //Zoom setting at the time of image click
            getThumbBoundsFn: function(index){
                var $thumbnail = $(items[index].el).find("img"),
                        offset = $thumbnail.offset();
                return {
                    x: offset.left,
                    y: offset.top,
                    w: $thumbnail.outerWidth()
                };
            }
        }, pswpOptions);

        //Display the PhotoSwipe
        gallery = new PhotoSwipe($pswp.get(0), PhotoSwipeUI_Default, items, options);
        gallery.init();

        // In accordance with the switching of PhotoSwipe slide , OwlCarousel also adjusts position
        gallery.listen("beforeChange", function(x){
            owl.goTo(this.getCurrentIndex());
        });

        gallery.listen("close", function(){
            this.currItem.initialLayout = options.getThumbBoundsFn(this.getCurrentIndex());
        });
    }


    // Initialization
    function initializeGallery($elem, owlOptions, pswpOptions){

        //If the DOM for PhotoSwipe does not exist , a new drawing
        if( $(".pswp").size() === 0 ){
            buildPswdHtml();
        }

        // Scan to accommodate a plurality of gallery
        $elem.each(function(i){
            var $gallery = $(this),
                    uid = i + 1,
                    items = getGalleryItems($gallery),
                    options = $.extend(true, {}, pswpOptions);

            // Initialization of OwlCarousel
            $gallery.owlCarousel(owlOptions);

            //Assign a unique ID to each gallery
            options.galleryUID = uid;
            $gallery.attr("data-pswp-uid", uid);

            // With the click of each item , start PhotoSwipe
            $gallery.find(".owl-item").on("click", function(e){
                if( !$(e.target).is("img") ) return;

                //items pass a copy because it is rewritten to PhotoSwipe.init ()
                openGallery($gallery, $(this).index(), items.concat(), options);
                return false;
            });
        });
    }


    // In the sample to perform the processing for the `.owl-carousel`
    var owlOptions = {
        //what to mess with if you want to change the amount of slides on the page no matter what as default 3 will show up...
//                    itemsCustom: [[0, 3]],
                items: 3,
                responsiveRefreshRate: 0,
                navigation: true,
//                    pagination: true,
//                    paginationNumbers: true,
                scrollPerPage: false,
                dots: true,
                dotsEach: true
            },
            pswpOptions = {
                bgOpacity: 0.9,
                history: false,
                shareEl: true
            };

    initializeGallery($(".owl-carousel"), owlOptions, pswpOptions);

});

</script>





