<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CitizenResource\Pages;
use App\Filament\Resources\CitizenResource\RelationManagers;
use App\Models\Citizen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CitizenResource extends Resource
{
    protected static ?string $model = Citizen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('certificate_id')
                    ->relationship('certificate', 'name')
                    ->required(),
                Forms\Components\TextInput::make('name_bn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mobile')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nid')
                    ->maxLength(255),
                Forms\Components\TextInput::make('birth_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('passport_no')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('birth_date'),
                Forms\Components\TextInput::make('father_name_bn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mother_name_bn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('occupation')
                    ->maxLength(255),
                Forms\Components\TextInput::make('resident')
                    ->maxLength(255),
                Forms\Components\TextInput::make('educational_qualification')
                    ->maxLength(255),
                Forms\Components\TextInput::make('religion')
                    ->maxLength(255),
                Forms\Components\TextInput::make('gender')
                    ->maxLength(255),
                Forms\Components\TextInput::make('marital_status')
                    ->maxLength(255),
                Forms\Components\TextInput::make('husband_name_en')
                    ->maxLength(255),
                Forms\Components\TextInput::make('husband_name_bn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('wife_name_en')
                    ->maxLength(255),
                Forms\Components\TextInput::make('wife_name_bn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('permanent_holding_no')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ward_no')
                    ->maxLength(255),
                Forms\Components\TextInput::make('moholla_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('permanent_rbs_bn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('permanent_district_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('permanent_upazila_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('permanent_postoffice_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('male')
                    ->numeric(),
                Forms\Components\TextInput::make('female')
                    ->numeric(),
                Forms\Components\TextInput::make('child')
                    ->numeric(),
                Forms\Components\TextInput::make('handicap')
                    ->numeric(),
                Forms\Components\TextInput::make('member_of_earning')
                    ->numeric(),
                Forms\Components\TextInput::make('number_of_dependents_family')
                    ->numeric(),
                Forms\Components\TextInput::make('ssc_job_holder')
                    ->numeric(),
                Forms\Components\TextInput::make('hsc_job_holder')
                    ->numeric(),
                Forms\Components\TextInput::make('land_owner')
                    ->maxLength(255),
                Forms\Components\TextInput::make('income_source')
                    ->maxLength(255),
                Forms\Components\TextInput::make('yearly_income')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nolkup')
                    ->maxLength(255),
                Forms\Components\TextInput::make('expanse_sector')
                    ->maxLength(255),
                Forms\Components\TextInput::make('remittance_senders')
                    ->numeric(),
                Forms\Components\TextInput::make('sanitation')
                    ->maxLength(255),
                Forms\Components\TextInput::make('electronics_instrument')
                    ->maxLength(255),
                Forms\Components\TextInput::make('social_security')
                    ->maxLength(255),
                Forms\Components\TextInput::make('security_program')
                    ->maxLength(255),
                Forms\Components\TextInput::make('multi_building_house')
                    ->numeric(),
                Forms\Components\TextInput::make('ripe_house')
                    ->numeric(),
                Forms\Components\TextInput::make('semi_ripe_house')
                    ->numeric(),
                Forms\Components\TextInput::make('tin_shed_house')
                    ->numeric(),
                Forms\Components\TextInput::make('raw_house')
                    ->numeric(),
                Forms\Components\TextInput::make('probable_rate')
                    ->numeric(),
                Forms\Components\TextInput::make('halson_percentage')
                    ->numeric(),
                Forms\Components\TextInput::make('halson_tax')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('certificate.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name_bn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nid')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('passport_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('father_name_bn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother_name_bn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('occupation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('resident')
                    ->searchable(),
                Tables\Columns\TextColumn::make('educational_qualification')
                    ->searchable(),
                Tables\Columns\TextColumn::make('religion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('marital_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('husband_name_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('husband_name_bn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wife_name_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wife_name_bn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('permanent_holding_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ward_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('moholla_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('permanent_rbs_bn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('permanent_district_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('permanent_upazila_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('permanent_postoffice_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('male')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('female')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('child')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('handicap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('member_of_earning')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('number_of_dependents_family')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ssc_job_holder')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hsc_job_holder')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('land_owner')
                    ->searchable(),
                Tables\Columns\TextColumn::make('income_source')
                    ->searchable(),
                Tables\Columns\TextColumn::make('yearly_income')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nolkup')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expanse_sector')
                    ->searchable(),
                Tables\Columns\TextColumn::make('remittance_senders')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sanitation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('electronics_instrument')
                    ->searchable(),
                Tables\Columns\TextColumn::make('social_security')
                    ->searchable(),
                Tables\Columns\TextColumn::make('security_program')
                    ->searchable(),
                Tables\Columns\TextColumn::make('multi_building_house')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ripe_house')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('semi_ripe_house')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tin_shed_house')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('raw_house')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('probable_rate')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('halson_percentage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('halson_tax')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
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
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('certificate')
                    ->relationship('certificate', 'name')
                    ->preload()
                    ->label('Certificate'),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'new' => 'New',
                        'old' => 'Old',
                    ])
                    ->preload()
                    ->label('Status')
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
            'index' => Pages\ListCitizens::route('/'),
            'create' => Pages\CreateCitizen::route('/create'),
            'edit' => Pages\EditCitizen::route('/{record}/edit'),
        ];
    }
}
