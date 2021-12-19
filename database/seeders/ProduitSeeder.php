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
	            'image' => '1.jpg',
	            'img2' => '11.jpg',
	            'img3' => '12.jpg',
	            'category_id' => '1',
	            'user_id' => '2',
	            'dt_debut_favorie' =>'2021-12-13',
	            'dt_fin_favorie' => '2021-12-31',
	        ],

 			[

 				'id' => 2,	
	            'designation' => 'Confiture d\'ananas de Madagascar bio',
	            'prix' => '5000',
	            'description' => 'C\'est à partir d\'ananas bio de Madagascar qu\'est élaborée cette confiture savoureuse.',
	            'quantite' => '20',
	            'image' => '2.jpg',
	             'img2' => '21.jpg',
	            'img3' => '22.jpg',
	            'category_id' => '2',
	            'user_id' => '1',
	            'dt_debut_favorie' =>'2021-12-13',
	            'dt_fin_favorie' => '2021-12-31',
	       	],
	       	[

 				'id' => 3,	
	            'designation' => 'Jus de pomme bio des Cévennes',
	            'prix' => '5000',
	            'description' => 'Un pur jus de pomme des Cévennes issu d\'une coopérative qui partage des valeurs fortes!',
	            'quantite' => '20',
	             'image' => '3.jpg',
	             'img2' => '31.jpg',
	            'img3' => '32.jpg',
	            'category_id' => '3',
	            'user_id' => '1',
	            'dt_debut_favorie' =>'2021-12-13',
	            'dt_fin_favorie' => '2021-12-31',
	       	],





			 [
			 	'id' => 4,	
	            'designation' => 'Huile de coco vierge - 1l',
	            'prix' => '5000',
	            'description' => 'Huile de coco vierge - 1l',
	            'quantite' => '20',
	             'image' => '4.jpg',
	             'img2' => '42.jpg',
	            'img3' => '43.jpg',
	            'category_id' => '5',
	            'user_id' => '1',
	            'dt_debut_favorie' =>'2021-12-13',
	            'dt_fin_favorie' => '2021-12-31',

			 ],


			  [
			 	'id' => 5,	
	            'designation' => 'Huile de colza vierge - 1l',
	            'prix' => '17000',
	            'description' => 'Huile de colza vierge - 1l',
	            'quantite' => '20',
	             'image' => '5.jpg',
	             'img2' => '52.jpg',
	            'img3' => '53.jpg',
	            'category_id' => '5',
	            'user_id' => '1',
	            'dt_debut_favorie' =>'2021-12-13',
	            'dt_fin_favorie' => '2021-12-31',

			 ],

			   [
			 	'id' => 6,	
	            'designation' => 'Huile de pépins de courge - 250ml',
	            'prix' => '3000',
	            'description' => 'Huile de pépins de courge - 250ml',
	            'quantite' => '20',
	             'image' => '6.jpg',
	             'img2' => '62.jpg',
	            'img3' => '63.jpg',
	            'category_id' => '5',
	            'user_id' => '1',
	            'dt_debut_favorie' =>'2021-12-13',
	            'dt_fin_favorie' => '2021-12-31',

			 ]

    	]);
    }
}
