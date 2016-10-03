@extends ('layouts.master')

@section('title')
	Concurrent - Home
@endsection

@section('content')
  <body>
  <div class="row">
  	<div class="col-md-4">
	  <div class="container">
		  <div class="page-header">
	  			<h1>Concurrent- <small>lets convert</small></h1>
	 	 </div>
	  </div>
	</div>
  </div>

  <div class="container" style="background-color:#F8F1FF">
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
										<select class="form-control" id="currencyfrom" onchange="changeCountryFrom()" name="curr_from">	
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
										<select class="form-control" id="currencyto" onchange="changeCountryTo()" name="curr_to">	
									    	@foreach($countries as $country)
												<option value="{{$country->currency_code}}">{{$country->currency_code}}</option>
											@endforeach
										</select>
									</td>
									</tr>
									<tr>
										<td>
										   <!-- <textarea class="form-control" rows="5" id="comment" ></textarea> -->
										   <input type="text" name="conv_to" value="{{$values}}">
										</td>
									</tr>
								</table>
								<br/>
								
								</div>
							</div>
						</div>
						<input class="btn btn-success btn-lg col-md-offset-5" type="submit" name="convert" value="Convert">
			{!!Form::close()!!}
	</div>

			<?php 	$convertedFrom = $_POST['conv_from']; ?>
					@if (count($errors) > 0)
						    <ul>
						        @foreach ($errors->all() as $error)
						            <div class="alert alert-danger">
						                <span>{{$error}}</span>
						            </div>
						     	@endforeach
						    </ul>
						@endif


	<script>

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


@endsection