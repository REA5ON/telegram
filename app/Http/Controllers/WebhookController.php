<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\BotsManager;

class WebhookController extends Controller
{
    protected BotsManager $botsManager;
    public function __construct(BotsManager $botsManager)
    {
        $this->botsManager = $botsManager;
    }

    public function __invoke(Request $request)
    {
        $this->botsManager->bot()->commandsHandler(true);
        return response(null, 200);
    }
}
