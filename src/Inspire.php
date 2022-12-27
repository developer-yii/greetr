<?php

namespace Amcodr\Greetr;
use Illuminate\Support\Facades\Http;

class Inspire {
    public function quote() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}