<?php

namespace App\Filament\Resources\Transaksis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TransaksiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama'),
            ]);
    }
}
