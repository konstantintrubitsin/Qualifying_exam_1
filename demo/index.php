<?php 
    include "./components/core.php";

    if(isset($_SESSION['user'])){
        header("Location: state.php");
    }

    if(isset($_POST['log'])){
        $password = md5($_POST['password']);

        $users = $link->query("SELECT * FROM `users` 
            WHERE `login` = '{$_POST['login']}' AND `password` = '$password'");

        if($users->num_rows != 0){
            $user = $users->fetch_assoc();
            $_SESSION['user'] = [
                'id' => $user['id'],
                'isAdmin' => $user['isAdmin'],
            ];
            header("Location: state.php");
        }else{
            $error = "Не верный логин или пароль";
        }
    }

    include "./components/header.php";
?>
    <main>
        <form action="" method="post">
            <p>
                <label for="login">login</label>
                <input type="text" name="login" id="login">
            </p>
            <p>
                <label for="password">пароль</label>
                <input type="password" name="password" id="password">
            </p>
            <?php 
                if(isset($error)){
                    echo "<p>$error</p>";
                }
            ?>
            <button name="log">
                Авторизироваться
            </button>
        </form>
    </main>

</body>
</html>