<?php 
function home() {
    include 'screens/home.php';
}
function login() {
    include 'screens/login.php';
}
function listPage() {
    $contacts = file('./data/contacts.csv');
    include 'screens/list.php';
}
function register() {
    if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $arquive = fopen("./data/contacts.csv", 'a+');
    fwrite($arquive, "{$name};{$email};{$phone}".PHP_EOL);
    fclose($arquive);
    $message = "Cadastro Realizado com sucesso!";
    include './screens/message.php';
    }
    include 'screens/register.php';
}
function error404()  {
    include 'screens/404.php';
}

function remove() {
    $id = $_GET['id'];

    $contacts = file('./data/contacts.csv');
    unset($contacts[$id]);

    unlink('./data/contacts.csv');
    $arquive = fopen('./data/contacts.csv', 'a+');
    foreach($contacts as $contact) {
        fwrite($arquive, $contact);
    }
    fclose($arquive);
    $message = 'Contato excluído com sucesso!';
    include './screens/message.php'; 
}
function update() {
    $id = $_GET['id'];
    $contacts = file('./data/contacts.csv');
    $data = explode(';', $contacts[$id]);

    if($_POST) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $contacts[$id] = "{$name};{$email};{$phone}" .PHP_EOL;
        unlink('./data/contacts.csv');
        $arquive = fopen('./data/contacts.csv', 'a+');
        foreach($contacts as $contact) {
            fwrite($arquive, $contact);
        }
        fclose($arquive);
        $message = 'Contato Atualizado!';
        include './screens/message.php';
    }
   
    include './screens/update.php';
}