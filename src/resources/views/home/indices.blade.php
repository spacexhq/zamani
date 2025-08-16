@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')
@section('title', '{{$title}}')


@section('content')









<section class="content"><div class="veil"></div><section style="background-image:url(temp/custom/img/fx.png
); background-position: center;background-repeat: no-repeat;background-size: cover;" class="about_fondex bg-company fc-white pt-3 pb-3">
    <div class="container"><div class="row"><div class="col-lg-8"><h1 class="text-uppercase mb-0">Indices</h1><div class="mb-3"><div class="breadc"></div><script type=application/ld+json> { "@context": "http://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type":"ListItem","position":1,"item":{"@id":"https:\/\/fondex.pro\/en\/","name":"Fusion Xpert Trade"}},{"@type":"ListItem","position":2,"item":{"@id":"https:\/\/fondex.pro\/en\/company","name":"Company"}}] }</script></div><p class="fs-20 mb-3 fw-300"></p>












<p >See the complete list of world stock indexes with points and percentage change, volume, intraday highs and lows, 52 week range, and day charts.</p>


</div></div></div></section>

    
    


<div style="background-image:url(temp/custom/img/mt_new_sv.jpg
); background-position: center;background-repeat: no-repeat;background-size: cover;" class="tbl"><div class="container"><div style="background-color:#f9f9f9" class="row"><div style="background-color:#14181a; color:#000" class="col-md-12 pdd"><div class="text-size-h3 tbl-title">Indices - Spreads &amp; Trading Conditions</div><div class="pat loading"><div class="loader"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div><div class="container"><div class="row"><div class="form-group col-md-5 col-sm-12 col-xs-12 pull-right page_speed_345869579"><label class="control-label sr-only">Search all instruments</label><input type=text placeholder="Search all instruments"  class="form-control search-box page_speed_69277137"><span class="sr-only">(success)</span></div></div><div class="row"><table id="tt-spreads-6023e311aa22a" class="display no-wrap tbl-spreads page_speed_667936361"><thead class="page_speed_667936361"><tr><th data-key="Symbol" class="symbol">Symbol</th><th data-key="Leverage" class="leverage">Leverage</th><th data-key="Lot Size" class="lot_size">Lot Size</th><th data-key="Min Lot Size" class="min_lot_size">Min Lot Size</th><th data-key="Commission" class="commission">Commission</th></tr></thead><tbody><tr><td class="symbol"><a title="AUSTRALIA 200" href=""> AUSTRALIA 200 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="EUROPE 50" href=""> EUROPE 50 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="FRANCE 40" href=" "> FRANCE 40 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="GERMANY 30" href=""> GERMANY 30 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="HONG KONG 50" href=""> HONG KONG 50 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="ITALY 40" href=""> ITALY 40 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="JAPAN 225" href="#"> JAPAN 225 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="NETHERLANDS 25" href="#"> NETHERLANDS 25 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">1</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="SPAIN 35" href="#"> SPAIN 35 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="SWITZERLAND 20" href="#"> SWITZERLAND 20 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="UK 100" href="#"> UK 100 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="US 30" href="#"> US 30 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="US 500" href="#"> US 500 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr><tr><td class="symbol"><a title="US TECH 100" > US TECH 100 </a></td><td class="symbol">1:200</td><td class="leverage">1 * index price</td><td class="lot_size">0.01</td><td class="min_lot_size">0</td></tr></tbody></table></div></div></div>


<script type=text/javascript> $(function() { var $dttble = $('#tt-spreads-6023e311aa22a').DataTable({ "scrollY": "50vh", "scrollCollapse": true, "responsive": true, "paging": false, "ordering": false, "searching": true, "language": { "zeroRecords": "No matching records found" }, "columnDefs": [ { targets: [ 'category', 'sub_category' ], visible: false } ], "drawCallback": function( settings ) { $('.dataTables_scrollHead').css('width', '100%'); $('.dataTables_scrollHeadInner').css('width', '100%'); $('.dataTables_scrollHeadInner').find('.dataTable').css('width', '100%'); }, initComplete: function () { $('.loader').hide(); $('.pat').removeClass('loading'); $('.search-box').keyup(function() { $dttble.search( this.value ).draw(); }); } }); var tabs = $('.tabs .tab').on('click', function($event) { $event.preventDefault(); tabs.removeClass('current'); $(this).addClass('current'); var target = $(this).data('target'); $('.tabs-content .tab-content').css({ 'height': 0, 'display': 'none' }).parent().find('.' + target).css({ 'height': '100%', 'display': 'block', }); $dttble.columns.adjust().draw(); return false; }); $(window).on('load', function() { AOS.refresh(); $dttble.columns.adjust().draw(); }); $(window).on('resize', function() { setTimeout(function() { AOS.refresh(); $dttble.columns.adjust().draw(); }, 250); }); });</script>




</div></div></div></div></div></div></div>



<script> $('.panel-collapse').on('show.bs.collapse', function() { $(this).siblings('.panel-heading').addClass('active'); }); $('.panel-collapse').on('hide.bs.collapse', function() { $(this).siblings('.panel-heading').removeClass('active'); }); </script></section>










<section style="background-color:#fff; color:#000" class="pt-4 pb-4 lowest-commission"><div class="container"><h3 class="mb-5 text-center">Trade what you want, 
When you want</h3> 




<div class="row"><div class="col-lg-6 text-center" data-aos="fade-right" data-aos-duration="1200" data-aos-anchor=".tr-cost"><img src=temp/custom/img/commission-scheme-crypt1t1.png alt="commission-scheme" class="img-responsive center-block"></div><div class="col-lg-6"><h6 class="fs-23 mb-3 mt-4"> One of the primary goals of Fusion Xpert Trade is to provide the best product in the market. Our relationships with leading tier one financial institutions mean deep liquidity and tighter spreads for Forex traders.</h6> 

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
    
    <a href="trading-conditions" title="Learn About Fusion Xpert Trade Commissions" class="fc-fondex fw-500" aria-label="Learn more about commissions"> </a></div></div><div class="text-center mt-4"></div></div></section> 





























@endsection