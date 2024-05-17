<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Support\Enums\ActionSize;

class Dashboard extends BaseDashboard
{
    use HasFiltersForm;

    protected static ?string $title = 'Dashboard';

    public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Filtros')
                    ->columns(2)
                    ->icon('heroicon-s-adjustments-horizontal')
                    ->collapsible()
                    ->collapsed()
                    ->headerActions($this->getFiltersFormHeaderActions())
                    ->schema([
                        Forms\Components\DatePicker::make('startDate')
                            ->label('Data inicial'),
                        Forms\Components\DatePicker::make('endDate')
                            ->label('Data final'),
                    ]),
            ]);
    }

    private function getFiltersFormHeaderActions(): array
    {
        return [
            Forms\Components\Actions\Action::make('clearFilters')
                ->label('Limpar filtros')
                ->icon('heroicon-m-x-circle')
                ->size(ActionSize::ExtraSmall)
                ->hidden(fn (Forms\Get $get) => ($get('startDate') == null) && ($get('endDate') == null))
                ->action(function (Forms\Set $set) {
                    $set('startDate', null);
                    $set('endDate', null);

                    Notification::make()
                        ->title('Filtros limpados com sucesso!')
                        ->success()
                        ->send();
                }),
        ];
    }

    public function getColumns(): int|string|array
    {
        return 3;
    }
}