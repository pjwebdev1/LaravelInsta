@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row row-cols-1 row-cols-md-2">
		<div class="col col-md-5 d-flex justify-content-center justify-content-md-end align-items-center">
			<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" style="height: 18rem;" class="rounded-circle p-4">
		</div>
		<div class="col col-md-5 my-auto p-4">
			<div class="d-flex align-items-center">
				<div class="h1 my-auto">{{ $user->username }}</div>
				<div class="border-stop ps-3">
					<button type="button" class="btn btn-primary btn-sm">Follow</button>
				</div>
			</div>
			<div class="d-flex align-items-center">
				<div class="pe-4"><strong>XX</strong> posts</div>
				<div class="pe-4"><strong>XX</strong> posts</div>
				<div class="pe-4"><strong>XX</strong> posts</div>
			</div>
			<div class="h5 pt-3">{{ $user->profile->title }}</div>
			<div class="">{{ $user->profile->description }}</div>
			<a class="" href="https://{{ $user->profile->url }}">{{ $user->profile->url }}</a>
		</div>
	</div>

	<div class="container d-flex flex-column flex-md-row justify-content-center align-items-center">
		<div class="d-flex justify-content-center">
			<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" class="rounded-circle p-4" style="height: 18rem;">
		</div>
		<div class="p-4 col-md-6">
			<div class="d-flex align-items-center">
				<div class="h1 my-auto">{{ $user->username }}</div>
				<div class="border-stop ps-3">
					<button type="button" class="btn btn-primary btn-sm">Follow</button>
				</div>
			</div>
			<div class="d-flex align-items-center">
				<div class="pe-4"><strong>XX</strong> posts</div>
				<div class="pe-4"><strong>XX</strong> posts</div>
				<div class="pe-4"><strong>XX</strong> posts</div>
			</div>
			<div class="h5 pt-3">{{ $user->profile->title }}</div>
			<div class="">{{ $user->profile->description }}</div>
			<a class="" href="https://{{ $user->profile->url }}">{{ $user->profile->url }}</a>
		</div>
	</div>

	<div class="container pt-5">
		<div class="row row-cols-1 row-cols-md-3 g-5 g-md-5">
			<div class="col">
				<div class="p-3 border bg-light">
					<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" class="w-100">
				</div>
			</div>
			<div class="col">
				<div class="p-3 border bg-light">
					<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" class="w-100">
				</div>
			</div>
			<div class="col">
				<div class="p-3 border bg-light">
					<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" class="w-100">
				</div>
			</div>
			<div class="col">
				<div class="p-3 border bg-light">
					<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" class="w-100">
				</div>
			</div>
			<div class="col">
				<div class="p-3 border bg-light">
					<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" class="w-100">
				</div>
			</div>
			<div class="col">
				<div class="p-3 border bg-light">
					<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" class="w-100">
				</div>
			</div>
			<div class="col">
				<div class="p-3 border bg-light">
					<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" class="w-100">
				</div>
			</div>
			<div class="col">
				<div class="p-3 border bg-light">
					<img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" class="w-100">
				</div>
			</div>
		</div>
	</div>

	
</div>

@endsection