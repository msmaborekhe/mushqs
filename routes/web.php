<?php

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'pages.about');
Route::view('/services', 'pages.services');
// Service detail pages
Route::view('/services/commercial-management', 'pages.services.commercial-management');
Route::view('/services/contracts-advisory', 'pages.services.contracts-advisory');
Route::view('/services/tender-preparation', 'pages.services.tender-preparation');
Route::view('/services/claims-quantum-analysis', 'pages.services.claims-quantum-analysis');
Route::view('/services/procurement', 'pages.services.procurement');
Route::view('/services/engineering-management', 'pages.services.engineering-management');

Route::view('/projects', 'pages.projects');
Route::view('/contact', 'pages.contact');
Route::view('/privacy-policy', 'pages.privacy');
Route::view('/terms', 'pages.terms');
Route::view('/thank-you', 'pages.thank-you');

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'message' => ['required', 'string', 'max:5000'],
    ]);

    try {
        Mail::to('arthur@mushqs.com.au')->send(new ContactMessage($data['name'], $data['email'], $data['message']));
    } catch (\Throwable $e) {
        return back()->withInput()->withErrors(['email' => 'We could not send your message. Please try again later.']);
    }

    return redirect('/thank-you');
})->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

// Serve images from the project-level /images directory so they are accessible on the site
Route::get('/images/{filename}', function ($filename) {
    $path = base_path('images/'.$filename);

    if (! File::exists($path)) {
        abort(404);
    }
    $mime = File::mimeType($path) ?: 'application/octet-stream';

    return Response::file($path, [
        'Content-Type' => $mime,
        'Cache-Control' => 'public, max-age=31536000',
    ]);
})->where('filename', '.*');
