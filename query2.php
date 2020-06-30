<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "header.html";
    ?>


    <p>QUERY TENTANG FUNCTION</p>
    <p>FUnction COUNT JUMLAH Kolom</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select COUNT(emp_id) from employee");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>

                    <td><?php echo $d['COUNT(emp_id)']; ?></td>


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
    <p>mencari nomor wanita yang lahir setelah 1970</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select COUNT(emp_id) from employee WHERE sex = 'F' AND birth_day > '1971-01-01'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['COUNT(emp_id)']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <br> <br>
    <p>mencari AVG(average)</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select AVG(salary) from employee");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['AVG(salary)']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <br> <br>
    <p>mencari AVG(average) jenis kelamin M</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select AVG(salary) from employee WHERE sex='M'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['AVG(salary)']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <br> <br>
    <p>mencari SUM SALARY jika ingin codition tambai WHERE diakhir tabel</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select SUM(salary) from employee");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['SUM(salary)']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <br> <br>
    <p>jumlah sex</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">count seX</th>
                <th scope="col">seX</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select COUNT(sex), sex from employee");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['COUNT(sex)']; ?></td>
                    <td><?php echo $d['sex']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <br> <br>
    <p> menjacri jumlah dalam grup sex</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">count seX</th>
                <th scope="col">seX</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select COUNT(sex), sex from employee GROUP BY sex");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['COUNT(sex)']; ?></td>
                    <td><?php echo $d['sex']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <br> <br>
    <p> mencari jumlah hasil sales berdasakan emp_id ditable works_with</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">total Sales</th>
                <th scope="col">emp_id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select SUM(total_sales), emp_id from works_with GROUP BY emp_id");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['SUM(total_sales)']; ?></td>
                    <td><?php echo $d['emp_id']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <br> <br>
    <p> mencari jumlah hasil sales berdasakan client_id ditable works_with</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">total Sales</th>
                <th scope="col">Client_id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select SUM(total_sales), client_id from works_with GROUP BY client_id");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['SUM(total_sales)']; ?></td>
                    <td><?php echo $d['client_id']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    < </body> </html>