<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{
    public $title;
    public $slug;
    public $intro;
    public $body;

    public function __construct($title, $slug, $intro, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->intro = $intro;
        $this->body = $body;
    }

    public static function all()
    {
        $files = File::files(resource_path('blogs'));
        return collect($files)->map(function ($file){
            $object = YamlFrontMatter::parseFile($file);
            return new Blog($object->title, $object->slug, $object->intro, $object->body());
        });
    }

    public static function find($slug)
    {
        $blogs = static::all();
        return $blogs->firstWhere('slug', $slug);
    }
}
