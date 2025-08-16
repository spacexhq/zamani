<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function render($request, Throwable $e)
    {
        // Log the error
        \Log::error($e->getMessage() . ' in ' . $e->getFile() . ' line ' . $e->getLine());
        
        // Send email notification
        try {
            \Mail::raw("Error: " . $e->getMessage() . "\nFile: " . $e->getFile() . "\nLine: " . $e->getLine(), function($msg) {
                $msg->to('your-email@gmail.com')->subject('App Error');
            });
        } catch(\Exception $mailError) {
            // Continue if email fails
        }
        
        // Show friendly message instead of crash
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Something went wrong. Please try again.'], 500);
        }
        
        return response()->view('errors.simple', [], 500);
    }
}
