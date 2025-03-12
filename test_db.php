<?php

use Illuminate\Support\Facades\DB;

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

try {
    $pdo = DB::connection()->getPdo();
    echo "Berhasil terkoneksi ke database SQLite!";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
