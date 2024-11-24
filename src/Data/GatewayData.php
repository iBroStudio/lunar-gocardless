<?php

namespace IBroStudio\GoCardless\Data;

use IBroStudio\DataRepository\ValueObjects\EncryptableText;
use Spatie\LaravelData\Data;

class GatewayData extends Data
{
    public function __construct(
        public EncryptableText $access_token,
        public EncryptableText $webhook_secret,
        public string $environment,
    ) {}
}
