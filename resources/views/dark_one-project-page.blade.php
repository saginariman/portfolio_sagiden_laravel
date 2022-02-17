<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Проект: {{ $data->title }}</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<header>
		<div class="leftBlog" style="width: 100%;">
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
				<h1>{{ $data->title }}</h1>
				<span style="font-style: italic;">О проекте</span>
				<h2>{{ $data->descr }}</h2>
				<div class="button_draw"><a target="_blank" href=" https://wa.me/77051039218" >SEND WhatsApp</a></div>
			</div>
			
			<div class="mysites" style="width: 40%;">
			</div>
		</div>
	</header>
	
	<main>
		<div class="projectsBlock">
			<div class="flexcloudup">
				<div class="cloudup"></div>
			</div>
			<div class="wordProjects">
				<h1>Интерфейс</h1>
			</div>

			<div style="text-align: center;">
				<p>{{ $data->interface }}</p>
			</div>

			<div class="two_main_blogs">
				<div class="cloudleft"></div>
				<div class="detail_project_phone_frame">
					<div>
						<img src="{{ asset($data->img2) }}" alt="">
					</div>
					<div>
						<img src="{{ asset($data->img3) }}" alt="">
					</div>
					<div>
						<img src="{{ asset($data->img4) }}" alt="">
					</div>
				</div>
			</div>
			<div class="container_cloud_bottom">
				<div class="cloudbottom"></div>
			</div>
		</div>

		<div class="projectsBlock">
			<div class="flexcloudup">
				<div class="cloudup"></div>
			</div>
			<div class="wordProjects">
				<h1>Функциональность</h1>
			</div>

			<div style="text-align: center;">
				<p>{{ $data->functions }}</p>
			</div>

			<div class="two_main_blogs">
				<div class="cloudleft"></div>
				<div class="project_detail_mac" >
					<div>
						<img src="{{ asset($data->img5) }}" alt="">
					</div>
				</div>
			</div>
			
		</div>

		<div class="projectsBlock">
			<div class="flexcloudup">
				<div class="cloudup"></div>
			</div>
			<div class="wordProjects">
				<h1>GitHub</h1>
			</div>

			<div style="text-align: center;">
				<p><a href="{{ $data->github }}" style="word-wrap: break-word;" target="_blank" style="color: #4287f5;">{{ $data->github }}</a></p>
			</div>

			<div class="two_main_blogs">
				<div class="footer_cloudleft_skills"></div>
			</div>
			<div class="container_cloud_bottom">
				<div class="cloudbottom"></div>
			</div>
		</div>
	</main>

	<script src="https://kit.fontawesome.com/bff7e194ea.js" crossorigin="anonymous"></script>

</body>
</html>
