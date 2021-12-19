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
	             'image' => '1.jpg',
	            'user_id' => '1',
	        ],
	       
	        [
	            'libele' => 'Épicerie sucrée bio',
	            'description' => 'Aliments sucrés et autres gourmandises issus de l\'agriculture biologique : tablettes de chocolat bio...',
	             'image' => '2.jpg',
	             'user_id' => '1',
	        ],

	        [
	            'libele' => 'Boissons bio',
	            'description' => 'Jus de fruits, jus de légumes, vins, laits végétaux et même sirops, limonades ou whiskies',
	             'image' => '3.jpg',
	             'user_id' => '1',
	        ],

	          [
	            'libele' => 'Jus de pomme bio',
	            'description' => 'Bio désigne à la fois les produits agricoles alimentaires certifiés bio selon la réglementation européenne sur le mode de production biologique',
	            'image' => '4.jpg',
	            'user_id' => '1',
	        ],

	        [
	        	'libele' => 'Huiles Essentielles',
	        	'description' => 'Huiles Essentielles bio',
	        	'image' => '5.jpg',
	        	'user_id' => '1',


	        ]
    	]);
    }
}
