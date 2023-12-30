<?php
    
    namespace Tests\Unit;
    
    use App\Models\News;
    use App\Models\User;
    use Illuminate\Foundation\Testing\DatabaseTransactions;
    use Illuminate\Testing\Fluent\AssertableJson;
    use Tests\TestCase;
    
    class NewsTest extends TestCase
    {
        
        use DatabaseTransactions;
        
        public function test_model_exists_and_writable()
        {
            $news = News::factory()->create();
            
            $this->assertModelExists($news);
            $this->assertDatabaseHas('news', $news->toArray());
        }
        
        public function test_news_can_created_thru_api()
        {
            /// Given
            $user = User::factory()->create();
            $news = News::factory()->make(['author' => $user->name])->toArray();
            
            /// When
            $this->actingAs($user)->postJson('/api/v1/admin/news', $news)
                ->assertCreated();
            
            /// Then
            $this->assertDatabaseHas('news', $news);
        }
        
        public function test_news_can_not_be_served_for_guest()
        {
            /// Given
            $response = $this->getJson('/api/v1/admin/news');
            
            
            /// Then
            $response->assertStatus(401);
            $response->assertExactJson(["message" => "Unauthenticated."]);
        }
        
        public function test_news_can_retrieved_thru_api_for_valid_users(): void
        {
            /// Given
            $expectedStructure = [
                'data' => [
                    '*' => [
                        'title',
                        'content',
                        'author',
                        'is_announcement'
                    ]
                ]
            ];
            $user = User::factory()->create();
            News::factory()->create(['author' => 'php_unit_test'])->toArray();
            
            // When
            $response = $this->actingAs($user)->getJson('/api/v1/admin/news');
            
            // Then
            $response->assertOk();
            $response->assertJsonStructure($expectedStructure);
        }
        
    }
