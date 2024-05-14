<?php

use App\Http\Controllers\TimestampController;

Route::get('/convert-timestamp', [TimestampController::class, 'convert']);