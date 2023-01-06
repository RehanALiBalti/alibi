<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Superadmin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	
    	$this->load->view('superadmin/home');

	}

    public function site(){
        $d['site']=$this->db->get('site')->result_array();
        $this->load->view('superadmin/site',$d);

    }
    public function adminlist (){
        $d['adminlist']=$this->db->where('type','admin')->get('users')->result_array();
        $this->load->view('superadmin/adminlist',$d);

    }
    public function addnewadmin(){
        $d['site']=$this->db->get('site')->result_array();
        $this->load->view('superadmin/addnewadmin',$d);
    }

    //addadmindata
    public function addadmindata(){
    $d= $this->db->where('email',$this->input->post('email'))->get('users')->row_array();
        if(empty($data)){
            $j['email']=$this->input->post('email');
            $j['password']=$this->input->post('password');
            $j['username']=$this->input->post('username');
            $j['type']='admin';
            $j['status']=1;
            $this->db->insert('users',$j);
            $insert_id = $this->db->insert_id();
            $c['user_id']=$insert_id;
            $c['site_id']=$this->input->post('site_id');
            $this->db->insert('adminsite',$c);
            $this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
            redirect(base_url().'superadmin/addsite/');
        }else{
 //error           
 $this->session->set_flashdata('error', 'Email already Exist.');
 redirect(base_url().'superadmin/adminlist/');


        }


        $this->load->view('superadmin/addnewadmin',$d);
    }
    


    //addsite
    public function addsite(){
        $this->load->view('superadmin/addsite');
    }
//addsitedata
public function addsitedata(){
   
    $this->db->insert('site',$this->input->post());

    $this->session->set_flashdata('success', 'Data Has Been Saved.');
        redirect(base_url().'superadmin/addsite/');
}



}