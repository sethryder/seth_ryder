<?php

class Blog_Controller extends Base_Controller
{
	public $restful = true;

	public function get_index()
	{
		$posts = Blog::order_by('created_at', 'desc')->paginate(5);

		return View::make('blog.index')
			->with('title', 'Index | Blog')
			->with('posts', $posts);
	}

	public function get_view($id)
	{
		$post = Blog::find($id);

		return View::make('blog.view')
			->with('title', $post->title.' | Blog')
			->with('post', $post);
	}
}