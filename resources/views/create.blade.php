@extends('master')

@section('content')
<form method="POST" action="{{ route('store') }}">
  @csrf
    <div class="form-group">
        <label >Tên đại lý</label>
        <input name="name" type="text" class="form-control" >
      </div>
      <div class="form-group">
        <label >Số điện thoai</label>
        <input name="phone" type="text" class="form-control" >
      </div>
      <div class="form-group">
        <label >Email</label>
        <input name="email" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label >Địa chỉ</label>
        <input name="address" type="text" class="form-control">
      </div>
    <div class="form-group">
      <label >Người quản lý</label>
      <input name="manager" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label >Trạng thái</label>
      <input name="status" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection