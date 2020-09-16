<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Select;
use ClassicO\NovaMediaLibrary\MediaLibrary;
use Manogi\Tiptap\Tiptap;

class News extends Resource
{
    public static $group = 'Announcements';
    
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
            Text::make('Name')->rules('required'),
            Tiptap::make(__('Content'), 'content')->buttons([
                  'heading',
                  'italic',
                  'bold',
                  'code',
                  'link',
                  'strike',
                  'underline',
                  'bullet_list',
                  'ordered_list',
                  'code_block',
                  'blockquote',
                  'edit_html'
              ])->headingLevels([2, 3, 4])->rules('required'),
            Textarea::make('Description'),
            Text::make('Url video','url_video'),
            Select::make('Is_main')->options([
                    '0' => 'No',
                    '1' => 'Yes'
                ]),
            MediaLibrary::make(__('Image'),'image')->preview('thumb'),
            BelongsTo::make(__('News Category') ,'newscategory'),

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
