<?php

namespace App\Http\Controllers\Service;

use App\Tool\Validate\ValidateCode;
use App\Http\Controllers\Controller;

class ValidateCodeController extends Controller
{
    function create($value='')
    {
        $validateCode = new ValidateCode;
        return $validateCode->doimg();
    }
}
