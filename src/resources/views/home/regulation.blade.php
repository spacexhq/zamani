@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')
@section('title', '{{$title}}')


@section('content')





<section class="content"><div class="veil"></div><section style="background-image:url(temp/custom/img/lg.png
); background-position: center;background-repeat: no-repeat;background-size: cover;" class="about_fondex bg-company fc-white pt-3 pb-3">
    <div class="container"><div class="row"><div class="col-lg-8"><h1 class="text-uppercase mb-0">Regulation and Licensing</h1><div class="mb-3"><div class="breadc"></div><script type=application/ld+json> { "@context": "http://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type":"ListItem","position":1,"item":{"@id":"{{$settings->site_address}}","name":"{{$settings->site_name}}"}},{"@type":"ListItem","position":2,"item":{"@id":"{{$settings->site_address}}company","name":"Company"}}] }</script></div>
   
    
    
    <p >{{$settings->site_name}} with registration number 709718501 is a company registered under the Laws of Seychelles and is licensed by the Financial Services Authority (FSA) of Seychelles.</p>


<p> {{$settings->site_name}} is a tradename of {{$settings->site_name}} with registration number HE 19818009, which is registered as a Cyprus Investment Firm (CIF) and licensed by the Cyprus Securities and Exchange Commission (CySEC) in accordance with the Markets In Financial Instruments Directive (MiFID II). </p>


</div></div></div></section>







@endsection