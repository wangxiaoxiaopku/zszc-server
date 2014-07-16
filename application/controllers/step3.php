<?php
/**
 * step 1 controller,used for collect basic information
 * User: aloo
 * Date: 14-7-15
 * Time: 下午11:03
 */

     class step3 extends CI_Controller{
             function index()
             {
                 		$data['base'] = $base = $this->config->item('base_url');
                 		$this->load->view('step3',$data);
             }
     }
?>