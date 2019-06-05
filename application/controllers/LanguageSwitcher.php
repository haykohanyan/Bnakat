<?php if ( ! defined('BASEPATH')) exit('Direct access allowed');

class LanguageSwitcher extends CI_Controller
{
   public function __construct() {
       parent::__construct();
   }
   function switchLang($language = "") {
       $language = ($language != "") ? $language : "am";
       $lang = $this->session->set_userdata('site_lang', $language);
       redirect($_SERVER['HTTP_REFERER']);

    //     $this->load->library('user_agent');
    //     $referrer = $this->agent->referrer();

    // $l = substr($referrer, strlen(base_url()));

    // if(isset($referrer)){
    //     preg_match('/\/(.+)$/i',$l,$match);
    //     $redirect_url;
    //     if (empty($match)) {
    //         redirect(base_url().$language ,'refresh');
    //     }
    //     else{
    //         $redirect_url = base_url().$language.$match[1];
    //     }
    //     redirect($redirect,'refresh');
    // }else{
    //     redirect(base_url(),'refresh');
    // }
   }
}