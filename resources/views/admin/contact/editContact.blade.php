@extends('admin.index')

@section('content')
<div class="">
    <div class="card"> 
      <div class="card-header pb-0">
        <H4>thêm sản phẩm</H4>
      </div>
      <div class="card-body">
        <form class="theme-form row g-3" action="{{route('updateproduct',$list->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="col-sm-3">
            <label class="form-label">tên sản phẩm</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control" type="text"name="name" placeholder="tên sản phẩm" value="{{old('name',$list->name)}}">
            @error('name')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">ảnh sản phẩm</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="file" name="image" placeholder="ảnh" value="{{old('image',$list->image)}}">
            @error('image')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">giá sản phẩm</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="text" name="price" placeholder="giá sản phẩm" value="{{old('price',$list->price)}}">
            @error('price')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">số lượng</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="text" name="quantity" placeholder="só lượng" value="{{old('quantity',$list->quantity)}}">
            @error('quantity')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="col-sm-3">
            <label class="form-label">chất liệu</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="text" name="material" placeholder="chất liệu" value="{{old('material',$list->material)}}">
            @error('material')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>  

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="edgestextarea">tiêu đề </label>
                <textarea class="form-control" name="title" id="edgestextarea" rows="3"  value="{{old('title',$list->title)}}"></textarea>
                @error('title')
              <p class="text-danger">{{$message}}</p>
            @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="raiseselect">thể loai</label>
                <select name="categories_id" class="form-select" id="raiseselect">
                  @foreach ( $categories as $cate )
                  <option value="{{$cate->id}}">{{$cate->name}}</option>
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