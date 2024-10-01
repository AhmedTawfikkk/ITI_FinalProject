<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Book;
use Filament\Tables;
use Pages\ListBooks;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BookResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BookResource\RelationManagers;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([  
                Card::make()->schema([
                    TextInput::make('title')
                    ->required()
                    ->rules([ 'min:3', 'max:100', 'regex:/^[a-zA-Z\s]+$/', 'unique:books,title']),

                    Textarea::make('description')
                    ->required()
                    ->rules([ 'min:10', 'max:1000']),

                    TextInput::make('Genre')
                    ->required()
                    ->rules([ 'min:3', 'max:50', 'regex:/^[a-zA-Z\s]+$/']),

                    TextInput::make('published')
                    ->required()
                    ->rules(['date', 'date_format:d-m-Y']),

                    TextInput::make('author_name')
                    ->required() // Make the field required
                    ->rules(['string', 'min:3', 'max:30']), 

                    FileUpload::make('cover')
                    ->rules(['file', 'mimes:jpeg,png,jpg,gif', 'max:2048'])

                ]) 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title'),
                TextColumn::make('description'),
                IconColumn::make('available')->boolean(),
                TextColumn::make('Genre'),
                TextColumn::make('published'),
                TextColumn::make('author_name'),
                ImageColumn::make('cover')
                ->circular()
    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
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
            'index' => pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}