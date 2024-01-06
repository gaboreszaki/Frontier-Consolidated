<?php
    
    namespace Tests\Unit;
    
    use App\Models\Category;
    use Illuminate\Database\QueryException;
    use Illuminate\Foundation\Testing\DatabaseTransactions;
    use Tests\TestCase;
    
    class CategoryTest extends TestCase
    {
        
        use DatabaseTransactions;
        
        public function test_model_exists_and_writable()
        {
            $category = Category::factory()->create();
            
            $this->assertModelExists($category);
            $this->assertDatabaseHas('categories', $category->toArray());
        }
        
        public function test_model_has_name_and_description()
        {
            /// Given
            $category = Category::factory()->create();
            /// When
            $request = Category::where('id', $category->id)->first();
            
            /// Then
            $this->assertTrue($request->count() > 0);
            $this->assertEquals($category->name, $request->name);
            $this->assertEquals($category->description, $request->description);
        }
        
        public function test_name_length_max_40_char()
        {
            $this->expectException(QueryException::class);
            // Forcing Too long data: #41 char
            Category::factory()->create([
                'name' => 'Lorem ipsum dolor sit amet viverra fusce.'
            ]);
        }
        
        public function test_description_length_max_450_char()
        {
            $this->expectException(QueryException::class);
            // Forcing Too long data: #451 char
            Category::factory()->create([
                'name' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elementum sapien orci, ac pretium diam mollis mattis. Suspendisse eget efficitur ex. Suspendisse a sem eleifend magna lobortis gravida nec sit amet massa. Cras egestas libero sit amet elit luctus, ac viverra nunc elementum. Praesent ac congue nisi. Sed fermentum turpis in placerat molestie. Sed non iaculis velit, eget accumsan elit. Maecenas ut felis ullamcorper, fringilla metus eleifend. '
                #451 char
            ]);
        }
        
    }
    