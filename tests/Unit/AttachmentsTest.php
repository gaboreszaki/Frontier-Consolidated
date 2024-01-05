<?php
    
    namespace Tests\Unit;
    
    use App\Models\Attachment;
    
    use App\Models\Guide;
    use Illuminate\Database\QueryException;
    use Illuminate\Foundation\Testing\DatabaseTransactions;
    use Tests\TestCase;
    
    class AttachmentsTest extends TestCase
    {
        
        use DatabaseTransactions;
        
        public string $longText;
        
        protected function setUp(): void
        {
            parent::setUp();
            
            // Creating Long text:
            $this->longText
                = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla blandit dapibus fringilla.
                Proin sit amet nunc mattis, tempor risus efficitur, lobortis elit. Aenean non imperdiet tortor,
                eu pellentesque turpis. Donec dignissim, arcu ut imperdiet tincidunt. ";
            
        }
        
        public function test_model_exists_and_writable()
        {
            $category = Attachment::factory()->create();
            
            $this->assertModelExists($category);
            $this->assertDatabaseHas('attachments', $category->toArray());
        }
        
        public function test_model_has_normal_values()
        {
            /// Given
            $attachment = Attachment::factory()->create();
            /// When
            $request = Attachment::where('id', $attachment->id)->first();
            
            /// Then
            $this->assertTrue($request->count() > 0);
            $this->assertEquals($attachment->name, $request->name);
            $this->assertEquals(
                $attachment->original_filename,
                $request->original_filename
            );
            $this->assertEquals($attachment->filename, $request->filename);
            $this->assertEquals($attachment->status, $request->status);
            $this->assertEquals($attachment->uploader, $request->uploader);
        }
        
        	public function test_model_has_guides()
        		{
        	
        			/// Given
                    $guide = Guide::factory()->create();
        	        $attachment = Attachment::factory()->create();
                    $guide->attachments()->attach($attachment);
                    
        			/// When
        	
                    $request = Attachment::where('id',$attachment->id)->with('guides')->first();
                    
                    
        			/// Then
                    $this->assertTrue($request->guides()->first()->is($guide));
        	
        		}
        
        ///// Break tests:
        public function test_break_name_length_max_255_char()
        {
            $this->expectException(QueryException::class);
            // Forcing Too long data: #255 char
            Attachment::factory()->create([
                'name' => $this->longText
            ]);
        }
        
        public function test_break_filename_length_max_255_char()
        {
            $this->expectException(QueryException::class);
            // Forcing Too long data: #255 char
            Attachment::factory()->create([
                'filename' => $this->longText
            ]);
        }

        public function test_break_original_filename_length_max_255_char()
        {
            $this->expectException(QueryException::class);
            // Forcing Too long data: #255 char
            Attachment::factory()->create([
                'original_filename' => $this->longText
            ]);
        }
        
        
        
    }