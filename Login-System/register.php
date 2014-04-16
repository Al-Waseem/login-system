<?php
require_once 'core/init.php';

if(Input::exists()){
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        'username'  => array(
            'required' => true,
            'min' => 2,
            'max' => 20,
            'unique' => 'users'
        ),
        'password'  => array(
            'required' => true,
            'min' => 6
        ),
        'password_again'  => array(
            'required' => true,
            'mathes' => 'password'
        ),
        'name'  => array(
            'required' =>true,
            'min' => 2,
            'max' => 50
        )
    ));
    
    if ($validation->passed()) {
        //register user
    }else{
        //output error
    }
}
?>

<form action="" method="post">
     <div class="field" >
         <label for="username">Username</label>
         <input type="text" name="username" id="username" value="" autocomplete="off">
     </div>
     <div class="field">
         <label for="password">Choose a password</label>
         <input type="password" name="password" id="password">
     </div>
    <div class="field">
         <label for="password_again">Repite the password</label>
         <input type="password" name="password_again" id="password_again">
     </div>
    <div class="field">
         <label for="name">Name</label>
         <input type="text" name="name" value="" id="name">
     </div>
    <div class="field">
        <input type="submit" value="register">
     </div>
 </form>