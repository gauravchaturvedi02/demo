<?php
 
class Model extends CI_Model {
  
  private $table = '';
      
  
  function __construct() 
  {
     /* Call the Model constructor */
       parent::__construct(); 
      $db = $this->db;        
      
  }


  function get_last_item($table)
  {
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get($table, 1);
    
    return $query->result();

  }
  
  
  function insert_item($item)
  {
    $this->item = $item;
    
    $this->db->insert($this->table, $this);
  }

  function remove_item($itemid)
  {
    $this->db->delete($this->table, array('id' => $itemid));
  }

  function get_row_count()
  {
    return $this->db->count_all($this->table);
  }
  //function for create random string..
  function generateRandomString($length = 3) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString.rand(0,9);
  }

function check_login($email,$password,$table)
  {
    $this->db->where('email',$email);
    $this->db->where('status','1');
    $query = $this->db->get($table);
    $row = $query->row_array();

    if($query->num_rows() > 0)
    {
       
      if($row['password'] == md5($password))
      {  
         if($row['name'] != 'admin'){

          return $row;
        }
        
      }
      else
      {
        return FALSE;
      }
    }
    else
    {
      return FALSE;
    }
  }

  function check_admin($username,$password,$table)
  {
  
    $this->db->where('username',$username);
    $this->db->where('status','1');
    $query = $this->db->get($table);
    $row = $query->row_array();
  

    if($query->num_rows() > 0)
    {
      if($row['password'] == md5($password))
      {
        
         return $row;
      }
      else
      { 
        return FALSE;
      }
    }
    else
    { 
      return FALSE;
    }
  }

  function check_user($email,$table)
  {
    $this->db->where('email',$email);
    $this->db->where('status','1');
    $query = $this->db->get($table);
    $row = $query->row_array();
    
    if($query->num_rows() > 0)
    { 

      
      if($row['email'] == $email)
      {  
         
          return $row;
         
      }
      
    }
    else
    { 
     
       return flase;
    }
  }



  function updatedata($data,$table)
  {
    $this->db->where('id',$id);
    $query = $this->db->update($table,$data);
    if($query)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  function insertdata($data,$table)
  {
    $query = $this->db->insert($table,$data);
    if($query)
    {
      return $this->db->insert_id();
    }
    else
    {
      return false;
    }
  }

   function getusers()
  {
    $sql = $this->db->query('SELECT * FROM users');
    return $sql->result();

  }
  function getuser($email)
  { $this->db->where('email',$email);
        $query = $this->db->get('users');
    return $query->result();

  }
  function getuserrow($id){
      $this->db->where('id',$id);
      $query=$this->db->get('users');
      return $query->row;
  }
        
  function deleteuser($id){
      $this->load->db();
      $this->db->where('id',$id);
      $this->db->delete();
      return true;
  }           

}