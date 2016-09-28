@extends ('layouts.master')

@section('title')
	Concurrent
@endsection

@section('content')
  <body>
  @include('_partials.header')
	
   
    <div id="home">
		<div class="slider">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="/OnePage/images/6.jpg" class="img-responsive" alt=""> 
						</div>
					   <div class="item">
							<img src="/OnePage/images/7.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="/OnePage/images/5.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
		</div>
	</div> <br/> <br/>


	<section id="convert">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2> Convert Now </h2>
					<hr>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-1">
				<div id="from">
				{!!Form::open(array('route' => 'convert', 'method' => 'POST')) !!}
				<table class="table">
					<thead>
						<th> Country </th>
						<th> Currency </th>
					</thead>
					<tr>
					<td>
						<select class="form-control" onchange="changeCurrencyFrom()" id="countryfrom" name="from">			
						@foreach($countries as $country)
							<option value="{{$country->country_name}}">{{$country->country_name}}</option>
						@endforeach
						</select>
					</td>
					
					<td>
						<select class="form-control" id="currencyfrom" onchange="changeCountryFrom()">	
					    	@foreach($countries as $country)
								<option value="{{$country->currency_code}}">{{$country->currency_code}}</option>
							@endforeach
						</select>
					</td>
					</tr>
					<tr>
						<td>
						   <input type="text" name="conv_from">
						</td>
					</tr>
				</table>
				</div>
			</div>

			<span class="glyphicon glyphicon-resize-horizontal"></span>

			<div class="col-md-4 col-md-offset-1">
				<div id="from">
				<table class="table">
					<thead>
						<th> Country </th>
						<th> Currency </th>
					</thead>
					<tr>
					<td>
						<select class="form-control" id="countryto" onchange="changeCurrencyTo()" name="to">	
					    	@foreach($countries as $country)
								<option value="{{$country->country_name}}">{{$country->country_name}}</option>
							@endforeach
						</select>
					</td>
					
					<td>
						<select class="form-control" id="currencyto" onchange="changeCountryTo()">	
					    	@foreach($countries as $country)
								<option value="{{$country->currency_code}}">{{$country->currency_code}}</option>
							@endforeach
						</select>
					</td>
					</tr>
					<tr>
						<td>
						   <!-- <textarea class="form-control" rows="5" id="comment" ></textarea> -->
						   <input type="text" name="conv_to" value="{{values}}">
						</td>
					</tr>
				</table>
				<br/>
				<input type="submit" name="convert" value="Convert">
				{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>


    <!-- Exchange Rates Script - EXCHANGERATEWIDGET.COM --><!-- 
<div style="width:198px;border:1px solid #55A516;text-align:left;"><div style="text-align:left;background-color:#55A516;width:100%;border-bottom:0px;height:16px; font-size:12px;font-weight:bold;padding:5px 0px;"><span style="margin-left:2px;background-image:url(//www.exchangeratewidget.com/flag.png); background-position: 0 -1232px; width:100%; height:15px; background-repeat:no-repeat;padding-left:5px;"><a href="https://www.exchangeratewidget.com/" style="color:#FFFFFF; text-decoration:none;padding-left:22px;" rel="nofollow">US Dollar Exchange Rates</a></span></div><script type="text/javascript" src="//www.exchangeratewidget.com/converter.php?l=en&f=USD&t=EUR,GBP,JPY,CHF,CAD,AUD,CNY,ZAR,RUB,BRL,HKD,MXN,&a=1&d=F0F0F0&n=FFFFFF&o=000000&v=5"></script></div> -->
<!-- End of Exchange Rates Script -->
   
	

   

	<section id="contact">
		<div class="contact-page">
			<div class="container">
				<div class="center">        
					<h2>Sign up to be notified</h2>						
				</div> 
				
				<div class="row contact-wrap">						
					<div class="status alert alert-success" style="display: none"></div>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
						<div class="wow fadeInDown">
							<div class="col-sm-5 col-sm-offset-1">
								<div class="form-group">
									<label>Name *</label>
									<input type="text" name="name" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Email *</label>
									<input type="email" name="email" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="number" class="form-control">
								</div>
								<div class="form-group">
									<label>Company Name</label>
									<input type="text" class="form-control">
								</div>                        
							</div>
						</div>
						<div class="wow fadeInRight">
							<div class="col-sm-5">
								<div class="form-group">
									<label>Subject *</label>
									<input type="text" name="subject" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Message *</label>
									<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
								</div>                        
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
								</div>
							</div>
						</div>
					</form> 
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/#contact-page-->		
	</section>
	<script>
			 console.log(user);

				function changeCurrencyFrom() {
					var index = document.getElementById("countryfrom").selectedIndex;
					document.getElementById("currencyfrom").selectedIndex = index;
				}

				function changeCountryFrom() {
					var index = document.getElementById("currencyfrom").selectedIndex;
					document.getElementById("countryfrom").selectedIndex = index;
				}

				function changeCurrencyTo() {
					var index = document.getElementById("countryto").selectedIndex;
					document.getElementById("currencyto").selectedIndex = index;
				}

				function changeCountryTo() {
					var index = document.getElementById("currencyto").selectedIndex;
					document.getElementById("countryto").selectedIndex = index;
				}
			</script>

	@include('_partials.footer')

	@endsection
	
	
	
	
	