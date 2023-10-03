<?php
require_once APP_ROOT.('../app/services/SVServices.php');
class HomeController
{
    public function index()
    {
        $SVServices = new SVServices();
        $students = $SVServices->getAllStudents();
        include APP_ROOT.'/app/views/home/views.php';
    }
}
?>