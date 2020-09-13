<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Manogi\Tiptap\Tiptap;
use Laravel\Nova\Http\Requests\NovaRequest;

class VacancyDetail extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\VacancyDetail::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name_detail';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name_detail',
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
            Text::make('Name detail')->rules('required'),
             Tiptap::make(__('Text'), 'text_detail')->buttons([
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


    public static function availableForNavigation(Request $request)
    {
        return false;
    }
}
