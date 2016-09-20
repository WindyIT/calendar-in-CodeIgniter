<?php
   class Calendar extends CI_Controller{
   	    //public $_year = date('Y');
   	    //public $_month = date('m');
   	    function index(){
   	    	$setting = array(
    						'month_type'   => 'long',
						    'day_type'     => 'short',
   	    		 			'show_next_prev' => TRUE,
   	    		 			'next_prev_url'  => "http://localhost/CodeIgniter/index.php/calendar/show"
   	    		 			);
   	    	$this->load->library('calendar',$setting);
   	    	echo $this->calendar->generate();
   	    }
   		function show($year, $month){
   			//$data = array(
            //      '1' => "http://ishuhui.com",
            //      '2' => "http://tudou.com"
   			//	);
   			$prefs = array(
    					'month_type'   => 'long',
					    'day_type'     => 'short',
					    'show_next_prev'  => TRUE,
    					'next_prev_url'   => ''
						);
   			$this->load->library('calendar',$prefs);
   			//添加url时，调用uri类传递参数
   			echo $this->calendar->generate("{$year}","{$month}");
   			//echo $this->calendar->generate();	
   		}
   }
?>