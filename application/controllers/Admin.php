<?php

defined('BASEPATH') or exit('No direct script access allowed');
use Spipu\Html2Pdf\Html2Pdf;
class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function addnewform(){
  
        $this->load->view('admin/addnewform');
    }
	public function editform($no)
	{
		$d['formdata']=$this->db->where('id',$no)->get('blogs')->row_array();
		$d['no']=$no;
		$this->load->view('admin/editform',$d);


	}
	public function editformdata($id){
		$j=$this->input->post();
		if(move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/' . $insert_id . '.jpg')){
			$j['Image']=base_url().'uploads/' . $insert_id . '.jpg';
			
		  }

		$this->db->where('id',$id)->update('blogs',$j);
		$this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
		redirect(base_url().'admin/editform/'.$id);
	}

	public function index()
	{
		$d['adminlist']=$this->db->get('blogs')->result_array();

		$this->load->view('admin/home',$d);


	}
	public function allviewpdf($p1,$p2,$p3){
		$data=array();
		if($p2=="student"){
			$data['ff']=$this->db->where('code',$p3)->get('formdata')->result_array();

		}

		$this->load->view('admin/allpdf'.$p1.$p2,$data);


	}

	public function viewpdf($p1,$p2,$p3){

		// echo $p1;
		// echo "<br>";
		// echo $p2;
		// echo "<br>";
		//  echo $p3;
		// exit;
		$data=array();
		if($p2=="formdata"){
			$data['formdata']=$this->db->where('formdata_id',$p3)->get('formdata')->row_array();

		}
		$this->load->view('admin/'.$p1.'viewpdf',$data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	//	$html = $this->load->view('admin/'.$p1.'viewpdf',$data,true);
		//$html1 = $this->load->view('admin/'.$p1.'viewpdfn',$data,true);
	//	echo $html;
		

	//$html='<h1>hellp</h1>';		
//$this->load->library('pdf');
//$this->pdf->set_option('enable_html5_parser', TRUE);
        //$this->pdf->create($html, rand() . "pdf");
//  $html2pdf = new Html2Pdf();
//  //$html2pdf->SetPageSize('A4');    
//  $html2pdf->writeHTML($html);
//  $html2pdf->output('myPdf.pdf'); 
//  $html2pdf->setModeDebug();


	}
	public function deletedata($param1,$param2,$param3){
		if($param1=="formdata"){
			$this->db->where('formdata_id',$param2)->delete('formdata');
			redirect(base_url().'site/viewuserlist/student/'.$param3);
		}
		
	
	}
	public function dform($id){
		$this->db->where('id',$id)->delete('blogs');
		$this->session->set_flashdata('success', 'Data has been Removed Sucessfully.');
		redirect(base_url().'admin/');
	}
	//addoperatordata
	public function addoperatordata(){

		$data['Title']=$this->input->post('Title');
		$data['Description']=$this->input->post('Description');
		 $data['inserted_date']=date("Y-m-d");
		 $this->db->insert('blogs',$data);
		 $insert_id = $this->db->insert_id();
		  if(move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/' . $insert_id . '.jpg')){
			$ndata['Image']=base_url().'uploads/' . $insert_id . '.jpg';
			$this->db->where('id',$insert_id);
			$this->db->update('blogs',$ndata);
			
		  }
		 

		 
		 $this->session->set_flashdata('flash_message' , ('Data Added Successfully'));
		 
		 redirect(base_url().'admin/addnewform/');

}
}