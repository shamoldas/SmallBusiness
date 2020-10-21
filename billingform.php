



<body>
<link rel="stylesheet" href="javascript/billingform.js">
<link rel="stylesheet"  href="css/billingform.css">
<a href="index.php" class="btn btn-primary">BackHome</a>
<section class="billing" id="ship-bill">
<a href="index.php" class="btn btn-primary">BackHome</a>
<h1>Shipping and Billing Information</h1>

<form action="billingdatainsert.php" method="post">


<fieldset class="info">
<h1>Billing Information</h1>
<label>Name:<input class="input-adjust" type="text" name="name" id="name"></span></label>
<label>Mobile:<input class="input-adjust" type="text" name="mobile" id="mobile"></label>
<label>Email:<input class="input-adjust" type="text" name="email" id="email"></label>
<label>Billing Method:<input class="input-adjust" type="text" name="billing" id="billing"></label>
<label>Address:<input class="input-adjust" type="text" name="address" id="address"></label>
<label>City:<input class="input-adjust" type="text" name="city" id="city"></label>
<label>Country:<input class="input-adjust" type="text" name="country" id="country"></label>
</fieldset>
<!--
<fieldset class="info">
<h1>Shipping Information</h1>
<label for="billing-info">Same as my billing address:</label> <input class="input-adjust" type="checkbox" id="billing-info" name="billing-info">
<label>First name:<input class="input-adjust" type="text" id="firstname2"></label>
<label>Last name:<input class="input-adjust" type="text" id="lastname2"></label>
<label>Address:<input class="input-adjust" type="text" id="address2"></label>
<label>City:<input class="input-adjust" type="text" id="city2"></label>
<label>Country:<input class="input-adjust" type="text" id="country2"></label>
</fieldset>
-->
<input class="input-adjust" type="submit" value="Submit">
</form>
</section>

</body>