<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yu
 * Date: 2/21/14
 * Time: 9:50 AM
 * To change this template use File | Settings | File Templates.
 */

class login extends CI_Controller{

    public function index(){

        $this->load->view("login_view");

    }

    public function loginUser(){

        $mail = $this->input->get("mail");
        $password = $this->input->get("password");

        if($mail == "" || $password == ""){
            $status = status::error;
        }else{
            $this->load->model("user/user_model","user");

            $this->user->setMail($mail);
            $this->user->setPassword(md5($password));

            $data = $this->user->loginUser();

            if($data){
                $status = status::success;

                $sessionArr = array(
                    'id' => $data[0]->id,
                    'mail' => $data[0]->mail
                );

                $this->session->set_userdata($sessionArr);

                $this->results->setDatas($data);
            }else{
                $status = status::failed;
            }
        }

        $this->results->setStatus($status);

        $this->output->set_output(json_encode($this->results));
    }

}