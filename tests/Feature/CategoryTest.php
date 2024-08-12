<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    
    public function testCategoryCreate(){

        $category = new Category();
        $category->name = "Programming";
        $category->slug = "programming";
        $result = $category->save();
        self::assertTrue($result);
    
        Category::query()->create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);

        Category::query()->create([
            "name" => "Personal",
            "slug" => "personal"
        ]);        
    
    }

}
