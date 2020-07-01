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
    <p>nested query</p>
    <p>pengertian <a href="https://www.geeksforgeeks.org/nested-queries-in-sql/">kli</a>k</p>

    <p>menggunakan IN (dimana parameter yang digunakan dari tabel lain )</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">firt_name </th>
                <th scope="col">last_name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            // where sama yang didalam IN harus mempunya parameter yang sama
            $data = mysqli_query($koneksi, "SELECT employee.firt_name, employee.last_name FROM employee
            WHERE employee.emp_id IN(
                SELECT works_with.emp_id FROM works_with WHERE works_with.total_sales > 30000) ");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['firt_name']; ?></td>
                    <td><?php echo $d['last_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <p>menggunakan = (logika dari baawah)</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">client name </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            // lokikanya dari bawah dulu
            $data = mysqli_query($koneksi, "SELECT client.client_name FROM client
            WHERE client.branch_id = (
                SELECT branch.branch_id FROM branch WHERE branch.mgr_id = 102) ");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['client_name']; ?></td>

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <p>menggunakan = (logika dari baawah) menggunakan limit</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">client name </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            // lokikanya dari bawah dulu (). limit tidak berjalan karena mgr_id = 2 cuma 1
            $data = mysqli_query($koneksi, "SELECT client.client_name FROM client
            WHERE client.branch_id = (
                SELECT branch.branch_id FROM branch WHERE branch.mgr_id = 102 LIMIT 1) ");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['client_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>