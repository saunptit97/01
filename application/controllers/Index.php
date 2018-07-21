<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function pages($page = 'home'){
		if ( ! file_exists(APPPATH.'views/frontend/pages/'.$page.'.php'))
        {
            show_404();
        }
		$data['content'] = '/frontend/pages/' . $page;
		$this->load->view('frontend/index', $data);
	}

}

/* End of file Index.php */
/* Location: ./application/controllers/Index.php */