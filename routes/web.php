<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["namespace" => "Api"], function () {
    Route::post("/line/callback", "LineBotController@callback")->name(
        "line.callback"
    );
});

Route::group(["namespace" => "Api"], function () {
    // LineからのWebhookを受信
    Route::post("/line/webhook", "LineController@webhook")->name(
        "line.webhook"
    );
});

Route::get("/", function () {
    return view("welcome");
});

// line webhook受取用
Route::post("/line/callback", "LineApiController@postWebhook");
// line メッセージ送信用
Route::get("/line/message/send", "LineApiController@sendMessage");
