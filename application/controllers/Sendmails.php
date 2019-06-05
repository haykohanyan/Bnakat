<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sendmails extends CI_Controller {

    public  function __construct()
      {  parent::__construct();
         $this->load->config('email');
         $this->load->library('email');
     }

    // public function htmlmail(){
       
    // $this->email->set_newline("\r\n");
    
    // $this->email->from('your mail id', 'Anil Labs');
    //     $data = array(
    //          'userName'=> 'Anil Kumar Panigrahi'
    //              );
    // $this->email->to($userEmail);  // replace it with receiver mail id
    // $this->email->subject($subject); // replace it with relevant subject 
    
    //     $body = $this->load->view('emails/anillabs.php',$data,TRUE);
    // $this->email->message($body);   
    //     $this->email->send();
    // }

    public function deliver_product(){
         $product_array = [];
         $product_string = "";
         $product_count = (int)$this->input->post('product_count');
         for ($i=0; $i < $product_count; $i++) { 
            if(isset($_POST['check'.$i])){
                $arr['Արտադրանքի անվանում'] = $this->input->post('title'.$i);
                $arr['Արտադրանքի քաշը (կգ)'] = $this->input->post('count'.$i);
                $arr['Արտադրանքի ընդհանուր գումար'] = $this->input->post('total'.$i);
                array_push($product_array, $arr);
               // $product_string .= "\n".implode(' ', $product_array[$i]);
            }
         }
         if(empty($product_array)){
            $this->session->check='Check the checkboxes.';
             redirect(base_url('pages/delivery'));
         }
         // print_r($product_array);
         // $product_array = json_encode($product_array);
         $name          = $this->input->post('name');
         $surname       = $this->input->post('surname');
         $phone         = $this->input->post('phone');
         $from          = $this->input->post('email');
         $to            = $this->config->item('smtp_user');
         $address       = $this->input->post('address');
         $message       = $this->input->post('message');
         $subject       = 'Cheese delivery';
         $data = array(
             'fullname'=> $name.'  '.$surname,
             'phone'   => $phone,
             'address' => $address,
             'message' => $message,
             'product' => $product_array
                 );
         // echo $product_string;
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $body = $this->load->view('emails/email',$data,TRUE);
        $this->email->message($body);  

        if ($this->email->send()) {

            $this->session->succes_message='Your Email has successfully been sent.';
            redirect(base_url('pages/delivery'));
        } else {
           $this->session->error_message='Your Email has not been sent.';
           redirect(base_url('pages/delivery'));
            // show_error($this->email->print_debugger());
        }
       
         
    }
       
}