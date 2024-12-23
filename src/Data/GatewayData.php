<?php

namespace IBroStudio\GoCardless\Data;

use Filament\Forms;
use IBroStudio\DataRepository\Concerns\ConvertiblesDataProperties;
use IBroStudio\DataRepository\Transformers\ValueObjectTransformer;
use IBroStudio\DataRepository\ValueObjects\EncryptableText;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;

class GatewayData extends Data
{
    use ConvertiblesDataProperties;

    public function __construct(
        #[WithTransformer(ValueObjectTransformer::class)]
        public EncryptableText $access_token,
        #[WithTransformer(ValueObjectTransformer::class)]
        public EncryptableText $webhook_secret,
        public string $environment,
    ) {}

    public static function getCredentialsFormComponents(Forms\Form $form): Forms\Components\Component
    {
        return Forms\Components\Grid::make(1)
            ->schema([
                Forms\Components\TextInput::make('credentials.access_token')
                    ->formatStateUsing(fn ($state, Model $record) => $record->credentials->access_token->decrypt())
                    ->password()
                    ->revealable()
                    ->required(),

                Forms\Components\TextInput::make('credentials.webhook_secret')
                    ->formatStateUsing(fn ($state, Model $record) => $record->credentials->webhook_secret->decrypt())
                    ->password()
                    ->revealable()
                    ->required(),

                Forms\Components\ToggleButtons::make('credentials.environment')
                    ->options([
                        'test' => 'Test',
                        'production' => 'Production',
                    ])
                    ->inline()
                    ->required(),
            ]);
    }
}
