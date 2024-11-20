@extends('admin.index')

@section('content')
    <div class="row"> 
      <div class="col-sm-12">
        <div class="card">
          @if ($errors->has('error'))
              <div class="alert alert-success">
                  {{ $errors->first('error') }}
              </div>
          @endif
          <div class="card-header">
            <h4>Danh sách liên hệ</h4>
          </div>
          <div class="table-responsive">
            <a class="btn btn-primary" href="{{route('Fromcontact')}}"> thêm liên hệ</a>
            <table class="table">
              <thead>
                <tr class="b-b-primary">
                  <th scope="col">STT</th>
                  <th scope="col">Tên kích cỡ</th>
                  <th scope="col">Thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $list as $key=>$as )
                <tr class="b-b-tertiary">
                    <th scope="row">{{$key+1}}</th>    
                    <th scope="row">{{$as->name}}</th>    
                    <th scope="row">{{$as->phone}}</th>    
                    <th scope="row">{{$as->topic}}</th>    
                    <th scope="row">{{$as->message}}</th>    
                    <td>
                        <a class="btn btn-primary my-1" href="{{route('getcontact',$as->id)}}">sửa</a>
                       
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