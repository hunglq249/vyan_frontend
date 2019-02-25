<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class About extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('about_model');
		$this->load->model('about_category_model');
		$this->load->helper('common_helper');
        $this->author_data = handle_author_common_data();
	}

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index(){
		$keywords = '';
        if($this->input->get('search')){
            $keywords = $this->input->get('search');
        }
        $this->data['keywords'] = $keywords;
        $total_rows  = $this->about_model->count_search($keywords);
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('admin/about/index');
        $per_page = 10;
        $uri_segment = 4;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $result = $this->about_model->get_all_with_pagination_search('','desc', $per_page, $this->data['page'], $keywords);
        $this->data['result'] = $result;
		$this->render('admin/about/index');
	}

	public function detail($id){
        $detail = $this->about_model->get_by_id($id);
        $detail['category'] = $this->about_category_model->get_by_id($detail['category_id'])['title'];
        $tag = $detail['tag'];
        $tag = json_decode($tag);
        $detail['tag'] = $tag;
        $this->data['detail'] = $detail;
        $this->render('admin/about/detail');
    }

	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $category = $this->about_category_model->get_all();
        $this->data['category'] = $category;
        
        $this->form_validation->set_rules('title', 'Tiêu đề about', 'required');
        $this->form_validation->set_rules('parent_id', 'Danh mục', 'required');
        $this->form_validation->set_rules('image', 'Hình ảnh', 'callback_check_file');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/about/create');
        } else {
        	if ($this->input->post()) {
                if(!empty($_FILES['image']['name'])){
                    $this->check_img($_FILES['image']['name'], $_FILES['image']['size']);
                }
                $slug = $this->input->post('slug');
                $unique_slug = $this->about_model->build_unique_slug($slug);
                if(!file_exists('assets/upload/about/' . $unique_slug)){
                    mkdir('assets/upload/about/' . $unique_slug, 0777);
                }
                if ( !empty($_FILES['image']['name']) ) {
                    chmod('assets/upload/about/' . $unique_slug, 0777);
                    $images = $this->upload_image('image', 'assets/upload/about/' . $unique_slug, $_FILES['image']['name']);
                }
                $data = array(
                    'image' => $images,
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'category_id' => $this->input->post('parent_id'),
                    'meta_keywords' => $this->input->post('meta_keywords'),
                    'meta_description' => $this->input->post('meta_description'),
                    'iframe' => $this->input->post('iframe'),
                    'description' => $this->input->post('description'),
                    'body' => $this->input->post('body'),
                );
                $insert = $this->about_model->insert(array_merge($data, $this->author_data));
                if ($insert) {
                    $this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
                    redirect('admin/about', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
                    redirect('admin/about/create');
                }
            }
        }
	}

	/**
	 * [edit description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function edit($id){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $detail = $this->about_model->get_by_id($id);
        if(empty($detail) || !is_numeric($id)){
            $this->session->set_flashdata('message_error', MESSAGE_ISSET_ERROR);
            redirect('admin/about');
        }
        $category = $this->about_category_model->get_all();
        $this->data['category'] = $category;
        $this->data['detail'] = $detail;

        $this->form_validation->set_rules('title', 'Tiêu đề about', 'required');
        $this->form_validation->set_rules('parent_id', 'Danh mục', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->render('admin/about/edit');
        }else{
            if ($this->input->post()) {
                if(!empty($_FILES['image']['name'])){
                    $this->check_img($_FILES['image']['name'], $_FILES['image']['size']);
                }

                $slug = $this->input->post('slug');
                $unique_slug = $detail['slug'];
                if ($slug != $unique_slug) {
                    $unique_slug = $this->about_model->build_unique_slug($slug);
                    if(file_exists('assets/upload/about/' . $detail['slug'])) {
                        chmod('assets/upload/about/' . $detail['slug'], 0777);
                        rename('assets/upload/about/' . $detail['slug'], 'assets/upload/about/' . $unique_slug);
                    }
                }
                if(!file_exists('assets/upload/about/' . $unique_slug)){
                    mkdir('assets/upload/about/' . $unique_slug, 0777);
                }
                if ( !empty($_FILES['image']['name']) ) {
                    chmod('assets/upload/about/' . $unique_slug, 0777);
                    $images = $this->upload_image('image', 'assets/upload/about/' . $unique_slug, $_FILES['image']['name']);
                }
                $data = array(
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'category_id' => $this->input->post('parent_id'),
                    'meta_keywords' => $this->input->post('meta_keywords'),
                    'meta_description' => $this->input->post('meta_description'),
                    'iframe' => $this->input->post('iframe'),
                    'description' => $this->input->post('description'),
                    'body' => $this->input->post('body'),
                );
                if ( !empty($_FILES['image']['name']) ) {
                    $data['image'] = $images;
                }
                $update = $this->about_model->update($id,array_merge($data, $this->author_data));
                if ($update) {
                    $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                    if(isset($images) && $images != $detail['image'] && file_exists('assets/upload/about/'.$unique_slug.'/'.$detail['image'])){
                        unlink('assets/upload/about/'.$unique_slug.'/'.$detail['image']);
                    }
                    redirect('admin/about/index', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                    redirect('admin/about/edit/' . $id);
                }
            }
        }
	}

    public function deactive(){
        $id = $this->input->get('id');
        $detail = $this->about_model->get_by_id($id);
        $data = array(
            'is_active' => 0
        );
        $update = $this->about_model->update($id, $data);
        if ($update) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }
    }

    public function active(){
        $id = $this->input->get('id');
        $detail = $this->about_model->get_by_id($id);
        $number_about_category = $this->about_category_model->find_row_array(array('id' => $detail['category_id'],'is_deleted' => 0,'is_active' => 1));
        if($number_about_category == 0){
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(HTTP_BAD_REQUEST)
                    ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST, 'message' => 'Bạn không thể bật bài viết này vui lòng bật danh mục của bài viết trước')));
        }
        $data = array(
            'is_active' => 1
        );
        $update = $this->about_model->update($id, $data);
        if ($update) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(HTTP_BAD_REQUEST)
            ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST,'message' => 'Bạn không thể xóa danh mục này')));
    }

    public function remove(){
        $id = $this->input->get('id');
        $detail = $this->about_model->get_by_id($id);
        $data = array(
            'is_deleted' => 1
        );
        $update = $this->about_model->update($id, $data);
        if ($update) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }

    }
	protected function check_img($filename, $filesize){
        $reponse = array(
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        $map = strripos($filename, '.')+1;
        $fileextension = substr($filename, $map,(strlen($filename)-$map));
        if(!($fileextension == 'jpg' || $fileextension == 'jpeg' || $fileextension == 'png' || $fileextension == 'gif')  || $filesize > 1228800){
            $this->session->set_flashdata('message_error', sprintf(MESSAGE_PHOTOS_ERROR, 1200));
            redirect('admin/about');
        }
    }

    public function check_file(){
        $this->form_validation->set_message(__FUNCTION__, 'Vui lòng chọn ảnh.');
        if (!empty($_FILES['image']['name'][0])) {
            return true;
        }
        return false;
    }
}