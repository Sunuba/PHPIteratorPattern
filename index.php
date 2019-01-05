<?php require_once ('vendor/autoload.php');

use Iter\NameRepo;

$name_repo = new NameRepo();
$name_repo->addName('John');
$name_repo->addName('Frisky');
$name_repo->addName('Nubar');
$name_repo->addName('Michael');

print_r ($name_repo);


foreach ($name_repo as $key => $value)
{
    echo ' ' . $key . ' - ' . $value;
}