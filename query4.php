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
    <p>UNION = Menyeleksi lebir dari satu tabel </p>
    <p>mencari first name ditable employe dan branch_name ditabel branch</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">first name </th>

            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            // bisa memggil lebih dari 2 tabel
            $data = mysqli_query($koneksi, "SELECT firt_name FROM employee UNION SELECT branch_name FROM branch UNION SELECT client_name FROM client ");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <!-- cukup dipanggil satu setelahnya ikut -->
                    <td><?php echo $d['firt_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <p>mencoba 2 row</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">client/supplier_name </th>
                <th scope="col">branch_id/</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            // bisa memggil lebih dari 2 tabel
            $data = mysqli_query($koneksi, "SELECT client_name, branch_id FROM client UNION SELECT supplier_name, branch_id FROM branch_supplier");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <!-- cukup dipanggil satu setelahnya ikut -->
                    <td><?php echo $d['client_name']; ?></td>
                    <td><?php echo $d['branch_id']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <br>
    <p>mencoba 2 row || gak ada bedanya cuma beda cara</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">client/supplier_name </th>
                <th scope="col">branch_id/</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            // bisa memggil lebih dari 2 tabel
            $data = mysqli_query($koneksi, "SELECT client_name, client.branch_id FROM client UNION SELECT supplier_name, branch_supplier.branch_id FROM branch_supplier");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <!-- cukup dipanggil satu setelahnya ikut -->
                    <td><?php echo $d['client_name']; ?></td>
                    <td><?php echo $d['branch_id']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>



</body>

</html>