@extends('admin.index')

@section('content')
    <div class="row"> 
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách sản phẩm</h4>
          </div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr class="b-b-primary">
                  <th scope="col">STT</th>
                  <th scope="col">Tên sản phẩm</th>
                  <th scope="col">ảnh</th>
                  <th scope="col">mô tả</th>
                  <th scope="col">mã sản phẩm</th>
                  <th scope="col">màu</th>
                  <th scope="col">kích cỡ</th>
                  <th scope="col">thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $list as $key=>$as )
                <tr class="b-b-tertiary">
                    <th scope="row">{{$key+1}}</th>     
                    <td>{{$as->name}}</td>
                    <td><img class="img-100 me-2" src="{{$as->image}}" alt="profile"></td>
                    <td>{{$as->title}}</td>
                    <td>{{$as->code_products}}</td>
                    <td>{{$as->color_id}}</td>
                    <td>{{$as->size_id}}</td>
                    <td>
                      <a class="btn btn-primary"href="getproduct/{{$as->id}}">sửa</a>
                      <a class="btn btn-danger" href="deleteproduct/{{$as->id}}">xóa</a>
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