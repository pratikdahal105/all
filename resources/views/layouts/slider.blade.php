<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<style>
    h2{
        text-align:center;
        padding: 20px;
    }
    /* Slider */

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-slider
    {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list
    {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }
    .slick-list:focus
    {
        outline: none;
    }
    .slick-list.dragging
    {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list
    {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track
    {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }
    .slick-track:before,
    .slick-track:after
    {
        display: table;
        content: '';
    }
    .slick-track:after
    {
        clear: both;
    }
    .slick-loading .slick-track
    {
        visibility: hidden;
    }

    .slick-slide
    {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }
    [dir='rtl'] .slick-slide
    {
        float: right;
    }
    .slick-slide img
    {
        display: block;
    }
    .slick-slide.slick-loading img
    {
        display: none;
    }
    .slick-slide.dragging img
    {
        pointer-events: none;
    }
    .slick-initialized .slick-slide
    {
        display: block;
    }
    .slick-loading .slick-slide
    {
        visibility: hidden;
    }
    .slick-vertical .slick-slide
    {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }
    .slick-arrow.slick-hidden {
        display: none;
    }

    .zoom-in-out-box {
        margin: 24px;
        /*width: 50px;*/
        height: 50px;
        animation: zoom-in-zoom-out 3s ease infinite;
    }
    .slide:hover{
        transform: scale(1.2, 1.2);
    }

    @keyframes zoom-in-zoom-out {
        0% {
            transform: scale(1, 1);
        }
        50% {
            transform: scale(1.5, 1.5);
        }
        100% {
            transform: scale(1, 1);
        }
    }
</style>
<div class="container">
    <h3 class="zoom-in-out-box text-center text-light">@lang('content.slider_title_footer')</h3><br>
    <section class="customer-logos slider">
        <div class="slide"><a target="_blank" href="http://allrahimmanpower.com"><img src="{{asset('images/slider/slider1.png')}}"></a></div>
        <div class="slide"><a target="_blank"  href="http://ac.prometric-jp.com/testlist/ssw/index.html"><img src="{{asset('images/slider/slider2.png')}}"></a></div>
        <div class="slide"><a target="_blank" href="https://www.dofe.gov.np/Home.aspx"><img src="{{asset('images/slider/slider3.png')}}"></a></div>
        <div class="slide"><a target="_blank" href="https://www.jitco.or.jp"><img src="{{asset('images/slider/slider4.png')}}"></a></div>
        <div class="slide"><a target="_blank" href="https://www.otit.go.jp"><img src="{{asset('images/slider/slider5.png')}}"></a></div>
        <div class="slide" style="background-color: white"><a target="_blank" href="https://www.moj.go.jp/isa/index.html"><img src="{{asset('images/slider/slider6.png')}}"></a></div>
        <div class="slide"><a target="_blank" href="https://www.mofa.go.jp/mofaj/index.html"><img src="{{asset('images/slider/slider7.png')}}"></a></div>
        <div class="slide"><a target="_blank" href="https://www.moj.go.jp/isa/about/pr/nyuukokukanri01_00182.html"><img src="{{asset('images/slider/slider8.png')}}"></a></div>
        <div class="slide"><a target="_blank" href="https://www.mhlw.go.jp/index.html"><img src="{{asset('images/slider/slider9.png')}}"></a></div>
    </section>
</div>


<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
