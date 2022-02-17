<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Проекты</title>
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
				<h1>Проекты</h1>
				<p>Hi! На данной странице показаны все мои проекты.Они были разработаны с целью развития практических навыков изпользования технологий и не являются коммерческими.&#9786;</p>
				<p>Web-developing, MobileApp-developing</p>
				<div class="button_draw"><a target="_blank" href=" https://wa.me/77051039218">SEND WhatsApp</a></div>
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
				<h1>Проекты:</h1>
			</div>

			<div class="two_main_blogs">
				<div class="cloudleft"></div>
				<div class="grid_main">
					@foreach($data as $el)
						<div class="project">
							<div class="project_img" style="background-image: url({{ asset($el->img) }});"></div>
							<div><p style="text-align: center;">{{ $el->descr }}</p></div>
							<div class="container_btn_detail"><a href="{{ route('dark_one_project_page', $el->id) }}" class="btn_detail">Детальнее</a></div>
						</div>
					@endforeach
				</div>
			</div>
			
			<div class="container_cloud_bottom">
				<div class="cloudbottom"></div>
			</div>
		</div>
	</main>

	<script src="https://kit.fontawesome.com/bff7e194ea.js" crossorigin="anonymous"></script>
</body>
</html>