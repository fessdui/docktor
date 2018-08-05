<?php
require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$servicesArray = [
    'dropper' => [
        'text_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'text_2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget erat eu nisl ullamcorper semper in a metus. Sed nec sodales justo. Fusce finibus interdum ex, non vestibulum ex sagittis ac. Curabitur id blandit magna, at gravida orci. Vivamus efficitur sem id elementum luctus. 
        Cras tortor lacus, scelerisque in felis et, fringilla volutpat justo. Proin commodo orci purus, nec ultrices nulla condimentum in. Vivamus ut metus nunc. Mauris ut ullamcorper diam, in laoreet nisi.',
        'image_url' => '/public/cap_min.jpg',
        'type' => 'dropper',
        'name' => 'Капельницы',
        'price' => [
            [
                'cost' => '10',
                'desc' => 'Lorem ipsum dolor sit amet'
            ]
        ],
        'info_block' => [
            [
                'image_url' => '/public/cap_min.jpg',
                'card_title' => 'Общеукрепляющие',
                'card_desc' => '',
            ],
            [
                'image_url' => '/public/cap_min.jpg',
                'card_title' => 'Очищающие',
                'card_desc' => '',
            ],
            [
                'image_url' => '/public/cap_min.jpg',
                'card_title' => 'Востонавливающие',
                'card_desc' => '',
            ]
        ]

    ],
    'puncture' => [
        'text_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'text_2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget erat eu nisl ullamcorper semper in a metus. Sed nec sodales justo. Fusce finibus interdum ex, non vestibulum ex sagittis ac. Curabitur id blandit magna, at gravida orci. Vivamus efficitur sem id elementum luctus. 
        Cras tortor lacus, scelerisque in felis et, fringilla volutpat justo. Proin commodo orci purus, nec ultrices nulla condimentum in. Vivamus ut metus nunc. Mauris ut ullamcorper diam, in laoreet nisi.',
        'image_url' => '/public/cap_min.jpg',
        'type' => 'puncture',
        'name' => 'Уколы',
        'price' => [],
        'info_block' => []
    ],
    'dressings' => [
        'text_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'text_2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget erat eu nisl ullamcorper semper in a metus. Sed nec sodales justo. Fusce finibus interdum ex, non vestibulum ex sagittis ac. Curabitur id blandit magna, at gravida orci. Vivamus efficitur sem id elementum luctus. 
        Cras tortor lacus, scelerisque in felis et, fringilla volutpat justo. Proin commodo orci purus, nec ultrices nulla condimentum in. Vivamus ut metus nunc. Mauris ut ullamcorper diam, in laoreet nisi.',
        'image_url' => '/public/cap_min.jpg',
        'type' => 'dressings',
        'name' => 'Перевязки',
        'price' => [],
        'info_block' => []
    ],
    'enemas' => [
        'text_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'text_2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'image_url' => '/public/cap_min.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget erat eu nisl ullamcorper semper in a metus. Sed nec sodales justo. Fusce finibus interdum ex, non vestibulum ex sagittis ac. Curabitur id blandit magna, at gravida orci. Vivamus efficitur sem id elementum luctus. 
        Cras tortor lacus, scelerisque in felis et, fringilla volutpat justo. Proin commodo orci purus, nec ultrices nulla condimentum in. Vivamus ut metus nunc. Mauris ut ullamcorper diam, in laoreet nisi.',
        'type' => 'enemas',
        'name' => 'Клизмы',
        'price' => [],
        'info_block' => []
    ],
    'patronage' => [
        'text_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'text_2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'image_url' => '/public/cap_min.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget erat eu nisl ullamcorper semper in a metus. Sed nec sodales justo. Fusce finibus interdum ex, non vestibulum ex sagittis ac. Curabitur id blandit magna, at gravida orci. Vivamus efficitur sem id elementum luctus. 
        Cras tortor lacus, scelerisque in felis et, fringilla volutpat justo. Proin commodo orci purus, nec ultrices nulla condimentum in. Vivamus ut metus nunc. Mauris ut ullamcorper diam, in laoreet nisi.',
        'type' => 'patronage',
        'name' => 'Патронаж',
        'price' => [],
        'info_block' => []
    ],
    'poisoning' => [
        'text_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'text_2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae dui quis ligula viverra aliquam.',
        'image_url' => '/public/cap_min.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget erat eu nisl ullamcorper semper in a metus. Sed nec sodales justo. Fusce finibus interdum ex, non vestibulum ex sagittis ac. Curabitur id blandit magna, at gravida orci. Vivamus efficitur sem id elementum luctus. 
        Cras tortor lacus, scelerisque in felis et, fringilla volutpat justo. Proin commodo orci purus, nec ultrices nulla condimentum in. Vivamus ut metus nunc. Mauris ut ullamcorper diam, in laoreet nisi.',
        'type' => 'poisoning',
        'name' => 'Лечение отравлений',
        'price' => [],
        'info_block' => []
    ],
];

