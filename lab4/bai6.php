<?php
$accounts = [
    ['name' => 'Rau Củ Sạch', 'image' => 'https://th.bing.com/th/id/OIP.m6KdXVYcwXxF3u5AqA8KowHaLH?pid=ImgDet&w=800&h=1200&rs=1', 'price' => 120000, 'sale_price' => 80000],
    ['name' => 'Hoa Quả Tươi', 'image' => 'https://ascensionkitchen.com/wp-content/uploads/2018/01/Vegan-Caesar-Salad-1-2-600x900.jpg', 'price' => 120000, 'sale_price' => 0],
    ['name' => 'Rau Củ Tươi', 'image' => 'https://th.bing.com/th/id/OIP.RVoKrujDkUOCU7HW2vy-mgHaLG?pid=ImgDet&rs=1', 'price' => 150000, 'sale_price' => 120000],
    ['name' => 'Hoa Quả Sạch', 'image' => 'https://th.bing.com/th/id/OIP.z3--a5uE-pvuXFeypmykRwHaLH?pid=ImgDet&rs=1', 'price' => 170000, 'sale_price' => 150000]
];
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Sale-price</th>
                <th>Image</th>
            </tr>

            <?php function _getSaleProduct($products)
            { ?>
                <?php foreach ($products as $key => $value) { ?>
                    <?php if ($value['sale_price'] > 0) { ?>
                        <tr>
                            <td>
                                <?php echo $value['name'] ?>
                            </td>
                            <td>
                                <?php echo $value['price'] ?>
                            </td>
                            <td>
                                <?php echo $value['sale_price'] ?>
                            </td>
                            <td style="width: 10%;">
                                <img src="<?php echo $value['image'] ?>" alt="" class="card-img">
                            </td>
                        </tr>
                    <?php } ?>

                <?php } ?>
            <?php } ?>

            <?php echo _getSaleProduct($accounts) ?>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>