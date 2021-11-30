<div class="container-home">
    <?php
        echo "Hello <h3>$login</h3>";
        echo "<pre>";
        $_SESSION['data'] = date('h:i:s');
        //        sleep(30);
        echo "<pre>";
        print_r($_SESSION);
    ?>
</div>



