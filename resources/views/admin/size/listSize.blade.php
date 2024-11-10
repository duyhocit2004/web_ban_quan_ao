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
                  <th scope="col">Tên kích cỡ</th>
                  <th scope="col">Thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $listSize as $key=>$as )
                <tr class="b-b-tertiary">
                    <th scope="row">{{$key+1}}</th>    
                    <th scope="row">{{$as->name}}</th>    
                    <td>
                        <a class="btn btn-primary my-1" href="{{route('getsize',$as->id)}}">sửa</a>
                       
                        <form action="{{route('deletesize',$as->id)}}" method="POST" enctype="multipart/form-data">
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
            {{$listSize->links()}}
          </div>
        </div>
      </div>
@endsection