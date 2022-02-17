@extends('layouts.app')

@section('page_title'){{ $data->title }}@endsection

@section('meta')
	@parent
	<link href="https://getbootstrap.com/docs/5.0/examples/product/product.css" rel="stylesheet">
@endsection

@section('content')
	
	<main>
	  <!-- Marketing messaging and featurettes
	  ================================================== -->
	  <!-- Wrap the rest of the page in another container to center all the content. -->
	  	<div class=" position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center shadow-lg rounded mt-5 bg-dark text-light">
		    <div class="col-md-5 p-lg-5 mx-auto my-5">
		      <h1 class="display-4 fw-normal">{{ $data->title }}</h1>
		      <i class="lead fw-normal">О проекте</i>
		      <p class="lead fw-normal">{{ $data->descr }}</p>
		      
		    </div>
		    <img src="{{ asset($data->img1) }}" class="product-device shadow-sm d-none d-md-block shadow-lg"></img>
		    <img src="{{ asset($data->img1) }}" class="product-device product-device-2 shadow-sm d-none d-md-block shadow-lg"></img>
  		</div>

  	
    	
    	<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 mt-5 bg-white pb-5">
		   <div class="bg-white me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-dark overflow-hidden rounded">
		      <div class="my-3 py-3">
		        <h2 class="display-5">Интерфейс</h2>
		        <p class="lead">{{ $data->interface }}</p>
		      </div>

		      <div class="row">
		      	<div class="col" >
		      		<img src="{{ asset($data->img2) }}" class="bg-light shadow-lg mx-auto" style="width: 80%; height: 100%; border-radius: 8%;"/>
		      	</div>

		      	<div class="col">
		      		<img src="{{ asset($data->img3) }}" class="bg-light shadow-lg mx-auto" style="width: 80%; height: 100%; border-radius: 8%;"/>
		      	</div>

		      	<div class="col">
		      		<img src="{{ asset($data->img4) }}" class="bg-light shadow-lg mx-auto" style="width: 80%; height: 100%; border-radius: 8%;"/>
		      	</div>
		      </div>
		    </div>
  		</div>
  	
  		<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 mt-2">
	    
		    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden rounded">
		      <div class="my-3 py-3">
		        <h2 class="display-5">Функциональность</h2>
		        <p class="lead">{{ $data->functions }}</p>
		      </div>
		      <img src="{{ asset($data->img5) }}" class="bg-dark  mx-auto" style="width: 80%; height: 55%; border-radius: 21px 21px 0 0;"></img>
		    </div>
		    
  		</div>

	  	<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 mt-5 bg-white pb-5">
		   <div class="bg-white me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-dark overflow-hidden rounded">
		      <div class="my-3 py-3">
		        <h2 class="display-5">GitHub <img src="{{ asset('storage/images/github.png') }}" alt="" width="4%;"></h2>
		        <a href="{{ $data->github }}">{{ $data->github }}</a>
		      </div>
		    </div>
  		</div>

	</main>


@endsection