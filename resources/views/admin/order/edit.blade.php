@extends('admin.index')

@section('content')
<div class="">
    <div class="card"> 
      <div class="card-header pb-0">
        <H4>thêm sản phẩm</H4>
      </div>
      <div class="card-body">
        <form class="theme-form row g-3" action="{{route('updateOrder',$listOrder->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="col-sm-3">
            <label class="form-label">tên nguoi dung</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control" type="text"name="username" placeholder="tên sản phẩm" value="{{old('username',$listOrder->username)}}">
            @error('username')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">số điện thoại</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="text" name="phone" placeholder="ảnh" value="{{old('phone',$listOrder->phone)}}">
            @error('phone')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">email</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="text" name="email" placeholder="giá sản phẩm" value="{{old('email',$listOrder->email)}}">
            @error('email')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="edgestextarea">tiêu đề </label>
                <textarea class="form-control" name="note" id="edgestextarea" rows="3"  value="{{old('note',$listOrder->note)}}"></textarea>
                @error('note')
              <p class="text-danger">{{$message}}</p>
            @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="raiseselect">thể loai</label>
                <select name="payment_method_id" class="form-select" id="raiseselect">
                  @foreach ( $payment_method as $method )
                  <option value="{{ $method->id }}" {{ $listOrder->payment_method_id == $method->id ? 'selected' : '' }}>
                    {{ $method->name }}
                    </option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="text-end">
                <button class="btn btn-primary me-2" type="submit">Submit</button>
                <input class="btn btn-danger" type="reset" value="Cancel">
              </div>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
@endsection