<?php 
    include "./components/core.php";

    if(!isset($_SESSION['user'])){
        header("Location: index.php");
    }

    include "./components/header.php";
?>
    <main>
       
    </main>

</body>
</html>