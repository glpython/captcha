<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yu
 * Date: 2/21/14
 * Time: 9:52 AM
 * To change this template use File | Settings | File Templates.
 */

class user_model extends CI_Model{
    public $id;
    public $mail;
    public $password;
    public $key;
    public $regDate;
    public $amount;

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKey($key)
    {
        $this->key = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;
    }

    public function getRegDate()
    {
        return $this->regDate;
    }



}