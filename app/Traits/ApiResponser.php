<?php

namespace App\Traits;

use Carbon\Carbon;


trait ApiResponser
{

    protected function success($data, string $message = null, int $code = 200)
    {
        return response()->json([
            'status' => 1,
            'message' => 'Success'.$message,
            'data' => $data
        ], $code);
    }


    protected function error(string $message = null, int $code, $data = null)
    {
        return response()->json([
            'status' => 0,
            'message' => 'Error'.$message,
            'data' => $data
        ], $code);
    }

}
