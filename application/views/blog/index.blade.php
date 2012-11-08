@layout('layouts.default')

@section('content')
	
	<!-- posts -->
	<div id="posts">
	
		@foreach($posts->results as $post)
			<!-- single-post -->
			<div class="post">
				<p class="post-title custom">{{ $post->title }}</p>
				<p class="post-meta">Posted {{ $post->created_at }} <span>by Admin</span></p>
				<p class="post-comments custom">12</p>
				<p class="brief">{{ Truncate::text($post->content, 200) }}</p>
				<p><a href="single.html" class="more">More</a></p>
			</div>
			<!-- ENDS single-post -->
		@endforeach	
		
		<!-- blog-pager -->
		<ul class="blog-pager">
			<li><a href="#">NEWER</a></li>
			<li><a href="#">OLDER</a></li>
		</ul>
		<!-- ENDS blog-pager -->
			
			
		
	</div>
	<!-- ENDS posts -->
	
	
	
		
	
	
		<!-- sidebar -->
		<div id="sidebar">
			
			<!-- side-block -->
			<ul class="side-block">
				<li><a href="#" class="custom">Categories</a></li>
				<li><a href="#" class="custom"><span>Drawings</span></a></li>
				<li><a href="#" class="custom">Painting</a></li>
				<li><a href="#" class="custom">Logos</a></li>
				<li><a href="#" class="custom">Videos</a></li>
				<li><a href="#" class="custom">Misc</a></li>
			</ul>
			<!-- ENDS side-block -->
			
			<!-- side-block -->
			<ul class="side-block">
				<li><a href="#" class="custom">Archives</a></li>
				<li><a href="#" class="custom">2010</a></li>
				<li><a href="#" class="custom">2009</a></li>
				<li><a href="#" class="custom">2008</a></li>
				<li><a href="#" class="custom">2007</a></li>
			</ul>
			<!-- ENDS side-block -->


			<!-- side-block -->
			<ul class="side-posts">
				<li><a href="#" class="custom">Recent posts</a></li>
				<li>
					<a href="single.html"><img src="img/dummies/dummy-side-thumb.jpg" alt="Thumbnail" /></a>
					<p class="title">Lorem ipsum dolor</p>
					<p class="brief">Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. </p>
				</li>
				<li>
					<a href="single.html"><img src="img/dummies/dummy-side-thumb.jpg" alt="Thumbnail" /></a>
					<p class="title">Lorem ipsum dolor</p>
					<p class="brief">Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. </p>
				</li>
				<li>
					<a href="single.html"><img src="img/dummies/dummy-side-thumb.jpg" alt="Thumbnail" /></a>
					<p class="title">Lorem ipsum dolor</p>
					<p class="brief">Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. </p>
				</li>
				<li>
					<a href="single.html"><img src="img/dummies/dummy-side-thumb.jpg" alt="Thumbnail" /></a>
					<p class="title">Lorem ipsum dolor</p>
					<p class="brief">Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. </p>
				</li>
				
			</ul>
			<!-- ENDS side-block -->


		</div>
		<!-- ENDS sidebar -->

@endsection