<?php

namespace App\Filament\Widgets;

use App\Models\Contacts\Contact;
use Filament\Support\RawJs;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;

class AnsweredContacts extends ChartWidget
{
    use InteractsWithPageFilters;

    protected static ?string $heading = 'Contatos Respondidos';

    protected int|string|array $columnSpan = 1;

    protected function getData(): array
    {
        $startDate = $this->filters['startDate'] ?? now()->startOfMonth();
        $endDate = $this->filters['endDate'] ?? now()->endOfMonth();

        $data = $this->getContactQuantity($startDate, $endDate);

        return [
            'datasets' => [
                [
                    'data' => $data->map(fn ($contact) => $contact->aggregate),
                    'backgroundColor' => $data->map(fn ($contact) => $this->filamentColorToHex($contact->status->getColor())),
                ],
            ],
            'labels' => $data->map(fn ($contact) => $contact->status->getPluralLabel()),
        ];
    }

    protected function getOptions(): RawJs
    {
        return RawJs::make(<<<'JS'
            {
                scales: {
                    y: {display: false},
                    x: {display: false},
                },
            }
        JS);
    }

    private function getContactQuantity(string $startDate, string $endDate)
    {
        return Contact::selectRaw("
                count('*') as `aggregate`,
                status
            ")
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('status')
            ->get();
    }

    private function filamentColorToHex(mixed $color)
    {
        $rgb = str($color['400'])->explode(',')->toArray();

        return sprintf('#%02x%02x%02x', $rgb[0], $rgb[1], $rgb[2]);
    }

    protected function getType(): string
    {
        return 'pie';
    }
}