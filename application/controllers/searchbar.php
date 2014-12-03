<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SearchBar extends CI_Controller {

  
  public function index()
  {
    $this->load->view('searchbar_index');
  }

  public function getJson()
  {
    $value = $this->input->post('keywords');
    echo json_encode($this->db->query("SELECT * FROM name WHERE name LIKE '$value%';")->result_array());
  }
}

/* End of file names.php */
/* Location: ./application/controllers/welcome.php */