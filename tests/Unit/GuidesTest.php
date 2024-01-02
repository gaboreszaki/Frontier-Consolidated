<?php
    
    namespace Tests\Unit;
    
    use App\Models\Category;
    use App\Models\GameVersion;
    use App\Models\Guide;
    use App\Models\Tag;

    use Illuminate\Foundation\Testing\DatabaseTransactions;
    use Tests\TestCase;
    
    class GuidesTest extends TestCase
    {
        
        use DatabaseTransactions;
        
        public function test_model_exists_and_writable()
        {
            $news = Guide::factory()->create();
            
            $this->assertModelExists($news);
            $this->assertDatabaseHas('guides', $news->toArray());
        }
        
        public function test_model_has_correct_structure()
        {
            /// Given
            /// creating and modeling a best case scenario
            $gameVersion = GameVersion::factory()->create();
            $tag = Tag::factory()->create();
            $category = Category::factory()->create();
            $guide = Guide::factory()->create(
                ['category_id' => $category->id ? : 1]
            );
            
            $guide->tags()->attach($tag->id);
            $guide->gameVersions()->attach($gameVersion->id);
            
            /// When
            $request = Guide::with(['category', 'tags', 'gameVersions'])->where(
                'id',
                $guide->id
            )->first();
            
            /// Then
            /// checking basic data:
            $this->assertEquals($category->id, $request->category_id);
            $this->assertEquals($guide->title, $request->title);
            $this->assertEquals($guide->description, $request->description);
            $this->assertEquals($guide->video_url, $request->video_url);
            
            /// Relations:
            $this->assertTrue($request->tags()->first()->is($tag));
            $this->assertTrue($request->gameVersions()->first()->is($gameVersion));
            $this->assertTrue($request->category()->first()->is($category));
        }
        
    }