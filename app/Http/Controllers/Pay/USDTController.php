<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pay;

use App\Http\Controllers\PayController;

final class USDTController extends PayController
{
    public function gateway(): string { return 'gateway'; }

    public function notifyUrl(): string { return 'notifyUrl'; }
}
