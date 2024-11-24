<?php

namespace IBroStudio\GoCardless\Models;

use IBroStudio\DataRepository\Casts\DataObjectCast;
use IBroStudio\GoCardless\Data\GatewayData;
use IBroStudio\PaymentMethodManager\Concerns\HasClassProperty;
use IBroStudio\PaymentMethodManager\Contracts\GatewayContract;
use IBroStudio\PaymentMethodManager\Models\Gateway;

class GoCardless extends Gateway implements GatewayContract
{
    use HasClassProperty;

    protected function casts(): array
    {
        return [
            'credentials' => DataObjectCast::class.':'.GatewayData::class,
        ];
    }
}
