@extends('admin.index')

@section('content')
<div class="">
    <div class="card"> 
      <div class="card-header pb-0">
        <H4>thêm tài khoản</H4>
      </div>
      <div class="card-body">
        <form class="theme-form row g-3" action="{{route('addcontact')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-sm-3">
            <label class="form-label">tên</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control" type="text"name="name" placeholder="tên " value="{{old('name')}}">
            @error('name')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">đề tài</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="text" name="topic" placeholder="quần áo ...." value="{{old('topic')}}">
            @error('topic')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">số điện thoại</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="text" name="phone" placeholder="số điện thoại " value="{{old('phone')}}">
            @error('phone')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="edgestextarea">nội dung </label>
                <textarea class="form-control" name="message" id="edgestextarea" rows="3"  value="{{old('message')}}"></textarea>
                @error('message')
              <p class="text-danger">{{$message}}</p>
            @enderror
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