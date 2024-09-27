<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BorrowedBookResource\Pages;
use App\Filament\Resources\BorrowedBookResource\RelationManagers;
use App\Models\BorrowedBook;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BorrowedBookResource extends Resource
{
    protected static ?string $model = BorrowedBook::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('book_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('borrowed_date')
                    ->required(),
                Forms\Components\Toggle::make('returned')
                    ->required(),
                Forms\Components\DatePicker::make('returned_date'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('book.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('borrowed_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('returned')
                    ->boolean(),
                Tables\Columns\TextColumn::make('returned_date')
                    ->date()
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
            /*->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])*/
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBorrowedBooks::route('/'),
            //'create' => Pages\CreateBorrowedBook::route('/create'),
            'view' => Pages\ViewBorrowedBook::route('/{record}'),
            //'edit' => Pages\EditBorrowedBook::route('/{record}/edit'),
        ];
    }
}
