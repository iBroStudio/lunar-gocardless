<?php

namespace IBroStudio\GoCardless\Models;

use IBroStudio\DataRepository\Casts\DataObjectCast;
use IBroStudio\PaymentMethodManager\Concerns\HasClassProperty;
use IBroStudio\PaymentMethodManager\Contracts\CustomerMethodContract;
use IBroStudio\PaymentMethodManager\Models\CustomerMethod;
use IBroStudio\TestSupport\Data\FakePaymentCustomerMethodData;
use IBroStudio\TestSupport\Models\FakePaymentMethod;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends CustomerMethod implements CustomerMethodContract
{
    use HasClassProperty;

    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'credentials' => DataObjectCast::class.':'.FakePaymentCustomerMethodData::class,
        ]);
    }

    public function method(): BelongsTo
    {
        return $this->belongsTo(FakePaymentMethod::class);
    }
}
