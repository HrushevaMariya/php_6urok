
<? php

возврат [
    'db' => [
        'dsn' => 'mysql: dbname = app; host = 127.0.0.1' ,
        'user' => 'root' ,
        'pwd' => '1531' ,
    ],
    'шаблоны' => __DIR__. '/../templates' ,
    'routing' => [
        'логин' => 'пользователи / логин' ,
        'logout' => 'пользователи / выход из системы' ,
        'корзина' => 'пользователи / корзина' ,
        'заказ' => 'пользователи / заказ' ,
        'catalog \ / ([0-9] +) \ / ([0-9] +)' => 'catalog / good' ,
        'каталог \ / ([0-9] +)' => 'каталог / категория' ,
        'catalog' => 'catalog / index' ,
        'pages \ / (. *)' => 'pages / index' ,
        '(\ w +) \ / (\ w +)' => '<контроллер> / <действие>' ,
        '(\ w +)' => '<контроллер> / индекс' ,
        '^ $' => 'индекс / индекс' ,
        '(. *)' => 'индекс / ошибка' ,
    ],
];