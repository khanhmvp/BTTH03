<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-upppercase text-success m-3">Quản lý sinh viên</h3>
        <a href="<?= DOMAIN.'app/views/patient/add.php' ?>" class='btn btn-success'>Thêm mới</a>
        <table class="table">
            <thread>
                <tr>
                    <th scope="col">Mã sinh vien</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">ID lớp</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    foreach($students as $student){
                ?>
                    <tr>
                        <th scope="row"><?=$student->getid();?></th>
                        <td><?=$student->gettenSV();?></td>
                        <td><?=$student->getemail();?></td>
                        <td><?=$student->getngaysinh();?></td>
                        <td><?=$student->getidLop();?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>