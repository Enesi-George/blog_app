<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Load the model, helpers, and libraries
        $this->load->model('post_model');
        $this->load->helper(['url', 'form', 'text']);
        $this->load->library(['form_validation', 'session']);

        // Create upload directory if it doesn't exist
        if (!is_dir('./uploads/posts/')) {
            mkdir('./uploads/posts/', 0755, true);
        }
    }

    // List all posts
    public function index()
    {
        $data['posts'] = $this->post_model->get_posts();
        $this->load->view('posts/list_post', $data);
    }

    // Show add post form
    public function create()
    {
        $this->load->view('posts/add_post');
    }

    // Store new post
    public function store()
    {
        // Set validation rules
        $this->form_validation->set_rules('title', 'Title', 'required|is_unique[posts.title]');
        $this->form_validation->set_rules('content', 'Content', 'required|max_length[50]');

        // Set custom error messages AFTER all rules
        $this->form_validation->set_message('is_unique', 'The {field} already exists');
        $this->form_validation->set_message('max_length', 'The Description cannot exceed {param} characters');


        if ($this->form_validation->run() === FALSE) {
            // Reload the form with validation errors
            $this->load->view('posts/add_post');
        } else {
            // Validate image if uploaded
        if (!empty($_FILES['featured_image']['name'])) {
            $allowed_types = ['image/jpeg', 'image/png'];
            $file_type = $_FILES['featured_image']['type'];
            $file_size = $_FILES['featured_image']['size'];
            
            if (!in_array($file_type, $allowed_types)) {
                $data['error'] = 'Only JPEG, and PNG files are allowed';
                $this->load->view('posts/add_post', $data);
                return;
            }
            
            if ($file_size > 2097152) { // 2MB in bytes
                $data['error'] = 'File size must be less than 2MB';
                $this->load->view('posts/add_post', $data);
                return;
            }
        }
            // Handle file upload
            $config['upload_path'] = './uploads/posts/';
            $config['allowed_types'] = 'jpeg|png';
            $config['max_size'] = 2048; // 2MB
            $config['encrypt_name'] = TRUE;

            // Create directory if it doesn't exist
            if (!is_dir($config['upload_path'])) {
                mkdir($config['upload_path'], 0755, true);
            }

            $this->load->library('upload', $config);

            // Check if file was uploaded
            if (!empty($_FILES['featured_image']['name'])) {
                if (!$this->upload->do_upload('featured_image')) {
                    // Upload failed, return error
                    $data['error'] = $this->upload->display_errors();
                    $this->load->view('posts/add_post', $data);
                    return;
                } else {
                    // Upload success, get file data
                    $upload_data = $this->upload->data();
                    $image_name = $upload_data['file_name'];
                }
            } else {
                // No file uploaded
                $image_name = null;
            }

            // Generate slug from title
            $title = $this->input->post('title');
            $slug = url_title(strtolower($title), 'dash', TRUE);

            // Prepare data for database
            $post_data = array(
                'title' => $title,
                'content' => $this->input->post('content'),
                'featured_image' => $image_name, // This should be a string, not array
                'slug' => $slug,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            // Save to database
            if ($this->post_model->create_post($post_data)) {
                // Set success message
                $this->session->set_flashdata('success', 'Post created successfully');
                // Redirect to list
                redirect('posts');
            } else {
                $data['error'] = 'Failed to save post to database';
                $this->load->view('posts/add_post', $data);
            }
        }
    }

    // Delete a post
    public function delete($id)
    {
        if ($this->post_model->delete_post($id)) {
            $this->session->set_flashdata('success', 'Post deleted successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete post');
        }
        redirect('posts');
    }
}
