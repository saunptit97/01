<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                echo "NEW";
                $data['news'] = $this->news_model->get_news();
        } public function test()
        {
                echo "NEW";
                $data['news'] = $this->news_model->get_news();
                $data = $this->news_model->get_news();
                foreach ($data as $value) {
                        print_r( $value['title']);
                }
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);
        }
}