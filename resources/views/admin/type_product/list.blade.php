@extends('admin.layout.master')
@section('content')
<div class="headersp">
    <div class="row">
        <div class="col-6">
            <h1>Loại sản phẩm</h1>
        </div>
        <div class="col-5">
            <a href="../../admin/type_product/add"><button class="add btn btn-primary">add</button></a>
        </div>
    </div>
    <div>
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col" class="text-center">Tên Loại sản phẩm</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Mark</td>
                    <td style="float: right;">
                        <a href="../../admin/type_product/edit"><button class="btn btn-primary">sửa</button></a>
                        <button class="btn btn-primary">xóa</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Mark</td>
                    <td style="float: right;">
                        <a href="../../admin/type_product/edit"><button class="btn btn-primary">sửa</button></a>
                        <button class="btn btn-primary">xóa</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Mark</td>
                    <td style="float: right;">
                        <a href="../../admin/type_product/edit"><button class="btn btn-primary">sửa</button></a>
                        <button class="btn btn-primary">xóa</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Mark</td>
                    <td style="float: right;">
                        <a href="../../admin/type_product/edit"><button class="btn btn-primary">sửa</button></a>
                        <button class="btn btn-primary">xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
