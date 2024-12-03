<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productsData = [
            'Bánh' => [
                ['name' => 'Bánh Chocolate', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Chocolate thơm ngon, ngọt ngào và đậm vị socola', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Chocolate'],
                ['name' => 'Bánh Phô Mai', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Phô Mai béo ngậy, mềm mịn và rất thơm ngon', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Phô+Mai'],
                ['name' => 'Bánh Quy', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Quy giòn tan, có vị ngọt nhẹ rất dễ ăn', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Quy'],
                ['name' => 'Bánh Bông Lan', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Bông Lan mềm mịn, thơm ngon, hợp khẩu vị nhiều người', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Bông+Lan'],
                ['name' => 'Bánh Đậu Xanh', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Đậu Xanh thơm ngậy, hương vị truyền thống', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Đậu+Xanh'],
                ['name' => 'Bánh Hạnh Nhân', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Hạnh Nhân bổ dưỡng, giòn rụm với hương vị hạnh nhân', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Hạnh+Nhân'],
                ['name' => 'Bánh Dâu Tây', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Dâu Tây ngọt ngào, thơm mùi dâu tươi', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Dâu+Tây'],
                ['name' => 'Bánh Kem', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Kem mềm mại, hương vị kem béo ngậy', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Kem'],
                ['name' => 'Bánh Su Kem', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Su Kem nhân kem ngọt, thơm lừng', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Su+Kem'],
                ['name' => 'Bánh Tiramisu', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Bánh Tiramisu phong cách Ý, hương vị cà phê đặc trưng', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Bánh+Tiramisu'],
            ],
            'Coffee' => [
                ['name' => 'Espresso', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Espresso đậm đà, hương vị mạnh mẽ đặc trưng', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Espresso'],
                ['name' => 'Americano', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Americano phong cách Mỹ, vị cà phê nhẹ nhàng', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Americano'],
                ['name' => 'Cappuccino', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Cappuccino ngọt ngào, béo ngậy', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Cappuccino'],
                ['name' => 'Latte', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Latte thanh nhã, thơm mùi sữa', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Latte'],
                ['name' => 'Macchiato', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Macchiato độc đáo với lớp kem sữa', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Macchiato'],
                ['name' => 'Mocha', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Mocha đậm vị socola', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Mocha'],
                ['name' => 'Flat White', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Flat White béo ngậy, hương vị êm dịu', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Flat+White'],
                ['name' => 'Cà Phê Việt', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Cà Phê Việt đậm đà, hương vị truyền thống', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Cà+Phê+Việt'],
                ['name' => 'Affogato', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Affogato độc đáo, kết hợp kem và cà phê', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Affogato'],
                ['name' => 'Cold Brew', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Cold Brew mát lạnh, thích hợp mùa hè', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Cold+Brew'],
            ],
            'Trà' => [
                ['name' => 'Trà Đào', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Đào thơm ngon, vị ngọt dịu', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Đào'],
                ['name' => 'Trà Sữa Trân Châu', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Sữa Trân Châu béo ngậy, kèm trân châu dẻo dai', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Sữa+Trân+Châu'],
                ['name' => 'Trà Sữa Matcha', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Sữa Matcha thanh mát, hương vị trà xanh', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Sữa+Matcha'],
                ['name' => 'Trà Hoa Hồng', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Hoa Hồng thơm ngát, nhẹ nhàng và thanh lịch', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Hoa+Hồng'],
                ['name' => 'Trà Sen', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Sen thanh tao, hương sen dịu mát', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Sen'],
                ['name' => 'Trà Bạc Hà', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Bạc Hà sảng khoái, vị the mát', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Bạc+Hà'],
                ['name' => 'Trà Xanh Nhật Bản', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Xanh Nhật Bản đậm đà, thơm ngát', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Xanh+Nhật+Bản'],
                ['name' => 'Trà Hoa Cúc', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Hoa Cúc thanh nhẹ, tốt cho sức khỏe', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Hoa+Cúc'],
                ['name' => 'Trà Chanh', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Chanh chua ngọt, giải khát tuyệt vời', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Chanh'],
                ['name' => 'Trà Oolong', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Trà Oolong thanh tao, hương vị độc đáo', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Trà+Oolong'],
            ],
            'Freeze' => [
                ['name' => 'Freeze Đào', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Đào ngọt ngào, mát lạnh', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Đào'],
                ['name' => 'Freeze Dâu', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Dâu thơm mát, vị dâu ngọt ngào', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Dâu'],
                ['name' => 'Freeze Xoài', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Xoài nhiệt đới, vị xoài thơm ngon', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Xoài'],
                ['name' => 'Freeze Kiwi', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Kiwi mát lạnh, hương kiwi dịu nhẹ', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Kiwi'],
                ['name' => 'Freeze Dừa', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Dừa béo ngậy, thơm mùi dừa', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Dừa'],
                ['name' => 'Freeze Bạc Hà', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Bạc Hà mát lạnh, vị the', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Bạc+Hà'],
                ['name' => 'Freeze Chocolate', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Chocolate đậm vị socola', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Chocolate'],
                ['name' => 'Freeze Matcha', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Matcha thơm ngát, vị trà xanh tươi mát', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Matcha'],
                ['name' => 'Freeze Trà Xanh', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Trà Xanh thanh mát, hương vị trà xanh đặc trưng', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Trà+Xanh'],
                ['name' => 'Freeze Sô Cô La Dâu', 'price' => rand(40000, 60000), 'quantity' => rand(1, 50), 'status' => true, 'description' => 'Freeze Sô Cô La Dâu ngon miệng, sự kết hợp thú vị', 'image' => 'https://via.placeholder.com/640x480.png/003344?text=Freeze+Sô+Cô+La+Dâu'],
            ],
        ];

        $categories = DB::table('categories')->get();

        foreach ($categories as $category) {
            if (isset($productsData[$category->name])) {
                foreach ($productsData[$category->name] as $product) {
                    DB::table('products')->insert([
                        'name' => $product['name'],
                        'price' => $product['price'],
                        'quantity' => $product['quantity'],
                        'category_id' => $category->id,
                        'status' => $product['status'],
                        'description' => $product['description'],
                        'image' => $product['image'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
