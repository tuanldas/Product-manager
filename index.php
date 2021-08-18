<?php
require_once "database.php";
$sql = "SELECT * FROM products";
global $products;
$products = mysqli_query($conn, $sql);

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link type="text/css" rel="stylesheet" href="add.css">


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div style="text-align: center">
                    <form method="post" action="search.php">
                        <input type="text" name="search" placeholder="search" style="width: 30%">
                        <input type="submit" style="width: 60px">
                    </form>
                    <form method="post" action="adddatabase.php">
                        <input type="submit" value="add data to the database" class="123"><br>
                    </form>
                </div>
                <table id="mytable" class="table table-bordred table-striped">

                    <thead>

                    <th></th>
                    <th class="column1">id</th>
                    <th class="column2">Name</th>
                    <th class="column3">Code</th>
                    <th class="column4">Price</th>
                    </thead>
                    <tbody>
                    </thead>
                    <tbody id="list-itens">
                    <?php foreach ($products as $product) : ?>
                        <tr>

                            <td style="width:140px; text-align: center">

                                    <a href="http://localhost/PHP/1234/123/formUPDATE.php?id=<?php echo $product['id']; ?>"><i class="icon-trash glyphicon glyphicon-edit text-primary"></i></a>

                                <form method="POST" action="delete.php">
                                    <input type="hidden" name="deletee" value="<?php echo $product['id']; ?>">
                                    <input class="btn btn-sm btn-default" type="submit" value="Delete">
                                </form>
                            </td>
                            <td><?php echo $product['id'] ?></td>
                            <td><?php echo $product['name'] ?></td>
                            <td><?php echo $product['code'] ?></td>
                            <td><?php echo $product['price'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
