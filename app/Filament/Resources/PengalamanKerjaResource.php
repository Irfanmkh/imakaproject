<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\section;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PengalamanKerja;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PengalamanKerjaResource\Pages;
use App\Filament\Resources\PengalamanKerjaResource\RelationManagers;

class PengalamanKerjaResource extends Resource
{
    protected static ?string $model = PengalamanKerja::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make()
                    ->schema([
                        
                        Forms\Components\FileUpload::make('thumbnail')->label('Logo Perusahaan')
                            ->image()->disk('public'),
                        Forms\Components\TextInput::make('tanggal')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('nama_perusahaan')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('judul')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\RichEditor::make('deskripsi')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('link')
                            ->maxLength(255),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_perusahaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(
                function (pengalamanKerja $record) {
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(function(Collection $records) {
                        foreach($records as $key =>$value) {
                           if($value->thumbnail){
                            Storage::disk('public')->delete($value->thumbnail);
                           } 
                        }
                    }),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePengalamanKerjas::route('/'),
        ];
    }
}
