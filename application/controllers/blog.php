<?php

class Blog extends Controller {

	function index()
	{
		$data['title'] = "My Blog Title";
		$data['heading'] = "My Blog Heading";
		
		$this->load->view('blog_view', $data);
	}
}

?>