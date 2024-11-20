@extends('admin.index')

@section('content')
    <div class="row"> 
      <div class="col-sm-12">
        <div class="card">
          <div>
            
          </div>
          <div class="card-header">
            <h4>Chi tiết đơn hàng</h4>
          </div>
          <div class="table-responsive">
            <div class="container">
                <p class="py-3 text-sm"><strong >Họ tên :</strong> {{$order->username}}</p>
                <p class="py-3 text-sm"><strong >Số điện thoại : </strong>{{$order->phone}}</p>
                <p class="py-3 text-sm"><strong >Email : </strong>{{$order->email}}</p>
                <p class="py-3 text-sm"><strong >Trạng thái thanh toán :</strong> {{$order->namestatus}}</p>
                <p class="py-3 text-sm"><strong >Phương thức thanh toán :</strong> {{$order->methodname}}</p>
                <p class="py-3 text-sm"><strong >Ghi chú : </strong>{{$order->note}}</p>
                <p></p>
            </div>
            <div class="card-header">
                <h4>danh sách sản phẩm</h4>
            </div>
                <table class="container">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>ảnh sản phẩm</th>
                        <th>giá</th>
                        <th>số lượng</th>
                    </tr>
                    @foreach ($detail_order as $key=> $as )
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$as->product_name}}</td>
                            <td><img src="{{Storage::url($as->product_image)}}" width="100px" alt=""></td>
                            <td>{{$as->price}}</td>  
                            <td>{{$as->quantity}}</td>  
                        </tr>
                    @endforeach
                </table>
          </div>
        </div>
      </div>
@endsection