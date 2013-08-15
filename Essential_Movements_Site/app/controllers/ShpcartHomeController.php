<?php 




/**
 * Libraries we can use.
 */
use Model\Products;
use \View;
use \Input;
use \Redirect;
/**
 * The products page.
 */
class ShpcartHomeController extends  \Illuminate\Routing\Controllers\Controller
{
	/**
	 * Flag for whether the controller is RESTful.
	 *
	 * @access   public
	 * @var      boolean
	 */
	public $restful = true;

	/**
	 * Show a list of the products on the page.
	 *
	 * @access   public
	 * @return   View
	 */
	public function getIndex()
	{
		// Get the products.
		//
		$products = Product::all();

		// Show the page.
		//
		return View::make('/')->with('products', $products);
	}
}
