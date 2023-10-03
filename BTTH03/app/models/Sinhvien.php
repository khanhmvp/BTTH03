<?php
class Student
{
    private $id;
    private $tenSV;
    private $email;
    private $ngaysinh;
    private $idLop;
//
    public function __construct($id, $tenSV, $email, $ngaysinh, $idLop)
    {
        $this->id = $id;
        $this->tenSV = $tenSV;
        $this->email = $email;
        $this->ngaysinh = $ngaysinh;
        $this->idLop = $idLop;
    }
//
    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id = $id;
    }
//
    public function gettenSV()
    {
        return $this->tenSV;
    }
    public function settenSV($tenSV)
    {
        $this->tenSV = $tenSV;
    }
//   
    public function getemail()
    {
        return $this->email;
    }
    public function setemail($email)
    {
        $this->email = $email;
    }
//
    public function getngaysinh()
    {
        return $this->ngaysinh;
    }
    public function setngaysinh($ngaysinh)
    {
        $this->ngaysinh = $ngaysinh;
    }
    public function getidLop()
    {
        return $this->idLop;
    }
    public function setidLop($idLop)
    {
        $this->idLop = $idLop;
    }
}
?>