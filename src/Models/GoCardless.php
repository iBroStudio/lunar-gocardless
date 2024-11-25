<?php

namespace IBroStudio\GoCardless\Models;

use IBroStudio\GoCardless\Data\GatewayData;
use IBroStudio\PaymentMethodManager\Concerns\HasClassProperty;
use IBroStudio\PaymentMethodManager\Contracts\GatewayContract;
use IBroStudio\PaymentMethodManager\Models\Gateway;

class GoCardless extends Gateway implements GatewayContract
{
    use HasClassProperty;

    public static string $dataClass = GatewayData::class;
}
