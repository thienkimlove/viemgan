<?php

use App\Category;
use App\Post;
use App\Question;
use App\Services\LoremIpsumGenerator;
use App\Tag;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('PostTableSeeder');
	}

}

class PostTableSeeder extends Seeder {
    /**
     * seed
     */


    public function run()
    {
        $lipsum = new LoremIpsumGenerator;
        $image = 'default.jpg';
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('post_tag')->truncate();
        DB::table('posts')->truncate();
        DB::table('categories')->truncate();
        DB::table('users')->truncate();
        DB::table('tags')->truncate();
        DB::table('questions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        User::create([
            'name' => 'Admin',
            'email' => 'tieumaster@yahoo.com',
            'password' => Hash::make('232323')
        ]);
        Category::create([
            'name' => 'Các bệnh về gan'
        ]);
        Category::create([
            'name' => 'Dược liệu với bệnh gan'
        ]);
        Category::create([
            'name' => 'Sản phẩm tốt cho gan'
        ]);
        Category::create([
            'name' => 'Viêm gan Virus',
            'parent_id'=>1
        ]);
        Category::create([
            'name' => 'Bệnh gan 2',
            'parent_id'=>1
        ]);
        Category::create([
            'name' => 'Bệnh gan 3',
            'parent_id'=>1
        ]);
        for ($i = 1; $i < 20; $i ++) {
            Question::create([
                'question' => $lipsum->getContent(10, 'txt'),
                'answer' => $lipsum->getContent(10, 'txt')
            ]);
        }

        $tagIds = [];
        for ($i = 1; $i < 10; $i ++) {
           $tagIds[] = Tag::create([
                'name' => $lipsum->getContent(3, 'txt')
            ])->id;
        }
        foreach ([2, 3, 4, 5, 6] as $category) {
            for ($i = 1; $i < 40; $i ++) {
               $post = Post::create([
                   'category_id' => $category,
                   'title' => $lipsum->getContent(10, 'txt').' '.Uuid::generate(),
                   'desc' => $lipsum->getContent(20, 'plain'),
                   'content' => $lipsum->getContent(500),
                  'image' => $image
                ]);
               $post->tags()->sync(array_slice($tagIds, 0, rand(1, 10)));
            }
        }
    }
}
