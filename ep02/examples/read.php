<?php


require __DIR__ . "/../vendor/autoload.php";

require __DIR__ . "/../vendor/coffeecode/datalayer/src/Connect.php";

require __DIR__ . "/../source/config.php";

require __DIR__ . "/../Source/Models/User.php";

require __DIR__ . "/../Source/Models/Address.php";

/*use CoffeeCode\DataLayer\Connect; 

$conn = Connect::getInstance();
$error = Connect::getError();

if ($error) 
{
    echo $error->getMessage();
    die ();
}

$query = $conn->query("SELECT * FROM users");
var_dump($query->fetchAll());*/

use Source\Models\User;

$user = new User;
$list = $user->find()->fetch(true);
var_dump($user);

/* @var $userItem User*/
foreach ($list as $userItem) {
    var_dump($userItem->first_name);
    $addresses = $userItem->addresses();
    if ($addresses) {
        foreach ($addresses as $address) {
            var_dump($address);
        }
    } else {
        echo "Nenhum endereço encontrado para o usuário.";
    }
}
