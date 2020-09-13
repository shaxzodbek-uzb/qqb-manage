<?php

use Illuminate\Database\Seeder;

class NovaMediaLibrary extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
                [
                    'title' => '1',
                    'name' => '1.png',
                    'type' => 'image',
                    'folder' => '/cards/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
                [
                    'title' => 'card-group',
                    'name' => 'card-group.png',
                    'type' => 'image',
                    'folder' => '/cards/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
                [
                    'title' => '1',
                    'name' => '1.png',
                    'type' => 'image',
                    'folder' => '/news/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
                [
                    'title' => '2',
                    'name' => '2.png',
                    'type' => 'image',
                    'folder' => '/news/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
                [
                    'title' => '1',
                    'name' => '1.png',
                    'type' => 'image',
                    'folder' => '/council_items/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
                [
                    'title' => '1',
                    'name' => '1.png',
                    'type' => 'image',
                    'folder' => '/advantages/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
                [
                    'title' => '2',
                    'name' => '2.png',
                    'type' => 'image',
                    'folder' => '/advantages/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
                [
                    'title' => '3',
                    'name' => '3.png',
                    'type' => 'image',
                    'folder' => '/advantages/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
                [
                    'title' => '4',
                    'name' => '4.png',
                    'type' => 'image',
                    'folder' => '/advantages/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
                [
                    'title' => '1',
                    'name' => '1.jpg',
                    'type' => 'image',
                    'folder' => '/slider/',
                    'options' => '{"mime":"image","wh":[500,600],"size":"","img_sizes":["thumb","medium"]}'
                ],
            ];

            DB::table('nova_media_library')->insert($data);
    }
}
