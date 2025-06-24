<?php
$username='Ivy';

$user_array=[
    'name'=>'Ivy',
    'age'=>24,
    'active'=>true,
];

class User{
    public $name;
    public $age;
    public $active;

    public function __construct($name, $age, $active)
    {
        $this->name =$name;
        $this->age =$age;
        $this->active=$active;
    }
}
$user_object =new User('Ivy', 24 , true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Páginas dinâmicas da web</title>
    
</head>
<body>
    <pre>
        <p>Scala: <strong><?php var_dump($username);?></strong></p>
    </pre>
    <pre>
        <p>Array: <strong><?php var_dump($user_array);?></strong></p>
    </pre>
    <pre>
        <p>Objeto: <strong><?php var_dump($user_object);?></strong></p>
    </pre>


    
</body>
</html>