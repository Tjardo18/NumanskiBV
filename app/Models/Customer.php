<?php

namespace App\Models;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company',
        'companyname',
        'kvknr',
        'firstname',
        'surname',
        'street',
        'housenumber',
        'postalcode',
        'city',
        'email',
        'phone',
        'function',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company' => 'boolean',
    ];

    public static function getForm(): array
    {
        return [
            Toggle::make('company'),
            TextInput::make('companyname')
                ->maxLength(255),
            TextInput::make('kvknr')
                ->numeric(),
            TextInput::make('firstname')
                ->required()
                ->maxLength(255),
            TextInput::make('surname')
                ->required()
                ->maxLength(255),
            TextInput::make('street')
                ->required()
                ->maxLength(255),
            TextInput::make('housenumber')
                ->required()
                ->numeric(),
            TextInput::make('postalcode')
                ->required()
                ->maxLength(255),
            TextInput::make('city')
                ->required()
                ->maxLength(255),
            TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
            TextInput::make('phone')
                ->tel()
                ->required()
                ->maxLength(255),
            TextInput::make('function')
                ->maxLength(255),
        ];
    }
}
