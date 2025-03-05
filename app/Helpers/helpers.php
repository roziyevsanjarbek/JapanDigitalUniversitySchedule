<?php

if (!function_exists('success')) {
    function success($message = 'Success', $data = [])
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'result'  => $data
        ], 200);
    }
}
