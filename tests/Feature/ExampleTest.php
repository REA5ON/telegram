<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {

        $json = '{
    "update_id": 76941507,
    "message": {
        "message_id": 136,
        "from": {
            "id": 466118652,
            "is_bot": false,
            "first_name": "Viktor",
            "username": "v_tarantino_v",
            "language_code": "ru"
        },
        "chat": {
            "id": 466118652,
            "first_name": "Viktor",
            "username": "v_tarantino_v",
            "type": "private"
        },
        "date": 1687279671,
        "text": "/start",
        "entities": [
            {
                "offset": 0,
                "length": 6,
                "type": "bot_command"
            }
        ]
    }
}';
        $response = $this->post('/webhook', json_decode($json, true));

        $response->assertStatus(200);
    }
}
