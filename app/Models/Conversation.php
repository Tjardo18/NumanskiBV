<?php

namespace App\Models;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Conversation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'time',
        'duration',
        'notes',
        'customer_id',
        'contact_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'date',
        'customer_id' => 'integer',
        'contact_id' => 'integer',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }

    public static function getForm(): array
    {
        return [
            DatePicker::make('date')
                ->native(false)
                ->required(),
            TimePicker::make('time')
                ->native(false)
                ->required(),
            Select::make('contact_id')
                ->relationship('contact', 'firstname')
                ->createOptionForm(Contact::getForm())
                ->editOptionForm(Contact::getForm())
                ->required(),
            Select::make('customer_id')
                ->relationship('customer', 'firstname')
                ->createOptionForm(Customer::getForm())
                ->editOptionForm(Customer::getForm())
                ->required(),
            TimePicker::make('duration')
                ->native(false)
                ->required(),
            MarkdownEditor::make('notes')
                ->columnSpanFull(),
        ];
    }
}
