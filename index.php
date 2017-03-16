<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<title>Add Record</title>
</head>
<body>
	<div id="formDiv">
		<form method="post" action="input.php" autocomplete="off">
			<p>
				<select name="department" id="department" autofocus required>
					<option value="" selected disabled>DEPARTMENT</option>
					<option value="BEER">BEER</option>
					<option value="BODY CARE">BODY CARE</option>
					<option value="BOOKS">BOOKS</option>
					<option value="BREAD">BREAD</option>
					<option value="BULK">BULK</option>
					<option value="CANDY">CANDY</option>
					<option value="CHEESE - CUT & WRAP">CHEESE CW</option>
					<option value="CHEESE - PREWRAPPED">CHEESE PW</option>
					<option value="CUT FRUIT & VEG">CUT FRUIT & VEG</option>
					<option value="FLORAL">FLORAL</option>
					<option value="FROZEN">FROZEN</option>
					<option value="GENERAL MERCHANDISE">GEN MERCH</option>
					<option value="HERBS & SPICES">HERBS & SPICES</option>
					<option value="MAGAZINES">MAGAZINES</option>
					<option value="MEAT - FRESH">MEAT FRESH</option>
					<option value="MEAT - FROZEN">MEAT FROZEN</option>
					<option value="PACKAGED GROCERY">PACKAGED GROCERY</option>
					<option value="PETS">PETS</option>
					<option value="PF - OUTSIDE VENDOR">PF OUTSIDE VENDOR</option>
					<option value="PF - REPACKS">PF REPACK</option>
					<option value="PLANTS & SEEDS">PLANTS & SEEDS</option>
					<option value="PRODUCE">PRODUCE</option>
					<option value="PROMOTIONS">PROMO</option>
					<option value="REFRIGERATED">REFRIGERATED</option>
					<option value="SUPPLEMENTS">SUPPLEMENTS</option>
			</p></select>
			<p>
				<input type="text" name="upc" id="upc" placeholder="UPC (leave blank for PLU)" maxlength="13">
				<input type="text" name="description" placeholder="Description" maxlength="32">
			</p>
			<p>
				<input type="text" name="brand" placeholder="Brand" maxlength="32">
				<input type="text" name="size" placeholder="Size" maxlength="8">
			</p>
			<p>
				<input type="text" name="cost" placeholder="Unit Cost" maxlength="13">
				<input type="text" name="retail" placeholder="Retail" maxlength="13">
			</p>
			<p>
				<input type="text" name="supplier" placeholder="Supplier" maxlength="32">
				<input type="text" name="supplier_ID" placeholder="Supplier ID" maxlength="13">
			</p>
			<p>
				<textarea cols="50" rows="4" name="notes" placeholder="Enter any notes here. (Sold per lb, Alt ID for singles, etc.)" maxlength="200"></textarea>
			</p>

			
			<p><Strong>Local?</Strong><br/>
		    <input type="radio" name="local" id="localRadio" value="No" required>No<br/>
		    <input type="radio" name="local" id="localRadio" value="East TN">East TN<br/>
		    <input type="radio" name="local" id="localRadio" value="Regional">Regional<br/>
		    <input type="radio" name="local" id="localRadio" value="Bio-Regional">Bio-Regional<br/></p>

		    <p><strong>Organic?</strong><br/></strong>
		    <input type="radio" name="organic" value="Organic" required>Organic<br/>
		    <input type="radio" name="organic" value="Fairtrade">Fairtrade<br/>
		    <input type="radio" name="organic" value="Organic & Fairtrade">Organic & Fairtrade</p>

		    <p><strong>P6?</strong><br/>
		    <input type="radio" name="P6" value="Yes" required>Yes<br/>
		    <input type="radio" name="P6" value="No">No</p>


			<input type="submit" value="Submit">
			<input type="reset" value="Reset Form">
		</form>
	</div>
	<div id="resultDiv"></div>
</body>
</html>