<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Http\Requests\NovaRequest;

class Event extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Event>
     */
    public static $model = \App\Models\Event::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title',
        'type',
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

            Text::make('Title')
                ->rules('required', 'max:255')
                ->sortable(),

            Textarea::make('Description')
                ->rules('required')
                ->rows(4)
                ->alwaysShow(),

            Select::make('Type')
                ->options([
                    'webinar' => 'Webinar',
                    'event' => 'Event',
                    'workshop' => 'Workshop',
                    'summit' => 'Summit',
                ])
                ->rules('required')
                ->displayUsingLabels()
                ->sortable()
                ->help('Choose the type of event'),

            DateTime::make('Event Date')
                ->rules('required')
                ->sortable()
                ->help('Date and time of the event'),

            Text::make('Location')
                ->nullable()
                ->help('For in-person events (e.g., "London, UK")'),

            Text::make('Platform')
                ->nullable()
                ->help('For online events (e.g., "Zoom", "Google Meet")'),

            Text::make('Registration Link')
                ->nullable()
                ->help('Link for attendees to register'),

            Image::make('Image')
                ->disk('public')
                ->path('events')
                ->prunable()
                ->nullable()
                ->help('Event banner or promotional image'),

            Boolean::make('Published', 'is_published')
                ->default(false)
                ->help('Make event visible on website'),

            Boolean::make('Featured', 'is_featured')
                ->default(false)
                ->help('Show as featured event'),

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
