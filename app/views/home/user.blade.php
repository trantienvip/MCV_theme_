@extends('client-layout.main')
@section('content')
<style>
    table, td, th {
        border-collapse: collapse;
        border: 1px solid #333;
        padding: 15px;
    }
    table{
        margin: 20px 0;
        width: 100%;
    }
    .btn{
        margin: 1rem 0;
    }
</style>
<a class="btn btn-info" style="margin-bottom: 0"href="./add">Thêm</a>
<h2 style="text-align: center">Danh sách thành viên</h2>

<form action="" method="get">
    <input type="text" name="searchValue" placeholder="Nhập từ khóa cần tìm">
    <button type="submit" name="btnSearch">Tìm</button>
</form>

<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Giới tính</th>
        <th>birth_date</th>
        <th>address</th>
    </thead>
    <tbody>
        @foreach ($users as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td><img width="80px" src="{{ $u->avatar }}" alt=""></td>
                <td>
                    @if ($u->gender == 1)
                    Nam
                    @else
                    Nữ
                    @endif
                </td>
                <td>{{ $u->birth_date }}</td>
                <td>{{ $u->address }}</td>
                <td><a class="btn btn-secondary" href="./edit?id={{ $u->id }}">edit</a></td>
                <td><a class="btn btn-danger" href="./del?id={{ $u->id }}">Xóa</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection