<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gambar extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        $this->load->model('GambarModel');
    }
    
    public function index(){
        $data['mahasiswa'] = $this->GambarModel->view();
        // $this->load->view('user/view', $data);
        

    }
    
    public function tambah(){
        $data = array();
        
        if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
            // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
            $upload = $this->GambarModel->upload();
            
            if($upload['result'] == "success"){ // Jika proses upload sukses
                 // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                $this->GambarModel->save($upload);
                
                //redirect('user'); // Redirect kembali ke halaman awal / halaman view data
                //  echo 'anda gagal upload';
            }else{ // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }
        
        $this->load->view('user/dashboard', $data);
    }


}
