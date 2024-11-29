<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivityResource\Pages;
use App\Filament\Resources\ActivityResource\RelationManagers;
use App\Models\Activity;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivityResource extends Resource
{
    protected static ?string $model = Activity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Kegiatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul Kegiatan')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Deskripsi Kegiatan')
                    ->required(),

                DateTimePicker::make('start_date')
                    ->label('Tanggal Mulai')
                    ->native(false)
                    ->seconds(false)
                    ->required(),

                DateTimePicker::make('end_date')
                    ->label('Tanggal Selesai')
                ->native(false)
                ->seconds(false),

                TextInput::make('location')
                    ->label('Lokasi')
                    ->required(),

                Select::make('status')
                    ->label('Status Kegiatan')
                    ->options([
                        'planned' => 'Direncanakan',
                        'ongoing' => 'Sedang Berlangsung',
                        'completed' => 'Selesai',
                    ])
                    ->default('planned'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('start_date')->label('Tanggal Mulai'),
                Tables\Columns\TextColumn::make('end_date')->label('Tanggal Selesai'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')->options([
                    'planned' => 'Direncanakan',
                    'ongoing' => 'Sedang Berlangsung',
                    'completed' => 'Selesai',
                ]),
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
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }
}
