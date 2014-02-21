<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yu
 * Date: 2/21/14
 * Time: 10:25 AM
 * To change this template use File | Settings | File Templates.
 */

class results extends CI_Model{
    public $status;
    public $datas;

    public function setDatas($datas)
    {
        $this->datas = $datas;
    }

    public function getDatas()
    {
        return $this->datas;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}