<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'fide',
    'name' => 'FIDE',
    'defaultRoute' => 'site/index',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'language' => 'ru-RU',
        'request' => [
            'class' => 'app\components\LangRequest',
            // site root directory
            'baseUrl' => '',
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ckm1D3CjcsnHAwSSgVWvy9MypurbnZzp',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class'=>'app\components\LangUrlManager',
            'rules'=>[
                'index' => 'site/index',
                'login' => 'site/login',
                'help' => 'site/help',
                'documentation' => 'site/documentation',
                'diagrams' => 'site/diagrams',
                '/fishbone-diagram/<_fd:(index|create|_form)>' => '/fishbone-diagram/<_fd>',
                '/fishbone-diagram/<_fd:(view|update)>/<id:\d+>' => '/fishbone-diagram/<_fd>',
                '/editor/<_ed:(main|export)>/<id:\d+>' => '/editor/<_ed>',
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'forceTranslation' => true,
                    'sourceLanguage' => 'en-US',
                ],
            ],
        ],
        'formatter' => [
            'datetimeFormat' => 'dd.MM.Y HH:mm',
            'timeZone' => 'UTC',
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
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
    $config['modules']['treemanager'] = [
            'class' => '\kartik\tree\Module',
            // other module settings, refer detailed documentation

    ];
}

return $config;