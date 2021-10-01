<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Chỉnh sửa</title>
    <style>
        .container {
            display: flex;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            justify-content: center;
        }
        #anh{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<div class="container">
    <form action="index.php?ctrl=UserController&action=edit" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $users->name ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $users->email ?>">
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputEmail1">Avatar</label>
            <input type="text" class="form-control" name="avatar" value="<?= $users->avatar ?>">
        </div> -->

        <div class="form-group" id="anh">
            <label for="exampleInputEmail1">Avatar</label>
            <img width="100px" src="<?= $users->avatar ?>" >
            <input type="file" name="upload" id="upload" accept=".jpg, .jpeg, .png">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Ngày sinh</label>
            <input type="date" class="form-control" name="birth_date" value="<?= $users->birth_date ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" name="address" value="<?= $users->address ?>">
        </div>
        <button type="submit" name="btnSubmit" value="<?= $users->id ?>" class="btn btn-primary">Thay đổi</button>
    </form>
</div>

<body>
    <script>
        var gender = document.querySelector('select');
        gender.value = '<?= $users->gender ?>';
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>