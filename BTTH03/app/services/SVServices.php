<?php
require_once APP_ROOT.'/app/models/Sinhvien.php';
class SVServices
{
    public function getAllStudents()
    {
        try
        {
            $conn = new PDO('mysql:host=localhost;dbname=quanlisinhvien', 'root', '1123');

            $sql = "SELECT * FROM SinhVien";
            //ORDER BY id DESC: xem cột id, thông tin id nào được thêm mới nhất
            
            $stmt = $conn->query($sql);

            $students = [];
            while($row = $stmt->fetch())
            {
                $student = new Student($row['id'], $row['tenSV'], $row['email'], $row['ngaysinh'], $row['idLop']);
                $students[] = $student;
            }
            return $students;
        }
        catch(PDOException $e)
        {
            return $students = [];
        }
    }
}
?> 