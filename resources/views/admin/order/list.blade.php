@extends('admin.index')

@section('content')
    <div class="row"> 
      <div class="col-sm-12">
        <div class="card">
          @if(session('errors'))
            <div class="alert alert-success">
                {{ session('errors') }}
            </div>
          @endif
          <div class="card-header">
            <h4>Danh sách đơn hàng</h4>
          </div>
          <div class="table-responsive">
            
            <table class="table">
              <thead>
                <tr class="b-b-primary">
                  <th scope="col">STT</th>
                  <th scope="col">tên người đặt</th>
                  <th scope="col">email</th>
                  <th scope="col">ghi chú</th>
                  <th scope="col">trạng thái</th>
                  <th scope="col">Thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $list as $key=>$as )
                <tr class="b-b-tertiary">
                    <th scope="row">{{$key+1}}</th>    
                    <th scope="row">{{$as->username}}</th>    
                    <th scope="row">{{$as->email}}</th>    
                    <th scope="row">{{$as->note}}</th>    
                    <th scope="row">{{$as->namestatus}}</th>    
                    <td>
                        <a class="btn btn-primary my-1" href="{{route('getOrder',$as->id)}}">sửa</a>
                        <a class="btn btn-warning my-1" href="{{route('Orderdetail',$as->id)}}">
                          chi tiết
                        </a>
                        <form action="{{route('deletecontact',$as->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" name="button">xóa</button>
                        </form>
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <hr/>
            {{$list->links()}}
          </div>
        </div>
      </div>
@endsection