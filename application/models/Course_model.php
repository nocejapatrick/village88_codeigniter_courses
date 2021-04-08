<?php
class Course_model extends CI_Model{
    
    protected $name;
    protected $description;
    protected $created_at;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get(){
        $query = $this->db->get('courses');
    
        return $query->result();
    }

    public function find($id){
      return $this->db->get_where('courses',array('id'=>$id))->row();
    }

    public function insert($arr){
        $arr["created_at"] = date("Y-m-d H:i:s");
        $this->db->insert('courses',$arr);
    }

    public function delete($id){
        $this->db->delete('courses', array('id' => $id));
    }

}