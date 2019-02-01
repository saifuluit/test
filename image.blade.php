public function productStore(Request $request)
    {
    	# code...
    	$product = new Product();
    	if ($request->hasFile('image'))
		{
	        $file = $request->file('image');
	        $name = time() . '_product_' . $file->getClientOriginalName();
	        $file->move('product/', $name);
	        $product->image = $name;
    	}
    	$product->name = $request->name;
    	$product->category_id = $request->category_id;
    	$product->save();
    	return redirect()->back();
    }

   anothr one