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
        <h1 class="article-title-show" style="font-family: Pacifico, cursive;font-size:4em;line-height:1.2em;text-align:center;">{{ $boxscore->game_string }}</h1>

        {{-- */ $game_date = strtotime($boxscore->datey); $game_date=date("F d Y", $game_date); /* --}}
        <p class="subheader-main" style="text-align:center;font-family: Boogaloo, cursive; font-size:3em;">{{ $game_date}}</p>

        @if($boxscore->h_initials =='POR')
            {{-- */ $home_or_away = $boxscore->afname."<span class='box_total_h2'> ".$boxscore->atotal."</span><br/>at<br/> portland trail blazers <span class='box_total_h2'>".$boxscore->htotal."</span>" /* --}}

            @if ($boxscore->htotal > $boxscore->atotal )
                {{-- */ $win_or_loss ="<span class='win_loss_box_show_win'>W</span>" /* --}}
                @else
                {{-- */ $win_or_loss ="" /* --}}
            @endif
            @if ($boxscore->htotal < $boxscore->atotal )
                {{-- */ $win_or_loss ="<span class='win_loss_box_show_loss'>L</span>" /* --}}
            @else
                {{-- */ $win_or_loss ="" /* --}}
            @endif

{{--This is where I need to add the boxscore recap stuff.....--}}

            @endif

@if($boxscore->a_initials="POR")
            {{-- */ $home_or_away = "portland trail blazers <span class='box_total_h2'> ".$boxscore->atotal."</span><br/>at<br/> portland trail blazers <span class='box_total_h2'>".$boxscore->atotal."</span><br/>at</br> ".$boxscore->hfname. " <span class='box_total_h2'>".$boxscore->htotal."</span>"  /* --}}

            @if ($boxscore->atotal > $boxscore->htotal )
                {{-- */ $win_or_loss ="<span class='win_loss_box_show_win'>W</span>" /* --}}
                @endif

            @if ($boxscore->atotal < $boxscore->htotal )
                {{-- */ $win_or_loss ="<span class='win_loss_box_show_loss'>L</span>" /* --}}
            @endif

            {{--This is where I need to add the boxscore recap stuff.....--}}

    @endif
        <div class='box_score'><h2 class='story_h2'><span class='article_title'>{{{$home_or_away}}}</span><br/><span class='box_arena_h2'>{{$boxscore->arena}} | </span><span class='box_start_date_h2'>Insert Date</span><br/>{{$win_or_loss}}</h2>

        {{--This is where I need to add Starter stuff and DRY logic.....--}}


        {{-- */ $away_total_to =$boxscore->ap1_to.$boxscore->ap2_to.$boxscore->ap3_to.$boxscore->ap4_to.$boxscore->ap5_to.$boxscore->ap6_to.$boxscore->ap7_to.$boxscore->ap8_to.$boxscore->ap9_to.$boxscore->ap10_to.$boxscore->ap11_to.$boxscore->ap12_to.$boxscore->ap13_to /* --}}
        {{-- */ $home_total_to =$boxscore->hp1_to.$boxscore->hp2_to.$boxscore->hp3_to.$boxscore->hp4_to.$boxscore->hp5_to.$boxscore->hp6_to.$boxscore->hp7_to.$boxscore->hp8_to.$boxscore->hp9_to.$boxscore->hp10_to.$boxscore->hp11_to.$boxscore->hp12_to.$boxscore->hp13_to /* --}}





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





