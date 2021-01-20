<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
  'id' => 'basic',
  'basePath' => dirname(__DIR__),
  'bootstrap' => ['log'],
  'language' => 'ru',
  'aliases' => [
    '@bower' => '@vendor/bower-asset',
    '@npm'   => '@vendor/npm-asset',
  ],
  'components' => [
    'request' => [
      'cookieValidationKey' => 'MzMGBYse0SNhozFIFHOcEaFOeLDB6XyC',
      'baseUrl' => '',
    ],
    'authManager' => [
      'class' => 'dektrium\rbac\components\DbManager',

      'defaultRoles' => ['admin', 'BRAND', 'TALENT'],
    ],
    'authClientCollection' => [
      'class'   => \yii\authclient\Collection::className(),
      'clients' => [
        /*'google' => [
          'class'        => 'dektrium\user\clients\Google',
          'clientId'     => 'taishettoday-300508',
          'clientSecret' => 'AIzaSyCbrAJvPmozRLCbvuO9l1f4by9aHPCK9ZE',
        ],*/
        'yandex' => [
          'class'        => 'dektrium\user\clients\Yandex',
          'clientId'     => 'f4e014068d8b4c6b8ecaafa30d00c759',
          'clientSecret' => '49b932f241ea4c549d352c4c10bb2415'
        ],
        'vkontakte' => [
          'class'        => 'dektrium\user\clients\VKontakte',
          'clientId'     => '6716057',
          'clientSecret' => 'W7vwOzJnoddwcz2t74T6',
        ],
      ],
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
      'identityClass' => 'dektrium\user\models\User',
      'enableAutoLogin' => true,
      'loginUrl' => ['auth/login'],
    ],
    'errorHandler' => [
      'errorAction' => 'site/error',
    ],
    'db' => $db,

    'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false,
      'rules' => [
        '' => 'site/index',
        'mesta_taysheta' => 'site/places',
        '<action:contact|about>' => 'site/<action>',
        '<action:login|signup>' => 'auth/<action>',
        'istoriya_taysheta' => 'site/historical',
        'telefon_taysheta' => 'site/telefon',
        'sobytiya_v_tayshete/<id:4>' => 'site/event-category',
        'mesta/<id:7|8|9|15|16|17|18|19>' => 'site/event-category',
        'sobytiya/<id:4>' => 'site/history',
        'istoriya/<id:6|11|12|13|20|21>' => 'site/event-category',
        'information/<id:\d+>' => 'site/view',

      ],
    ],



    'mailer' => [
      'class' => 'yii\swiftmailer\Mailer',
      'useFileTransport' => false,
      'messageConfig' => [
        'charset' => 'UTF-8',
      ],
      'transport' => [
        'class' => 'Swift_SmtpTransport',
<<<<<<< HEAD
        'host' => 'smtp.gmail.com',
        'username' => 'dedguran@gmail.com',
        'password' => 'sovetik2021',
        'port' => '587',
        'encryption' => 'tls',
        'streamOptions' => ['ssl' => ['allow_self_signed' => true, 'verify_peer' => false, 'verify_peer_name' => false,],]
=======
        'host' => 'smtp.yandex.ru',
        'username' => 'dusha2b63gur@yandex.ru',
        'password' => '',
        'port' => '465',
        'encryption' => 'ssl',
>>>>>>> b0aa9dbba95428bdfb10483e96f827a12cfc0d5d
      ],
    ],

  ],
  'modules' => [
    'admin' => [
      'class' => 'app\modules\admin\Module',
    ],

    'user' => [
      'class' => 'dektrium\user\Module',
      'adminPermission' => 'role, permission',
      'enableUnconfirmedLogin' => true,
      'confirmWithin' => 21600,
      'cost' => 12,
      'admins' => ['Guran']
    ],
    'rbac' => [
      'class' => 'dektrium\rbac\RbacWebModule',
      'adminPermission' => 'role, permission',
      'admins' => ['Guran']
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
