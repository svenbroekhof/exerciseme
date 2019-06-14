<section class="content">
    <?php 
        if (isset($_GET["content"])){
            // echo $_GET["content"];exit();
            include("./" . $_GET["content"] . ".php"); 
        }else{
            include("./home.php");
        }
    ?>
</section>