@extends('admin.index')

@section('content')
<div class="">
    <div class="card"> 
      <div class="card-header pb-0">
        <H4>Thêm kích cỡ</H4>
      </div>
      <div class="card-body">
        <form class="theme-form row g-3" action="{{route('addsize')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-sm-3">
            <label class="form-label">kích cỡ</label>
          </div>
          <div class="col-sm-9">
            <input class="form-control" type="text"name="name" placeholder="XXLL" value="{{old('name')}}">
            @error('name')
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