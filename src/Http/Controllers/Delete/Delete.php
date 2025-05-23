<?php

namespace Jazer\Notification\Http\Controllers\Delete;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Delete extends Controller
{
    public static function delete($people_refid) {
        $deleted = DB::connection("conn_notification")->table("people")
            ->where([
                "project_refid"     => config('notificationconfig.project_refid'),
                "people_refid"      => $people_refid
            ])
            ->delete();

        if($deleted) {
            DB::connection("conn_notification")->table("people_auth")
            ->where([
                "project_refid"     => env('project_refid'),
                "people_refid"      => $people_refid
            ])
            ->delete();
            return [
                "success"   => true
            ];
        }
        else {
            return [
                "success"   => false
            ];
        }
    }
}