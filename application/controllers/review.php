 <?php
 defines('BASEPATH') or exit('No direct script acces allowed');
 
 class review extends CI_Controller
 {
	public function __construct()
	{
		parent __construct();
		$this->load->model('model');
	}
	
	public function index()
	{
		$this->form_validation->set_rules('nama','Nama Pembeli','required',[
			'required' => 'Nama Pembeli harus Diisi'
		]);
		$this->form_validation->set_rules('nhp','Nomer HP','required'[
			'required' => 'Nomer HP harus diisi']);
		if($this->form_validation->run() = false){
			$data['Merk'] : ['Nike','Adidas','Kickers','Eiger','Bucherri'];
			$this->load->view('review/input', $data);
		} else{
			$data = [
				'nama' => $this->input->post('nama'),
				'nhp' => $this->input->post('nhp'),
				'merk' => $this->input->post('merk'),
				'ukuran' => $this->input->post('ukuran'),
				'harga' => $this->model->proses($this->input->post('merk'))
			];
			
			$this->load->view('review/output',$data);
		}
	}
}