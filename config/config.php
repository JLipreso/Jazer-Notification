<?php

return [
    /** Project Configurations */
    'project_refid'                 => env('PROJECT_REFID', ''),


    /** Database Connection Configurations */
    'conn_notification_ip'                 => env('CONN_NOTIFICATION_IP', env('DB_HOST')),
    'conn_notification_pt'                 => env('CONN_NOTIFICATION_PT', env('DB_PORT')),
    'conn_notification_db'                 => env('CONN_NOTIFICATION_DB', env('DB_DATABASE')),
    'conn_notification_un'                 => env('CONN_NOTIFICATION_UN', env('DB_USERNAME')),
    'conn_notification_pw'                 => env('CONN_NOTIFICATION_PW', env('DB_PASSWORD')),

    /** Query parameters */
    'fetch_paginate_max'            => env('FETCH_PAGINATE_MAX', 25),
];
