<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Widget;

class CustomersCountWidget extends Widget
{
    protected static string $view = 'filament.widgets.customers-count-widget';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Customers', '30'),
        ];
    }
}
