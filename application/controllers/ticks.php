<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticks extends MY_Controller {

	/**
	 * __construct()
	 *
	 */
	public function __construct() {
		parent::__construct();

		$this->load->model("tick_model");
	}

	/**
	 * index()
	 */
	public function index() {
		$data = array(
			"ticks" => $this->tick_model->read_list(0, 10)
		);
		
		$this->render("ticks/index", $data);
	}

	/**
	 * generate()
	 *  
	 * This function will be called by the ajax from our view
	 */
	public function generate() {
		// let's get the post data
		$page = $this->input->post('page');
		
		//verify if we have a page being requested
		if(strlen($page) < 1){
			show_error('Invalid parameter passed, must be string and atring length > 0');
		}
		
		// call the api
		$data = json_decode(file_get_contents("http://btc-e.com/api/2/btc_usd/ticker"))->ticker;
		
		// insert the btc info update to our database
		$this->tick_model->create($data);
		
		// initialize the html that we will pass back to the view
		$html = '';
		
		// check from what page the request came from 
		if($page == 'listing') {
			
			// let's get the list by calling the model function
			$ticks = $this->tick_model->read_list(0, 10);
			
			$html .= '<thead>';
			$html .= 	'<tr>';
					foreach ($ticks[0] as $key => $value) {
						$html .= '<td>' . $key . '</td>';
					 } 
			$html .= 	'</tr>';
			$html .= '</thead>';
			$html .=  '<tbody class="ticks-listing">';
				// loop the result
				foreach ($ticks as $tick) { 
					$html .= '<tr>';
						foreach ($tick as $value) { 
							$html .= '<td>' .$value . '</td>';
						 }
					$html .= '</tr>';
				}
			$html .=  '</tbody>';
		} else {
		
			$from = $this->input->post('from');
			$to = $this->input->post('to');
			
			// get the stats from the model 
			$stats = $this->tick_model->stats(strtotime(date("m/d/Y", strtotime($from))), strtotime(date("m/d/Y", strtotime($to))));
			
			// get the current status
			$current = current($this->tick_model->read_list(0, 1));
		
			foreach ($stats as $key => $value) { 
				$html .= '<tr>';
					$html .= '<td>' . ucfirst(str_replace('_', ' ', $key)) . '</td>';
					$html .= '<td>' . $value. '</td>';
				$html .= '</tr>';
			} 
			$html .= '<tr>';
				$html .= '<td>Current Buy</td>';
				$html .= '<td>' . $current->buy . '</td>';
			$html .= '</tr>';
			$html .= '<tr>';
				$html .= '<td>Current High</td>';
				$html .= '<td>' . $current->high . '</td>';
			$html .= '</tr>';
			$html .= '<tr>';
				$html .= '<td>Current Low</td>';
				$html .= '<td>' . $current->low . '</td>';
			$html .= '</tr>';
		}
		
		// let's return the html result to our caller
		echo $html;
	}
}
