<?

    $errors = [];

    if(array_key_exists('submit', $_POST)) {

        if(empty($_POST('email'))){
            $errors['email'] = 'please enter your email';
        }
        if(empty($_POST('password'))){
            $errors['password'] = 'please enter your password';
        }
        if(empty($errors)){
            
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="submit" method="post">
    
        <label for="email">Email :</label>
        <input type="email" name="email" placeholder="enter email">

        <label for="password">Password :</label>
        <input type="text" name="password" placeholder="enter password">

        <input type="submit" name="submit">
    
    </form>
</body>
</html>