$specialistsArray = [
    [
        'image' => '/public/specialist/IMG-20180710-WA0006.jpg',
        'stage' => '10',
        'desc'  => ''
    ],
    [
        'image' => '/public/specialist/IMG-20180710-WA0009.jpg',
        'stage' => '10',
        'desc'  => ''
    ],
];

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../views'
));


$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'dbs.options' => array ([
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'doctor',
        'user'      => 'root',
        'password'  => '210989',
        'charset'   => 'utf8',
        ]
    ),
));

$services = $app['controllers_factory'];
$services->get('/', function () use ($app) {
    return $app['twig']->render('services.html');
});


$orders = $app['controllers_factory'];
$orders->get('/', function ($id) use ($app) {

    if ( $id != 'dd18152969c8cc6c4797630450dbcaac') {
        $app->abort(404, "Нет такой страницы!)");
    }

    $orders =  $app['db']->fetchAll('SELECT * FROM `orders` ORDER BY created DESC');

    return $app['twig']->render('orders.html', ['orders' => $orders]);
});

$price = $app['controllers_factory'];
$price->get('/', function () use ($app) {
    return $app['twig']->render('price.html');
});

$about = $app['controllers_factory'];
$about->get('/', function () use ($app) {
    return $app['twig']->render('about.html');
});

$contacts = $app['controllers_factory'];
$contacts->get('/', function () use ($app) {
    return $app['twig']->render('contacts.html');
});

$specialists = $app['controllers_factory'];
$specialists->get('/', function () use ($app ,$specialistsArray) {
    return $app['twig']->render('specialists.html', ['specialists' => $specialistsArray]);
});

$service = $app['controllers_factory'];
$service->get('/', function ($id) use ($app, $servicesArray) {

    if (!isset($servicesArray[$id])) {
        $app->abort(404, "Post $id does not exist.");
    }

    $params = $servicesArray[$id];


    return $app['twig']->render('service.html',  ['service' => $params]);
});

$app->get('/', function() use ($app) {
    return $app['twig']->render('index.html');
});

$app->post('/place', function(Request $request) use ($app) {
    $result = [];
    $result['errors'] = true;

    $name = $request->request->get('name');

    if ($name) {
        $name = trim(htmlspecialchars($name));
    } else {
        $result['message'][] = 'Поле с именем не может быть пустым';
    }

    $phone = $request->request->get('phone');
    if ($phone) {
        $phone = trim(htmlspecialchars($phone));

        $pattern = "/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/";
        if(!preg_match($pattern, $phone)) {
            $result['message'][] = 'Пожалуйста введите телефон в правильном формате';
        }
    } else {
        $result['message'][] = 'Поле с телефоном не может быть пустым';
    }

    $description = $request->request->get('desc');
    if ($description) {
        $description = trim(htmlspecialchars($description));
    }

    $params = [
        'name' => $name,
        'phone' => $phone,
        'description' => $description,
        'created' => date('Y-m-d H:i:s')
    ];

    if (!isset($result['message'])) {

        $response = $app['db']->insert('orders', $params);


        if($response > 0) {
            $result['message'] = 'Заказ успешно оформлен! Мы с вами скоро свяжемся!';
            $result['errors'] = false;
        }
    }

    return $app->json($result, 201);
});

$app->mount('/services', $services);
$app->mount('/services/{id}', $service);
$app->mount('/specialists', $specialists);
$app->mount('/contacts', $contacts);
$app->mount('/about', $about);
$app->mount('/price', $price);
$app->mount('/orders/{id}', $orders);

$app->run();