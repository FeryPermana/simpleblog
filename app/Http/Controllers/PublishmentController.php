<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublishmentController extends Controller
{
    public function publishing(Request $request)
    {
        DB::table($request->table)->where('id', $request->id)->update([
            'publishment' => $request->val
        ]);

        return $request->val;
    }
}
