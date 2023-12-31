<?php
    
    namespace Tests\Unit;
    
    use App\Models\Guide;
    use Illuminate\Database\QueryException;
    use Illuminate\Foundation\Testing\DatabaseTransactions;
    use Tests\TestCase;
    
    class GuideTest extends TestCase
    {
        
//        use DatabaseTransactions;
        
        public function test_model_exists_and_writable()
        {
            $category = Guide::factory()->create();
            
            $this->assertModelExists($category);
            $this->assertDatabaseHas('guides', $category->toArray());
        }
        
        public function test_model_has_name()
        {
            /// Given
            $guide = Guide::factory()->create();
            /// When
            $request = Guide::where('id', $guide->id)->first();
            
            /// Then
            $this->assertTrue($request->count() > 0);
            $this->assertEquals($guide->name, $request->name);
            
        }
        
        public function test_name_length_max_40_char()
        {
            $this->expectException(QueryException::class);
            // Forcing Too long data: #41 char
            Guide::factory()->create([
                'name' => 'Lorem ipsum dolor sit amet viverra fusce.'
            ]);
        }
        
        
        
    }
    