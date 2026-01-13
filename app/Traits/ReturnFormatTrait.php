<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;

trait ReturnFormatTrait
{
    /**
     * Common Success Response
     */
    protected function responseWithSuccess($message = '', $data = [], $status_code = 200)
    {
        return [
            'status'      => true,
            'status_code' => $status_code,
            'message'     => $message,
            'data'        => $data,
        ];
    }

    /**
     * Common Error Response
     */
    protected function responseWithError($message = '', $data = [], $status_code = 400)
    {
        return [
            'status'      => false,
            'status_code' => $status_code,
            'message'     => $message,
            'data'        => $data,
        ];
    }
}
