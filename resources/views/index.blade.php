@extends('master')
@section('content')


<a href="{{ route('show.create') }}"><button type="submit" class="btn btn-primary">Thêm đại lý</button></a>
<form action="{{ route('search') }}" method="GET">
    @csrf
    <input name="search" type="text" placeholder="Search products..." required>
    <input type="submit" value="Search">
</form>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Mã đại lý</th>
            <th>Tên đại lý</th>
            <th>Điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Tên người quản lý</th>
            <th>Trạng thái</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($markets as $key => $market)
            <tr>
                <td>{{ $key + 101 }}</td>
                <td>{{ $market->name }}</td>
                <td>{{ $market->phone }}</td>
                <td>{{ $market->email }}</td>
                <td>{{ $market->address }}</td>
                <td>{{ $market->manager }}</td>
                <td>{{ $market->status }}</td>
                <td>
                    <a href="{{ route('show.edit',$market->id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
                    <a href="{{ route('delete',$market->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
