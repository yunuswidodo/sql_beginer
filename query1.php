x


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

    <br> <br> <br>
    <p>memilih 2 kolom employee</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">firt_name</th>
                <th scope="col">last_name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select  firt_name, last_name from employee");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>

                    <td><?php echo $d['firt_name']; ?></td>
                    <td><?php echo $d['last_name']; ?></td>

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
    <p>memilih 2 kolom PAKAI AS</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">firt_name</th>
                <th scope="col">last_name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select  firt_name AS forename, last_name AS surname from employee");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>

                    <td><?php echo $d['forename']; ?></td>
                    <td><?php echo $d['surname']; ?></td>

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
    <p>Query menggunakan DISTINCT</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">sex</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select  DISTINCT sex from employee");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>

                    <td><?php echo $d['sex']; ?></td>


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

</body>

</html>