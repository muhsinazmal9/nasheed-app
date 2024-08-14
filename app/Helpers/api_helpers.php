<?php

if (!function_exists('success')) {
    function success($message = 'Success', $data = [], $status = 200)
    {
        return response()->json([
            'success' => true,
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $status);
    }
}

if (!function_exists('error')) {
    function error($message = 'Error', $data = [], $status = 500)
    {
        return response()->json([
            'success' => false,
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $status);
    }
}