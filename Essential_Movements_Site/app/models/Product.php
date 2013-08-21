<?php

class Product extends Eloquent {
	

	public static function get_options($item_id)
	{
		$products = Product::all();

		return array_get($products, $item_id . 'option');
	}

	// public static function find($product_slug = null)
	// {
	// 	$products = Product::all();

	// 	foreach($products as $product)
	// 	{
	// 		if(\Str::slug($product['name']) === $product_slug)
	// 		{
	// 			return $product;
	// 		}
	// 	}
	// 	return false;
	// }
}