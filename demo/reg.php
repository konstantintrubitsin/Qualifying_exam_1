<?php 
    include "./components/core.php";

    if(isset($_SESSION['user'])){
        header("Location: state.php");
    }

    if(isset($_POST['reg'])){
        $password = md5($_POST['password']);

        $link->query("INSERT INTO `users`(`login`, `name`, `surname`, `patronymic`, `email`, `phone`, `password`) 
        VALUES ('{$_POST['login']}','{$_POST['name']}','{$_POST['surname']}','{$_POST['patronymic']}','{$_POST['email']}','{$_POST['phone']}', '$password')");
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
            <p>
                <label for="surname">Фамилия</label>
                <input type="text" name="surname" id="surname">
            </p>
            <p>
                <label for="name">Имя</label>
                <input type="text" name="name" id="name">
            </p>
            <p>
                <label for="patronymic">Отчество</label>
                <input type="text" name="patronymic" id="patronymic">
            </p>
            <p>
                <label for="email">email</label>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <label for="phone">Телефон</label>
                <input type="text" name="phone" id="phone">
            </p>
            <button name="reg">
                Зарегистрироваться
            </button>
        </form>
    </main>

</body>
</html>