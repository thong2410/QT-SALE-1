<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container-xl">
        <div id="menu" style="height: 800px; width: 20%; float: left;">
            <div class=" p-2">
                <a id="logo">Flower Shop</a>
            </div>
            <div class="p-3">
                <ul class="navbar-nav p-3">
                    <li class="nav-item">
                        <a class=" nav-link active text-light" href="list.php"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="#"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Loại sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link active text-light" href="#"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Người dùng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link active text-light" href="#"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Đơn hàng
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="bg-light" style="height: 800px; width: 80%; float: right;">
            <div class="headersp">
                <div class="row">
                    <div class="col-6">
                        <h1>Thêm sản phẩm</h1>
                    </div>
                    <div class="col-5">
                        <button class="add btn btn-primary">add</button>
                    </div>
                </div>
                <div class="container-fluid">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="tên sản phẩm mới">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá sản phẩm</label>
                            <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Thêm ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="image" placeholder="Thêm ảnh sản phẩm">
                        </div>




                        <div class="form-group">
                            <label for="exampleInputPassword1">Số lượng sản phẩm</label>
                            <input type="text" class="form-control" name="count" placeholder="Số lượng sản phẩm">
                        </div>



                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <input type="text" class="form-control" name="mota" placeholder="Mô tả sản phẩm">
                        </div>


                        <div class="form-group form-check">
                            <button type="submit" name="add_sp" class="btn btn-primary">Thêm mới</button>
                    </form>
                    </div>

                </div>
            </div>
        </div>

</html>