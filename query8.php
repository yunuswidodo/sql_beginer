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
    <p>DELETE ini menggunakan SET ON DELETE SET CASCADE </p>
    <p>pengertian jika cascade maka semua yang row dihapus</p>
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
        <div></div>
        <br>
        <p>tabel branch supplier</p>
        <table class="table table-sm col-sm-6">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">branch_id </th>
                    <th scope="col">supplier_name</th>
                    <th scope="col">supply_type </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM branch_supplier ");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $d['branch_id']; ?></td>
                        <td><?php echo $d['supplier_name']; ?></td>
                        <td><?php echo $d['supply_type']; ?></td>
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
        <p>DELETE ini menggunakan cascade || jika ingin menggukan gunakan silahkan dibuka komentarnya </p>
        <!-- 
        <div class="row">
            <?php
            // $delete_tes = mysqli_query($koneksi, "DELETE FROM branch WHERE branch_id = 2");
            ?>
            <p> <button type="button" class="btn btn-primary"><?php $delete_tes ?>delete</button> data ini menghapus employe = emp_id dan branch=mgr_id ikut karena foreigh key </p>
        </div> -->
        <!-- function delete -->
    </div>




</body>

</html>