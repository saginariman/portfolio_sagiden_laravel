@extends('layouts.app')

@section('page_title')Главная@endsection

@section('content')
	
	<main>
	  <!-- Marketing messaging and featurettes
	  ================================================== -->
	  <!-- Wrap the rest of the page in another container to center all the content. -->

	  	<div class="container marketing">

		    <!-- Three columns of text below the carousel -->
		    <div class="row shadow-lg p-3 contBg rounded" >
		      <div class="col-lg-4"></div><!-- /.col-lg-4 -->
		      
		      <div class="col-lg-4 border border-secondary pt-3 cardProfil rounded">
		        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
		        	<title>Placeholder</title>
		        	<rect width="100%" height="100%" fill="#777"></rect>
		        	<text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
		        </svg> -->
		        <img  src="{{ asset('storage/images/nari.jpg') }} " width="140" height="140" class="rounded-circle shadow-lg border border-dark" alt="фото" title="фото">
		        <h2>Narıman</h2>
		        <p>Hi! It's my website. Данный сайт был проектирован с целью развития практических навыков использования php фреймворка Laravel. Знакомы данной технологией? Советую изучить Laravel. Пишите на WhatsApp.</p>
		        <p><a class="btn btn-dark shadow-lg btn-outline-warning" target="_blank" href=" https://wa.me/77051039218" >Написать WhatsApp</a></p>
		      </div><!-- /.col-lg-4 -->
		      
		      <div class="col-lg-4"></div><!-- /.col-lg-4 -->
		    </div><!-- /.row -->

		   <div class=" row p-3 mt-5 shadow-lg contBg rounded">
				<center  class="border border-dark shadow mt-2 rounded">
					<h1>Проекты</h1>
				</center><br>
			   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		        @foreach($data as $el)
			        	<div class="col rounded">
			          <div class="card ">
			            
			            <img class="rounded-top"src="{{ asset($el->img) }}" width="100%" height="225" alt="">
			            <div class="card-body">
			              <p class="card-text">{{ $el->descr }}</p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <a href="{{ route('one_project_page', $el->id) }}">
			                  	<button type="button" class="btn btn-dark text-light btn-outline-warning shadow-lg">Детальнее...</button>
			                  </a>
			                </div>
			                <small class="text-danger">&#60;&#8260;&#62; {{ $el->lang }}</small>
			              </div>
			            </div>
			          </div>
			        	</div>
		        @endforeach
	      	</div><br>
	      	<div class="container mt-3 text-center">
	      		<a  style="width: 35%;" href="{{ route('my_projects_page') }}" class="btn btn-lg  text-light btn-dark btn-outline-warning shadow  rounded text-center">Еще...</a>
	      	</div>
	      	<br>
		   </div>


		   @php
			   $skills = array(
			   	'storage/images/html5.png',
			   	'storage/images/css.png',
			   	'storage/images/js.png',
			   	'storage/images/jquery.png',
			   	'storage/images/ajax.png',
			   	'storage/images/bootstrap.png',
			   	'storage/images/php.png',
			   	'storage/images/mysql.png',
			   	'storage/images/laravel.png',
			   	'storage/images/python.png',
			   	'storage/images/django.png',
			   	'storage/images/wordpress.png',
			   	'storage/images/git.png',
			   	'storage/images/java.png',
			   	'storage/images/android.png',
			   	'storage/images/kotlin.png',
			   	'storage/images/xml.png',
			   	'storage/images/firebase.png',
			   	'storage/images/dart.png',
			   	'storage/images/flutter.png',
			   	'storage/images/csharp.png',
			   	'storage/images/cplus.png',
			   );
			@endphp

		   <div class="row p-3 mt-5 shadow-lg contBg rounded ">
		   	<center  class="border border-dark shadow mt-2 rounded">
					<h1>Навыки</h1>
				</center><br>
				<div class="container-fuild mt-5">
					<div class="row row-cols-3 row-cols-sm-4 row-cols-md-5 g-5 " >
						@foreach($skills as $el)
							<div class="col">
								<img  src="{{ asset($el) }} " width="100%" height="100%" alt="фото" title="фото">
							</div>
						@endforeach
					</div>
				</div>
		   </div>
    	</div>
	</main>

	

@endsection