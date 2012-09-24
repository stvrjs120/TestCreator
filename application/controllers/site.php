<?php
/**
 * Description of site
 *
 * @author StvRjs.K12
 */
class Site extends CI_Controller{
    
	public function index() {    
        $data['title'] = "Test Creator";
        $data['content'] = 'content';
        $this->load->view('admin', $data);
    }
    
}
