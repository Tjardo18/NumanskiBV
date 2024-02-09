<?php

namespace App\Models;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
    ];

    public static function getForm(): array
    {
        return [
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
