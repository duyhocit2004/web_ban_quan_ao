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
                  <th scope="col">mã sản phẩm</th>
                  <th scope="col">Tên sản phẩm</th>
                  <th scope="col">ảnh</th>
                  <th scope="col">mô tả</th>
                  <th scope="col">trạng thái</th>
                  <th scope="col">thể loại</th>
                  <th scope="col">thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $list as $key=>$as )
                <tr class="b-b-tertiary">
                    <th scope="row">{{$key+1}}</th>    
                    <td>{{$as->code_products}}</td> 
                    <td>{{$as->name}}</td>
                    <td><img class="img-100 me-2" src="{{Storage::url($as->image)}}" alt="profile"></td>
                    <td>{{$as->title}}</td>
                    <td class="{{$as->availability == 2 ? 'text-success' : 'text-danger'}}">
                      {{$as->availability == 2 ? 'còn hàng' : ' hết hàng'}}</td>
                    <td>{{$as->name_categories}}</td>
                    <td>
                      <a class="btn btn-primary my-1" href="{{route('getProduct',$as->id)}}">sửa</a>
                      <a class="btn btn-secondary" href="{{route('images',$as->id)}}">thêm ảnh</a>
                     
                      <form action="{{route('deleteproduct',$as->id)}}" method="POST" enctype="multipart/form-data">
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