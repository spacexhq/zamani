@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')
@section('title', '{{$title}}')

@section('content')























<section class="content"><div class="veil"></div><div style="background-image:url(temp/custom/img/ct.png
); background-position: center;background-repeat: no-repeat;background-size: cover;" class="header bread-automate fc-white"><div class="container"><div class="row"><div class="col-md-12"><h1 class="head">cTRADER AUTOMATE</h1><div class="breadc"></div>

<script type=application/ld+json> { "@context": "http://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type":"ListItem","position":1,"item":{"@id":"https:\/\/fondex.pro\/en\/","name":"Fondex"}},{"@type":"ListItem","position":2,"item":{"@id":"https:\/\/fondex.pro\/en\/platforms\/fondex-ctrader-overview","name":"Fondex cTrader"}},{"@type":"ListItem","position":3,"item":{"@id":"https:\/\/fondex.pro\/en\/fondexctrader\/automate","name":"Automate"}}] }</script>

</div></div></div></div>









<div  style="background-color:#f9f9f9" class="faq"><div style="background-color:#f9f9f9"  class="container"><div class="faq-title-foot" style="color:#000">Frequently Asked Questions</div><div style="background-color:#f9f9f9" class="panel-group" id="accordion"><div class="panel panel-default"><div class="panel-heading"><div class="panel-title bd" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><a>1. How does a cBot work?</a></div></div><div id="collapse1" class="panel-collapse collapse "><div class="panel-body">A cBot analyses the indicators or the other parameters that it was programmed to use and once the predefined rules are met, it takes a particular action, such as entering, exiting or modifying a trade.</div><div class="panel-body">For example, if you are using a cBot that trades breakouts, your trade will be entered when the price breaks above a resistance or below a support level. Apart from rules for identifying trading opportunities, a cBot typically contains parameters for managing open positions such as Stop Loss/Take Profit Levels, trailing stops or other risk management features.</div></div></div><div class="panel panel-default"><div class="panel-heading"><div class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse2"><a>2. Can I convert an Expert Advisor that I am using on MT4 to a cBot that trades on{{$settings->name}} cTrader?</a></div></div><div id="collapse2" class="panel-collapse collapse"><div class="panel-body">Yes, your MQL4 indicators and Expert Advisors can be converted to C#, for use on{{$settings->name}} cTrader. Please contact a consultant from the <a target='_blank' href='../../external1ce5.html?link=https://ctdn.com/consultants/'>cTDN community,</a> who will be able to do this for you.</div></div></div><div class="panel panel-default"><div class="panel-heading"><div class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse3"><a>3. Based on which criteria should I select a cBot?</a></div></div><div id="collapse3" class="panel-collapse collapse"><div class="panel-body">There is no best way to select a cBot, but it’s advisable to do your research first. When you are downloading a cBot from cTDN, you can get a good idea about how it works by viewing the developer’s description which includes characteristics and tips about its usage.</div><div class="panel-body">Traders usually select a bot that suits their trading style, so if for example, you prefer trading with Fibonacci ratios, you may choose a Fibonacci cBot, and if you are into news trading, you may choose a cBot that trades when there’s an important economic release.</div><div class="panel-body">In cTDN, you can also rank cBots according to popularity and user rating, so this could be another deciding factor, especially if you are a beginner.</div></div></div><div class="panel panel-default"><div class="panel-heading"><div class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse4"><a>4. I downloaded a cBot and I want to know if it’s set to run correctly when the market meets the predefined rules. How can I know that?</a></div></div><div id="collapse4" class="panel-collapse collapse"><div class="panel-body">Once you download the cBot file, you will have to run and install it on your computer. You should then be able to view it on{{$settings->name}} cTrader, at the left side of your chart under the cBots column. Once you define which instrument you&#039;d like to run it for, click the “Play” button. The cBot will start working when the right conditions are met. Please note that you can stop it anytime, just by clicking the “Stop” button.</div></div></div><div class="panel panel-default"><div class="panel-heading"><div class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse5"><a>5. Can I run multiple cBots at the same time?</a></div></div><div id="collapse5" class="panel-collapse collapse"><div class="panel-body">Yes, you can run multiple cBots at the same time and for the same instrument. </div></div></div><div class="panel panel-default"><div class="panel-heading"><div class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse6"><a>6. Can I create my own cBot?</a></div></div><div id="collapse6" class="panel-collapse collapse"><div class="panel-body">If you have a specific trading strategy that you follow and has been proven effective, then it might be a good idea to automate it. It’s important that your strategy is simple enough and that you are clear about the set of rules that your bot is going to be built on.</div><div class="panel-body">If you have no coding experience yourself, you may opt to hire a developer from the <a target='_blank' href='../../external1ce5.html?link=https://ctdn.com/consultants/'>cTDN community</a>. Please post your request at the forum or contact one of the expert consultants.</div></div></div><div class="panel panel-default"><div class="panel-heading"><div class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse7"><a>7. What types of custom indicators are available to download from cTDN?</a></div></div><div id="collapse7" class="panel-collapse collapse"><div class="panel-body">Trend indicators that are smoothened or combined versions of the standard version, such as MACD, RSI, Heiken Ashi, Ichimoku and more.</div><div class="panel-body">Adjusted formulas of standard Volatility indicators such as Bollinger Bands, Donchian channels, Keltner channels, Average True Range etc.</div><div class="panel-body">Multiple other custom indicators that are based on Support &amp; Resistance, Pivot Points, Harmonics, Polynomial Regression, Fibonacci etc. </div></div></div><div class="panel panel-default"><div class="panel-heading"><div class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse8"><a>8. How can I start trading with a live account?</a></div></div><div id="collapse8" class="panel-collapse collapse"><div class="panel-body">Your live trading account can be up and running in less than 2 minutes. Please follow the steps below:</div><ul><li>Step 1. Create Account.</li><li>Step 2. Fill in your email, password and phone number.</li><li>Step 3. Launch the platform and fund your account to start trading!</li></ul></div></div></div></div></div></div></div></section>









<section style="background-color:#030c20; color:#fff" class="pt-4 pb-4 lowest-commission"><div class="container">



<div class="row"><div class="col-lg-6 text-center" data-aos="fade-right" data-aos-duration="1200" data-aos-anchor=".tr-cost"><img src=temp/custom/img/commission-scheme-crypt1t.png alt="commission-scheme"  class="img-responsive center-block"></div><div class="col-lg-6">
    
    <h2 class="fs-23 mb-3 mt-4"> 

STAY UP TO DATE <br>WITH OUR EXPERTS!


</h2> 

<ul class="fw-400 tick-circle">
    <p>
Our local and international teams are here to support you on a 24/5 basis in more than 20 languages, while our wide range of payment methods gives you greater flexibility when it comes to deposits and withdrawals.

</p>

</ul> 


 <h2 class="fs-23 mb-3 mt-4"> 

<br>Experience More Than Trading


</h2> 

<ul class="fw-400 tick-circle">
    <p>
Our success is centred around a number of core values. They include providing competitive brokerage fees through tight spreads, ensuring lightning-fast execution, access to advanced trading platforms with a wide range of products, and exceptional customer service.

</p>

</ul> 

    
    <a href="about" title="Learn About{{$settings->name}} Commissions" class="fc-fondex fw-500" aria-label="Learn more about commissions"> </a></div></div><div class="text-center mt-4"></div></div></section> 

















@endsection