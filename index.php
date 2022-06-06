<!--  aula 27 -->
<?php 
    $url = explode('?', $_SERVER['REQUEST_URI']);
    include 'screens/head.php';

    include 'actions.php';
    include 'screens/menu.php';

    match($url[0]) {
        '/' => home(),
        '/login' => login(),
        '/register' => register(),
        '/list' => listPage(),
        '/remove' => remove(),
        '/update' => update(),
        default => error404()
    };

    


    include 'screens/footer.php';