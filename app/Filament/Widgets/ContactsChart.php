<?php

namespace App\Filament\Widgets;

use App\Models\Contacts\Contact;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Database\Eloquent\Collection;

class ContactsChart extends ChartWidget
{
    use InteractsWithPageFilters;

    protected static ?string $heading = 'Contatos';

    protected static string $color = 'primary';

    protected int|string|array $columnSpan = 2;

    protected function getData(): array
    {
        $startDate = $this->filters['startDate'] ?? now()->startOfMonth();
        $endDate = $this->filters['endDate'] ?? now()->endOfMonth();

        $data = $this->getContactsQuantityByPeriod($startDate, $endDate)
            ->groupBy('new_date')
            ->map(fn ($items) => [
                'date' => $items->first()->new_date,
                'aggregate' => $items->sum('aggregate'),
            ]);

        return [
            'datasets' => [
                [
                    'label' => 'Contatos',
                    'data' => $data->map(fn ($period) => $period['aggregate'])->values()->toArray(),
                    'fill' => true,
                ],
            ],
            'labels' => $data->map(fn ($period) => \Carbon\Carbon::parse($period['date'])->format('m/Y'))->values()->toArray(),
        ];
    }

    private function getContactsQuantityByPeriod(string $startDate, string $endDate): Collection
    {
        return Contact::selectRaw("
                COUNT('*') as `aggregate`,
                DATE_FORMAT(`created_at`, '%Y-%m') AS `new_date`, 
                YEAR(`created_at`) AS `year`, 
                MONTH(`created_at`) AS `month`
            ")
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('year', 'month')
            ->get();
    }

    protected function getType(): string
    {
        return 'bar';
    }
}