<?php

use App\Category;
use App\Post;
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
        $image = 'default.jpg';
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('post_tag')->truncate();
        DB::table('posts')->truncate();
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
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
            'name' => 'Viêm gan Virus'
        ]);
        Category::create([
            'name' => 'Bệnh gan 2'
        ]);
        Category::create([
            'name' => 'Bệnh gan 3'
        ]);
        foreach ([2, 3, 4, 5, 6] as $category) {
            for ($i = 1; $i < 40; $i ++) {
                Post::create([
                   'category_id' => $category,
                   'title' => 'Bài thuốc trị bệnh gan '.Uuid::generate(),
                   'desc' => 'Khi tôi đến gặp chị thì được biết: Chị vốn là giảng viên IT, không theo nghề của ông bà nhưng khi chính chồng mình bị gai đôi, sức khỏe của anh giảm sút, nhìn chồng đau đớn chị thử lấy những... ',
                   'content' => '90% trường hợp nhiễm SVVG B ở tuổi trưởng thành sẽ hồi phục hoàn toàn và không bao giờ bị siêu vi quấy rầy lại. Chỉ có 10% chuyển thành “người mang trùng mạn tính”.

Tuy nhiên, ở trẻ nhiễm siêu vi B từ lúc mới sinh, bệnh diễn biến khác hẳn. Khoảng 90% số trẻ này sẽ trở thành người mang bệnh mạn tính. Giai đoạn này kéo dài nhiều năm, có thể không có biểu hiện lâm sàng, cuối cùng dẫn tới những hậu quả nghiêm trọng như xơ gan, có nước trong ổ bụng, chảy máu đường tiêu hóa do vỡ mạch máu bị giãn, ung thư gan.

Nói chung, khi bệnh đã tiến triển đến giai đoạn xơ gan, chức năng gan khó có thể hồi phục, ngay cả khi tình trạng viêm gan được cải thiện. Vì vậy, các thầy thuốc thường điều trị bệnh sớm nhằm ngăn ngừa hoặc làm chậm quá trình xơ gan.
90% trường hợp nhiễm SVVG B ở tuổi trưởng thành sẽ hồi phục hoàn toàn và không bao giờ bị siêu vi quấy rầy lại. Chỉ có 10% chuyển thành “người mang trùng mạn tính”.

Tuy nhiên, ở trẻ nhiễm siêu vi B từ lúc mới sinh, bệnh diễn biến khác hẳn. Khoảng 90% số trẻ này sẽ trở thành người mang bệnh mạn tính. Giai đoạn này kéo dài nhiều năm, có thể không có biểu hiện lâm sàng, cuối cùng dẫn tới những hậu quả nghiêm trọng như xơ gan, có nước trong ổ bụng, chảy máu đường tiêu hóa do vỡ mạch máu bị giãn, ung thư gan.

Nói chung, khi bệnh đã tiến triển đến giai đoạn xơ gan, chức năng gan khó có thể hồi phục, ngay cả khi tình trạng viêm gan được cải thiện. Vì vậy, các thầy thuốc thường điều trị bệnh sớm nhằm ngăn ngừa hoặc làm chậm quá trình xơ gan.
90% trường hợp nhiễm SVVG B ở tuổi trưởng thành sẽ hồi phục hoàn toàn và không bao giờ bị siêu vi quấy rầy lại. Chỉ có 10% chuyển thành “người mang trùng mạn tính”.

Tuy nhiên, ở trẻ nhiễm siêu vi B từ lúc mới sinh, bệnh diễn biến khác hẳn. Khoảng 90% số trẻ này sẽ trở thành người mang bệnh mạn tính. Giai đoạn này kéo dài nhiều năm, có thể không có biểu hiện lâm sàng, cuối cùng dẫn tới những hậu quả nghiêm trọng như xơ gan, có nước trong ổ bụng, chảy máu đường tiêu hóa do vỡ mạch máu bị giãn, ung thư gan.

Nói chung, khi bệnh đã tiến triển đến giai đoạn xơ gan, chức năng gan khó có thể hồi phục, ngay cả khi tình trạng viêm gan được cải thiện. Vì vậy, các thầy thuốc thường điều trị bệnh sớm nhằm ngăn ngừa hoặc làm chậm quá trình xơ gan.
',
                  'image' => $image
                ]);
            }
        }
    }
}
