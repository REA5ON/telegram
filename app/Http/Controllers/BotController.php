<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;

class BotController extends Controller
{
//    protected Api $telegram;
//
//    /**
//     * Create a new controller instance.
//     *
//     * @param  Api  $telegram
//     */
//    public function __construct(Api $telegram)
//    {
//        $this->telegram = $telegram;
//    }
//
//    /**
//     * Show the bot information.
//     */
//    public function show()
//    {
//        $response = $this->telegram->getMe();
//
//        return $response;
//    }

    public function send()
    {
        $token = env('TELEGRAM_BOT_TOKEN');
        $chatId = 466118652;
        $text = 'Test';
        $data = http_build_query([
            'text' => $text,
            'chat_id' => $chatId,
        ]);

        $url = "https://api.telegram.org/bot$token/sendMessage?{$data}";

        file_get_contents($url);

        return response('OK', 200);
    }

    public function getMe()
    {
        $response = Telegram::getMe();
        dd($response);
    }
}
