<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Http\Requests\NovaRequest;

class Testimonial extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Testimonial>
     */
    public static $model = \App\Models\Testimonial::class;

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
        'program',
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

            Text::make('Title')
                ->nullable()
                ->help('e.g., "Pharmacist at NHS", "Community Pharmacist"'),

            Image::make('Photo')
                ->disk('public')
                ->path('testimonials')
                ->prunable()
                ->nullable(),

            Textarea::make('Feedback')
                ->rules('required')
                ->rows(5)
                ->alwaysShow(),

            Number::make('Rating')
                ->min(1)
                ->max(5)
                ->default(5)
                ->rules('required', 'integer', 'min:1', 'max:5')
                ->help('1-5 stars'),

            Text::make('Program')
                ->nullable()
                ->help('Which programme they attended (e.g., "Beta OSPAP Coaching 2024")'),

            Boolean::make('Featured')
                ->default(false)
                ->help('Show on homepage'),

            Boolean::make('Published')
                ->default(false)
                ->help('Visible on site'),

            Number::make('Order')
                ->default(0)
                ->help('Display order (lower numbers appear first)')
                ->sortable(),

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
