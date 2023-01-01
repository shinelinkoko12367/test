<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponse
{
    /**
     * Success Response.
     *
     * @param  mixed  $data
     * @param  string  $message
     * @return JsonResponse
     */
    public function success(mixed $data, string $message = 'Request process is successfully'): JsonResponse
    {
        return new JsonResponse([
            'message' => $message,
            'data' => $data,
        ], 200);
    }

    /**
     * Response with status code 400.
     *
     * @param  string  $message
     * @return JsonResponse
     */
    public function badRequest(string $message = 'Bad Request'): JsonResponse
    {
        return new JsonResponse([
            'message' => $message,
        ], 400);
    }

    /**
     * Response with status code 401.
     *
     * @param  string  $message
     * @return JsonResponse
     */
    public function unauthorized(string $message = 'Unauthorized'): JsonResponse
    {
        return new JsonResponse([
            'message' => $message,
        ], 401);
    }

    /**
     * Response with status code 404.
     *
     * @param  string  $message
     * @return JsonResponse
     */
    public function notFound(string $message = 'Resouce not found'): JsonResponse
    {
        return new JsonResponse([
            'message' => $message,
        ], 404);
    }

    /**
     * Response with status code 422.
     *
     * @param  array  $data
     * @param  string  $message
     * @return JsonResponse
     */
    public function validation(array $data, string $message = 'Invalid validation'): JsonResponse
    {
        return new JsonResponse([
            'message' => $message,
            'errors' => $data,
        ], 422);
    }

    /**
     * Response with status code 500.
     *
     * @param  string  $message
     * @return JsonResponse
     */
    public function unknown(string $message = 'Unknown error'): JsonResponse
    {
        return new JsonResponse([
            'message' => $message,
        ], 500);
    }
}
