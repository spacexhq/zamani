

@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')
@section('title', '{{$title}}')

@section('content')

<section class="content"><div class="veil"></div><section style="background-image:url(temp/custom/img/fx.png
); background-position: center;background-repeat: no-repeat;background-size: cover;" class="about_fondex bg-company fc-white pt-3 pb-3">
    <div class="container"><div class="row"><div class="col-lg-8"><h1 class="text-uppercase mb-0">ETF</h1><div class="mb-3"><div class="breadc"></div><script type=application/ld+json> { "@context": "http://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type":"ListItem","position":1,"item":{"@id":"https:\/\/fondex.pro\/en\/","name":"Fusion Xpert Trade"}},{"@type":"ListItem","position":2,"item":{"@id":"https:\/\/fondex.pro\/en\/company","name":"Company"}}] }</script></div><p class="fs-20 mb-3 fw-300">Exchange-traded fund</p>












<p >An exchange-traded fund is a type of investment fund and exchange-traded product, i.e. they are traded on stock exchanges. ETFs are similar in many ways to mutual funds, except that ETFs are bought and sold throughout the day on stock exchanges while mutual funds are bought and sold based on their price at day's end.</p>


</div></div></div></section>

    
    
    
    
    
    
    
    <div style="background-image:url(temp/custom/img/mulnew_sv.jpg
); background-position: center;background-repeat: no-repeat;background-size: cover;" class="tbl"><div class="container"><div style="background-color:#f9f9f9" class="row"><div style="background-color:#14181a; color:#000" class="col-md-12 pdd"></div></div>
<script type=text/javascript> $(function() { var $dttble = $('#tt-spreads-6023e31647d95').DataTable({ "scrollY": "50vh", "scrollCollapse": true, "responsive": true, "paging": false, "ordering": false, "searching": true, "language": { "zeroRecords": "No matching records found" }, "columnDefs": [ { targets: [ 'category', 'sub_category' ], visible: false } ], "drawCallback": function( settings ) { $('.dataTables_scrollHead').css('width', '100%'); $('.dataTables_scrollHeadInner').css('width', '100%'); $('.dataTables_scrollHeadInner').find('.dataTable').css('width', '100%'); }, initComplete: function () { $('.loader').hide(); $('.pat').removeClass('loading'); $('.search-box').keyup(function() { $dttble.search( this.value ).draw(); }); let index = parseInt('1'); $('.selfi').change(function() { if (this.value === "All") { $dttble.column( index ).search( '' ).draw(); $('.subselfi option').show(); } else { $dttble.column( index ).search( this.value ).draw(); if ('undefined' !== typeof subindex) { let id = $(this).find(':selected').attr('data-id'); $('.subselfi option').hide(); $('.subselfi option[data-parent="' + id + '"]').show(); } } if ('undefined' !== typeof subindex) { $dttble.column(subindex).search('').draw(); $('.subselfi option[data-parent="all"]').show(); $('.subselfi option[data-parent="all"]').prop('selected', true); } }); } }); var tabs = $('.tabs .tab').on('click', function($event) { $event.preventDefault(); tabs.removeClass('current'); $(this).addClass('current'); var target = $(this).data('target'); $('.tabs-content .tab-content').css({ 'height': 0, 'display': 'none' }).parent().find('.' + target).css({ 'height': '100%', 'display': 'block', }); $dttble.columns.adjust().draw(); return false; }); $(window).on('load', function() { AOS.refresh(); $dttble.columns.adjust().draw(); }); $(window).on('resize', function() { setTimeout(function() { AOS.refresh(); $dttble.columns.adjust().draw(); }, 250); }); });</script>



</div></div></div></div></div></div></div>







<section style="background-color:#fff; color:#000" class="pt-4 pb-4 lowest-commission"><div class="container"><h3 class="mb-5 text-center">Trade what you want, 
When you want</h3> 




<div class="row"><div class="col-lg-6 text-center" data-aos="fade-right" data-aos-duration="1200" data-aos-anchor=".tr-cost"><img src=temp/custom/img/commission-scheme-crypt1t1.png alt="commission-scheme" class="img-responsive center-block"></div><div class="col-lg-6"><h6 class="fs-23 mb-3 mt-4"> One of the primary goals of {{$settings->site_name}} is to provide the best product in the market. Our relationships with leading tier one financial institutions mean deep liquidity and tighter spreads for Forex traders.</h6> 

<ul class="fw-400 tick-circle">
    <li><p>
Trade Forex, Indices, Shares & Commodities

</p></li>

<li><p>
 Access global markets 24 hours / 7 days</p></li>
 
 <li><p>
 
 Multilingual customer support</p></li>

<li><p>
 Trade on the go on our mobile apps</p></li></ul> 
    
    <a href="about" title="Learn About {{$settings->site_name}}" class="fc-fondex fw-500" aria-label="Learn more about commissions"> </a></div></div><div class="text-center mt-4"></div></div></section> 
@endsection










