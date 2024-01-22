<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('okJson', function ($data = [], $message = null, $code = 200) {
            if (is_null($message)) {
                $message = __('notifications.success');
            }

            return response()->json([
                'message' => $message,
                'data' => $data,
            ], $code);
        });

        Response::macro('koJson', function ($data = [], $message = null, $code = 500) {
            if (is_null($message)) {
                $message = __('errors.500');
            }

            return response()->json([
                'message' => $message,
                'data' => $data,
            ], $code);
        });
    }
}
