<?php

class Blog_Controller extends Base_Controller
{
	public $restful = true;

	public function get_index()
	{
		$posts = Blog::order_by('created_at', 'desc')->paginate(5);

		return View::make('blog.index')
			->with('title', 'Index | Blog')
			->with('posts', $posts)
			->with('categories', Category::get());
	}

	public function get_view($id)
	{
		$post = Blog::find($id);

		return View::make('blog.view')
			->with('title', $post->title.' | Blog')
			->with('post', $post);
	}

	public function post_comment()
	{
		$rules = array(
    		'name'  => 'required|max:50',
    		'email' => 'email|unique:users',
    		'comment' => 'required|max:1000',
		);

		$input = Input::all();

		$validation = Validator::make($input, $rules);

		if ($validation->fails()) {
			$success = false;
			return $validation->errors();
		} else {
			$result = Comment::create($input);
			$success = true;
		}


	}
}