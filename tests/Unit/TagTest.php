<?php
    
    namespace Tests\Unit;
    
    use App\Models\Tag;
    use Illuminate\Database\QueryException;
    use Illuminate\Foundation\Testing\DatabaseTransactions;
    use Tests\TestCase;
    
    class TagTest extends TestCase
    {
        
        use DatabaseTransactions;
        
        public function test_model_exists_and_writable()
        {
            $category = Tag::factory()->create();
            
            $this->assertModelExists($category);
            $this->assertDatabaseHas('tags', $category->toArray());
        }
        
        public function test_model_has_name()
        {
            /// Given
            $category = Tag::factory()->create();
            /// When
            $request = Tag::where('id', $category->id)->first();
            
            /// Then
            $this->assertTrue($request->count() > 0);
            $this->assertEquals($category->name, $request->name);

        }
        
        public function test_name_length_max_40_char()
        {
            $this->expectException(QueryException::class);
            // Forcing Too long data: #41 char
            Tag::factory()->create([
                'name' => 'Lorem ipsum dolor sit amet viverra fusce.'
            ]);
        }
        

        
    }
    