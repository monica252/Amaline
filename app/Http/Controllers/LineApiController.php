<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class LineApiController extends Controller
{

    protected $access_token;
    protected $channel_secret;

    public function __construct()
    {
        // :point_down: アクセストークン
        $this->access_token = env('I7QkG7mEFU27OFd1PA+zxTrzv4n/bo3D+G2LfI3FCxvWObfNQm681a3GVHvPFbdB9CsYzAn1IJKg7ZbLU67AbacRq24IqlGahXqnVt/tmfN6/JP+ePwQbOlu6SmiX0KTT2VLpOkqmg9bjWW8LBnvqAdB04t89/1O/w1cDnyilFU=');
        // :point_down: チャンネルシークレット
        $this->channel_secret = env('08dcdd839a97a966a55f1947181adfb8');
    }

    // Webhook受取処理
    public function postWebhook(Request $request) {
        // ここに処理を書いていく
    }

    // メッセージ送信用
    public function sendMessage(Request $request) {
        // ここに処理を書いていく
    }
}
