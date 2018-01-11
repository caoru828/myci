<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/11 0011
 * Time: 上午 11:16
 */

class User_model extends CI_Model
{

    public function add($name){

        echo $name+"123";
//        die();
        $this->db->insert('user',array(
            'name'=>$name
        ));
        return $this->db->affected_rows();
    }

    public function user_list(){
//        return $this->db->get_where("user",array('name'=>'11111'))->result();
        return $this->db->get("user")->result();
    }

    public function del_user($id){
        $this->db->delete('user', array('id' => $id));
        return $this->db->affected_rows();
    }
}
