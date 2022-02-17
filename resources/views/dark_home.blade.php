<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=1900, initial-scale=1"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title>Nariman</title>
	<link rel="stylesheet" href="/css/style.css">

<body>
	<header>
		<div class="leftBlog">
			<div class="flexible_blog">
				<h1>Nariman</h1>
				<nav class="dark_menu">					
					<a href="{{ route('dark_home_page') }}">Главная</a>
					<a href="{{ route('dark_my_projects_page') }}">Проекты</a>
					<a target="_blank" href="https://hh.kz/resume/04ba9e37ff08855f8f0039ed1f584442747272#key-skills">Резюме</a>
					<a href="{{ route('home_page') }}"><i class="fas fa-sun"></i></a>
				</nav>
			</div>
			<div class="aboutMe">
				<h1>Fullstack Developer</h1>
				<p>Hi. Я Нариман. И я IT developer в сферах разработки сайтов и мобильных приложений. Данный сайт являеется моим портфолио, где вы можете ознакомиться моими проектами и навыками.</p>
				<div class="button_draw"><a target="_blank" href=" https://wa.me/77051039218">SEND WhatsApp</a></div>
			</div>
			
			<div class="mysites">
				<div>
					<a href="http://f0502350.xsph.ru/" target="_blank"><i class="fas fa-blog"></i></a>
					<a href="http://f0497377.xsph.ru/" target="_blank"><i class="fas fa-user-check"></i></a>
					<a href="http://f0497377.xsph.ru/wordpress/" target="_blank"><i class="fas fa-shapes"></i></a>
					<a href="https://wa.me/77051039218" target="_blank"><i class="fab fa-whatsapp-square"></i></a>
				</div>
			</div>
		</div>
		
		<div class="rightblog">
			<div class="myimg">
			</div>
		</div>
	</header>

	<main>
		<div class="projectsBlock">
			<div class="flexcloudup">
				<div class="cloudup"></div>
			</div>
			<div class="wordProjects">
				<h1>Проекты:</h1>
			</div>

			<div class="two_main_blogs">
				<div class="cloudleft"></div>
				<div class="grid_main">
					@foreach($data as $el)
						<div class="project">
							<div class="project_img" style="background-image: url({{ asset($el->img)  }});"></div>
							<div><p style="text-align: center;">{{ $el->descr }}</p></div>
							<div class="container_btn_detail"><a href="{{ route('dark_one_project_page', $el->id) }}" class="btn_detail">Детальнее</a></div>
						</div>
					@endforeach
				</div>
			</div>

			<div class="container_btn_all_projects">
				<a class="btn_all_projects" href="{{ route('dark_my_projects_page') }}">Еще...</a>
			</div>
			<div class="container_cloud_bottom">
				<div class="cloudbottom"></div>
			</div>
		</div>

		<div class="projectsBlock">
			<div class="flexcloudup_skills">
				<div class="cloudup_skills"></div>
			</div>
			<div class="wordProjects">
				<h1>Навыки:</h1>
			</div>

			<div class="two_main_blogs">
				<div class="cloudleft_skills"></div>
				

				<div class="grid_skill">
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
					@foreach($skills as $el)
						<div class="skill" style="background-image: url({{ asset($el) }});"></div>
					@endforeach
						
				</div>
			</div>

			<div class="container_cloud_bottom_skills">
				<div class="cloudbottom_skills"></div>
			</div>
		</div>
	</main>

	<footer>
		<div class="footerBlock">
			<div class="flexcloudup_skills">
				<div class="cloudup_skills"></div>
			</div>

			<div class="two_main_blogs">
				<div class="footer_cloudleft_skills"></div>
				<p>2021</p>
			</div>

			<div class="container_cloud_bottom_skills">
				<div class="cloudbottom_skills"></div>
			</div>
		</div>
	</footer>
	<script src="https://kit.fontawesome.com/bff7e194ea.js" crossorigin="anonymous"></script>
</body>
</html>