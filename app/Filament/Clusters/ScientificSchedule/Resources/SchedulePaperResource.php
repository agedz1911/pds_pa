<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources;

use App\Filament\Clusters\ScientificSchedule;
use App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource\Pages;
use App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource\RelationManagers;
use App\Models\SchedulePaper;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SchedulePaperResource extends Resource
{
    protected static ?string $model = SchedulePaper::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $cluster = ScientificSchedule::class;

    public static function form(Form $form): Form
    {
        $countries = countries();

        return $form
            ->schema([
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('paperCategory', 'name')
                    ->required(),
                Forms\Components\TextInput::make('code_abstract')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name_participant')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('institution')
                    ->required()
                    ->maxLength(255),
                Select::make('country')
                    ->options(collect($countries)->mapWithKeys(function ($country) {
                        return [$country['name'] => $country['name']];
                    })->all())
                    ->searchable(),
                Forms\Components\TextInput::make('title')

                    ->maxLength(255),
                Forms\Components\DatePicker::make('date_presenter'),
                Forms\Components\TextInput::make('time_presenter'),
                Forms\Components\TextInput::make('room'),
                Forms\Components\Toggle::make('is_active')
                    ->default(true)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('paperCategory.name')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Poster' => 'success',
                        'Moderated Poster' => 'info',
                        'Unmoderated Poster' => 'warning',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('code_abstract')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name_participant')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_presenter')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('time_presenter'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListSchedulePapers::route('/'),
            'create' => Pages\CreateSchedulePaper::route('/create'),
            'edit' => Pages\EditSchedulePaper::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
