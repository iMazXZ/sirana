<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Berita';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul Berita')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->label('Slug')
                    ->unique(ignorable: fn($record) => $record)
                    ->required()
                    ->hidden(),

                Select::make('category_id')
                    ->label('Kategori Berita')
                    ->relationship('newscategory', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('name')
                            ->label('Nama Kategori')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->unique(ignorable: fn($record) => $record)
                            ->required()
                            ->hidden(),
                    ])
                    ->required(),

                SpatieMediaLibraryFileUpload::make('image')
                    ->label('Gambar Utama')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/news')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('content')
                    ->label('Isi Berita')
                    ->required()
                    ->columnSpan('full'),

                Select::make('status')
                    ->label('Status Berita')
                    ->options([
                        'draft' => 'Draf',
                        'published' => 'Publikasi',
                        'archived' => 'Arsip',
                    ])
                    ->default('draft'),

                DatePicker::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->placeholder('Pilih tanggal dan waktu')
                    ->default(now()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul Berita'),
                TextColumn::make('published_at')
                    ->label('Tanggal Publikasi'),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
