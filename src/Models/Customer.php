<?php

namespace IBroStudio\GoCardless\Models;

use IBroStudio\PaymentMethodManager\Concerns\HasClassProperty;
use IBroStudio\PaymentMethodManager\Contracts\CustomerMethodContract;
use IBroStudio\PaymentMethodManager\Models\CustomerMethod;
use IBroStudio\TestSupport\Data\FakePaymentCustomerMethodData;
use IBroStudio\TestSupport\Models\FakePaymentMethod;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends CustomerMethod implements CustomerMethodContract
{
    use HasClassProperty;

    public static string $dataClass = FakePaymentCustomerMethodData::class;

    public function method(): BelongsTo
    {
        return $this->belongsTo(FakePaymentMethod::class, 'method_id');
    }
}
