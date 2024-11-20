@extends('admin.index')

@section('content')
    <div class="row"> 
      <div class="col-sm-12">
        <div class="card">
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
            <div>
                
            </div>
          </div>
        </div>
      </div>
@endsection