@extends('admin.layout.master')
@section('tile','order')
@section('content')

<div class="bg-light" style="height: 800px; width: 80%; float: right;">
    <div class="headersp">
	<header class="card-heading col-6">
      <h1>  DANH SÁCH HÓA ĐƠN  </h1>
    </header>
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col" >id user</th>
			<th scope="col" >số điện thoại</th>
			<th scope="col">địa chỉ</th>
			<th scope="col" >tên</th>
			<th scope="col" >tiền</th>
			<th scope="col" >ngày mua</th>
			<th scope="col" >ghi chú</th>
			<th>action</th>

          </tr>
        </thead>
        <tbody>
            <th class="row" >1</td>
			<td >0762644516</td>
			<td >Đà Nẵng</td>
			<td >NGuyễn Viết Thông</td>
			<td >12.000.000</td>
            <td >22-9-2020</td>
            <td >không có</td>
            <td>
           <a href="orderdetails"> <button class="btn btn-primary">Chi tiết</button></a>
            <button class="btn btn-primary">xóa</button>
            </td>
                </tbody>
            </table>
        </div>
        @endsection
