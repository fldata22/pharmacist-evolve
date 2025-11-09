<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Waitlist extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Waitlist>
     */
    public static $model = \App\Models\Waitlist::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'email',
        'country',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @return array<int, \Laravel\Nova\Fields\Field>
     */
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->rules('required', 'max:255')
                ->sortable(),

            Text::make('Email')
                ->rules('required', 'email', 'max:255')
                ->sortable(),

            Text::make('Phone')
                ->nullable(),

            Text::make('Country')
                ->rules('required', 'max:255')
                ->sortable(),

            Text::make('Qualification')
                ->nullable()
                ->help('e.g., BPharm, MPharm, PharmD'),

            Textarea::make('Message')
                ->nullable()
                ->rows(3)
                ->hideFromIndex(),

            Select::make('Program Interest')
                ->options([
                    'ospap_coaching' => 'OSPAP Coaching',
                    'group_mentoring' => 'Group Mentoring',
                    'summit' => 'Annual Summit',
                ])
                ->default('ospap_coaching')
                ->displayUsingLabels()
                ->sortable(),

            Select::make('Status')
                ->options([
                    'pending' => 'Pending',
                    'contacted' => 'Contacted',
                    'enrolled' => 'Enrolled',
                    'declined' => 'Declined',
                ])
                ->default('pending')
                ->displayUsingLabels()
                ->sortable(),

            Badge::make('Status')->map([
                'pending' => 'warning',
                'contacted' => 'info',
                'enrolled' => 'success',
                'declined' => 'danger',
            ])->onlyOnIndex(),

            DateTime::make('Contacted At')
                ->nullable()
                ->hideFromIndex(),

            DateTime::make('Created At')
                ->readonly()
                ->onlyOnDetail(),

            DateTime::make('Updated At')
                ->readonly()
                ->onlyOnDetail(),
        ];
    }

    /**
     * Get the cards available for the resource.
     *
     * @return array<int, \Laravel\Nova\Card>
     */
    public function cards(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array<int, \Laravel\Nova\Filters\Filter>
     */
    public function filters(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array<int, \Laravel\Nova\Lenses\Lens>
     */
    public function lenses(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array<int, \Laravel\Nova\Actions\Action>
     */
    public function actions(NovaRequest $request): array
    {
        return [];
    }
}
