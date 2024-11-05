@extends('admin.index')

@section('content')
<div class="">
    <div class="card"> 
      <div class="card-header pb-0">
        <H4>thêm sản phẩm</H4>
      </div>
      <div class="card-body">
        <form class="theme-form row g-3" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="col-sm-3">
            <label class="form-label">tên sản phẩm</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="text"name="name" placeholder="tên sản phẩm">
          </div>

          <div class="col-sm-3">
            <label class="form-label">ảnh sản phẩm</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="file" name="image" placeholder="tên sản phẩm">
          </div>

          <div class="col-sm-3">
            <label class="form-label">ảnh sản phẩm</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control"   type="file" name="image" placeholder="tên sản phẩm">
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="select">màu</label>
                <select name="color" class="form-select" id="select">
                  <option value="">1</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="select">kích cỡ</label>
                <select name="size" class="form-select" id="select">
                  <option value="">1</option>
                </select>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="select">loại</label>
                <select name="categories" class="form-select" id="select">
                  <option value="">1</option>
                </select>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="edgestextarea">tiêu đề</label>
                <textarea class="form-control" id="edgestextarea" rows="3"></textarea>
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