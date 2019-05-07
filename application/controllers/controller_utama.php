<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_utama extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('ruangan_model');
    }
	public function index()
	{
        $table = 'ruangan';
        $hasil =$this->ruangan_model->get_ruangan($table);
        $data['data_ke_view']= $hasil;
        $this->load->view('user/index',$data);
    }
    public function detail($id)
    {
        $table = 'ruangan';
        $hasil =$this->ruangan_model->get_ruangan_id($table,$id);
        $data['data_ke_view']= $hasil;
        $this->load->view('user/detail-ruangan',$data);
    }
    public function form_view($id)
    {
        $table = 'ruangan';
        $hasil =$this->ruangan_model->get_ruangan_id($table,$id);
        $data['data_ke_view']= $hasil;
        $this->load->view('user/penyewaan',$data);
    }
    public function konfirmasi(){
        $table = "penyewaan";

        $email = $this->input->post('email');
        $nama = $this->input->post('nama');
        $kartu = $this->input->post('kartu');
        $organisasi = $this->input->post('organisasi');
        $jumlah = $this->input->post('jumlah');
        $keperluan = $this->input->post('keperluan');
        $hariawal = $this->input->post('hariawal');
        $bulanawal = $this->input->post('bulanawal');
        $tahunawal = $this->input->post('tahunawal');
        $hariakhir = $this->input->post('hariakhir');

        $lama = ($hariakhir - $hariawal) + 1;

        $data = array (
            'nama' => $nama,
            'email' => $email,
            'organisasi' => $organisasi,
            'jumlah' => $jumlah,
            'keperluan' => $keperluan,
            'status' => '',
            'Lama' => $lama,
            'kartu_identitas' => $kartu,
            'tanggal' => $hariawal.'/'.$bulanawal.'/'.$tahunawal
        );

        $insert = $this->ruangan_model->insert_data($table,$data);

        if ($insert) {
            $this->session->set_flashdata('alert','Pendaftaran_berhasil');
            redirect('controller_utama/konfirmasi_view');
        }else{
            $this->load->view('user/penyewaan');
        }
        
    }
    public function konfirmasi_view(){
        $this->load->view('user/konfirmasi');
    }
    public function pembayaran(){
        $this->load->view('user/pembayaran');
    }
}
