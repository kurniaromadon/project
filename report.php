<?php
$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
$sql1 = "select * from orders";
$q1   = mysqli_query($conn,$sql1);
?>
<style>
    th {
        background-color: #dedede;
        color: #333333;
        font-weight: bold;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
</style>
<table border="1">
    <thead>
        <tr>
            <th style="width: 5%">No</th>
            <th style="width: 10%">Nama</th>
            <th style="width: 30%">Email</th>
            <th style="width: 10%">Tanggal</th>
            <th style="width: 20%">Produk</th>
            <th style="width: 10%">Total</th>
            <th style="width: 15%">Status Pembayaran</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            while($r1 = mysqli_fetch_assoc($q1)){
                ?>
                <tr>
                    <td style="width: 5%"><?php echo $i++?></td>
                    <td style="width: 10%"><?php echo $r1['name']?></td>
                    <td style="width: 30%"><?php echo $r1['email']?></td>
                    <td style="width: 10%"><?php echo $r1['placed_on']?></td>
                    <td style="width: 20%"><?php echo $r1['total_products']?></td>
                    <td style="width: 10%"><?php echo $r1['total_price']?></td>
                    <td style="width: 15%"><?php echo $r1['payment_status']?></td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>