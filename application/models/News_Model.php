<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_news($slug = FALSE)
	{
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
	}

}

/* End of file News_Model.php */
/* Location: ./application/models/News_Model.php */