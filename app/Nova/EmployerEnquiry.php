<?php

namespace App\Nova;

use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class EmployerEnquiry extends Resource
{
    /**
     * @var class-string<\App\Models\EmployerEnquiry>
     */
    public static $model = \App\Models\EmployerEnquiry::class;

    public static $title = 'organisation';

    public static $search = [
        'id',
        'contact_name',
        'work_email',
        'organisation',
    ];

    public static function label(): string
    {
        return 'Employer Enquiries';
    }

    public static function singularLabel(): string
    {
        return 'Employer Enquiry';
    }

    /**
     * @return array<int, \Laravel\Nova\Fields\Field>
     */
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Organisation')
                ->rules('required', 'max:255')
                ->sortable(),

            Text::make('Contact name', 'contact_name')
                ->rules('required', 'max:255')
                ->sortable(),

            Text::make('Work email', 'work_email')
                ->rules('required', 'email', 'max:255')
                ->sortable(),

            Text::make('Role')
                ->rules('required', 'max:255')
                ->hideFromIndex(),

            Text::make('Number of pharmacists', 'number_of_pharmacists')
                ->rules('required', 'max:255')
                ->sortable(),

            Text::make('Expected start', 'expected_start_month')
                ->nullable()
                ->hideFromIndex(),

            Text::make('Phone')
                ->nullable()
                ->hideFromIndex(),

            Textarea::make('Main support need', 'support_need')
                ->rules('required')
                ->rows(4)
                ->hideFromIndex(),

            Select::make('Status')
                ->options([
                    'new' => 'New',
                    'contacted' => 'Contacted',
                    'in_discussion' => 'In discussion',
                    'agreed' => 'Agreed',
                    'archived' => 'Archived',
                ])
                ->default('new')
                ->displayUsingLabels()
                ->onlyOnForms(),

            Badge::make('Status')->map([
                'new' => 'warning',
                'contacted' => 'info',
                'in_discussion' => 'info',
                'agreed' => 'success',
                'archived' => 'danger',
            ]),

            DateTime::make('Contacted at', 'contacted_at')
                ->nullable()
                ->hideFromIndex(),

            DateTime::make('Received', 'created_at')
                ->readonly()
                ->onlyOnIndex()
                ->sortable(),

            DateTime::make('Created At')
                ->readonly()
                ->onlyOnDetail(),
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
