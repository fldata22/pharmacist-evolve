<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Http\Requests\NovaRequest;

class Delegate extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Delegate>
     */
    public static $model = \App\Models\Delegate::class;

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
        'organization',
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
                ->rules('nullable', 'email', 'max:255')
                ->sortable(),

            Text::make('Organization')
                ->rules('nullable', 'max:255')
                ->sortable()
                ->help('Company, institution, or organization'),

            Text::make('Role')
                ->rules('nullable', 'max:255')
                ->help('Job title or position'),

            Text::make('Country')
                ->rules('nullable', 'max:255')
                ->sortable(),

            Textarea::make('Bio')
                ->nullable()
                ->rows(4)
                ->hideFromIndex()
                ->help('Brief biography or description'),

            Image::make('Photo')
                ->disk('public')
                ->path('delegates')
                ->prunable()
                ->nullable()
                ->help('Profile photo (square recommended)'),

            Text::make('LinkedIn URL')
                ->rules('nullable', 'url', 'max:255')
                ->hideFromIndex(),

            Text::make('Twitter URL')
                ->rules('nullable', 'url', 'max:255')
                ->hideFromIndex(),

            Text::make('Website URL')
                ->rules('nullable', 'url', 'max:255')
                ->hideFromIndex(),

            Select::make('Delegate Type')
                ->options([
                    'attendee' => 'Attendee',
                    'speaker' => 'Speaker',
                    'sponsor' => 'Sponsor',
                    'partner' => 'Partner',
                ])
                ->default('attendee')
                ->displayUsingLabels()
                ->sortable(),

            Badge::make('Type', 'delegate_type')->map([
                'attendee' => 'info',
                'speaker' => 'success',
                'sponsor' => 'warning',
                'partner' => 'purple',
            ])->onlyOnIndex(),

            Boolean::make('Published')
                ->default(false)
                ->help('Visible on the delegates page'),

            Number::make('Order')
                ->default(0)
                ->help('Display order (lower numbers appear first)')
                ->sortable(),

            DateTime::make('Registered At')
                ->nullable()
                ->help('When the delegate registered for the conference')
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
