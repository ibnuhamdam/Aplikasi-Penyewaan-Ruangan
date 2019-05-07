<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }
	public function index()
	{
        if ($this->session->userdata('logged_in')==1) {
            redirect('controller_admin/home');
        }else{
            $this->load->view("login");

        }

    }
    public function home(){
        $table = "penyewaan";

        $hasil = $this->admin_model->get_penyewa($table);

        $data['data_ke_view']= $hasil;

        $this->load->view('admin/index',$data);
    }
    
    public function table()
    {
        if ($this->session->userdata('logged_in')==1) {
            $table = "penyewaan";

            $hasil = $this->admin_model->get_penyewa($table);

            $data['data_ke_view']= $hasil;
            $this->load->view("admin/tables-basic",$data);
        }else{
        $this->load->view("login");
        }
    }
    public function form($id)
    {
        if ($this->session->userdata('logged_in')==1) {
            $table = "penyewaan";
            $hasil = $this->admin_model->get_penyewa_id($table,$id);

            $data['data_ke_view']= $hasil;

            $this->load->view('admin/form-penyewa',$data);

        }else{
            $this->load->view("login");
        }

    }

    public function update_data($id){
        $table = "penyewaan";

        $email = $this->input->post('email');
        $nama = $this->input->post('nama');
        $kartu = $this->input->post('kartu');
        $organisasi = $this->input->post('organisasi');
        $jumlah = $this->input->post('jumlah');
        $keperluan = $this->input->post('keperluan');
        $tanggal = $this->input->post('tanggal');
        $hariakhir = $this->input->post('hariakhir');
        $lama = $this->input->post('lama');
        $status = $this->input->post('status');

        $data = array (
            'nama' => $nama,
            'email' => $email,
            'organisasi' => $organisasi,
            'jumlah' => $jumlah,
            'keperluan' => $keperluan,
            'status' => $status,
            'Lama' => $lama,
            'kartu_identitas' => $kartu,
            'tanggal' => $tanggal
        );

        $update = $this->admin_model->update($table,$data,$id);

        if($update){
            $this->session->set_flashdata('alert', 'update_berhasil');
            redirect(site_url('controller_admin/home'));
        }else{
            $this->session->set_flashdata('alert', 'update_gagal');
        }
    }

}
