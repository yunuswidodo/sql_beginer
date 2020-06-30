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
    <p>JOIN</p>
    <p>mencoba menggukan JOIN hasil branchnya hanya mengurutkan</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id </th>
                <th scope="col">firt_name</th>
                <th scope="col">branch_name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            $data = mysqli_query($koneksi, "SELECT employee.emp_id,  employee.firt_name, branch.branch_name FROM employee JOIN branch");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>

                    <td><?php echo $d['emp_id']; ?></td>
                    <td><?php echo $d['firt_name']; ?></td>
                    <td><?php echo $d['branch_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <p>mencoba menggukan JOIN hasil menggunakan parameter employee.employe_id = branch.mgr_id</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id </th>
                <th scope="col">firt_name</th>
                <th scope="col">branch_name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            $data = mysqli_query($koneksi, "SELECT employee.emp_id,  employee.firt_name, branch.branch_name FROM employee JOIN branch ON employee.emp_id = branch.mgr_id");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>

                    <td><?php echo $d['emp_id']; ?></td>
                    <td><?php echo $d['firt_name']; ?></td>
                    <td><?php echo $d['branch_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <p>LEFT JOIN => mementingkan yang kiri</p>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">emp_id </th>
                <th scope="col">firt_name</th>
                <th scope="col">branch_name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            // harus ada parameternya ON ....
            $data = mysqli_query($koneksi, "SELECT employee.emp_id,  employee.firt_name, branch.branch_name FROM employee LEFT JOIN branch ON employee.emp_id = branch.mgr_id");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['emp_id']; ?></td>
                    <td><?php echo $d['firt_name']; ?></td>
                    <td><?php echo $d['branch_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

<p>RIGH JOIN => mementingkan yang yang kanan</p>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">emp_id </th>
            <th scope="col">firt_name</th>
            <th scope="col">branch_name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        //harus ada parameternya ON .....
        $data = mysqli_query($koneksi, "SELECT employee.emp_id,  employee.firt_name, branch.branch_name FROM employee RIGHT JOIN branch ON employee.emp_id = branch.mgr_id");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['emp_id']; ?></td>
                <td><?php echo $d['firt_name']; ?></td>
                <td><?php echo $d['branch_name']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</body>

</html>