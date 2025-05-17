<?php

namespace Jazer\Notification\Http\Controllers\Fetch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Paginate extends Controller
{
    public static function paginate(Request $request) {

        if((isset($request['where'])) && ($request['where'] !== null )) {
            return DB::connection("conn_notification")
            ->table("people")
            ->select("project_refid", "people_group_refid", "people_refid", "firstname", "lastname", "email", "blocked", "active")
            ->where([
                "project_refid"     => config('notificationconfig.project_refid')
            ])
            ->where(json_decode($request['where']))
            ->orderBy("lastname", "ASC")
            ->paginate(config('notificationconfig.fetch_paginate_max'));
        }
        else {
            return DB::connection("conn_notification")
            ->table("people")
            ->select("project_refid", "people_group_refid", "people_refid", "firstname", "lastname", "email", "blocked", "active")
            ->where([
                "project_refid"     => config('notificationconfig.project_refid')
            ])
            ->orderBy("lastname", "ASC")
            ->paginate(config('notificationconfig.fetch_paginate_max'));
        }
    }
}