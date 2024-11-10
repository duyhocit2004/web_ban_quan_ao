@extends('admin.index')

@section('content')
    <div class="row"> 
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Tài khoản</h4>
          </div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr class="b-b-primary">
                  <th scope="col">STT</th>
                  <th scope="col">tên</th>
                  <th scope="col">số điện thoại</th>
                  <th scope="col">ảnh</th>
                  <th scope="col">email</th>
                  <th scope="col">chức vụ</th>
                  <th scope="col">thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $list as $key=>$as )
                <tr class="b-b-tertiary">
                    <th scope="row">{{$key+1}}</th>    
                    <td>{{$as->username}}</td> 
                    <td>{{$as->phone}}</td>
                    <td><img class="img-100 me-2" src="{{Storage::url($as->image)}}" alt="profile"></td>
                    <td>{{$as->email = null ? 'Null':  $as->email}}</td>
                    <td>{{$as->roleName}}</td>
                    <td>
                      <a class="btn btn-primary my-1" href="{{route('getaccount',$as->id)}}">sửa</a>           
                      <form action="{{route('deleteaccount',$as->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">xóa</button>
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