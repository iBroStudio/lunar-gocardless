<?php

namespace IBroStudio\GoCardless\Models;

use IBroStudio\PaymentMethodManager\Concerns\HasClassProperty;
use IBroStudio\PaymentMethodManager\Contracts\MethodContract;
use IBroStudio\PaymentMethodManager\Models\Method;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DirectDebit extends Method implements MethodContract
{
    use HasClassProperty;

    public function gateway(): BelongsTo
    {
        return $this->belongsTo(GoCardless::class, 'gateway_id');
    }
}
