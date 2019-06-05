<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public  function __construct()
	  {	 parent::__construct();
	    $this->load->model('user_model') ;
	    
		 $this->lang->load('info','am');
		 $this->load->config('email');
         $this->load->library('email');
	 }
	public function index()
	{
		
	   redirect(base_url('pages/home'));

	}
	public function load_view($page, $data=""){
		$this->load->view('templates/header');
		$this->load->view($page, $data);
		$this->load->view('templates/footer');
	}
	public function home(){
		$data['slider']              = $this->user_model->get_result('slider1');
		$data['home_info']           = $this->user_model->get_result('home_info');
		$data['home_image']          = $this->user_model->get_result_page_id('pages_images',1);
		$data['princip_title_image'] = $this->user_model->get_result('princip_title_image');
		$data['principles']          = $this->user_model->get_result('principles');
		$data['clients_title']       = $this->user_model->get_result('clients_title');
		$data['clients']             = $this->user_model->get_result('clients');
		$data['comments']            = $this->user_model->get_result('comments');

		$this->load_view('home',$data);
	
	}

	public function about_us(){
		$data['general_image']        = $this->user_model->get_result_id('general_image',2);
		$data['general_title']        = $this->user_model->get_result_id('general_titles', $data['general_image'][0]['id']);
		$data['about_image']          = $this->user_model->get_result_page_id('pages_images',$data['general_image'][0]['id']);
		$data['text_info']            = $this->user_model->get_result_page_id('text_info',$data['general_image'][0]['id']);
		$data['counters']             = $this->user_model->get_result('counter_numbers');
		$data['about_subtitles']      = $this->user_model->get_result('about_subtitles');
		$data['work_princip']         = $this->user_model->get_result('work_princip');
		$data['product_slide']        = $this->user_model->get_result('lori_mozzarella_image_slide');
		$data['product_process_desc'] = $this->user_model->get_result('product_process_desc');
		$data['images']               = $this->user_model->get_result('images');
		$this->load_view('about_us' ,$data);
	
	}

    public function our_product(){
   	    $data['general_image']        = $this->user_model->get_result_id('general_image',3);
		$data['general_title']        = $this->user_model->get_result_id('general_titles', $data['general_image'][0]['id']);
		$data['text_info']            = $this->user_model->get_result_page_id('text_info',$data['general_image'][0]['id']);
		$data['product']              = $this->user_model->get_result('product');
		$this->load_view('our_product', $data);
	
	}
	public function delivery(){
		$data['general_delivery_image']        = $this->user_model->get_result('general_delivery_image');
		$data['general_title']                 = $this->user_model->get_result_id('general_titles', 4);
		$data['text_info']                     = $this->user_model->get_result_page_id('text_info',4);
		$data['product']                       = $this->user_model->get_result('product');
		$data['delivery_map_info']             = $this->user_model->get_result('delivery_map_info');
		$this->load_view('delivery', $data);

	}
	public function about_principes($index){
		// $this->load_view('about_us?read_more=1');
		redirect(base_url('pages/about_us?read_more='.$index));
	}
	public function send_mail(){
		

			
	        $from    = $this->input->post('email');
	        $to      = $this->config->item('smtp_user');
			$name    = $this->input->post('name');
			$phone   = $this->input->post('phone');
	        $message = $this->input->post('message');


		    $this->email->set_newline("\r\n");
		    $this->email->from($from);
		    $this->email->to($to);
		    $this->email->message('My Name is  '."<b>$name</b>".". <br>".'My Phone number is   '."<b>$phone</b>".". <br>".'This is my message  '."<b>$message</b>");

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
        redirect(base_url('pages/home'));
	    // $this->user_model->send_mail($name,$email,$phone,$message);
		
		
	}

	public function get_location(){
		$table = $_POST['table'];
		$arr =  $this->user_model->get_result($table);
		$result = json_encode($arr);
		echo $result;
	}
 	

}