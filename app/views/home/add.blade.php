@extends('client-layout.main')
@section('content')

<form action="./addok" method="POST" style="margin: 2rem 0; padding: 0 10rem; text-align: center" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">Họ và tên:</label>
      <input type="text" class="form-control" name="name" placeholder="Họ và tên">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email:</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Avatar</label>
        <input type="file" class="form-control" name="avatar" placeholder="Avatar" accept=".jpg, .jpeg, .png">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Giới tính</label>
        <select name="gender">
            <option value="1">Nam</option>
            <option value="2">Nữ</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Ngày sinh</label>
        <input type="date" class="form-control" name="birth_date" placeholder="Ngày sinh">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Địa chỉ</label>
        <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
    </div>
    <button type="submit" name="btnAdd" class="btn btn-primary">Thêm</button>
  </form>
@endsection