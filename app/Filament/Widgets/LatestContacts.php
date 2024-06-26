<?php

namespace App\Filament\Widgets;

use App\Enums\ContactStatus;
use App\Filament\Resources\Contacts\ContactResource;
use App\Models\Contacts\Contact;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestContacts extends BaseWidget
{
    protected static ?string $heading = 'Últimos contatos recebidos';

    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 4;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Contact::orderByDesc('created_at')
                    ->where('status', ContactStatus::New)
                    ->limit(5)
            )
            ->defaultPaginationPageOption(5)
            ->paginated(false)
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')
                    ->limit(25),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('subject')
                    ->label('Assunto')
                    ->limit(25),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->since()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->label('Ver')
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->url(fn (Contact $record): string => ContactResource::getUrl('edit', ['record' => $record])),
            ])
            ->headerActions([
                Tables\Actions\Action::make('all')
                    ->label('Ver Todos')
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->url(ContactResource::getUrl('index')),
            ]);
    }
}
