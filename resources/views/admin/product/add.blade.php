@extends('admin.layout.master')
@section('content')
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
@endsection
