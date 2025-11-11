<?php

namespace App\Filament\Resources\Posts\Tables;

use App\Models\Post;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Notifications\Notification;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('author.name')
                    ->numeric()
                    ->sortable(),
                ToggleColumn::make('status')
                    ->label('Published')
                    ->getStateUsing(fn (Post $record): bool => $record->status === 'published')
                    ->updateStateUsing(function (bool $state, Post $record): void {
                        $record->status = $state ? 'published' : 'draft';
                        $record->save();

                        Notification::make()
                            ->title('Post ' . ($state ? 'published' : 'drafted') . ' successfully!')
                            ->success()
                            ->send();
                    }),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
