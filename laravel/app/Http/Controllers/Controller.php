<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @var Request
     */
    private $request;

    /**
     * Controller constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function saveKeyValue()
    {
        $input = $this->request->all();

        Redis::set($input['key'], $input['value']);

        return view('index');
    }

    public function getValue()
    {
        return view('index', [
            'data' => Redis::get($this->request->get('key'))
        ]);
    }
}
