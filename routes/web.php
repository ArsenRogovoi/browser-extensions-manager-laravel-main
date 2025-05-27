<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $extensions = DB::select('select * from extensions');

    return view('main', ['extensions' => $extensions]);
});

Route::patch('/extensions/{id}', function (string $id, Request $request) {
    $validated = $request->validate([
        'isActive' => 'required|boolean'
    ]);

    $isActive = $validated['isActive'];

    $affected = DB::table('extensions')
        ->where(['id' => (int) $id])
        ->update(['is_active' => $isActive]);

    if ($affected === 0) {
        $isExtExist = DB::table('extensions')->where('id', (int) $id)->exists();

        return response()->json([
            'success' => $isExtExist ? true : false,
            'message' => $isExtExist ? 'No changes applied.' : "Extensions with ID: $id does not exist."
        ], $isExtExist ? 200 : 404);
    }

    return response()->json([
        'success' => true
    ]);
});