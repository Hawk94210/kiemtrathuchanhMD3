@extends('master')

@section('content')
<form method="POST">
  @csrf
    <div class="form-group">
        <label >Name</label>
        <input name="name" type="text" class="form-control" value="{{ $market->name }}">
      </div>
      <div class="form-group">
        <label >Phone</label>
        <input name="phone" type="text" class="form-control" value="{{ $market->phone }}">
      </div>
      <div class="form-group">
        <label >Email</label>
        <input name="email" type="email" class="form-control"  value="{{ $market->email }}">
      </div>
      <div class="form-group">
        <label >Address</label>
        <input name="address" type="text" class="form-control"  value="{{ $market->address }}">
      </div>
    <div class="form-group">
      <label >Manager</label>
      <input name="manager" type="text" class="form-control"  value="{{ $market->manager }}">
    </div>
    <div class="form-group">
      <label >Status</label>
      <input name="status" type="text" class="form-control"  value="{{ $market->status }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection