@extends('admin.layout.master')
@section('content')
<div class="headersp">
    <h1>Danh sách đơn hàng</h1>
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
                   <th></th>

               </tr>
           </thead>
           <tbody>
              <tr>
                   <td >id user</td>
                   <td >SĐT</td>
                   <td >địa chỉ</td>
                   <td >tên</td>
                   <td >tiền</td>
                   <td >ngày mua</td>
                   <td >ghi chú</td>

                   <td style="float:right">
                       <a class="btn btn-primary"  role="button"
                           style="color: white">Chi tiết</a>
                       <a class="btn btn-primary"  role="button"
                           style="color: white">Xóa</a>
                   </td>
              </tr>
              <tr>
                   <td >id user</td>
                   <td >SĐT</td>
                   <td >địa chỉ</td>
                   <td >tên</td>
                   <td >tiền</td>
                   <td >ngày mua</td>
                   <td >ghi chú</td>

                   <td style="float:right">
                       <a class="btn btn-primary"  role="button"
                           style="color: white">Chi tiết</a>
                       <a class="btn btn-primary"  role="button"
                           style="color: white">Xóa</a>
                   </td>
              </tr>
              <tr>
                   <td >id user</td>
                   <td >SĐT</td>
                   <td >địa chỉ</td>
                   <td >tên</td>
                   <td >tiền</td>
                   <td >ngày mua</td>
                   <td >ghi chú</td>

                   <td style="float:right">
                       <a class="btn btn-primary"  role="button"
                           style="color: white">Chi tiết</a>
                       <a class="btn btn-primary"  role="button"
                           style="color: white">Xóa</a>
                   </td>
              </tr>

           </tbody>
       </table>
   </div>
@endsection
