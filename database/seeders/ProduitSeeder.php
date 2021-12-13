<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;
class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Produit::insert([
	      

	         [	
	        	'id' => 1,
	            'designation' => 'Spirales bio demi-complètes',
	            'prix' => '3000',
	            'description' => 'Fabriquées selon un procédé traditionnel, ces pâtes sont séchées lentement. En résulte la cuisson.',
	            'quantite' => '10',
	            'category_id' => '1',
	            'image' => 'img1.jpg',
	            'user_id' => '2',
	        	],
 				[

 				'id' => 2,	
	            'designation' => 'Confiture d\'ananas de Madagascar bio',
	            'prix' => '5000',
	            'description' => 'C\'est à partir d\'ananas bio de Madagascar qu\'est élaborée cette confiture savoureuse.',
	            'quantite' => '20',
	            'category_id' => '2',
	            'image' => 'img2.jpg',
	            'user_id' => '1',
	       	],
	       		[

 				'id' => 3,	
	            'designation' => 'Jus de pomme bio des Cévennes',
	            'prix' => '5000',
	            'description' => 'Un pur jus de pomme des Cévennes issu d\'une coopérative qui partage des valeurs fortes!',
	            'quantite' => '20',
	            'category_id' => '3',
	            'image' => 'img3.jpg',
	            'user_id' => '1',
	       	]


    	]);
    }
}
