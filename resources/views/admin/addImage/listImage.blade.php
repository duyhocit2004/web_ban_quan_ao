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
            <input class="form-control" id="image"   type="file" name="image[]" placeholder="ảnh" multiple>
            @error('image')
              <p class="text-danger">{{$message}}</p>
            @enderror
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

@section('js1')
    <script>
        var image = document.getElementById('image');
        var quantityImage = document.getElementById('quantityImage');
        image.addEventListener('change',function (){
            if(image.files.leght > 4 ){
                quantityImage.textContent  = `bạn chỉ chọn được 4 file`;
                image.value = ""
            }else {
                quantityImage.textContent = ""; // Xóa thông báo lỗi
            }
        });
    </script>
@endsection