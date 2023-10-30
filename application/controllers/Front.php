<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Front extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Home_Model');
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$data['slider'] = $this->Home_Model->getSlider();

		$data['about'] = $this->Home_Model->getAbout();

		$sql="SELECT * FROM  `event` WHERE start_date > NOW( ) ORDER BY start_date LIMIT 0 , 3";
		$data['product'] = $this->Admin_model->query_data1($sql);

		$data["service"] =$this->Home_Model->getServices("home");

		$data["testimonial"] =$this->Home_Model->getTestimonial();

		$array="select  darshan.id, darshan.name,darshan.description,darshan.temple_id, temple.name  as temple_name from darshan inner join  
		temple ON darshan.temple_id = temple.id";

		//$data['darshan']=$this->Admin_model->query_data1($array);

		$this->load->view('front/header');

		$this->load->view('front/index',$data);

		$this->load->view('front/footer');
	}

	public function introduction()
	{
		$sql="SELECT * FROM  `introduction` where id='1'";
        $data['intro'] = $this->Admin_model->query_data1($sql);
		$this->load->view('front/header');
		$this->load->view('front/introduction',$data);
		$this->load->view('front/footer');
	}

	public function objective()
	{
		$this->load->view('front/header');
		$this->load->view('front/objective');
		$this->load->view('front/footer');
	}
	public function founder_acharya()
	{
		$data['founder_acharya'] = $this->Admin_model->get_selected_value(array('id','image','description'),'founder_acharya',$where=array('id' =>'1'),$order='',$type='',$limit='');
		$this->load->view('front/header');
		$this->load->view('front/founder_acharya',$data);
		$this->load->view('front/footer');
	}

	public function present_acharya()
	{
		$data['present_acharya'] = $this->Admin_model->get_selected_value(array('id','image','description'),'present_acharya',$where=array('id' =>'1'),$order='',$type='',$limit='');
		$this->load->view('front/header');
		$this->load->view('front/present_acharya',$data);
		$this->load->view('front/footer');
	}

	public function guru_parampara()
	{
		$offset  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		$rowscount = $this->Admin_model->get_selected_value(array('id','name','description','image','date'),'guruparampara',$condition="",$order='',$type='',$limit="");
		$data['links'] = comman_pagination('guru-parampara', $rowscount=count($rowscount), 13,$segment=2);

		$data['guru_parampara']=$this->Admin_model->get_selected_value(array('id','name','description','image','date'),'guruparampara',$condition="",$order='id',$type='asc',$limit='13',$start=$offset);
		$this->load->view('front/header');

		$this->load->view('front/guru_parampara',$data);
		//$this->load->view('front/guru_parampara');

		$this->load->view('front/footer');
	}

	public function gaudiya_vaishnavism()
	{
		$this->load->view('front/header');

		$this->load->view('front/gaudiya_vaishnavism');

		$this->load->view('front/footer');
	}
	public function contact_us()
	{
		$this->load->view('front/header');
		$this->load->view('front/contact_us');
		$this->load->view('front/footer');
	}
	public function our_center()
	{
		$data['center'] = $this->Admin_model->get_selected_value(array('id','name','description','images','contact','place'),'temple',$condition="",$order='place',$type='asc',$limit="");
		$this->load->view('front/header');
		$this->load->view('front/our_center',$data);
		$this->load->view('front/footer');
	}

	public function festivals()
	{

 		$data['festival']=$this->Admin_model->viewfestival();
		$this->load->view('front/header');
		$this->load->view('front/festivals',$data);
		$this->load->view('front/footer');
	}

	public function activities()
	{

		$offset  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		$rowscount = $this->Admin_model->get_selected_value(array('id','name','short_descrption','images','create_at','status'),'activities',$condition=array('status' =>0),$order='serial_code',$type='asc',$limit="");

		$data['links'] = comman_pagination('activities', $rowscount=count($rowscount), 8,$segment=2);

		$data['activities_data']=$this->Admin_model->get_selected_value(array('id','name','short_descrption','images','create_at','status','readmore'),'activities',$condition=array('status' =>0),$order='serial_code',$type='asc',$limit='8',$start=$offset);
		$this->load->view('front/header');
		$this->load->view('front/activities',$data);
		$this->load->view('front/footer');
	}

	public function activity_discription($id)
  	{
        $data['act_desc'] = $this->Admin_model->get_selected_value(array('id','name','description','images','create_at','status'),'activities',$condition=array('id' =>$id),$order='',$type='',$limit="");
        $this->load->view('front/header');
        $this->load->view('front/activity_desc',$data);
        $this->load->view('front/footer');
  	}

	public function kritan()
	{

		$this->load->view('front/header');
		$this->load->view('front/24_hr');
		$this->load->view('front/footer');

	}

	public function sunday_sanskritan()
	{



		$this->load->view('front/header');
		$this->load->view('front/sunday_sanskritan');
		$this->load->view('front/footer');

	}


	public function image_gallery()
	{
		$data['category'] = $this->Admin_model->get_selected_value('*','images_category',$condition="",$order='id',$type='asc',$limit="");
		$this->load->view('front/header');
		$this->load->view('front/image_gallery',$data);
		$this->load->view('front/footer');

	}

	/******************************************
	*  										  *
	*    		Darshan Section 			  *
	*										  *
	******************************************/

	public function selcet_darshan_event()
	{
		$result = array(); $today_darshan_arr =  $today_darshan_data =array();
		$offset  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		if($offset == 0){ //-----today darshan show only first page
        	$today_darshan_data =$this->Admin_model->get_selected_value(array('darshan.id as d_id','title','event_name','event_date','front_image'),'darshan',$condition=array('today_darshan' =>'1'),$order='darshan.event_date',$type='desc',$limit="1");
		}
        $offset  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $rowscount =$this->Admin_model->get_selected_value(array('darshan.id as d_id','title','event_name','event_date','front_image'),'darshan',$condition=array('today_darshan' => '0'),$order='darshan.event_date',$type='desc',$limit="",$start="");
       
        $data['links'] = comman_pagination('category', $rowscount=count($rowscount), 6,$segment=2);

        $darshan_data =$this->Admin_model->get_selected_value(array('darshan.id as d_id','title','event_name','event_date','front_image'),'darshan',$condition=array('today_darshan' => '0'),$order='darshan.event_date',$type='desc',$limit="6",$start=$offset );
        if(count($today_darshan_data)>0){
        	foreach ($today_darshan_data as $key => $today) {
        		$today_darshan_arr = array('id'=>$today['d_id'],'title'=>$today['title'],'event_name' => $today['event_name'],'event_date' => $today['event_date'],'image' => $today['front_image']);
        	}
        }

        if(count($darshan_data)>0){
        	foreach ($darshan_data as $key => $value) {
        		$result[] = array('id'=>$value['d_id'],'title'=>$value['title'],'event_name' => $value['event_name'],'event_date' => $value['event_date'],'image' => $value['front_image']);
        	}
        }
        $data['today_darshan'] = $today_darshan_arr;
        $data['result'] = $result;
		$this->load->view('front/header');
		$this->load->view('front/vigrah',$data);
		$this->load->view('front/footer');
	}

	public function deity_darshan($id)
	{
		$result = array('id'=>'','title'=>'','event_name' => '','event_date' =>'','description'=>'','image' =>'');
        
        $darshan_data =$this->Admin_model->get_selected_value(array('darshan.id as d_id','title','event_name','event_date','description'),'darshan',$condition=array('id'=>$id),$order='darshan.event_date',$type='desc',$limit="");
        if(count($darshan_data)>0){
        	$darshan_image = $this->Admin_model->get_selected_value(array('id','images'),'darshan_images',$condition=array('darshan_id'=>$darshan_data[0]['d_id']),$order='id',$type='asc',$limit="");
        	$result = array('id'=>$darshan_data[0]['d_id'],'title'=>$darshan_data[0]['title'],'event_name' => $darshan_data[0]['event_name'],'event_date' => $darshan_data[0]['event_date'],'description'=>strip_tags($darshan_data[0]['description']),'image' => $darshan_image);
        }
        $data['result'] = $result;
		$this->load->view('front/header');
		$this->load->view('front/daliy_darshan',$data);
		$this->load->view('front/footer');
	}

	public function gallery_deity($id,$event)
	{
		$this->load->view('front/header');
		//$this->load->view('front/gallery_deity',$data);
		$this->load->view('front/today_darshan');
		$this->load->view('front/footer');

	}



	public function books_gallery()
	{
		$query1['book']=$this->Admin_model->viewbook();

		$this->load->view('front/header');
		$this->load->view('front/books_gallery',$query1);
		$this->load->view('front/footer');

	}
	public function audio()
	{
		$data['audio_category']=$this->Admin_model->get_selected_value(array('id','name','description','images'),'audiocatgory',$where="",$order='id',$type='asc',$limit='');
		$this->load->view('front/header');
		$this->load->view('front/audio_gallery',$data);
		$this->load->view('front/footer');

	}


	public function video()
	{
		$top_video_link = $this->Admin_model->get_selected_value(array('id','title','video_link_url','create_at','status'),'youtube_videos',$where = array('status' => '0','view_top_video' =>'1'),$order='create_at',$type='desc',$limit='1',$start="");

		$condition = array('status' => '0');
		if(count($top_video_link) > 0){
			$condition['id!='] = $top_video_link[0]['id'];
		}

		$videoes = $this->Admin_model->get_selected_value(array('id','title','video_link_url','create_at','status'),'youtube_videos',$condition,$order='',$type='',$limit='');
		$offset  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		$data['links'] = comman_pagination('video', $rowscount=count($videoes), 9,$segment=2);

		$data['video_urls'] = $this->Admin_model->get_selected_value(array('id','title','video_link_url','create_at','status'),'youtube_videos',$condition,$order='create_at',$type='desc',$limit='9',$start=$offset);
		
		$data['top_video_link'] = $top_video_link;
		$this->load->view('front/header');
		$this->load->view('front/video',$data);
		$this->load->view('front/footer');
	}

	public function calender()
	{
		$this->load->view('front/header');
		$this->load->view('front/calender');
		$this->load->view('front/footer');
	}

	public function darshan($id)
	{
		$array="SELECT * FROM  `darshan_images` WHERE darshan_id='$id'";
		$data['darshandata']=$this->Admin_model->query_data1($array);
		$this->load->view('front/header');
		$this->load->view('front/today_darshan',$data);
		$this->load->view('front/footer');
	}
	public function view_images()
	{
		$query['images'] = $this->Admin_model->viewimagescategory();

		$this->load->view('front/header');
		$this->load->view('front/view_images',$query);
		$this->load->view('front/footer');
	}

	//---------------------Fetivale images-------
	public function festival_images()
	{
		$info = array('photo_gellary.id as pg_id','photo_gellary.title','photo_gellary.event_id','photo_gellary.description','photo_gellary.front_image','photo_gellary.event_date','event.id','event.name');
		$gallery_data =$this->Admin_model->get_data_by_two_table($info,'photo_gellary','event','photo_gellary.event_id=event.id',$condition='',$order='photo_gellary.event_date',$type='desc',$limit='');
		$offset  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$data['links'] = comman_pagination('category', $rowscount=count($gallery_data), 8,$segment=2);
		$data['gallery_data'] =$this->Admin_model->get_data_by_two_table($info,'photo_gellary','event','photo_gellary.event_id=event.id',$condition='',$order='photo_gellary.event_date',$type='desc',$limit='8',$offset);

		$this->load->view('front/header');
		$this->load->view('front/festival_gallery.php',$data);
		$this->load->view('front/footer');
	}

	public function festival_gallery_images($id)
	{
		$result = array('id'=>'','title'=>'','event_name' => '','create_at' =>'','description'=>'','image' =>'');
        
        $info = array('photo_gellary.id as pg_id','photo_gellary.title','photo_gellary.event_id','photo_gellary.description','photo_gellary.create_at','event.id','event.name');
        $gallery_data =$this->Admin_model->get_data_by_two_table($info,'photo_gellary','event','photo_gellary.event_id=event.id',$condition=array('photo_gellary.id' =>$id),$order='photo_gellary.create_at',$type='desc',$limit='');
        if(count($gallery_data)>0){
        	$gallery_image = $this->Admin_model->get_selected_value(array('id','images'),'gellary_images',$condition=array('photo_gellary_id'=>$gallery_data[0]['pg_id']),$order='id',$type='asc',$limit="");
        	$result = array('id'=>$gallery_data[0]['id'],'title'=>$gallery_data[0]['title'],'event_name' => $gallery_data[0]['name'],'create_at' => $gallery_data[0]['create_at'],'description'=>strip_tags($gallery_data[0]['description']),'image' => $gallery_image);
        }
        $data['result'] = $result;
		$this->load->view('front/header');
		$this->load->view('front/festival_gallery_imgs.php',$data);
		$this->load->view('front/footer');
	}

	public function images($id)
	{
		$array="SELECT * FROM  `multple_images` WHERE category_id='$id'";
		$data['images1']=$this->Admin_model->query_data1($array);

		$this->load->view('front/header');
		$this->load->view('front/images',$data);
		$this->load->view('front/footer');
	}
	public function guruparampara_desc($id)
	{
		$data['description'] = $this->Admin_model->get_selected_value(array('name','description'),'guruparampara',$condition=array('id'=>$id),$order='',$type='',$limit="");
		$this->load->view('front/header');
		$this->load->view('front/guruparampara_details',$data);
		$this->load->view('front/footer');

	}
	public function shrila_raghunathbhatt()
	{

		$this->load->view('front/header');
		$this->load->view('front/shrila-raghunathbhatt');
		$this->load->view('front/footer');

	}

	public function shrila_jiva_goswami()
	{

		$this->load->view('front/header');
		$this->load->view('front/shrila-jiva-goswami');
		$this->load->view('front/footer');


	}
	public function shrila_raghunath_das_goswami()
	{

		$this->load->view('front/header');
		$this->load->view('front/shrila-raghunath-das-goswami');
		$this->load->view('front/footer');


	}
	public function shri_shrimad_bhakti()
	{


		$this->load->view('front/header');
		$this->load->view('front/shri-shrimad-bhakti-dayit-madhav-goswami-maharaj');
		$this->load->view('front/footer');


	}
	public function  shrila_bhakti_siddhant_saraswati_goswami_prabhupaad()
	{


		$this->load->view('front/header');
		$this->load->view('front/shrila-bhakti-siddhant-saraswati-goswami-prabhupaad');
		$this->load->view('front/footer');


	}
	public function  shrila_gour_kishor_das_babaji_maharaj()
	{


		$this->load->view('front/header');
		$this->load->view('front/shrila-gour-kishor-das-babaji-maharaj');
		$this->load->view('front/footer');


	}
	public function  shrila_bhakti_vinod_thakur()
	{


		$this->load->view('front/header');
		$this->load->view('front/shrila-bhakti-vinod-thakur');
		$this->load->view('front/footer');


	}
	public function addEnquiry()
	{

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$subject = $this->input->post('subject');
		$message = $this->input->post('comment');
		// $body = "Full Name:- ".$name."\n"."Contact No.:- ".$mobile;
		// $body .=$message;



		$array=array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'subject'=>$subject,'message'=>$message);

		$query=$this->Admin_model->addEnquiry($array);

		if($query)
		{


			$to = "chaitanyaprembhakti@gmail.com";
			$subject = "New Contact ";

			$message = "
			<html>
			<head>
				<title>New Enquiry</title>
			</head>
			<body>
				<p>This email New contact</p>
				<table>
					<tr>
						<td>Name</td>
						<td>".$name."</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>".$email."</td>
					</tr>
					<tr>
						<td>mobile</td>
						<td>".$mobile."</td>
					</tr>
					<tr>
						<td>subject</td>
						<td>".$subject."</td>
					</tr>
					<tr>
						<td>body</td>
						<td>".$message."</td>
					</tr>

				</table>
			</body>
			</html>
			";

// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
			$headers .= 'From: chaitanyaprembhakti@gmail.com' . "\r\n";


			$mail=mail($to,$subject,$message,$headers);

			if($mail)
			{
				echo "<script>alert('you have submit data');window.location='http://chaitanyaprembhakti.org/contact-us'</script>";

			}

		}
		else
		{
			echo "<script>alert('you have not submit data'); window.location='http://chaitanyaprembhakti.org/contact-us';</script>";

		}






		}

		public function audio_data($category,$id)
		{
			$audio = $this->Admin_model->get_selected_value('*','audio',$condition=array("categoryid" => $id),$order='',$type='',$limit="");
			$offset  = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
			if($category == 'RINGTONES'){
				$cateid['links'] = comman_pagination('audio/'.$category.'/'.$id, $rowscount=count($audio), 10,$segment=4);
				$limit = 10;
			}elseif($category == 'LECTURES'){
				$cateid['links'] = comman_pagination('audio/'.$category.'/'.$id, $rowscount=count($audio), 10,$segment=4);
				$limit = 10;
			}elseif($category == 'KIRTANS') {
				$cateid['links'] = comman_pagination('audio/'.$category.'/'.$id, $rowscount=count($audio), 12,$segment=4);
				$limit = 12;
			}
			
			$cateid['data']= $this->Admin_model->get_selected_value('*','audio',$condition=array("categoryid" => $id),$order='id',$type='desc',$limit,$start=$offset);
			$this->load->view('front/header');
			$this->load->view('front/audio',$cateid);
			$this->load->view('front/footer');
		}

		/*public function get_audio_file($value)
		{
			$audio = $this->Admin_model->get_selected_value('audio','audio',$condition=array("id" => $value),$order='',$type='',$limit="",$start="");
			if(isset($audio[0]['audio']) && is_file($audio[0]['audio'])) 
			{
				$filename = $audio[0]['audio'];
			    header('Content-Type: audio/mpeg');
			    header('Content-Disposition: inline;filename="'.basename($filename).'"');
			    header('Content-length: '.filesize($filename));
			    header('Cache-Control: no-cache');
			    header("Content-Transfer-Encoding: chunked"); 
			    readfile($filename);
			}
		}*/
		public function main_event()
		{
			$event = $this->Admin_model->get_selected_value('*','event',$condition="",$order='',$type='',$limit="");
			$offset  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$data['links'] = comman_pagination('all_event', $rowscount=count($event), 12,$segment=2);
			$data['event'] = $this->Admin_model->get_selected_value('*','event',$condition="",$order='start_date',$type='desc',$limit="12",$start=$offset);
			$this->load->view('front/header');
			$this->load->view('front/main_event',$data);
			$this->load->view('front/footer');
		}


		public function event($id)
		{
			$sql="SELECT * FROM  `event` where id='$id'";
		$data['single_event'] = $this->Admin_model->query_data1($sql);


			$this->load->view('front/header');
			$this->load->view('front/single_festivals',$data);
			$this->load->view('front/footer');

		}

		public function singlefestival($id)
	  	{
			$sql="SELECT * FROM  `festivals` where id='$id'";
	        $data['single_event'] = $this->Admin_model->query_data1($sql);
            $this->load->view('front/header');
            $this->load->view('front/single_festivals',$data);
            $this->load->view('front/footer');
	  	}

	  	public function wallpaper_images(){

	  	}

	  	public function blog(){

	  		$sql= "SELECT * FROM  `post`";
			$data['post'] = $this->Admin_model->query_data1($sql);


			$this->load->view('front/header');
			$this->load->view('front/blog',$data);
			$this->load->view('front/footer');


	  	}

	    public function singleblog($url){

	    
			$sql="SELECT * FROM  `post` where url_slug='$url'";
			$data['single_blog'] = $this->Admin_model->query_data1($sql);
			$qustionid = $data['single_blog'][0]['id'];

			$sql1="SELECT * FROM  `question` where 	post_id='$qustionid'";

			$data['question'] = $this->Admin_model->query_data1($sql1);



			$sql2="SELECT * FROM  Reply";

			$data['Reply'] = $this->Admin_model->query_data1($sql2);


            $this->load->view('front/header');
            $this->load->view('front/single_blog',$data);
            $this->load->view('front/footer');
	    }


     public function addCommit(){


      
             $id = $this->input->post('postid');
             $commit = $this->input->post('qus');

             $arrayName = array('post_id' =>$id,'question'=>$commit);

             $data = $this->Admin_model->addQustion($arrayName);

             if($data){

             $sql="SELECT * FROM  `post` where id='$id'";
            $data= $this->Admin_model->query_data1($sql);



                //print_r($data[0]['url_slug']);



                $this->session->set_flashdata('Sucess', 'Qustion sucessfully');

                
                redirect('singleblog/'.$data[0]['url_slug']);


            
                

                //$this->singleblog($data[0]['url_slug']);



             }
             else{

                $this->session->set_flashdata('error', 'Qustion error');
             //   header("Refresh:0");
                // $sql="SELECT * FROM  `post` where id='$id'";
                // $data= $this->Admin_model->query_data1($sql);
                // $this->singleblog($data[0]['url_slug']);
             }


            
        }

        public function Reply(){

        			

        		$postid =$this->input->post('postid'); 
        		$AddComment =$this->input->post('AddComment'); 
        		$qustionid =$this->input->post('qustionid'); 
        		//$array123 = array('post_id'=>$postid,'comment'=>$AddComment,'qustionid'=>$qustionid,'user'=>'guest');

        		

        		 $sql="INSERT INTO `Reply` (`id`, `post_id`, `questionid`, `comment`, `user`) VALUES (NULL, '$postid', '$qustionid', '$AddComment', 'guest')";
            $data= $this->Admin_model->query_data2($sql);


        		

        		if($data){

					 $sql="SELECT * FROM  `post` where id='$postid'";

					 $data= $this->Admin_model->query_data1($sql);

	                print_r($data[0]['url_slug']);

	             //   $this->session->set_flashdata('Sucess', 'Qustion sucessfully');

	                redirect('singleblog/'.$data[0]['url_slug']);

        		}

        }



        // public function view qustion(){




        // }




	   
	}	












