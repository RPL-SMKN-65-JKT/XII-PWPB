<?php  

class Home extends Controller{
	public function index(){
		$data['judul']='Home';
		$data['style']='homestyle.css';
		$this->view('templates/header',$data);
		$this->view('home/index',$data);
		$this->view('templates/footer',$data);
	}

	public function message(){
		echo "<script>
				alert('Pesan anda terkirim');
				</script>";
		
	}

}