<?php
namespace Amcodr\Greetr\Controllers;

use Illuminate\Http\Request;
use Amcodr\Greetr\Greetr;
use Amcodr\Greetr\Inspire;

class GreetrController
{
    public function __invoke(Inspire $inspire) {

        $quote = $inspire->quote();
        return view('greetr::index', compact('quote'));
    }
}