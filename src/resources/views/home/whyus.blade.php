
@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')
@section('title', '{{$title}}')


@section('content')


<section class="content"><div class="veil"></div><div style="background-image:url(temp/custom/img/abt.png
); background-position: center;background-repeat: no-repeat;background-size: cover;" class="header bread-benefit fc-white"><div class="container"><div class="row"><div class="col-md-12"><h1 class="head"> Why Us</h1><div class="breadc"></div>


<script type=application/ld+json> { "@context": "http://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type":"ListItem","position":1,"item":{"@id":"{{$settings->site_address}}","name":"{{$settings->site_address}}"}},{"@type":"ListItem","position":2,"item":{"@id":"{{$settings->site_address}}","name":"Company"}},{"@type":"ListItem","position":3,"item":{"@id":"{{$settings->site_address}}\/why-us","name":"Why Us"}}] }</script>

</div></div></div></div>




<div style="background-color:#fff; color:#000" class="pt-3"><div class="container"><h2 class="text-size-h3 text-center mb-5"></h2><div class="row "><div class="col-lg-3 col-md-6"><div class="mb-3"><div class="spriteset-trade spriteset-trade-1 m-auto"></div><div class="text-center"><h3 class="fw-700 fsi-15 mb-3 mt-2">Reliable</h3><p class="m-0">Featuring the market&#039;s sharpest execution, {{$settings->site_name}}cTrader fills your orders in milliseconds without any requotes or price manipulation.</p></div></div></div><div class="col-lg-3 col-md-6"><div class="mb-3"><div class="spriteset-trade spriteset-trade-2 m-auto"></div><div class="text-center"><h3 class="fw-700 fsi-15 mb-3 mt-2">Intelligent</h3><p class="m-0">Make informed decisions with smart market analysis tools, Live Sentiment data and in-platform market insights from Trading Central.</p></div></div></div><div class="visible-md clearfix"></div><div class="col-lg-3 col-md-6"><div class="mb-3"><div class="spriteset-trade spriteset-trade-3 m-auto"></div><div class="text-center"><h3 class="fw-700 fsi-15 mb-3 mt-2">Transparent</h3><p class="m-0">Access transaction statistics, equity charts and detailed history of your deals for a crystal clear understanding of your performance.</p></div></div></div><div class="col-lg-3 col-md-6"><div class="mb-3"><div class="spriteset-trade spriteset-trade-4 m-auto"></div><div class="text-center"><h3 class="fw-700 fsi-15 mb-3 mt-2">Intuitive</h3><p class="m-0">Easy to use and navigate, {{$settings->site_name}} Trader was built with real traders&#039; needs in mind. Trade with {{$settings->site_name}}cTrader and experience its distinct advantage.</p></div></div></div></div></div></div>







<section style="background-color:#030c20; color:#fff" class="pt-4 pb-4 lowest-commission"><div class="container"><h3 class="mb-5 text-center">{{$settings->site_name}},One of the World’s Most Trusted Brands</h3> 




<div class="row"><div class="col-lg-6 text-center" data-aos="fade-right" data-aos-duration="1200" data-aos-anchor=".tr-cost"><img src=temp/custom/img/commission-scheme-crypt1d.png alt="commission-scheme" class="img-responsive center-block"><p class="m-0 fs-11"></p></div><div class="col-lg-6">

<br><br>
<ul class="fw-400 tick-circle">
    <li><p> Globally Regulated
</p></li>

<li><p> 40+ International Awards
</p></li>

<li><p> 24/7^ Multilingual Customer Support
</p></li>

<li><p> Segregated Client Funds
</p></li>


<li><p> Personal Account Managers
</p></li>

<li><p> Consistently Tighter Spreads**
</p></li>

</ul> 
    
    <a href="trading-conditions" title="Learn About {{$settings->site_name}}" class="fc-fondex fw-500" aria-label="Learn more about commissions"> </a></div></div><div class="text-center mt-4"></div></div></section>






<script> $('.panel-collapse').on('show.bs.collapse', function () { $(this).siblings('.panel-heading').addClass('active'); }); $('.panel-collapse').on('hide.bs.collapse', function () { $(this).siblings('.panel-heading').removeClass('active'); }); //Collapse on mobile for platfroms $(window).resize(function() { if ($(window).width() < 550) { $('.platform-heading').removeClass('active'); $('.platform-collapse').removeClass('in'); } else { $('.platform-heading').addClass('active'); $('.platform-collapse').addClass('in'); } }); $(window).width(function() { if ($(window).width() < 550) { $('.platform-heading').removeClass('active'); $('.platform-collapse').removeClass('in'); } else { $('.platform-heading').addClass('active'); $('.platform-collapse').addClass('in'); } }); var mq = window.matchMedia( "(min-width: 767px)" ); </script>
</section> 



@endsection