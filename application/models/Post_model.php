<?php
class Post_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_posts($id = FALSE)
    {
        if ($id === FALSE) {
            $this->db->order_by('created_at', 'DESC');
            $query = $this->db->get('posts');
            return $query->result_array();
        }

        $query = $this->db->get_where('posts', array('id' => $id));
        return $query->row_array();
    }

    public function create_post($data)
    {
        return $this->db->insert('posts', $data);
    }

    public function slug_exists($slug)
    {
        $query = $this->db->get_where('posts', array('slug' => $slug));
        return $query->num_rows() > 0;
    }

    public function delete_post($id)
    {
        // First get the image filename to delete it from server
        $post = $this->get_posts($id);
        if ($post['featured_image']) {
            $image_path = FCPATH . 'uploads/posts/' . $post['featured_image'];
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        $this->db->where('id', $id);
        $this->db->delete('posts');
        return true;
    }

    public function update_post($post_image = NULL)
    {
        $slug = url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'content' => $this->input->post('content')
        );

        if ($post_image) {
            $data['featured_image'] = $post_image;
        }

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('posts', $data);
    }
}
