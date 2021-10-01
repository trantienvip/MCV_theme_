@extends('client-layout.main')
@section('content')
<style>
    select {
        padding: 2px;
        border-radius: 5px;
    }
</style>
<form action="./editok?id={{ $users->id }}" method="POST" style="margin: 2rem 0; padding: 0 10rem; text-align: center" enctype="multipart/form-data">
    <div class="form-group">
      <label for="">Họ và tên:</label>
      <input type="text" class="form-control" name="name" value="{{$users->name}}">
    </div>
    <div class="form-group">
        <label for="">Email:</label>
        <input type="text" class="form-control" name="email" value="{{$users->email}}">
    </div>
    <div class="form-group">
        <label for="">Avatar</label><br>
        <img width="100px" src="{{$users->avatar}}" alt="">
        <input type="file" class="form-control" name="avatar" accept=".jpg, .jpeg, .png">
    </div>
    <div class="form-group">
        <label for="">Giới tính</label>
        <select name="gender">
            <option value="1">Nam</option>
            <option value="2">Nữ</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Ngày sinh</label>
        <input type="date" class="form-control" name="birth_date" value="{{$users->birth_date}}">
    </div>
    <div class="form-group">
        <label for="">Địa chỉ</label>
        <input type="text" class="form-control" name="address" value="{{$users->address}}">
    </div>
    <button type="submit" name="btnEdit" class="btn btn-success">Update</button>
  </form>

<script>
    var gender = document.querySelector('select');
    gender.value = <?= $users->gender ?>;
</script>
@endsection