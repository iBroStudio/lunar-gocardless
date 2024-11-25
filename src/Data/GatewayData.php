<?php

namespace IBroStudio\GoCardless\Data;

use Filament\Forms;
use IBroStudio\DataRepository\Concerns\ConvertiblesDataProperties;
use IBroStudio\DataRepository\ValueObjects\EncryptableText;
use Spatie\LaravelData\Data;

class GatewayData extends Data
{
    use ConvertiblesDataProperties;

    public function __construct(
        public EncryptableText $access_token,
        public EncryptableText $webhook_secret,
        public string $environment,
    ) {}

    public static function getCredentialsFormComponents(Forms\Form $form): Forms\Components\Component
    {
        return Forms\Components\Grid::make(1)
            ->schema([
                Forms\Components\TextInput::make('access_token')
                    ->password()
                    ->revealable()
                    ->required(),

                Forms\Components\TextInput::make('webhook_secret')
                    ->password()
                    ->revealable()
                    ->required(),

                Forms\Components\ToggleButtons::make('environment')
                    ->options([
                        'test' => 'Test',
                        'production' => 'Production',
                    ])
                    ->inline()
                    ->required(),
            ]);
    }
}
