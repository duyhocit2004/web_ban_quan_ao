@extends('admin.index')

@section('content')
<div class="">
    <div class="card"> 
      <div class="card-header pb-0">
        <H4>thêm sản phẩm</H4>
      </div>
      <div class="card-body">
        <form class="theme-form row g-3" action="" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-sm-3">
            <label class="form-label">ảnh sản phẩm</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="file" name="image[]" placeholder="ảnh" value="">
            <p class="text-danger" id="quantityImage"></p>
            @error('image')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('js')
    
@endsection