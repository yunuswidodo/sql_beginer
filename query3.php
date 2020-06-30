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

    <p>wild card</p>
    <p> pengertian <a href="https://www.w3schools.com/sql/sql_wildcards.asp"> klik</a>
        <p>
            <br>
            <p>LIKE adalah mecari dengan awalan target </p>
            <p>temukan client yang ada LLC nya ditabel client</p>

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">client name </th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM client WHERE client_name LIKE '%LLC' ");
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

            <br> <br>
            <p>temukan 'label' dikolom suplier name ditabel branch suppier mengggunakan %target%</p>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">branch_id </th>
                        <th scope="col">supplier_name </th>
                        <th scope="col">suppler_type </th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM branch_supplier WHERE supplier_name LIKE '%label%' ");
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

            <p>mencari data yang lahir oktober ditabel employe</p>

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">firts_name </th>
                        <th scope="col">last_name </th>
                        <th scope="col">birt_date </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM employee WHERE birth_day LIKE '____-10%'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['firt_name']; ?></td>
                            <td><?php echo $d['last_name']; ?></td>
                            <td><?php echo $d['birth_day']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <br> <br>

            <p>mencari nama yang ada shcoolnya didalam tabel client</p>

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">client_id </th>
                        <th scope="col">client_name </th>
                        <th scope="col">branch_id </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM client WHERE client_name LIKE '%school%'");
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

</body>

</html>