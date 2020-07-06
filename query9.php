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


    <P>ini adalah query TRIGER</P>
    <div class="container">
        <p>tabel add triger</p>
        <p>contoh yang jelas tentang triiger|| intinya menambahkan kondisi disaat tabel lain melakukan sesuatu <a href="https://www.youtube.com/watch?v=L5RpqspNAuc&t=229s">klik</a></p>
        <div class="row">

            <table class="table table-sm col-sm-6">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id_add</th>
                        <th scope="col">first_name</th>
                        <th scope="col">last_name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM add_triger ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['id_add']; ?></td>
                            <td><?php echo $d['first_name']; ?></td>
                            <td><?php echo $d['last_name']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
            </table>

            <?php

            ?>
            <tr></tr>


            <div class="container">
                <p>tabel delete triger</p>
                <div class="row">

                    <table class="table table-sm col-sm-6">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">id_delete</th>
                                <th scope="col">first_name</th>
                                <th scope="col">last_name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $triger = mysqli_query($koneksi, "CREATE TRIGGER my_triger BEFORE INSERT ON add_triger
                            FOR EACH ROW BEGIN INSERT INTO delete_triger VALUES(1, 'baru', 'barubaru')");

                            $data = mysqli_query($koneksi, "SELECT * FROM delete_triger ");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $d['id_add']; ?></td>
                                    <td><?php echo $d['first_name']; ?></td>
                                    <td><?php echo $d['last_name']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </table>
                </div>
                <div></div>
                <br>
            </div>
</body>

</html>