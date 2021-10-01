<?php
namespace App\Controllers;
use App\Models\Users; 

class UserController extends BaseController{
    public function index(){
        if (isset($_GET['btnSearch'])) {
          $users = Users::where('name', 'like' ,"%".$_GET['searchValue']."%" )->get();
        }else{
          $users = Users::orderBy('id', 'asc')->get();
        }
        $this->render('home.user', ['users' => $users, 'title' => 'Danh sách thành viên']);
    }
    public function addUsers(){
      if (isset($_POST['btnAdd'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $birth_date = $_POST['birth_date'];
        $address = $_POST['address'];

        $tmp_name = $_FILES['avatar']['tmp_name'];
        $nameIMG = $_FILES['avatar']['name'];
        $path = "./public/img";
        move_uploaded_file($tmp_name, "./public/img/".$nameIMG); 
        $avatar = $path .'/'. $nameIMG;

        $model = new Users();
        $model->name = $name;
        $model->email = $email;
        $model->avatar = $avatar;
        $model->gender = $gender;
        $model->birth_date = $birth_date;
        $model->address = $address;

        $model->save();
        header('Location: ./user');
      }
      $this->render('home.add', ['title' => 'Thêm user']);
    }

    public function editUsers(){
        $id = $_GET['id'];
      if (isset($_POST['btnEdit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $birth_date = $_POST['birth_date'];
        $address = $_POST['address'];

        $tmp_name = $_FILES['avatar']['tmp_name'];
        $nameIMG = $_FILES['avatar']['name'];
        $tmp_size = $_FILES['avatar']['size'];

        if ($tmp_size > 0) {
          $path = "./public/img";
          move_uploaded_file($tmp_name, "./public/img/".$nameIMG); 
          $avatar = $path .'/'. $nameIMG;
        }else{
          $users = Users::find($id);
          $avatar = $users->avatar;
        }

        $model = Users::find($id);
        $model->name = $name;
        $model->email = $email;
        $model->avatar = $avatar;
        $model->gender = $gender;
        $model->birth_date = $birth_date;
        $model->address = $address;
        $model->save();
        header('Location: ./user');
      }

      $users = Users::find($id);
      $this->render('home.edit', ['users' => $users , 'title' => 'Update user']);
    }

    public function delUsers(){
      $id = $_GET['id'];
      // $model = Users::destroy($id);
      Users::softDeletes($id);
      header('Location: ./user');
    }
};

?>