<?php
    $main_menu = [
        [
            'url_class' => '',
            'href' => 'index.php#news',
            'title' => 'Новости'
        ],
        [
            'url_class' => 'dropdown',
            'href' => '#',
            'title' => 'Рекомендую'
        ],
        [
            'url_class' => '',
            'href' => 'index.php#goal',
            'title' => 'Приглашаю'
        ],
        [
            'url_class' => '',
            'href' => 'catalog.php',
            'title' => 'Каталог'
        ],
        [
            'url_class' => '',
            'href' => 'index.php#partners',
            'title' => 'Контакты'
        ]
    ];

    $dropdown_menu = [
        [
            'title' => 'Кондиционер'
        ],
        [
            'title' => 'Бальзам для век'
        ],
        [
            'title' => 'Динамический увлажняющий крем'
        ],
        [
            'title' => 'Лосьон для тела "Солярис"'
        ],
        [
            'title' => 'Очищающее молочко для лица'
        ],
        [
            'title' => 'Комплект пробников кремов'
        ],
        [
            'title' => 'Грязевая маска для лица'
        ],
        [
            'title' => 'Крем для рук и ногтей'
        ],
        [
            'title' => 'Солярис для лица c витамином "А"'
        ],
        [
            'title' => 'Ночной крем'
        ],
        [
            'title' => 'Водные компрессы Мёртвого Моря'
        ],
        [
            'title' => 'Квартет солей Мертвого моря'
        ],
        [
            'title' => 'Шампунь против перхоти'
        ],
        [
            'title' => 'Шампунь для повседневного пользования'
        ],
        [
            'title' => 'Тонизирующий лосьон для тела'
        ],
        [
            'title' => 'Зубная паста "Шинсин"'
        ]
    ];

    $news_preview = [
        [
            'img' => 'img/news1.png',
            'preview' => 'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"',
            'href' => 'article.php'
        ],
        [
            'img' => 'img/news2.png',
            'preview' => 'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"',
            'href' => ''
        ],
        [
            'img' => 'img/news3.png',
            'preview' => 'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"',
            'href' => ''
        ],
        [
            'img' => 'img/news4.png',
            'preview' => 'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"',
            'href' => ''
        ]
    ];

    $recommended = [
        [
            'href' => '#',
            'title' => 'Соли и грязи'
        ],
        [
            'href' => '#',
            'title' => 'Кремы и лосьены'
        ],
        [
            'href' => '#',
            'title' => 'Парфюмерия'
        ],
        [
            'href' => '#',
            'title' => 'Витамины и бады'
        ],
        [
            'href' => '#',
            'title' => 'Чаи'
        ]
    ];

    $catalog_products = [
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'img' => 'img/producr-small.png',
            'name' => 'Шампунь',
            'price' => '280'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'img' => 'img/producr-small.png',
            'name' => 'Блеск для губ',
            'price' => '777'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'img' => 'img/producr-small.png',
            'name' => 'Крем для бритья',
            'price' => '523'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'img' => 'img/producr-small.png',
            'name' => 'Скраб для тела',
            'price' => '785'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'img' => 'img/producr-small.png',
            'name' => 'Крем для бритья',
            'price' => '456'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'img' => 'img/producr-small.png',
            'name' => 'Скраб для тела',
            'price' => '257'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'img' => 'img/producr-small.png',
            'name' => 'Гель для душа',
            'price' => '150'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'img' => 'img/producr-small.png',
            'name' => 'Пена дял ванны',
            'price' => '40'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'img' => 'img/producr-small.png',
            'name' => 'Мыло ручной работы',
            'price' => '35'
        ]
    ];

    $partners = [
        [
            'photo' => 'img/partner-1.png',
            'name' => 'Диорнева Татьяна',
            'position' => 'Директор',
            'location' => 'Мариуполь' //also there are we can add the contacts
        ],
        [
            'photo' => 'img/partner-2.png',
            'name' => 'Проценко Мария',
            'position' => 'Директор',
            'location' => 'Донецк' //also there are we can add the contacts
        ],
        [
            'photo' => 'img/partner-1.png',
            'name' => 'Диорнева Татьяна',
            'position' => 'Директор',
            'location' => 'Черкассы' //also there are we can add the contacts
        ],
        [
            'photo' => 'img/partner-2.png',
            'name' => 'Проценко Мария',
            'position' => 'Директор',
            'location' => 'Киев' //also there are we can add the contacts
        ]
    ];

    $parfums = [
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Дезодорант женский "Фиона"'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Дезодорант женский "Рут"'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Дезодорант женский "Киви"'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Дезодорант женский "Леди"'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Мужской дезодорант "Лорд"'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Дезодорант женский "Фиона"'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Женские духи "Леди"'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Женские духи "Монел"'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Женские духи "1954"'
        ]
    ];

    $other = [
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Lorem ipsul dolor'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Lorem ipsul dolor'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Lorem ipsul dolor'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Lorem ipsul dolor'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Lorem ipsul dolor'
        ],
        [
            'href' => 'product-detail.php', //there are must be 'id', but for now it will be so
            'name' => 'Lorem ipsul dolor'
        ]
    ];

?>