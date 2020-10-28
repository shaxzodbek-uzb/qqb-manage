<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Benjaminhirsch\NovaSlugField\{Slug, TextWithSlug};

class CreditType extends Resource
{
    public static $group = 'Content';
    /**
    * Get the displayable label of the resource.
    *
    * @return string
    */
   public static function label()
   {
       return __('CreditTypes');
   }

   /**
    * Get the displayable singular label of the resource.
    *
    * @return string
    */
   public static function singularLabel()
   {
       return __('CreditType');
   }
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\CreditType::class;

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
            TextWithSlug::make(__('Name'),'name')->rules('required')->translatable()->slug('slug'),
            Slug::make(__('Slug'),'slug')->rules('required'),
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
