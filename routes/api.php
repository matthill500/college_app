<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::middleware('api')->group(function () {

    Route::resource('courses', 'API\CourseController')->except([
        'create', 'edit'
    ]);
    Route::resource('lecturers', 'API\LecturerController')->except([
        'create', 'edit'
    ]);
    Route::resource('enrolments', 'API\EnrolmentController')->except([
        'create', 'edit'
    ]);
});
