<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public  function __construct()
	  {	 parent::__construct();
	    $this->load->model('admin_model') ;
	
		 
	 }

	public function index()
	{
	   $this->session->unset_userdata('email');
	   $this->load->view('admin/login');

	}
	public function signup(){
		$this->load->view('admin/signup');
	}
	public function load_view($page, $data=""){
	
			$this->load->view('admin/templates/header');
			$this->load->view('admin/'.$page, $data);
			$this->load->view('admin/templates/footer');
		
	
	}
	public function home(){
		// $this->session->unset_userdata('email');
		if(!$this->session->email){
			$this->check_admin();
		}
		else {
			$data['slide1']        = $this->admin_model->get_result('slider1');
		    $data['home_info']     = $this->admin_model->get_result('home_info');
		    $data['princip_title'] = $this->admin_model->get_result('princip_title_image');
		    $data['principles']    = $this->admin_model->get_result('principles');
		    $data['clients']       = $this->admin_model->get_result('clients');
		    $data['clients_title'] = $this->admin_model->get_result('clients_title');
		    $data['comments']      = $this->admin_model->get_result('comments');
		    $data['home_image']    = $this->admin_model->get_result_page_id('pages_images',1);
			$this->load_view('home', $data);
		}


	}

	public function about_us(){
		if(!$this->session->email){
			$this->check_admin();
		}
		else {
		$data['general_image']        = $this->admin_model->get_result_id('general_image',2);
		$data['general_title']        = $this->admin_model->get_result_id('general_titles', $data['general_image'][0]['id']);
		$data['about_image']          = $this->admin_model->get_result_page_id('pages_images',$data['general_image'][0]['id']);
		$data['text_info']            = $this->admin_model->get_result_page_id('text_info',$data['general_image'][0]['id']);
		$data['about_subtitles']      = $this->admin_model->get_result('about_subtitles');
		$data['work_princip']         = $this->admin_model->get_result('work_princip');
		$data['product_slide']        = $this->admin_model->get_result('lori_mozzarella_image_slide');
		$data['product_process_desc'] = $this->admin_model->get_result('product_process_desc');
		$data['images']               = $this->admin_model->get_result('images');
		$data['counters']             = $this->admin_model->get_result('counter_numbers');
		$this->load_view('about_us', $data);
	}
	}

    public function our_product(){
    	if(!$this->session->email){
			$this->check_admin();
		}
		else {
		$data['general_image']        = $this->admin_model->get_result_id('general_image',3);
		$data['general_title']        = $this->admin_model->get_result_id('general_titles', $data['general_image'][0]['id']);
		$data['text_info']            = $this->admin_model->get_result_page_id('text_info',$data['general_image'][0]['id']);
		$data['product']              = $this->admin_model->get_result('product');
		$this->load_view('our_product', $data);
	}
	}
	public function delivery(){
		if(!$this->session->email){
			$this->check_admin();
		}
		else {
		$data['general_delivery_image']        = $this->admin_model->get_result('general_delivery_image');
		$data['general_title']                 = $this->admin_model->get_result_id('general_titles', 4);
		$data['text_info']                     = $this->admin_model->get_result_page_id('text_info',4);
		$data['product']                       = $this->admin_model->get_result('product');
		$data['delivery_map_info']             = $this->admin_model->get_result('delivery_map_info');
		$this->load_view('delivery',$data);
	}
	}
	public function edit_item($table,$id){

		$data['result_'.$table]=$this->admin_model->get_result_id($table,$id);
		$this->load_view('edit_item', $data);
		
	}
	
	public function check_admin(){
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		 if($this->admin_model->check_admin($email,$password)>0){
		 	// $data['email']=$email;
		 	$this->session->email=$email ;
		 	$this->home();
		 }
		 else{
		 	redirect(base_url('Admin'));
		 }

	}

	public function signup_admin(){
		$name = $this->input->post('firstname');
		$surname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password_ret = $this->input->post('retype_password');
		if($password === $password_ret){
			$this->admin_model->signup_admin($name,$surname,$email,$password);
			$this->session->unset_userdata('email');
	        $this->load->view('admin/login');
			}
		else{
			 $this->load->view('admin/signup');
				}

		}
	public function get_location(){
		$table = $_POST['table'];
		$arr =  $this->admin_model->get_result($table);
		$result = json_encode($arr);
		echo $result;
	}
   public function insert_location(){
   	 if(isset($_POST['save'])){
   	 	 $lat_lng = $_POST['lat_lng'];
	   	 $arr = explode(',', $lat_lng);
	   	 $lat = $arr[0];
	   	 $lng = $arr[1];
	   	 $data = array(
			  'lat' => $lat,
			  'lng' => $lng,
		   );
   	 $this->admin_model->add_item('delivery_map', $data);
   	 redirect(base_url('admin/delivery'));
   	 }
   	if(isset($_POST['remove'])){
   		 $lat_lng = $_POST['lat_lng'];
	   	 $arr = explode(',', $lat_lng);
	   	 $lat = $arr[0];
	   	 $lng = $arr[1];
	   	 $data = array(
			  'lat' => $lat,
			  'lng' => $lng,
		   );
   	 $this->admin_model->remove_location('delivery_map', $data);
   	 redirect(base_url('admin/delivery'));
   	}
   }

	public function insert_slide(){

		$path = 'images/';
		$title_am = $this->input->post('title_am');
		$title_ru = $this->input->post('title_ru');
		$title_en = $this->input->post('title_en');
		$image_temp = $_FILES["image"]["tmp_name"];

		$path.=$_FILES["image"]["name"];
		// echo $path;
	 	if(file_exists($path)){
	 		$image = $_FILES["image"]["name"];
	 		
	 	}
	 	else{

	 		$image = time().$_FILES["image"]["name"];
	 	    move_uploaded_file($image_temp, "images/".$image);
	       }
	 		
		$this->admin_model->add_slide($title_am,$title_ru,$title_en,$image);
		redirect(base_url('admin/add_item?slide=true'));

	}

	public function insert_product(){
		$path = 'images/';
		$page_id    = $this->input->post('page_id');  
		$title_am   = $this->input->post('title_am');
		$title_ru   = $this->input->post('title_ru');
		$title_en   = $this->input->post('title_en');
		$price      = $this->input->post('price'); 
		$count      = $this->input->post('count'); 
		$info_am    = $this->input->post('info-am');                                      	 
		$info_ru    = $this->input->post('info-ru');
		$info_en    = $this->input->post('info-en');
		$image_temp = $_FILES["image"]["tmp_name"];
	
		$path.=$_FILES["image"]["name"];
	 	if(file_exists($path)){
	 		$image = $_FILES["image"]["name"];
	 		$path = 'images/';
	 	}
	 	else{
	 		$image = time().$_FILES["image"]["name"];
	 	    move_uploaded_file($image_temp, "images/".$image);
	 	    $path = 'images/';
	      }
		
		$data = array(
		  'page_id'  => $page_id,
		  'price'    => $price,
		  'count'    => $count,
	      'title-am' => $title_am,
		  'title-ru' => $title_ru,
		  'title-en' => $title_en,
		  'info-am'  => $info_am,
		  'info-ru'  => $info_ru,
		  'info-en'  => $info_en,
		  'image'    => $image,
		 
	   );
		$this->admin_model->add_item('product',$data);
		redirect(base_url('admin/add_item?product=true'));
	}

	public function insert_general_title(){

		$path = 'images/';
		$title_am = $this->input->post('title_am');
		$title_ru = $this->input->post('title_ru');
		$title_en = $this->input->post('title_en');
		$info_am = $this->input->post('info-am');
		$info_ru = $this->input->post('info-ru');
		$info_en = $this->input->post('info-en');

		$image_temp = $_FILES["image_left"]["tmp_name"];
		$image_temp1 = $_FILES["image1"]["tmp_name"];
		$image_temp2 = $_FILES["image2"]["tmp_name"];
		

		$path.=$_FILES["image_left"]["name"];
	 	if(file_exists($path)){
	 		$image_left = $_FILES["image_left"]["name"];
	 		$path = 'images/';
	 	}
	 	else{
	 		$image_left = time().$_FILES["image_left"]["name"];
	 	    move_uploaded_file($image_temp, "images/".$image_left);
	 	    $path = 'images/';
	      }

	 	$path.=$_FILES["image1"]["name"];
	 	if(file_exists($path)){
	 		$image1 = $_FILES["image1"]["name"];
	 		$path = 'images/';
	 	}
	 	else{
	 		$image1 = time().$_FILES["image1"]["name"];
	 	    move_uploaded_file($image_temp1, "images/".$image1);
	 	    $path = 'images/';
	      }	

	 	$path.=$_FILES["image2"]["name"];
	 	if(file_exists($path)){
	 		$image2 = $_FILES["image2"]["name"];
	 		$path = 'images/';
	 	}
	 	else{
	 		$image2 = time().$_FILES["image2"]["name"];
	 	    move_uploaded_file($image_temp2, "images/".$image2);
	 	    $path = 'images/';
	      }
		
		$data = array(
	      'title-am' => $title_am,
		  'title-ru' => $title_ru,
		  'title-en' => $title_en,
		  'info-am' =>  $info_am,
		  'info-ru' =>  $info_ru,
		  'info-en' =>  $info_en,
		  'image'    => $image_left,
		  'image1'    => $image1,
		  'image2'    => $image2,
	   );
		$this->admin_model->add_item('home_info',$data);
		
		redirect(base_url('admin/add_item?title=true'));
	}


		public function insert_princip(){

		$path = 'images/';
		$title_am = $this->input->post('title_am');
		$title_ru = $this->input->post('title_ru');
		$title_en = $this->input->post('title_en');
		$info_am = $this->input->post('info-am');
		$info_ru = $this->input->post('info-ru');
		$info_en = $this->input->post('info-en');
		$image_temp = $_FILES["image"]["tmp_name"];
	
		$path.=$_FILES["image"]["name"];
	 	if(file_exists($path)){
	 		$image = $_FILES["image"]["name"];
	 		$path = 'images/';
	 	}
	 	else{
	 		$image = time().$_FILES["image"]["name"];
	 	    move_uploaded_file($image_temp, "images/".$image);
	 	    $path = 'images/';
	      }
		
		$data = array(
	      'title-am' => $title_am,
		  'title-ru' => $title_ru,
		  'title-en' => $title_en,
		  'info-am' =>  $info_am,
		  'info-ru' =>  $info_ru,
		  'info-en' =>  $info_en,
		  'image'    => $image,
		 
	   );
		$this->admin_model->add_item('principles',$data);
		redirect(base_url('admin/add_item?principles=true'));
		}

		public function insert_work_princip(){

			$path = 'images/';
		    $title_am = $this->input->post('title_am');
			$title_ru = $this->input->post('title_ru');
			$title_en = $this->input->post('title_en');
			$info_am = $this->input->post('info-am');
			$info_ru = $this->input->post('info-ru');
			$info_en = $this->input->post('info-en');
			$image_temp = $_FILES["image"]["tmp_name"];
		
			$path.=$_FILES["image"]["name"];
		 	if(file_exists($path)){
		 		$image = $_FILES["image"]["name"];
		 		$path = 'images/';
		 	}
		 	else{
		 		$image = time().$_FILES["image"]["name"];
		 	    move_uploaded_file($image_temp, "images/".$image);
		 	    $path = 'images/';
		      }
			
			$data = array(
		      'title-am' => $title_am,
			  'title-ru' => $title_ru,
			  'title-en' => $title_en,
			  'info-am' =>  $info_am,
			  'info-ru' =>  $info_ru,
			  'info-en' =>  $info_en,
			  'image'    => $image,
			 
		   );
		   $this->admin_model->add_item('work_princip',$data);
		   redirect(base_url('admin/add_item?work_princip=true'));
		}


		public function insert_comments(){

		$title_am = $this->input->post('title_am');
		$title_ru = $this->input->post('title_ru');
		$title_en = $this->input->post('title_en');
		$info_am  = $this->input->post('info-am');
		$info_ru  = $this->input->post('info-ru');
		$info_en  = $this->input->post('info-en');
		$link     = $this->input->post('link');
	
		$data = array(
	      'title-am' => $title_am,
		  'title-ru' => $title_ru,
		  'title-en' => $title_en,
		  'info-am' =>  $info_am,
		  'info-ru' =>  $info_ru,
		  'info-en' =>  $info_en, 
		  'link'    =>  $link
	   );

		$this->admin_model->add_item('comments',$data);
		redirect(base_url('admin/add_item?comments=true'));

		}

 	public function insert_clients(){
 		$path = 'images/Logo/';
		$link = $this->input->post('link');
		$image_temp = $_FILES["image"]["tmp_name"];
	
		$path.=$_FILES["image"]["name"];
	 	if(file_exists($path)){
	 		$image = $_FILES["image"]["name"];
	 		$path = 'images/Logo/';
	 	}
	 	else{
	 		$image = time().$_FILES["image"]["name"];
	 	    move_uploaded_file($image_temp, "images/Logo/".$image);
	 	   $path = 'images/Logo/';
	      }
		
		$data = array(
	      'link'     => $link,
		  'image'    => $image,
		 
	   );
		$this->admin_model->add_item('clients',$data);
		redirect(base_url('admin/add_item?clients=true'));
 	}

 	public function insert_product_slide(){

 		
		$product_name = $this->input->post('product_name');
		$path = 'images/'.$product_name.'_slide/';
		$image_temp = $_FILES["image"]["tmp_name"];
	
		$path.=$_FILES["image"]["name"];
		// echo $path;
	 	if(file_exists($path)){
	 		$image = $_FILES["image"]["name"];
	 		$path = 'images/'.$product_name.'_slide/';
	 	}
	 	else{
	 		$image = time().$_FILES["image"]["name"];
	 	    move_uploaded_file($image_temp, 'images/'.$product_name.'_slide/'.$image);
	 	    $$path = 'images/'.$product_name.'_slide/';
	      }
		
		$data = array(
	      'categorie'     => $product_name,
		  'image'         => $image,
		 
	   );
		$this->admin_model->add_item('lori_mozzarella_image_slide',$data);
		redirect(base_url('admin/add_item?product_slide=true'));
 	}

 	public function insert_text_info(){
 		$info_am = $this->input->post('info-am');
		$info_ru = $this->input->post('info-ru');
		$info_en = $this->input->post('info-en');
	
		$data = array(
	     
		  'info-am' =>  $info_am,
		  'info-ru' =>  $info_ru,
		  'info-en' =>  $info_en, 
	   );

		$this->admin_model->add_item('text_info',$data);
		redirect(base_url('admin/add_item?text_info=true'));
 	}
 	public function insert_images(){

 		   $path = 'images/gallery/';
		    $title_am = $this->input->post('title_am');
			$title_ru = $this->input->post('title_ru');
			$title_en = $this->input->post('title_en');
			$desc_am  = $this->input->post('desc-am');
			$desc_ru  = $this->input->post('desc-ru');
			$desc_en  = $this->input->post('desc-en');
			$image_temp = $_FILES["image"]["tmp_name"];
		
			$path.=$_FILES["image"]["name"];
		 	if(file_exists($path)){
		 		$image = $_FILES["image"]["name"];
		 		$path = 'images/gallery/';
		 	}
		 	else{
		 		$image = time().$_FILES["image"]["name"];
		 	    move_uploaded_file($image_temp, "images/gallery/".$image);
		 	    $path = 'images/gallery/';
		      }
			
			$data = array(
		      'title-am' => $title_am,
			  'title-ru' => $title_ru,
			  'title-en' => $title_en,
			  'desc-am' =>  $desc_am,
			  'desc-ru' =>  $desc_ru,
			  'desc-en' =>  $desc_en,
			  'image'    => $image,
			 
		   );
		   $this->admin_model->add_item('images',$data);
		   redirect(base_url('admin/add_item?images=true'));
 	}

	public function add_item(){
		
		$this->load_view('add_item');

	}	

	public function update_items($table,$id){
			$path = 'images/';

		  if($table=='slider1'){

			$title_am = $this->input->post('title_am');
			$title_ru = $this->input->post('title_ru');
			$title_en = $this->input->post('title_en');
			$image_temp = $_FILES["image"]["tmp_name"];
			 if(!$image_temp){
			 	$image=$this->input->get('img');
			 }
			 else{
			 	$path.=$_FILES["image"]["name"];
			 	if(file_exists($path)){
			 		$image = $_FILES["image"]["name"];
			 		
			 	}
			 	else{

			 		$image = time().$_FILES["image"]["name"];
			 	    move_uploaded_file($image_temp, "images/".$image);
			       }
			 		
			 	
			 	
			 }
			$data = array(
		      'title-am' => $title_am,
			  'title-ru' => $title_ru,
			  'title-en' => $title_en,
			  'image'    => $image,
		   );
			 }

			if($table=='home_info'){
				$title_am = $this->input->post('title_am');
				$title_ru = $this->input->post('title_ru');
				$title_en = $this->input->post('title_en');
				$info_am  = $this->input->post('info-am');
				$info_ru  = $this->input->post('info-ru');
				$info_en  = $this->input->post('info-en');
				$image_temp  = $_FILES["image_left"]["tmp_name"];
				$image_temp1 = $_FILES["image1"]["tmp_name"];
				$image_temp2 = $_FILES["image2"]["tmp_name"];
				if(!$image_temp){
			 	   $image_left=$this->input->get('img');
				 }
				else{
					$path.=$_FILES["image_left"]["name"];
				 	if(file_exists($path)){
				 		$image_left = $_FILES["image_left"]["name"];
				 		$path = 'images/';
				 	}
				 	else{
				 		$image_left = time().$_FILES["image_left"]["name"];
				 	    move_uploaded_file($image_temp, "images/".$image_left);
				 	    $path = 'images/';
				      }
			 		
			 	}
				 if(!$image_temp1){
			 	   $image1=$this->input->get('img1');
				 }
				else{
					$path.=$_FILES["image1"]["name"];
				 	if(file_exists($path)){
				 		$image1 = $_FILES["image1"]["name"];
				 		$path = 'images/';
				 	}
				 	else{
				 		$image1 = time().$_FILES["image1"]["name"];
				 	    move_uploaded_file($image_temp1, "images/".$image1);
				 	    $path = 'images/';
				      }	
			 		
			 	}
				 if(!$image_temp2){
			 	   $image2=$this->input->get('img2');
				 }
				else{
					$path.=$_FILES["image2"]["name"];
				 	if(file_exists($path)){
				 		$image2 = $_FILES["image2"]["name"];
				 		$path = 'images/';
				 	}
				 	else{
				 		$image2 = time().$_FILES["image2"]["name"];
				 	    move_uploaded_file($image_temp2, "images/".$image2);
				 	    $path = 'images/';
				      }
			 		
			 	}
				 $data = array(
			      'title-am' => $title_am,
				  'title-ru' => $title_ru,
				  'title-en' => $title_en,
				  'info-am'  => $info_am,
				  'info-ru'  => $info_ru,
				  'info-en'  => $info_en,
				  'image1'   => $image1,
				  'image2'   => $image2,
				  'image'    => $image_left
			   );
				 // print_r($data);


			}

		  if($table=='princip_title_image' or $table == 'clients_title'){

			$title_am = $this->input->post('title_am');
			$title_ru = $this->input->post('title_ru');
			$title_en = $this->input->post('title_en');
			$image_temp = $_FILES["image"]["tmp_name"];
			 if(!$image_temp){
			 	$image=$this->input->get('img');
			 }
			 else{
			 	$path.=$_FILES["image"]["name"];
			 	if(file_exists($path)){
			 		$image = $_FILES["image"]["name"];
			 		
			 	}
			 	else{

			 		$image = time().$_FILES["image"]["name"];
			 	    move_uploaded_file($image_temp, "images/".$image);
			       }
			 		
			 	
			 	
			 }
			$data = array(
		      'title-am' => $title_am,
			  'title-ru' => $title_ru,
			  'title-en' => $title_en,
			  'image'    => $image,
		   );
		}

		if($table=='principles'){
				$title_am    = $this->input->post('title_am');
				$title_ru    = $this->input->post('title_ru');
				$title_en    = $this->input->post('title_en');
				$info_am     = $this->input->post('info-am');
				$info_ru     = $this->input->post('info-ru');
				$info_en     = $this->input->post('info-en');
				$image_temp  = $_FILES["image"]["tmp_name"];
			
				if(!$image_temp){
			 	   $image = $this->input->get('img');
				 }
				else{
					$path.=$_FILES["image"]["name"];
				 	if(file_exists($path)){
				 		$image = $_FILES["image"]["name"];
				 		$path = 'images/';
				 	}
				 	else{
				 		$image = time().$_FILES["image"]["name"];
				 	    move_uploaded_file($image_temp, "images/".$image);
				 	    $path = 'images/';
				      }
			 	}
				 $data = array(
			      'title-am' => $title_am,
				  'title-ru' => $title_ru,
				  'title-en' => $title_en,
				  'info-am'  => $info_am,
				  'info-ru'  => $info_ru,
				  'info-en'  => $info_en,
				  'image'    => $image
			   );
			}

		if($table == 'clients'){
				$path = 'images/Logo/';
				$link = $this->input->post('link');
				$image_temp = $_FILES["image"]["tmp_name"];
			
				if(!$image_temp){
			 	   $image = $this->input->get('img');
				 }
				else{
					$path.=$_FILES["image"]["name"];
				 	if(file_exists($path)){
				 		$image = $_FILES["image"]["name"];
				 		$path = 'images/Logo/';
				 	}
				 	else{
				 		$image = time().$_FILES["image"]["name"];
				 	    move_uploaded_file($image_temp, "images/Logo/".$image);
				 	    $path = 'images/Logo/';
				      }
			 	}
				
				$data = array(
			      'link'     => $link,
				  'image'    => $image,
				 
			   );
			}

		if($table == 'comments'){
				$title_am    = $this->input->post('title_am');
				$title_ru    = $this->input->post('title_ru');
				$title_en    = $this->input->post('title_en');
				$info_am     = $this->input->post('info-am');
				$info_ru     = $this->input->post('info-ru');
				$info_en     = $this->input->post('info-en');
				$link        = $this->input->post('link');
		
				 $data = array(
			      'title-am' => $title_am,
				  'title-ru' => $title_ru,
				  'title-en' => $title_en,
				  'info-am'  => $info_am,
				  'info-ru'  => $info_ru,
				  'info-en'  => $info_en,
				  'link'     => $link
   			   );
			}


		if($table == 'pages_images'){

			    $image_temp = $_FILES["image"]["tmp_name"];
			 if(!$image_temp){
			 	$image=$this->input->get('img');
			 }
			 else{
			 	$path.=$_FILES["image"]["name"];
			 	if(file_exists($path)){
			 		$image = $_FILES["image"]["name"];
			 		
			 	}
			 	else{

			 		$image = time().$_FILES["image"]["name"];
			 	    move_uploaded_file($image_temp, "images/".$image);
			       }
			 		
			 	
			 	
			 }
			$data = array(
			  'image'    => $image,
		   );
			
			}
		 $this->admin_model->edit_item($table,$data,$id);
		 redirect(base_url('admin/home'));
	}

	 public function update_about_items($table,$id,$page_id=""){
	 		$path = 'images/';

	 	if($table == 'general_titles'){
	        $title_am    = $this->input->post('title_am');
			$title_ru    = $this->input->post('title_ru');
			$title_en    = $this->input->post('title_en');
		 	$data = array(
			  'title-am' => $title_am,
			  'title-ru' => $title_ru,
			  'title-en' => $title_en,
		   );
		}
		if($table == 'text_info'){
			$info_am = $this->input->post('info-am');
			$info_ru = $this->input->post('info-ru');
			$info_en = $this->input->post('info-en');
		
			$data = array(
		     
			  'info-am' =>  $info_am,
			  'info-ru' =>  $info_ru,
			  'info-en' =>  $info_en, 
		   );
		}
		if ($table == 'about_subtitles') {
			$subtitle_am = $this->input->post('subtitle_am');
			$subtitle_ru = $this->input->post('subtitle_ru');
			$subtitle_en = $this->input->post('subtitle_en');
		
			$data = array(
		     
			  'subtitle-am' =>  $subtitle_am,
			  'subtitle-ru' =>  $subtitle_ru,
			  'subtitle-en' =>  $subtitle_en, 
		   );
		}

		if($table == 'work_princip'){
				$path = 'images/';
				$title_am    = $this->input->post('title_am');
				$title_ru    = $this->input->post('title_ru');
				$title_en    = $this->input->post('title_en');
				$info_am     = $this->input->post('info-am');
				$info_ru     = $this->input->post('info-ru');
				$info_en     = $this->input->post('info-en');
				$image_temp  = $_FILES["image"]["tmp_name"];
			
				if(!$image_temp){
			 	   $image = $this->input->get('img');
				 }
				else{
					$path.=$_FILES["image"]["name"];
				 	if(file_exists($path)){
				 		$image = $_FILES["image"]["name"];
				 		$path = 'images/';
				 	}
				 	else{
				 		$image = time().$_FILES["image"]["name"];
				 	    move_uploaded_file($image_temp, "images/".$image);
				 	    $path = 'images/';
				      }
			 	}
			 	  $data    = array(
				      'title-am' => $title_am,
					  'title-ru' => $title_ru,
					  'title-en' => $title_en,
					  'info-am'  => $info_am,
					  'info-ru'  => $info_ru,
					  'info-en'  => $info_en,
					  'image'    => $image
			   );
			 	 
			 	}
				
		
		if($table == 'product'){
				$path = 'images/';
				$price       = $this->input->post('price');
				$count       = $this->input->post('count');
				$title_am    = $this->input->post('title_am');
				$title_ru    = $this->input->post('title_ru');
				$title_en    = $this->input->post('title_en');
				$info_am     = $this->input->post('info-am');
				$info_ru     = $this->input->post('info-ru');
				$info_en     = $this->input->post('info-en');
				$image_temp  = $_FILES["image"]["tmp_name"];
			
				if(!$image_temp){
			 	   $image = $this->input->get('img');
				 }
				else{
					$path.=$_FILES["image"]["name"];
				 	if(file_exists($path)){
				 		$image = $_FILES["image"]["name"];
				 		$path = 'images/';
				 	}
				 	else{
				 		$image = time().$_FILES["image"]["name"];
				 	    move_uploaded_file($image_temp, "images/".$image);
				 	    $path = 'images/';
				      }
			 	}
			 	if(!isset($info_am) or !isset($info_ru) or !isset($info_en)){
			 		$data    = array(
					  'price'    => $price,
					  'count'    => $count,
				      'title-am' => $title_am,
					  'title-ru' => $title_ru,
					  'title-en' => $title_en,
					  'image'    => $image
			   );
			 		
			 	}
			 	else{
			 	  $data    = array(
					  'price'    => $price,
					  'count'    => $count,
				      'title-am' => $title_am,
					  'title-ru' => $title_ru,
					  'title-en' => $title_en,
					  'info-am'  => $info_am,
					  'info-ru'  => $info_ru,
					  'info-en'  => $info_en,
					  'image'    => $image
			   );
			 	 
			 	}
		}

		if($table == 'lori_mozzarella_image_slide'){

			$product_name = $this->input->post('product_name');
			$path = 'images/'.$product_name.'_slide/';
			$image_temp = $_FILES["image"]["tmp_name"];
	 			
			if(!$image_temp){
			 	   $image = $this->input->get('img');
			 	   
				 }
				else{

					$path.=$_FILES["image"]["name"];
					// echo $path;
				 	if(file_exists($path)){
				 		$image = $_FILES["image"]["name"];
				 		$path = 'images/'.$product_name.'_slide/';
				 	}
				 	else{
				 		$image = time().$_FILES["image"]["name"];
				 	    move_uploaded_file($image_temp, 'images/'.$product_name.'_slide/'.$image);
				 	    $path = 'images/'.$product_name.'_slide/';
				      }
			 	}
			$data = array(
		      'categorie'     => $product_name,
			  'image'         => $image,
			 
		   );

		}
		if($table == 'product_process_desc'){
			    $title_am    = $this->input->post('title_am');
				$title_ru    = $this->input->post('title_ru');
				$title_en    = $this->input->post('title_en');
				$info_am     = $this->input->post('info-am');
				$info_ru     = $this->input->post('info-ru');
				$info_en     = $this->input->post('info-en');
				
			
				 $data = array(
			      'title-am' => $title_am,
				  'title-ru' => $title_ru,
				  'title-en' => $title_en,
				  'info-am'  => $info_am,
				  'info-ru'  => $info_ru,
				  'info-en'  => $info_en,
				  
			   );
		}
		if($table == 'images'){
				$path = 'images/gallery/';
			    $title_am    = $this->input->post('title_am');
				$title_ru    = $this->input->post('title_ru');
				$title_en    = $this->input->post('title_en');
				$desc_am     = $this->input->post('desc-am');
				$desc_ru     = $this->input->post('desc-ru');
				$desc_en     = $this->input->post('desc-en');
				$image_temp  = $_FILES["image"]["tmp_name"];
			
				if(!$image_temp){
			 	   $image = $this->input->get('img');
				 }
				else{
					$path.=$_FILES["image"]["name"];
				 	if(file_exists($path)){
				 		$image = $_FILES["image"]["name"];
				 		$path = 'images/gallery/';
				 	}
				 	else{
				 		$image = time().$_FILES["image"]["name"];
				 	    move_uploaded_file($image_temp, "images/gallery/".$image);
				 	    $path = 'images/gallery/';
				      }
			 	}
				 $data = array(
			      'title-am' => $title_am,
				  'title-ru' => $title_ru,
				  'title-en' => $title_en,
				  'desc-am'  => $desc_am,
				  'desc-ru'  => $desc_ru,
				  'desc-en'  => $desc_en,
				  'image'    => $image
			   );
		}
		if($table == 'general_image' or $table == 'pages_images'){

			    $image_temp = $_FILES["image"]["tmp_name"];
			 if(!$image_temp){
			 	$image=$this->input->get('img');
			 }
			 else{
			 	$path.=$_FILES["image"]["name"];
			 	if(file_exists($path)){
			 		$image = $_FILES["image"]["name"];
			 		
			 	}
			 	else{

			 		$image = time().$_FILES["image"]["name"];
			 	    move_uploaded_file($image_temp, "images/".$image);
			       }
			 		
			 	
			 	
			 }
			$data = array(
			  'image'    => $image,
		   );
			
			}	
			if($table == 'counter_numbers'){

				$path = 'images/svg_icons/';
			    $title_am    = $this->input->post('title_am');
				$title_ru    = $this->input->post('title_ru');
				$title_en    = $this->input->post('title_en');
				$counter     = $this->input->post('number');
				$image_temp  = $_FILES["image"]["tmp_name"];
			
				if(!$image_temp){
			 	   $image = $this->input->get('img');
				 }
				else{
					$path.=$_FILES["image"]["name"];
				 	if(file_exists($path)){
				 		$image = $_FILES["image"]["name"];
				 		$path = 'images/svg_icons/';
				 	}
				 	else{
				 		$image = time().$_FILES["image"]["name"];
				 	    move_uploaded_file($image_temp, "images/svg_icons/".$image);
				 	    $path = 'images/svg_icons/';
				      }
			 	}
				 $data = array(
			      'title-am' => $title_am,
				  'title-ru' => $title_ru,
				  'title-en' => $title_en,
				  'number'   => $counter,
				  'image'    => $image
			   );
			}
		 $this->admin_model->edit_item($table,$data,$id);

		if($page_id == 2){
		 	redirect(base_url('admin/about_us'));
		 }
		 else if($id == 4 or $page_id == 4){
		 	redirect(base_url('admin/delivery'));
		 }
		 else if($id == 3 or $page_id == 3){
		 	redirect(base_url('admin/our_product'));
		 }
		 else {
		 	redirect(base_url('admin/about_us'));
		 }
		
	 }
	 public function update_delivery_items($table, $id){
	 	$path = 'images/';
	 		if($table == 'general_delivery_image'){
			
			$image_temp_am  =  $_FILES["image-am"]["tmp_name"];
			$image_temp_ru  =  $_FILES["image-ru"]["tmp_name"];
			$image_temp_en  =  $_FILES["image-en"]["tmp_name"];
			if(!$image_temp_am){
			 	   $image_am=$this->input->get('img1');
				 }
				else{
					$path.=$_FILES["image-am"]["name"];
				 	if(file_exists($path)){
				 		$image_am = $_FILES["image-am"]["name"];
				 		$path = 'images/';
				 	}
				 	else{
				 		$image_am = time().$_FILES["image-am"]["name"];
				 	    move_uploaded_file($image_temp_am, "images/".$image_am);
				 	    $path = 'images/';
				      }
			 		
			 	}
				 if(!$image_temp_ru){
			 	   $image_ru=$this->input->get('img2');
				 }
				else{
					$path.=$_FILES["image-ru"]["name"];
				 	if(file_exists($path)){
				 		$image_ru = $_FILES["image-ru"]["name"];
				 		$path = 'images/';
				 	}
				 	else{
				 		$image_ru = time().$_FILES["image-ru"]["name"];
				 	    move_uploaded_file($image_temp_ru, "images/".$image_ru);
				 	    $path = 'images/';
				      }
			 		
			 	}
				if(!$image_temp_en){
			 	   $image_en=$this->input->get('img3');
				 }
				else{
					$path.=$_FILES["image-en"]["name"];
				 	if(file_exists($path)){
				 		$image_en = $_FILES["image-en"]["name"];
				 		$path = 'images/';
				 	}
				 	else{
				 		$image_en = time().$_FILES["image-en"]["name"];
				 	    move_uploaded_file($image_temp_en, "images/".$image_en);
				 	    $path = 'images/';
				      }
			 		
			 	}
			 	
			$data = array(
		     
			  'image_am' =>  $image_am,
			  'image_ru' =>  $image_ru,
			  'image_en' =>  $image_en, 
		   );
			
		}
		if($table == 'delivery_map_info'){
				
				$title_am    = $this->input->post('title_am');
				$title_ru    = $this->input->post('title_ru');
				$title_en    = $this->input->post('title_en');
				$info_am     = $this->input->post('info-am');
				$info_ru     = $this->input->post('info-ru');
				$info_en     = $this->input->post('info-en');
	
			 	  $data    = array(
				      'title_am' => $title_am,
					  'title_ru' => $title_ru,
					  'title_en' => $title_en,
					  'info_am'  => $info_am,
					  'info_ru'  => $info_ru,
					  'info_en'  => $info_en,
					  
			   );
			 	 
			 	}
		$this->admin_model->edit_item($table,$data,$id);
		redirect(base_url('admin/delivery'));

	 }

	public function remove_items(){
		$id    = $this->input->post('id');
		$table = $this->input->post('table');
		if(!empty($this->input->post('image')) && !empty($this->input->post('folder'))){
			$folder = $this->input->post('folder');
			$image = $this->input->post('image');
			switch ($folder) {
					case 'folder1':
						 unlink('images/'.$image);
						break;
					case 'folder2':
						 unlink('images/Logo/'.$image);
						break;
					case 'folder3':
					 if(file_exists('images/lori_slide/'.$image)) {
					 	unlink('images/lori_slide/'.$image);
					 }
					 else {
					 	unlink('images/mozzarella_slide/'.$image);
					 }
					 break;
					 case 'folder4':
						 unlink('images/gallery/'.$image);
						break;
				}	
		}
		$this->admin_model->remove_item($table,$id);
		
	}
	
}