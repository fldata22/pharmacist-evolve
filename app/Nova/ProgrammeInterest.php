<?php

namespace App\Nova;

use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProgrammeInterest extends Resource
{
    /**
     * @var class-string<\App\Models\ProgrammeInterest>
     */
    public static $model = \App\Models\ProgrammeInterest::class;

    public static $title = 'first_name';

    public static $search = [
        'id',
        'first_name',
        'email',
    ];

    public static function label(): string
    {
        return 'Programme Interest';
    }

    public static function singularLabel(): string
    {
        return 'Programme Interest';
    }

    /**
     * @return array<int, \Laravel\Nova\Fields\Field>
     */
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('First name', 'first_name')
                ->rules('required', 'max:255')
                ->sortable(),

            Text::make('Email')
                ->rules('required', 'email', 'max:255')
                ->sortable(),

            Text::make('Career stage', 'career_stage')
                ->rules('required', 'max:255')
                ->sortable(),

            Textarea::make('Main support need', 'support_need')
                ->nullable()
                ->rows(3)
                ->hideFromIndex(),

            Select::make('Status')
                ->options([
                    'new' => 'New',
                    'contacted' => 'Contacted',
                    'invited' => 'Invited to apply',
                    'archived' => 'Archived',
                ])
                ->default('new')
                ->displayUsingLabels()
                ->onlyOnForms(),

            Badge::make('Status')->map([
                'new' => 'warning',
                'contacted' => 'info',
                'invited' => 'success',
                'archived' => 'danger',
            ]),

            DateTime::make('Contacted at', 'contacted_at')
                ->nullable()
                ->hideFromIndex(),

            DateTime::make('Created At')
                ->readonly()
                ->sortable()
                ->onlyOnDetail(),

            DateTime::make('Received', 'created_at')
                ->readonly()
                ->onlyOnIndex()
                ->sortable(),
        ];
    }

    public function cards(NovaRequest $request): array
    {
        return [];
    }

    public function filters(NovaRequest $request): array
    {
        return [];
    }

    public function lenses(NovaRequest $request): array
    {
        return [];
    }

    public function actions(NovaRequest $request): array
    {
        return [];
    }
}
