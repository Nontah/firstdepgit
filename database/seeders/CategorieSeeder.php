<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::insert([
	        [
	            'libele' => 'Épicerie salée bio',
	            'description' => 'Produits sains et issus de l\'agriculture biologique',
	            'user_id' => '2',
	        ],
	       
	        [
	            'libele' => 'Épicerie sucrée bio',
	            'description' => 'Aliments sucrés et autres gourmandises issus de l\'agriculture biologique : tablettes de chocolat bio...',
	             'user_id' => '1',
	        ],

	        [
	            'libele' => 'Boissons bio',
	            'description' => 'Jus de fruits, jus de légumes, vins, laits végétaux et même sirops, limonades ou whiskies',
	             'user_id' => '1',
	        ],

	          [
	            'libele' => 'Jus de pomme bio',
	            'description' => 'Bio désigne à la fois les produits agricoles alimentaires certifiés bio selon la réglementation européenne sur le mode de production biologique',
	             'user_id' => '1',
	        ],
    	]);
    }
}
