<?php
namespace Amcodr\Greetr\Controllers;

use Illuminate\Http\Request;
use Amcodr\Greetr\Greetr;

class InspirationController
{
    public function __invoke(Inspire $inspire) {

        $quote = $inspire->quote();
        return view('greetr::index', compact('quote'));
    }
}