<?php

namespace App\Utils;

use Illuminate\Http\JsonResponse;

trait Response
{
    /**
     * Response Data.
     * 
     * @return array
     */
    public function responseData($data, $message = null)
    {
        if ($message != null) {
            return new JsonResponse([
                'success' => true,
                'message' => $message,
                'data'   => $data,
            ], 200);
        }
        return new JsonResponse([
            'success' => true,
            'data'      => $data,
        ], 200);
    }

    /**
     * Response Error.
     * 
     * @return array
     */
    public function responseError($message = null, $status = 500)
    {
        if ($message != null) {
            return new JsonResponse([
                'success' => false,
                'message' => $message,
            ], $status);
        }

        return new JsonResponse([
            'success'    => false,
            'message'    => $message,
        ], $status);
    }

    /**
     * Response Count Data.
     * 
     * @return array
     */
    public function responseDataCount($data, $count = null)
    {
        if ($count == null) {
            return new JsonResponse([
                'success'    => true,
                'count'      => count($data),
                'data'      => $data,
            ], 200);
        } else {
            return new JsonResponse([
                'success' => true,
                'count' => $count - 1,
                'data' => $data,
            ], 200);
        }
    }

    /**
     * Response Validation.
     * 
     * @return array
     */
    public function responseValidation($validation, $data = null)
    {
        return new JsonResponse([
            'success' => false,
            'data' => $data,
            'message' => $validation,
        ], 422);
    }

    /**
     * Response Data Not Found / Error.
     * 
     * @return array
     */
    public function responseDataNotFound($customMessage = null)
    {
        if ($customMessage == null) {
            $info = "Data Not Found!";
        } else {
            $info = $customMessage;
        }

        return new JsonResponse([
            'success' => false,
            'data' => $info,
        ], 400);
    }
}
