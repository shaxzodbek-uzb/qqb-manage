<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\MorphMany;
use ClassicO\NovaMediaLibrary\MediaLibrary;

class PlasticCard extends Resource
{
    public static $group = 'Content';
    
    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Plastic cards');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Plastic card');
    }
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Card::class;

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
            Text::make(__('Name'),'name')->rules('required')->translatable(),
            Text::make(__('Type'),'type')->rules('required')->translatable(),
            Text::make(__('Type person'),'type_person')->rules('required')->translatable(),
            Text::make(__('Cost'),'cost')->rules('required')->translatable(),
            Text::make(__('Validity'),'validity')->rules('required')->translatable(),
            Text::make(__('Required documents'),'required_documents')->rules('required')->translatable(),
            MediaLibrary::make(__('Cover image'),'cover_image')->rules('required')->preview('thumb'),
            MediaLibrary::make(__('Big image'),'big_image')->rules('required')->preview('thumb'),
            MediaLibrary::make(__('Image'),'image')->rules('required'),
            Textarea::make(__('Description') ,'description')->rules('required')->translatable(),
            MorphMany::make(__('Resource details'),'resource_details', ResourceDetail::class),
            MorphMany::make(__('Documents'),'documents', Document::class),
            MorphMany::make(__('Advantages'), 'advantages', Advantage::class),
            MorphMany::make(__('Faqs'), 'faqs', Faq::class)
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
