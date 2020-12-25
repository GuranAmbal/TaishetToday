<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
  'id' => 'basic',
  'basePath' => dirname(__DIR__),
  'bootstrap' => ['log'],
  'aliases' => [
    '@bower' => '@vendor/bower-asset',
    '@npm'   => '@vendor/npm-asset',
  ],
  'components' => [
    'request' => [
      'cookieValidationKey' => 'MzMGBYse0SNhozFIFHOcEaFOeLDB6XyC',
      'baseUrl'=> '',
    ],
    'formatter' => [
      'dateFormat' => 'dd.MM.YYYY',
      'timeFormat' => 'php:H:i:s',
      'decimalSeparator' => ',',
      'thousandSeparator' => ' ',
      'defaultTimeZone' => 'UTC',
      'timeZone' => 'Europe/Moscow',
      'locale' => 'ru-RU'
    ],
    'user' => [
      'identityClass' => 'app\models\User',
      'enableAutoLogin' => true,
      'loginUrl' =>['auth/login'],
    ],
    'errorHandler' => [
      'errorAction' => 'site/error',
    ],
    'db' => $db,

    /*'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false,
      'rules' => [
        'mesta_taysheta'=>'site/index',
        '<action:contact|about>'=>'site/<action>',
        '<action:login|signup>'=>'auth/<action>',
        'sobytiya_v_tayshete' => 'site/events',
        'istoriya_taysheta' => 'site/historical',
        'telefon_taysheta' => 'site/telefon',
        'mesta/<id:\d+>' => 'site/event-category',
        'sobytiya/<id:4>' => 'site/history-category',
        'istoriya/<id:6|11|12|13>' => 'site/history-category',
        'information/<id:\d+>' => 'site/view',

      ],
    ],*/



    'mailer' => [
      'class' => 'yii\swiftmailer\Mailer',
      'useFileTransport' => false,
      'messageConfig' => [
        'charset' => 'UTF-8',
      ],
      'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.yandex.ru',
        'username' => 'dusha2b63gur@yandex.ru',
        'password' => 'radhakrishna',
        'port' => '465',
        'encryption' => 'ssl',
      ],
    ],

  ],
  'modules' => [
    'admin' => [
      'class' => 'app\modules\admin\Module',
    ],
  ],
  'params' => $params,
];

if (YII_ENV_DEV) {
  // configuration adjustments for 'dev' environment
  $config['bootstrap'][] = 'debug';
  $config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
    // uncomment the following to add your IP if you are not connecting from localhost.
    'allowedIPs' => ['*'],
  ];

  $config['bootstrap'][] = 'gii';
  $config['modules']['gii'] = [
    'class' => 'yii\gii\Module',
    // uncomment the following to add your IP if you are not connecting from localhost.
    //'allowedIPs' => ['127.0.0.1', '::1'],
  ];
}

return $config;
