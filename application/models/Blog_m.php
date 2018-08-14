<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model{

           public  function getBlog(){

               $query = $this->db->get('truck_code');
               if($query->num_rows() > 0) {
                   return $query->result();
               }else{

                   return false;
               }
           }
      public  function submit(){
               $field = array(
                 't_name'=>$this->input->post(t_name),
                   't_email'=>$this->input->post(t_email),
                   't_mobile'=>$this->input->post(t_mobile),
                   't_message'=>$this->input->post(t_message)
               );
               $this->db->insert('truck_code', $field);
               if($this->db->affected_rows() > 0){
                   return true;
               }else{
                   return false;

               }
      }

      public function getBlogById($id){
           $this->db->where('id', $id);
           $query = $this->db->get('truck_code');
           if($query->num_rows() > 0){
               return $query->row();
           }else{
               return false;
           }
      }

      public function update(){
               $id = $this->input->post('txt_hidden_id');
               $field = array(
                   't_name'=>$this->input->post('t_name'),
                   't_email'=>$this->input->post('t_email'),
                   't_mobile'=>$this->input->post('t_mobile')
               );
               $this->db->where('id',$id);
               $this->db->update('truck_code',$field);
               if($this->db->affected_rows() > 0){
                   return true;
               }else{
                   return false;
               }
      }

      public function  delete($id){
               $this->db->where('id'. $id);
               $this->db->delete('truck_code');
               if ($this->db->affected_rows() > 0){
                   return true;

               }else{
                   return false;
               }
      }
}