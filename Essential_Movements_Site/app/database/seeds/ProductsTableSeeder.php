<?php

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		

		$Products = [
			[
				'id'      => 'sku_223994',
				'name'   => 'Sketches Of Spain',
				'artist'  => 'Miles Davis',
				'label'   => 'Columbia',
				'year'	  => '2013',
				'image'	  => 'img/covers/223994.jpg',
				'price'   => '10.00',
				'qty'	  => '1',
				'options'  => 'MP3',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'id'      => 'sku_222190',
				'name'   => 'Rainbow Walker',
				'artist'  => 'Radio Head',
				'label'   => 'Compost',
				'year'	  => '2007',
				'image'	  => 'img/covers/222190.jpg',
				'price'   => '5.00',
				'qty'	  => '1',
				'options'  => 'MP3',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'id'      => 'sku_222758',
				'name'   => 'Bitches Brew',
				'artist'  => 'Miles Davis',
				'label'   => 'Blue Note',
				'year'	  => '2013',
				'image'	  => 'img/covers/222758.jpg',
				'price'   => '6.99',
				'qty'	  => '1',
				'options'  => 'MP3',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'id'      => 'sku_221693',
				'name'   => 'Mystic Brew',
				'artist'  => 'Leon Thomas',
				'label'   => 'Flying Dutchman',
				'year'	  => '1976',
				'image'	  => 'img/covers/221693.jpg',
				'price'   => '8.00',
				'qty'	  => '1',
				'options'  => 'MP3',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'id'      => 'sku_220512',
				'name'   => 'Modern Rapture',
				'artist'  => 'Mandrill',
				'label'   => 'Arista',
				'year'	  => '1986',
				'image'	  => 'img/covers/220512.jpg',
				'price'   => '11.99',
				'qty'	  => '1',
				'option'  => 'MP3',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'id'      => 'sku_226447',
				'name'   => 'My Favorite Things',
				'artist'  => 'John Belran',
				'label'   => 'River Records',
				'year'	  => '2013',
				'image'	  => 'img/covers/226447.jpg',
				'price'   => '9.99',
				'qty'	  => '1',
				'options'  => 'MP3',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'id'      => 'sku_226014',
				'name'   => 'Random Thoughts',
				'artist'  => 'Ron Gripes',
				'label'   => 'Truth Recording',
				'year'	  => '2008',
				'image'	  => 'img/covers/226014.jpg',
				'price'   => '5.00',
				'qty'	  => '1',
				'options'  => 'WAV',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'id'      => 'sku_225379',
				'name'   => 'Diamonds',
				'artist'  => 'Victor Brown',
				'label'   => 'Columbia',
				'year'	  => '2012',
				'image'	  => 'img/covers/225379.jpg',
				'price'	  => '8.99',
				'qty'	  => '1',
				'options'  => 'MP3',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'id'      => 'sku_224399',
				'name'   => 'Fallout',
				'artist'  => 'John Roundtree',
				'label'   => 'Tribe Records',
				'year'	  => '2009',
				'image'	  => 'img/covers/224399.jpg',
				'price'	  => '10.00',
				'qty'	  => '1',
				'options'  => 'WAV',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'id'      => 'sku_224285',
				'name'   => 'Classic Keys',
				'artist'  => 'Jimmy Smith',
				'label'   => 'Blue Note',
				'year'	  => '1963',
				'image'	  => 'img/covers/224285.jpg',
				'price'	  => '10.00', 
				'qty'	  => '1',
				'options'  => 'MP3',
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			]
		];

		DB::table('products')->insert($Products);
	}

}
