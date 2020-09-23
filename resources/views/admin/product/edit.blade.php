@extends('admin.layout.master')
@section('content')
<div class="headersp">
    <div class="row">
        <div class="col-6">
            <h1>Sửa sản phẩm</h1>
        </div>
    </div>
    <div class="container-fluid">
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" class="form-control" value="Dây đan Lynks Clothes" name="id" value="227" placeholder="tên sản phẩm mới">

            <div class="form-group">
                <label for="exampleInputPassword1">Tên sản phẩm</label>
                <input type="text" class="form-control" value="Dây đan Lynks Clothes" name="name" placeholder="tên sản phẩm mới">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Gía sản phẩm</label>
                <input type="text" class="form-control" value="510000.00" name="price" placeholder="Gía sản phẩm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Số lượng sản phẩm</label>
                <input type="number" class="form-control" value="222" name="count" placeholder="Số lượng sản phẩm">
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="font-weight-bold">MÔ TẢ</label>
                    <textarea class="form-control" value="" name="mota" rows="4"></textarea>
                </div>
                <div class="form-group form-check">
                    <button type="submit" name="update_products" class="btn btn-primary">cập nhật</button>
        </form>
        </div>

</div>
@endsection
