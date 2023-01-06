<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

public function viewuserlist($pagename,$code){
	$this->load->library('pdf');
	if($pagename=="student" || $pagename=="teacher" || $pagename=="memories"){
		$x=$this->db->where('code',$code)->get('form')->row_array();
		if(!empty($x)){
			$d['code']=$code;
			$d['maindata']=$x;
			if($pagename=="student"){
			$d['userlistinfo']=$this->db->where('code',$code)->get('formdata')->result_array();
			}
			if($pagename=="teacher"){
				$d['userlistinfo']=$this->db->where('code',$code)->get('teacher')->result_array();
				}
				if($pagename=="memories"){
					$d['userlistinfo']=$this->db->where('code',$code)->get('memories')->result_array();
					}

					// echo "<pre>";
					// print_r($d);
					// echo "</pre>";
			$this->load->view('admin/viewuserlist',$d);
		}else{
			$this->load->view('pagenofound');
		}	
		}else{
			$this->load->view('pagenofound');
		}
	}




//yearbookform

public function yearbookform($pagename,$code)
	{
    if($pagename=="student" || $pagename=="teacher" || $pagename=="memories"){
    

	$x=$this->db->where('code',$code)->get('form')->row_array();
	if(!empty($x)){
		$d['code']=$code;
		$this->load->view($pagename.'yearbookform',$d);
	}else{
		$this->load->view('pagenofound');
	}	
    }else{
        $this->load->view('pagenofound');
    }
	
	

	}
	public function success(){
		$this->load->view('success');
	}
	public function adddata(){
	    
		$data=$this->input->post();
		  if(!empty($_FILES["image"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image']['name']);
              $sourcePath = $_FILES['image']['tmp_name'];
              $targetPath = "uploads/User/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image']=base_url().$targetPath;
                  }
        }
		$this->db->insert('formdata',$data);
		redirect(base_url().'Site/success')	;
	}
	//addsteacherdata
	public function addsteacherdata(){
	    
		$data=$this->input->post();
		  if(!empty($_FILES["image"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image']['name']);
              $sourcePath = $_FILES['image']['tmp_name'];
              $targetPath = "uploads/Teacher/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image']=base_url().$targetPath;
                  }
        }
		$this->db->insert('teacher',$data);
		redirect(base_url().'Site/success')	;
	}

	public function addmemories(){
	    
		$data=$this->input->post();
		
		 if(!empty($_FILES["image1"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image1']['name']);
              $sourcePath = $_FILES['image1']['tmp_name'];
              $targetPath = "uploads/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image1']=base_url().$targetPath;
                  }
        }
        if(!empty($_FILES["image2"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image2']['name']);
              $sourcePath = $_FILES['image2']['tmp_name'];
              $targetPath = "uploads/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image2']=base_url().$targetPath;
                  }
        }
        if(!empty($_FILES["image3"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image3']['name']);
              $sourcePath = $_FILES['image3']['tmp_name'];
              $targetPath = "uploads/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image3']=base_url().$targetPath;
                  }
        }
        if(!empty($_FILES["image4"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image4']['name']);
              $sourcePath = $_FILES['image4']['tmp_name'];
              $targetPath = "uploads/".$fileName;
             if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image4']=base_url().$targetPath;
                  }
        }
        if(!empty($_FILES["image5"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image5']['name']);
              $sourcePath = $_FILES['image5']['tmp_name'];
              $targetPath = "uploads/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image5']=base_url().$targetPath;
                  }
        }
        if(!empty($_FILES["image6"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image6']['name']);
              $sourcePath = $_FILES['image6']['tmp_name'];
              $targetPath = "uploads/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image6']=base_url().$targetPath;
                  }
        }
        if(!empty($_FILES["image7"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image7']['name']);
              $sourcePath = $_FILES['image7']['tmp_name'];
              $targetPath = "uploads/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image7']=base_url().$targetPath;
                  }
        }
        if(!empty($_FILES["image8"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image8']['name']);
              $sourcePath = $_FILES['image8']['tmp_name'];
              $targetPath = "uploads/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image8']=base_url().$targetPath;
                  }
        }
        if(!empty($_FILES["image9"]["type"])){
             $fileName = "counter".time().'_'.str_replace(' ', '', $_FILES['image9']['name']);
              $sourcePath = $_FILES['image9']['tmp_name'];
              $targetPath = "uploads/".$fileName;
                  if(move_uploaded_file($sourcePath,$targetPath)){
                  $uploadedFile = $fileName;
                  $data['image9']=base_url().$targetPath;
                  }
        }
        
		
		$this->db->insert('memories',$data);
		redirect(base_url().'Site/success')	;
	}

	public function home()
	{

		if ($this->session->userdata('login_type') == 'admin'){
            redirect(base_url().'Admin', 'refresh');
        }
		redirect(base_url().'site/', 'refresh');
	}

	public function index()
	{
		if ($this->session->userdata('login_type') == 'admin'){
            redirect(base_url().'site/home', 'refresh');
        }
		$this->load->view('login');
	}
	function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'site', 'refresh');
    }
	public function processlogin()
    {

		$email = $_POST["email"];
        $password = $_POST["password"];
$user_info=$this->db->where('email',$email)->where('password',$password)
->get('admin')->row_array();

if(!empty($user_info)){



if($user_info['status']==1){
	$this->session->set_userdata('admin_login', '1');
	$this->session->set_userdata('admin_id', $user_info['id']);

	$this->session->set_userdata('name', $user_info['username']);
	$this->session->set_userdata('login_type', $user_info['type']);
	
$this->session->set_flashdata('flash_message' , ('Admin Login Succesffuly. '));
//exit;
redirect(base_url().'site/home/');
}else{

	$this->session->set_flashdata('error_flash_message' , ('Admin has been Suspend your account. '));
	redirect(base_url().'site/');
}



}else{
	$this->session->set_flashdata('error_flash_message' , ('Invalid Login Credientails. '));
	redirect(base_url().'site/');
}

    }

	public function events($param1="")
	{
		if ($this->session->userdata('login_type') != 'admin'){
            redirect(base_url().'site', 'refresh');
        }
		
		if($param1 ==""){
			$firebase = $this->firebase->init();
			$db = $firebase->createDatabase();
			$reference = $db->getReference('EventDetail');
			$packges_list = $reference->getValue();
			$da['vendor']=$packges_list;

			// echo "<pre>";
			// print_r($da);
			// echo "</pre>";


			$this->load->view('vendor',$da);
		}else{
			$firebase = $this->firebase->init();
			$db = $firebase->createDatabase();
			$x = $db->getReference('OrgApplication')
            ->orderByKey()
            ->equalTo($param1)
            ->getSnapshot()
            ->getValue();
			$output_result=array();
			foreach($x as $y=>$z){
				foreach($z as $l=>$k){
					//echo $l;
				
             $x1 = $db->getReference('Vendor')
				->orderByKey()
				->equalTo($l)
				->getSnapshot()
				->getValue();
				// echo "<pre>";
				// print_r($x1);
				// echo "</pre>";
				array_push($output_result,$x1);
				}
			}
			// echo "<pre>";
			// print_r($output_result);
			// echo "</pre>";
			$da['vendorin']=$output_result;
			$this->load->view('vendorinfo',$da);				
		}

	
	}

	public function dashboard()
	{
		$firebase = $this->firebase->init();
        $db = $firebase->createDatabase();
		$reference = $db->getReference('Organizer');
		$packges_list = $reference->getValue();
		$outputdata=array();
		// echo "<pre>";
		// print_r($packges_list);
		// echo "</pre>";
		 foreach($packges_list as $p =>$j){
		$jan=array();
		$jan['org_id']=$p;
		$jan['org_data']=$j;
			//echo $p;
			$xa = $db->getReference('OrgApplication')
			->orderByKey()
			->equalTo($p)
			->getSnapshot()
			->getValue();
			// echo "<pre>";
			// echo count($xa);
			// print_r($xa);
			// echo "</pre>";	
			foreach($xa as $xb){
				echo count($xb);
				$jan['org_count']=count($xb);
			}
			array_push($outputdata ,$jan);
		}

		
		
		$da['organizar']=$outputdata;
		$this->load->view('dashboard',$da);
	}

function delete_vendor($param1){
	$firebase = $this->firebase->init();
	$db = $firebase->createDatabase();
	 $auth = $firebase->createAuth();
	 $auth->deleteUser($param1);
	 $db->getReference('Vendor/' . $param1)->remove();
	 $this->session->set_flashdata("flash_message", "Data has Been Removed");
	 redirect(base_url() . 'site/vendor', 'refresh');
	}
	
	
	function changetheorgantionstatus($parm1,$parma2){
	$firebase = $this->firebase->init();
	$db = $firebase->createDatabase();	    
	

		$updates = [
			"User/" . $parma2 . '/status' => $parm1,
		];
		$db->getReference() // this is the root reference
			->update($updates);

		$this->session->set_flashdata("flash_message", "Vendor has Been Active"); 
	    
	 redirect(base_url() . 'site/organization', 'refresh');

	    
	}

	
function vendorstatus($param1,$param2){
	// echo  $param1;
	// echo "<br>";
	// echo $param2;
	$firebase = $this->firebase->init();
	$db = $firebase->createDatabase();
	 $auth = $firebase->createAuth();
	 if($param1==0){

		$updatedUser = $auth->disableUser($param2);
		  //  $db = $firebase->createDatabase();
		  $updates = [
			"Vendor/" . $param2 . '/vendorstatus' => 'suspend',
		];
		$db->getReference() // this is the root reference
			->update($updates);

		$this->session->set_flashdata("flash_message", "Vendor has Been Disabled");
	}else{
		$updatedUser = $auth->enableUser($param2);
		$updates = [
			"Vendor/" . $param2 . '/vendorstatus' => 'active',
		];
		$db->getReference() // this is the root reference
			->update($updates);

		$this->session->set_flashdata("flash_message", "Vendor has Been Active"); 
	}
	 


	 redirect(base_url() . 'site/vendor', 'refresh');

}
	public function analytics()
	{
		if ($this->session->userdata('login_type') != 'admin'){
            redirect(base_url().'site', 'refresh');
        }
		$firebase = $this->firebase->init();
        $db = $firebase->createDatabase();
		$reference = $db->getReference('users');
		$packges_list = $reference->getValue();
		// echo "<pre>";
		// print_r($packges_list);
		// echo "</pre>";
		$j=array();
		$j['Parentcount']=0;
		$j['Studentcount']=0;
		$j['Militarycount']=0;
		$j['Coachcount']=0;
		$j['Civiliancount']=0;
		//$i=0;
		//$j=0;
		foreach($packges_list as $pa){
			
			 if($pa['role']=="Civilian"){
				 $j['Civiliancount']=$j['Civiliancount']+1;
			 }
			 if($pa['role']=="Coach"){
				$j['Coachcount']=$j['Coachcount']+1;
			}
			if($pa['role']=="Military"){
				$j['Militarycount']=$j['Militarycount']+1;
			}
			if($pa['role']=="Student"){
			   $j['Studentcount']=$j['Studentcount']+1;
		   }
		   if($pa['role']=="Parent"){
			$j['Parentcount']=$j['Parentcount']+1;
		}

		}

		// echo "<pre>";
		// print_r($j);
		// echo "</pre>";



		$this->load->view('analytics',$j);
	}

	
	public function roasters()
	{
		if ($this->session->userdata('login_type') != 'admin'){
            redirect(base_url().'site', 'refresh');
        }
		$firebase = $this->firebase->init();
        $db = $firebase->createDatabase();
		$reference = $db->getReference('Roasters');
		$packges_list = $reference->getValue();
		
		
		
	//	 echo "<pre>";
	//	 print_r($packges_list);
	//		echo "</pre>";	
		 /*
		 $outerarray=array();
		 
            foreach ($packges_list as $p=>$j){
                $c=array();
                $c['org_data']=$j;
                $c['user_id']=$p;
                	$x = $db->getReference('User')
            ->orderByKey()
            ->equalTo($p)
            ->getSnapshot()
            ->getValue();
                $c['user_data']=$x;
                array_push($outerarray,$c);
                
            }

  //      print_r($outerarray);
	//	 echo "</pre>";

*/

		$da['organizar']=$packges_list;
		$this->load->view('organization',$da);
	}
	
	public function seller()
	{
		if ($this->session->userdata('login_type') != 'admin'){
            redirect(base_url().'site', 'refresh');
        }
		$firebase = $this->firebase->init();
        $db = $firebase->createDatabase();
		$reference = $db->getReference('SellerOffers');
		//print_r($reference);
		$packges_list = $reference->getValue();
// 		 echo "<pre>";
// 		 print_r($reference);
// 		 echo "</pre>";
// 		 echo "asdfasdf";
//     exit;

		$da['offer']=$packges_list;
		$this->load->view('seller',$da);
	}
	
	
	function testmd5(){
	    echo "yes";
	}
	
	
		public function buyer()
	{
		if ($this->session->userdata('login_type') != 'admin'){
            redirect(base_url().'site', 'refresh');
        }
		$firebase = $this->firebase->init();
        $db = $firebase->createDatabase();
		$reference = $db->getReference('Orders');
		$packges_list = $reference->getValue();
		echo "<pre>";
		print_r($packges_list);
		echo "</pre>";


		$da['organizar']=$packges_list;
	//	$this->load->view('buyer',$da);
	}
	
		public function dispute()
	{
		if ($this->session->userdata('login_type') != 'admin'){
            redirect(base_url().'site', 'refresh');
        }
		$firebase = $this->firebase->init();
        $db = $firebase->createDatabase();
		$reference = $db->getReference('Offers');
		$packges_list = $reference->getValue();
		// echo "<pre>";
		// print_r($packges_list);
		// echo "</pre>";


		$da['offer']=$packges_list;
		$this->load->view('dispute',$da);
	}
	
// 		public function categories()
// 	{
// 		if ($this->session->userdata('login_type') != 'admin'){
//             redirect(base_url().'site', 'refresh');
//         }
// 		$firebase = $this->firebase->init();
//         $db = $firebase->createDatabase();
// 		$reference = $db->getReference('Categories');
// 		$packges_list = $reference->getValue();
// // 		echo "<pre>";
// // 		print_r($packges_list);
// // 		echo "</pre>";
// // 		exit;

// 		$da['category']=$packges_list;
// 		$this->load->view('categories',$da);
// 	}
	
		public function jobs()
	{

		if ($this->session->userdata('login_type') != 'admin'){
            redirect(base_url().'site', 'refresh');
        }
		$firebase = $this->firebase->init();
        $db = $firebase->createDatabase();
		$reference = $db->getReference('jobs');
		$packges_list = $reference->getValue();
		// echo "<pre>";
		// print_r($packges_list);
		// echo "</pre>";
		
		$da['user']=$packges_list;
		
		$this->load->view('jobs');
	}
// 			public function sellerreviews()
// 	{

// 		if ($this->session->userdata('login_type') != 'admin'){
//             redirect(base_url().'site', 'refresh');
//         }
// // 		$firebase = $this->firebase->init();
// //         $db = $firebase->createDatabase();
// // 		$reference = $db->getReference('jobs');
// // 		$packges_list = $reference->getValue();
// // 		// echo "<pre>";
// // 		// print_r($packges_list);
// // 		// echo "</pre>";
		
// // 		$da['user']=$packges_list;
		
// 		$this->load->view('sellerreviews');
// 	}
	
//     	public function gigs()
// 	{

// 		if ($this->session->userdata('login_type') != 'admin'){
//             redirect(base_url().'site', 'refresh');
//         }
// // 		$firebase = $this->firebase->init();
// //         $db = $firebase->createDatabase();
// // 		$reference = $db->getReference('jobs');
// // 		$packges_list = $reference->getValue();
// // 		// echo "<pre>";
// // 		// print_r($packges_list);
// // 		// echo "</pre>";
		
// // 		$da['user']=$packges_list;
		//,$da
// 		$this->load->view('gigs');
// 	}
	
	
// 		public function bids()
// 	{

// 		if ($this->session->userdata('login_type') != 'admin'){
//             redirect(base_url().'site', 'refresh');
//         }
// // 		$firebase = $this->firebase->init();
// //         $db = $firebase->createDatabase();
// // 		$reference = $db->getReference('jobs');
// // 		$packges_list = $reference->getValue();
// // 		// echo "<pre>";
// // 		// print_r($packges_list);
// // 		// echo "</pre>";
		
// // 		$da['user']=$packges_list;
		
// 		$this->load->view('bids');
// 	}
	
		
// 		public function chats()
// 	{

// 		if ($this->session->userdata('login_type') != 'admin'){
//             redirect(base_url().'site', 'refresh');
//         }
// // 		$firebase = $this->firebase->init();
// //         $db = $firebase->createDatabase();
// // 		$reference = $db->getReference('jobs');
// // 		$packges_list = $reference->getValue();
// // 		// echo "<pre>";
// // 		// print_r($packges_list);
// // 		// echo "</pre>";
		
// // 		$da['user']=$packges_list;
		
// 		$this->load->view('chats');
// 	}

}