<?php

namespace App\Helpers;

class ResponseFormatter
{
    protected static $response = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => null
        ],
        'data' => null
    ];

    public static function success($data = null, $message = null)
    {
        // Jika data tidak null, maka kita set data nya ke dalam response
        if ($data) {
            self::$response['data'] = $data;
        }

        // Jika message tidak null, maka kita set message nya ke dalam response
        if ($message) {
            self::$response['meta']['message'] = $message;
        }

        // Tampilkan response json
        return response()->json(self::$response, self::$response['meta']['code']);
    }

    public static function error($data = null, $message = null, $code = 400)
    {
        // Jika data tidak null, maka kita set data nya ke dalam response
        if ($data) {
            self::$response['data'] = $data;
        }

        // Jika message tidak null, maka kita set message nya ke dalam response
        if ($message) {
            self::$response['meta']['message'] = $message;
        }

        // Jika code tidak null, maka kita set code nya ke dalam response
        if ($code) {
            self::$response['meta']['status'] = 'error';
            self::$response['meta']['code'] = $code;
        }

        // Tampilkan response json
        return response()->json(self::$response, self::$response['meta']['code']);
    }
}
