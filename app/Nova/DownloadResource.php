<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Http\Requests\NovaRequest;

class DownloadResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\DownloadResource>
     */
    public static $model = \App\Models\DownloadResource::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The label for the resource.
     */
    public static $label = 'Resources';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title',
        'category',
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
                ->nullable()
                ->rows(3)
                ->help('Brief description of the resource'),

            File::make('PDF File', 'file_path')
                ->disk('public')
                ->path('resources')
                ->acceptedTypes('.pdf')
                ->rules('required', 'file', 'mimes:pdf', 'max:10240')
                ->help('Upload PDF (max 10MB)')
                ->store(function ($request, $model) {
                    $file = $request->file('file_path');
                    $path = $file->store('resources', 'public');
                    $model->file_name = $file->getClientOriginalName();
                    return $path;
                }),

            Text::make('File Name')
                ->readonly()
                ->onlyOnDetail(),

            Select::make('Category')
                ->options([
                    'general' => 'General',
                    'ospap' => 'OSPAP Preparation',
                    'career' => 'Career Development',
                    'study_guides' => 'Study Guides',
                    'templates' => 'Templates',
                ])
                ->default('general')
                ->displayUsingLabels()
                ->sortable(),

            Number::make('Downloads')
                ->readonly()
                ->default(0)
                ->sortable(),

            Boolean::make('Featured')
                ->default(false)
                ->help('Show on homepage'),

            Boolean::make('Published')
                ->default(true)
                ->help('Visible on site'),

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
