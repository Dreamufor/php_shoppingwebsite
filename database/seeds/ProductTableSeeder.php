<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Maori gifts
        $product = new \App\Product(['name' =>'Maori Patu War Club 1','price' =>68, 'description' =>'Traditional maori patu war club souvenir','supplier_id' =>1 ,'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/patu-war-club1.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Patu War Club 2','price' =>68,'description' =>'Traditional maori patu war club souvenir','supplier_id' =>1,'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/patu-war-club2.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Patu War Club 3','price' =>68,'description' =>'Traditional maori patu war club souvenir','supplier_id' =>1,'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/patu-war-club3.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Wall Art 1','price' =>22,'description' =>'Maori wall art decorations','supplier_id' =>1, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/wall-arts-1.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Wall Art2','price' =>22,'description' =>'Maori wall art decorations','supplier_id' =>1, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/wall-arts-2.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Wall Art3','price' =>22,'description' =>'Maori wall art decorations','supplier_id' =>1, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/wall-arts-3.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Pendants Earringgs','price' =>18,'description' =>'Maori Pendants earringgs for girls from any age','supplier_id' =>1, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/pendants-earringgs.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Patu','price' =>168,'description' =>'Traditional maori patu war club souvenir','supplier_id' =>2, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/patu-maori.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Necklace','price' =>49,'description' =>'maori necklace, a special gift for the coming Summer','supplier_id' =>2, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/maori-necklace.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Mask','price' =>88,'description' =>'maori style mask, suitable in festival','supplier_id' =>2, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/maori-mask.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Hook','price' =>23,'description' =>'Maori style hook for home decorations','supplier_id' =>2, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/maori-hook.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Gift box','price' =>58,'description' =>'Maori traditional gift box for little child','supplier_id' =>2, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/maori-gift-box.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Dolls','price' =>125,'description' =>'Little cute Maori style dolls','supplier_id' =>2, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/maori-dolls.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Kotiate maori','price' =>36,'description' =>'Kotiate maori style decorations','supplier_id' =>2, 'category_id' =>1,
            'imgUrl' => 'images/products/maorigifts/kotiate-maori.jpg']);
        $product -> save();

        // Mugs
        $product = new \App\Product(['name' =>'Anchored Direction','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>3, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/anchored-direction-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Bride and Groom','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>3, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/bride-and-groom-skeletons-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Dashing Through','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>3, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/dashing-through-the-no-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Deep Space Diver','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>3, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/deep-space-diver-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Caffeine Elixir','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>4, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/dr-caffeine-elixir-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Dreamscape','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>4, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/dreamscape-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Island Dream','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>4, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/island-dream-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Just For You','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>3, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/just-for-you-skeletons-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Just Married','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>3, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/just-married-skeletons-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Kiwiana Mug','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>4, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/kiwi-az-bro-kiwiana-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'My Hearter','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>4, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/kiwi-to-my-heart-kiwiana-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Mystery Island','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>3, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/mystery-island-mug.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'The Island','price' =>16,'description' =>'Must-buy, the essential goods in every day, make you in best mood.','supplier_id' =>3, 'category_id' =>2,
            'imgUrl' => 'images/products/mugs/the-island-mug.jpg']);
        $product -> save();

        //T-shirts
        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>5, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts1.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>5, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts2.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>5, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts3.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>5, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts4.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>5, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts5.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>5, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts6.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>6, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts7.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>6, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts8.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>6, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts9.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>6, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts10.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>6, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts11.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'NZ Style T-shirts','price' =>28,'description' =>'With New Zealand featured decorations, very special T-shirts 100% made in NZ','supplier_id' =>6, 'category_id' =>3,
            'imgUrl' => 'images/products/tshirts/nztshirts12.jpg']);
        $product -> save();

        //Home&Living
        $product = new \App\Product(['name' =>'Coaster','price' =>15,'description' =>'NZ made coster with maori features','supplier_id' =>7, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/coaster1.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Coaster','price' =>15,'description' =>'NZ sightseeing coaster','supplier_id' =>7, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/coaster2.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Coaster','price' =>15,'description' =>'Coster with cute owls','supplier_id' =>7, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/coaster3.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Maori Draw Bag','price' =>17,'description' =>'Maori mix draw bags','supplier_id' =>8, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/maori-mix-draw-bags.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Bolster','price' =>22,'description' =>'Soft bolster, warm your the whole winter','supplier_id' =>8, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/nzbolster.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Ornament','price' =>19,'description' =>'Ornament for your home, best decorations.','supplier_id' =>9, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/ornament.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Fridge Magnet','price' =>9,'description' =>'Rimu New Zealand native bird fridge magnet','supplier_id' =>9, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/rimu-new-zealand-native-bird-fridge-magnet.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Treasure Box','price' =>32,'description' =>'Traditional Maori papahou treasure box','supplier_id' =>10, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/traditional-maori-papahou-treasure-box-paua-shell-lid.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Wall Art','price' =>16,'description' =>'Local home wall art','supplier_id' =>10, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/wall-art1.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Wall Art','price' =>16,'description' =>'Aroha wall art','supplier_id' =>11, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/wall-art2.jpg']);
        $product -> save();

        $product = new \App\Product(['name' =>'Wood Ornament','price' =>19,'description' =>'Wood Ornament for your home, best decorations.','supplier_id' =>11, 'category_id' =>4,
            'imgUrl' => 'images/products/homeandliving/wood-ornament.jpg']);
        $product -> save();
    }
}
