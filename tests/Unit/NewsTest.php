<?php

namespace Tests\Unit;

use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class NewsTest extends TestCase
{

    use DatabaseTransactions;
    	public function test_model_exists_and_writable()
    		{

                $news = News::factory()->create();

                $this->assertModelExists($news);
                $this->assertDatabaseHas('news',$news->toArray());
    		}

    	public function test_news_can_created_thru_api()
    		{

    			/// Given
                $news = News::factory()->make()->toArray();
                $user = User::factory()->create();

    			/// When
                $this->actingAs($user)->postJson('admin/news', $news);


    			/// Then
                $this->assertDatabaseHas('news', $news);



    		}

}
