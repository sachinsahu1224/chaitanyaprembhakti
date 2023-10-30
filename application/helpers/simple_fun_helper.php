<?php

//===============Upload file ==============

if (!function_exists('do_upload_file'))
{
    function do_upload_file($filename, $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="")
    {
        $config['upload_path']          = $upload_path;
        $config['allowed_types']        = $allowed_types;
        $config['encrypt_name']         = true;
        if($max_size!=""){
            $config['max_size']         = $max_size;
        }
        if($max_size!=""){
            $config['max_width']         = $max_width;
        }
        if($max_height!=""){
            $config['max_height']         = $max_height;
        }
        
        $CI =& get_instance();
        $CI->load->library('upload', $config);
        $CI->upload->initialize($config);
        $responce = array(); 
        if ( ! $CI->upload->do_upload($filename))
        {
            $responce = array('error' => $CI->upload->display_errors().$allowed_types.$filename);
        }
        else
        {
            /* Array ( 
                [file_name] => 9709a4289bbcf529ec7dd7c6ed3fbc2b.jpg 
                [file_type] => image/jpeg [file_path] => /home/girish8269/public_html/assets/admin/darshan/ 
                [full_path] => /home/girish8269/public_html/assets/admin/darshan/9709a4289bbcf529ec7dd7c6ed3fbc2b.jpg 
                [raw_name] => 9709a4289bbcf529ec7dd7c6ed3fbc2b 
                [orig_name] => img2.jpg 
                [client_name] => img2.jpg 
                [file_ext] => .jpg 
                [file_size] => 14.28 
                [is_image] => 1 
                [image_width] => 240 
                [image_height] => 160 
                [image_type] => jpeg 
                [image_size_str] => width="240" height="160" )*/
                //this->upload->data('file_name');       // Returns: mypic.jpg
            $responce = array('success' =>true,'file_name'=>$CI->upload->data('file_name'),'file_type' =>$CI->upload->data('file_type'));
        }
        return $responce ;
    }
}

if(! function_exists('comman_pagination'))
{ 
    function comman_pagination($url, $rowscount, $per_page,$segment) {
        $ci = & get_instance();
        $ci->load->library('pagination');
        $config = array();
        //$config['page_query_string'] = TRUE;
        //$config['query_string_segment'] = 'offset';
        $config["base_url"] = base_url($url);
        $config["total_rows"] = $rowscount;
        $config["per_page"] = $per_page;
        $config["uri_segment"] = $segment;
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $ci->pagination->initialize($config);
        return $ci->pagination->create_links();
    }
}
?>