<?php
//applications/models/Pics_model.php
class Pics_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }  
    
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
                $query = $this->db->get('su19_news');
                return $query->result_array();
        }

        $query = $this->db->get_where('su19_news', array('slug' => $slug));
        return $query->row_array();
    }
   
        public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        //return $this->db->insert('su19_news', $data);
            
        if($this->db->insert('su19_news', $data))
        {//return slug - send to view page
            return $slug;
        }else{//return false
            
        }
    }
 
}