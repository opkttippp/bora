<div class="container-home">
    <?php
    $login = $login ?? '';
    echo "Hello <h3>$login</h3>";
    echo "<pre>";
    $_SESSION['data'] = date('h:i:s');
    echo 'session_id = ' . session_id();
    echo "<br>";
    echo 'session_name = ' . session_name();
    ?>
</div>