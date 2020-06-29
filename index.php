<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <h2>MAKASIH YA ALLAH</h2>
    <br />
    <a href="tambah.php">Table employe</a>
    <br />
    <!-- start table  -->


    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id</th>
                <th scope="col">firt_name</th>
                <th scope="col">last_name</th>
                <th scope="col">bird_day</th>
                <th scope="col">Sex</th>
                <th scope="col">Salary</th>
                <th scope="col">Super_id</th>
                <th scope="col">brand_id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select * from employee");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['emp_id']; ?></td>
                    <td><?php echo $d['firt_name']; ?></td>
                    <td><?php echo $d['last_name']; ?></td>
                    <td><?php echo $d['birth_day']; ?></td>
                    <td><?php echo $d['sex']; ?></td>
                    <td><?php echo $d['salary']; ?></td>
                    <td><?php echo $d['super_id']; ?></td>
                    <td><?php echo $d['branch_id']; ?></td>
                    <!-- 
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td> -->
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <br> <br>
    <p>tabel branch</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">branch_id</th>
                <th scope="col">branch_name</th>
                <th scope="col">mgr_id</th>
                <th scope="col">mgr_start_date</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select * from branch");
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
        </tbody>
    </table>

    <br> <br>
    <p>client</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">client_id</th>
                <th scope="col">client_name</th>
                <th scope="col">branh_id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select * from client");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['client_id']; ?></td>
                    <td><?php echo $d['client_name']; ?></td>
                    <td><?php echo $d['branch_id']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <br> <br>
    <p>work with</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id</th>
                <th scope="col">client_id</th>
                <th scope="col">total sales</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select * from works_with");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['emp_id']; ?></td>
                    <td><?php echo $d['client_id']; ?></td>
                    <td><?php echo $d['total_sales']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <br> <br>
    <p>branc suplier</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">branch_id</th>
                <th scope="col">supplier_name</th>
                <th scope="col">suppy type</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select * from branch_supplier");
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
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>