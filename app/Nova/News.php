<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Select;
use ClassicO\NovaMediaLibrary\MediaLibrary;
use Waynestate\Nova\CKEditor;
use OptimistDigital\NovaTranslatable\HandlesTranslatable;

class News extends Resource
{
    use HandlesTranslatable;
   public static $group = 'Content';
    
    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('News');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('News');
    }
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\News::class;

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
        'name',
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make(__('Name'), 'name')->rules('required')->translatable(),
            Text::make('Slug')->rules('required')->hideWhenUpdating(),
            CKEditor::make(__('Content'), 'content')->hideFromIndex()->rules('required')->translatable(),
            Textarea::make(__('Description'), 'description')->translatable(),
            Text::make(__('Url video'),'url_video'),
            Boolean::make(__('Is main'), 'is_main'),
            MediaLibrary::make(__('Image'),'image')->preview('thumb'),
            BelongsTo::make(__('News category') ,'news_category', NewsCategory::class)->showCreateRelationButton(),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
