@extends('admin.layout.master')
@section('tile','orderdetails')
@section('content')
<div class="bg-light" style="height: 800px; width: 80%; float: right;">
    <div class="headersp">
	<header class="card-heading col-6">
        <h1>CHI TIẾT HÓA ĐƠN</h1>
    </header>
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col" >id order</th>
			<th scope="col" >id product</th>

            <th scope="col" >Name Product</th>
            <th scope="col">Quantity</th>
			<th scope="col" >ghi chú</th>


          </tr>
        </thead>
        <tbody>
            <th class="row" >1</th>
			<td >1</td>

            <td>Điện Thoại ip12</td>
            <td>22.000.000</td>
			<td>không có</td>

                </tbody>
            </table>
        </div>
                    <?php
                    echo "Hello "
                    ?>
        @endsection
