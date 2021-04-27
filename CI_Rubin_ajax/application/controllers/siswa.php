<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_siswa");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['siswa'] = $this->m_siswa->getAll();
		$data['content'] = 'siswa_read';
		$this->load->view('lib/header');
		$this->load->view('lib/content',$data);   
		
	}

    public function create()
    {
        $data['content'] = 'siswa_create';
        
		$this->load->view('lib/content',$data);   
    }

    public function save()
    {
        $data['nama'] = $this->input->post('nama');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['no_telp'] = $this->input->post('no_telp');
        $data['alamat'] = $this->input->post('alamat');
        $this->m_siswa->save($data);
        redirect('index.php/siswa');
    }

    function edit($kd_siswa)
    {
        $data['siswa'] = $this->m_siswa->getById($kd_siswa);
        $data['content'] = 'siswa_edit';

        $this->load->view('lib/content',$data);
    }

    public function update()
    {
        $kd_siswa = $this->input->post('kd_siswa');
        $data['nama'] = $this->input->post('nama');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['no_telp'] = $this->input->post('no_telp');
        $data['alamat'] = $this->input->post('alamat');
        $this->m_siswa->update($data,$kd_siswa);
        redirect('index.php/siswa');
    }
    function delete($kd_siswa)
    {
        $this->m_siswa->delete($kd_siswa);
        redirect('index.php/siswa');
    }

    public function ajax_save()
    {
        $data['nama'] = $this->input->post('nama');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['no_telp'] = $this->input->post('no_telp');
        $data['alamat'] = $this->input->post('alamat');
        $id = $this->m_siswa->save($data);
        //redirect('siswa');
        if($id)
            $data['status']=1;
        else
            $data['status']=0;
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $kd_siswa = $this->input->post('kd_siswa');
        $data['nama'] = $this->input->post('nama');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['no_telp'] = $this->input->post('no_telp');
        $data['alamat'] = $this->input->post('alamat');
        $id = $this->m_siswa->update($data,$kd_siswa);

        //redirect('siswa');
        if($id)
            $data['status']=1;
        else    
            $data['status']=0;
        echo json_encode($data);

    }

    function load_table($kd_siswa)
    {
        $table = '';
            $no = 1;

                foreach($siswa as $row)
                {
                    $table.='
                    <tr>
                        <td widtd="5%">'. $no++. '</td>
                        <td>'. $row->nama.'</td>
                        <td>'.$row->jenis_kelamin.'</td>
                        <td>'.$row->tanggal_lahir.'</td>
                        <td>'.$row->tempat_lahir.'</td>
                        <td>'.$row->no_telp.'</td>
                        <td>'.$row->alamat.'</td>
                        <td>
                        <a href="javascript:edit_data('.$row->kd_siswa.')" class="btn btn-warning">Edit</a>
                        <a href="'. base_url().'index.php/siswa/delete/'. $row->kd_siswa.'" class="btn btn-denger">Hapus</a>
                        </td>
                    </tr>';

                }
    }
}