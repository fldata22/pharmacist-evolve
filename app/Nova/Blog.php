<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Blog extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Blog>
     */
    public static $model = \App\Models\Blog::class;

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
        'slug',
        'excerpt',
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

            // Main Content
            Text::make('Title')
                ->rules('required', 'max:255')
                ->sortable(),

            Slug::make('Slug')
                ->from('Title')
                ->rules('required', 'max:255')
                ->creationRules('unique:blogs,slug')
                ->updateRules('unique:blogs,slug,{{resourceId}}')
                ->sortable(),

            Textarea::make('Excerpt')
                ->rows(3)
                ->help('A short summary of the blog post')
                ->nullable(),

            Trix::make('Content')
                ->rules('required')
                ->help('The main content of the blog post')
                ->alwaysShow(),

            Image::make('Featured Image')
                ->disk('public')
                ->path('blog-images')
                ->prunable()
                ->nullable(),

            // Publishing Details
            new Panel('Publishing', [
                Text::make('Author')
                    ->nullable()
                    ->help('Author name (e.g., Dr. Jane Smith, PharmD)')
                    ->default('Pharmacist Evolve Team'),

                Select::make('Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ])
                    ->default('draft')
                    ->rules('required')
                    ->displayUsingLabels(),

                DateTime::make('Published At')
                    ->nullable()
                    ->help('Leave empty to publish immediately when status is set to published')
                    ->sortable(),

                Badge::make('Status')->map([
                    'draft' => 'warning',
                    'published' => 'success',
                    'archived' => 'danger',
                ])->onlyOnIndex(),
            ]),

            // SEO & Meta
            new Panel('SEO & Meta Information', [
                Text::make('Meta Title')
                    ->nullable()
                    ->help('Leave empty to use the post title'),

                Textarea::make('Meta Description')
                    ->rows(3)
                    ->nullable()
                    ->help('Leave empty to use the excerpt'),

                Textarea::make('Tags')
                    ->nullable()
                    ->help('Comma separated tags (e.g., pharmacy, UK, exams)')
                    ->hideFromIndex()
                    ->fillUsing(function ($request, $model, $attribute, $requestAttribute) {
                        if ($request->$requestAttribute) {
                            $tags = array_map('trim', explode(',', $request->$requestAttribute));
                            $model->$attribute = json_encode($tags);
                        } else {
                            $model->$attribute = null;
                        }
                    })
                    ->displayUsing(function ($value) {
                        if (is_string($value)) {
                            $value = json_decode($value, true);
                        }
                        return is_array($value) ? implode(', ', $value) : '';
                    }),
            ]),

            // Statistics
            new Panel('Statistics', [
                Number::make('Views')
                    ->readonly()
                    ->default(0)
                    ->sortable(),

                DateTime::make('Created At')
                    ->readonly()
                    ->onlyOnDetail(),

                DateTime::make('Updated At')
                    ->readonly()
                    ->onlyOnDetail(),
            ]),
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
        return [
            new \App\Nova\Filters\BlogStatus,
        ];
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
        return [
            new \App\Nova\Actions\PublishBlog,
        ];
    }
}
