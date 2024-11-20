@extends('admin.index')

@section('content')
<div class="">
    <div class="card"> 
      <div class="card-header pb-0">
        <H4>thêm tài khoản</H4>
      </div>
      <div class="card-body">
        <form class="theme-form row g-3" action="{{route('addaccount')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-sm-3">
            <label class="form-label">tên</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control" type="text"name="username" placeholder="tên người dùng" value="{{old('username')}}">
            @error('username')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">mật khẩu</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="password" name="password" placeholder="mật khẩu" value="{{old('password')}}">
            @error('password')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          
          <div class="col-sm-3">
            <label class="form-label">ảnh</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="file" name="image" placeholder="ảnh" value="{{old('image')}}">
            @error('image')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">email</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="email" name="email" placeholder="email" value="{{old('email')}}">
            @error('email')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="raiseselect">vai trò</label>
                <select name="role_id" class="form-select" id="raiseselect">
                  @foreach ( $role as $cate )
                  <option value="{{$cate->id}}">{{$cate->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col">
              <div class="text-end">
                <button class="btn btn-primary me-2" type="submit">thêm</button>
                <a class="btn btn-danger" href="{{route('contact')}}">thoát</a>
              </div>
            </div>
          </div>
          

        </form>
      </div>
    </div>
  </div>
@endsection