@extends('layouts.base')

@section('title', 'Contact us')

@inject('content', 'App\Http\Controllers\FrontController')
@section('content')


<section style="background-color:#000; color:#fff" class="content"><div class="veil"></div><div style="background-image:url(temp/custom/img/conn.png
); background-position: center;background-repeat: no-repeat;background-size: cover;" class="header bread-company"><div class="container"><div class="row"><div class="col-md-12"><h1 class="head">CONTACT US</h1><div class="breadc"></div>


<script type=application/ld+json> { "@context": "http://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type":"ListItem","position":1,"item":{"@id":"{{$settings->site_addresss}}","name":"{{$settings->site_name}}"}},{"@type":"ListItem","position":2,"item":{"@id":"{{$settings->site_address}}","name":"Company"}},{"@type":"ListItem","position":3,"item":{"@id":"{{$settings->site_address}}/contacts","name":"Contact Us"}}] }</script>

</div></div></div></div> 



<div style="background-color:#000; color:#fff" class="container"><br/><div class="cont"><div class="row"><div class="col-lg-12"><div class="rami"> <center>


<h3>Multilingual Customer Support</h3><p>If you have any questions, our team is eager to assist you. Please choose the contact method that suits you best.</p><br/> <center></div><div class="row">



<br/>
<div class="row"><div class="col-md-12"><div class="social-bx"></div></div></div>



<br/>





<div class="container abt-p-txt">
          <div class="row">
            <div class="col-md-8 col-sm-12">

              <form method="post" enctype="text/plain" >

                <div>
                  <select class="form-control" id="select" name="question">
                <option value=" Trading Question">Trading Question</option>
                <option value=" Finance Question">Finance Question</option>
                <option value=" Technical Question">Technical Question</option>
              </select>
                </div>
                <br>
                <div class="row">
                   <div class="form-group col-md-6 col-sm-12">
                  <input type="text" class="form-control" id="name" placeholder="  Name" name="name" required="">
                </div>

                <div class="form-group col-md-6 col-sm-12">
                  <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="  Email" name="email" required="">
                </div>
                </div>  
           

            <div class="form-group col-md-12 col-sm-12">
              <textarea class="form-control" placeholder="Message" name="message" required=""></textarea>
            </div>
           <center>
               
               
               <a href="mailto:{{$settings->contact_email}}">
                    <input type="" style="background-color:green; color:#fff" class="btn btn-info" value="Submit" name="submit" readonly/></a>
          </center><br/><br/><br/>
          </form>

                          
            </div>
            <!-- end col -->
            <div class="col-md-4">
              <div class="col col-contact-side">
               <i class="fa fa-2x fa-home icn" aria-hidden="true"></i>
                 <b> ADDRESS: </b>
                 <p>11 GRACE AVENUE, STE 108, GREAT NECK, NEW YORK, 11021 USA</p>
                 
                 
              </div>
              
              
              <div class="col-md-4">
              <div class="col col-contact-side">
               <i class="fa fa-2x fa-phone icn" aria-hidden="true"></i>
                 <b> PHONE: </b>
                 <p> 7027064466</p>
                 
                 
              </div>

              <!-- ===== -->

 
             
              
              <div class="col col-contact-side">
                <i class="fa fa-2x fa-envelope icn" aria-hidden="true"></i>
                 <b> EMAIL ADDRESS: </b>
                 <p class="green"><a href="mailto:{{$settings->emailfrom}}"><span>{{$settings->emailfrom}}</span></a><br>
                 <a href="mailto:{{$settings->contact_email}}"><span>{{$settings->contact_email}}</span></a><br/><br/><br/>
                 </p>
              </div>
              
            </div>
            
          </div>
            
          </div>










 






</div></div></div></div> 





<div class="col-lg-4"><div class="row"><div class="col-md-12"> </div></div></div></div></div></div><script src=../www.google.com/recaptcha/apib3d3.html></script><script> var $sendContactUsEmailForm = $('#contact-form'); $sendContactUsEmailForm.validate({ rules: { fname: { required: true, }, email: { email: true, required: true, }, phone: { required: true, }, message: { required: true, }, }, messages: { fname: 'Please enter your full name.', email: 'Please enter a valid email address.', phone: 'Please enter a valid phone number.', message: 'Please enter your message.', }, errorElement: 'span', errorClass: 'help-block', errorPlacement: function(error, element) { $(element).closest('.form-group').append(error); }, highlight: function(element) { $(element). addClass('has-error'). removeClass('is-valid'). closest('.form-group'). removeClass('is-valid'). addClass('has-error'); }, unhighlight: function(element) { $(element). addClass('is-valid'). removeClass('has-error'). closest('.form-group'). removeClass('has-error'). addClass('is-valid'). find('.help-block'). remove(); }, submitHandler: function(form) { let d = {}; $(form).serializeArray().forEach(function(el) { d[el.name] = el.value; }); let siteToken = '6Leur7cZAAAAAHRuPhkZ2wFPXMJ4wSD41iin9nGJ'; grecaptcha.ready(function() { grecaptcha.execute(siteToken, {action: 'submit'}).then(function(token) { d['token'] = token; $('.zmdi-spinner').addClass('spinning'); /*$.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });*/ $.ajax({ method: 'POST', url: '/api/contact-us', data: d, }).done(function(resp) { $('.zmdi-spinner').removeClass('spinning'); if (resp.result) { $('.contact-form--success').addClass('succeed'); } }); }); }); }, }); </script>


</section>






@endsection