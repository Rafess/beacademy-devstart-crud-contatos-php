<!--  aula 27 -->
<?php 
    $url = $_SERVER['REQUEST_URI'];
    include 'screens/head.php';

    include 'actions.php';
    include 'screens/menu.php';

    match($url) {
        '/' => home(),
        '/login' => login(),
        '/register' => register(),
        '/list' => listPage(),
        default => error404()
    };

    


    include 'screens/footer.php';