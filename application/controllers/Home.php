<? defined("BASEPATH") OR exit("Engga script langsung");

/**
 * 
 */
class Home extends CI_Controller
{
	function index(){
		$this->load->view("index");
	}
	function login(){
		$this->load->view('login');
	}
	function daftar(){
		$this->load->view('daftar');
	}
	function badan(){
		$this->load->view('badan');
	}
	function carousel(){
		$this->load->view("carousel");
	}
	function collapse(){
		$this->load->view("collapse");
	}
	function kiri(){
		$this->load->view("kiri");
	}
}