<?php

return [
    'database_connection' => [
        'driver'        => 'mysql',
        'host'          => env('CONN_NOTIFICATION_IP', config('notificationconfig.conn_notification_ip')),
        'port'          => env('CONN_NOTIFICATION_PT', config('notificationconfig.conn_notification_pt')),
        'database'      => env('CONN_NOTIFICATION_DB', config('notificationconfig.conn_notification_db')),
        'username'      => env('CONN_NOTIFICATION_UN', config('notificationconfig.conn_notification_un')),
        'password'      => env('CONN_NOTIFICATION_PW', config('notificationconfig.conn_notification_pw')),
        'charset'       => 'utf8mb4',
        'collation'     => 'utf8mb4_unicode_ci',
        'prefix'        => ''
    ],
];