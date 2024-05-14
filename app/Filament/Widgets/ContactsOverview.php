<?php

namespace App\Filament\Widgets;

use App\Enums\ContactStatus;
use App\Models\Contacts\Contact;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContactsOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $startDate = $this->filters['startDate'] ?? now()->startOfMonth();
        $endDate = $this->filters['endDate'] ?? now()->endOfMonth();

        return [
            Stat::make('Total', Contact::whereBetween('created_at', [$startDate, $endDate])->count())
                ->description('Quantidade total de contatos realizados.'),
            Stat::make('Respondidos', Contact::whereBetween('created_at', [$startDate, $endDate])->where('status', ContactStatus::Answered)->count())
                ->description('Quantidade total de contatos respondidos.'),
            Stat::make('Não respondidos', Contact::whereBetween('created_at', [$startDate, $endDate])->where('status', ContactStatus::New)->count())
                ->description('Quantidade total de contatos não respondidos.'),
        ];
    }
}