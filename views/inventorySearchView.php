<?php 
class InventorySearchView
{
	//Test Constructor
	public function __construct()
	{
		//echo 'Hello. You are inside loginView.php - __construct()</br>';
	}
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inventory Search View</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>
		<form action=�#� method=�POST� name="historicalSearchForm" class="pure-form" id="inventorySearchForm">
    		<fieldset>
        		<legend>Enter a product ID for a detailed product summary:</legend>

        		<input id=�productID� name=�productIDField� type="text" placeholder="Enter Product ID"></br>

				</br>
        		<button type="submit" name=�submit� class="pure-button pure-button-primary">Submit</button>

    		</fieldset>
		</form>
	</body>
</html>