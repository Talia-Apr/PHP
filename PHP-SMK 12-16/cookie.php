<?php 

    $cookie_name = 'user';

    $cookie_value= 'Talia';

    setcookie ($cookie_name, $cookie_value);

    $cookie_value= 'Lia';

    setcookie ($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name];

    setcookie("user", "", time() - 3600);

    echo '<br>';

    var_dump ($_COOKIE);
?>