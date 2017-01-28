<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
<<<<<<< HEAD
		$this->load->view('about');
=======
		$this->data['pagebody'] = 'about';
		$this->render();
>>>>>>> 4d69b2bdd9a9d1e53dd076d306fd31d656f4714b
	}

}
