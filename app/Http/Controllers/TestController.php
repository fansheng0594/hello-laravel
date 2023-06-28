<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidTimeException;
use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        throw_if(true, InvalidTimeException::class, 'Wrong time!');
        // throw new InvalidTimeException('!!!!!');
        return 'hello';
    }
}
