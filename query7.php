<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include "header.html"
    ?>
    <p>menggunakan = (logika dari baawah) menggunakan limit</p>
    <div class="container">
        <p>tabel branch</p>
        <div class="row">

            <table class="table table-sm col-sm-6">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">branch_id </th>
                        <th scope="col">branch_name</th>
                        <th scope="col">mgr_id</th>
                        <th scope="col">mgr_start_date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM branch ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['branch_id']; ?></td>
                            <td><?php echo $d['branch_name']; ?></td>
                            <td><?php echo $d['mgr_id']; ?></td>
                            <td><?php echo $d['mgr_start_date']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
            </table>
            <tr></tr>
        </div>
        <br>
        <p>tabel employee</p>
        <table class="table table-sm col-sm-6">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">emp_id </th>
                    <th scope="col">fist_name </th>
                    <th scope="col">lst_name </th>
                    <th scope="col">super_id </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM employee ");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $d['emp_id']; ?></td>
                        <td><?php echo $d['firt_name']; ?></td>
                        <td><?php echo $d['last_name']; ?></td>
                        <td><?php echo $d['super_id']; ?></td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
    <?php
    ?>
    </tbody>

    <div class="container">
        <!-- function delete -->
        <div class="row">
            <?php $delete = mysqli_query($koneksi, "DELETE FROM employee WHERE emp_id = 102") ?>
            <p> <input type="submit" class="btn btn-primary"><?php $delete ?>hdelete</input> data ini menghapus employe = emp_id dan branch=mgr_id ikut karena foreigh key </p>
        </div>
        <!-- function delete -->
    </div>




</body>

</html>