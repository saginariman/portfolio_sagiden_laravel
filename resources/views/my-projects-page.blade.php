@extends('layouts.app')

@section('page_title')Проекты@endsection

@section('content')
	
	<main>
	  <!-- Marketing messaging and featurettes
	  ================================================== -->
	  <!-- Wrap the rest of the page in another container to center all the content. -->

	  	<div class="container marketing">

		   <div class="projectsBlock row p-3 mt-5 shadow-lg contBg">

		   	<div class="p-4 p-md-mt-5 mb-4 text-white rounded bg-dark shadow">
				    	<div class="col-md-6 px-0">
					      <h1 class="display-4 font-italic">Hi! На данной странице показаны все мои проекты. </h1>
					      <p class="lead my-3">Они были разработаны с целью развития практических навыков изпользования технологий и не являются коммерческими.&#9786;</p>
					      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Web-developing,</a> <a href="#" class="text-white fw-bold">MobileApp-developing</a></p>
					   </div>
  				</div>
		   	
		   	<center  class="border shadow mt-5"><h1>Проекты</h1></center><br>

			   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		        @foreach($data as $el)
			        	<div class="col">
			          <div class="card">
			            
			            <img src="{{ asset($el->img) }}" width="100%" height="225" alt="">
			            <div class="card-body">
			              <p class="card-text">{{ $el->descr }}</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <a href="{{ route('one_project_page', $el->id) }}">
			                  	<button type="button" class="btn btn-dark text-light shadow-lg">Детальнее...</button>
			                  </a>
			                
			                </div>
			                <small class="text-danger">&#60;&#8260;&#62; {{ $el->lang }}</small>
			              </div>
			            </div>
			          </div>
			        	</div>
		        @endforeach
	      	</div>
		   </div>
    	</div>
	</main>


@endsection