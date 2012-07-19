<!-- start of directions -->
      <div class="directions-top">
        <div class="body">
	  <div class="detailed-text">
	    <h1>Prices</h1>
		<h2>Classes in March will be $4 for a single Zumba or Butts and Guts class, or $20 for unlimited Zumba in a month. Gentle yoga will be coming soon at $5 per class.</h2>
		<?php if(!isset($_GET['passcode']) || $_GET['passcode'] != 'month@pim!'){ ?>
		<h2>For the convenience of students, please buy the monthly pass.
		<form action="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/164261846786212" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm" target="_top">
    <input name="item_name_1" type="hidden" value="Unlimited Month of Zumba / Butts &amp;amp; Guts"/>
    <input name="item_description_1" type="hidden" value="Unlimited Zumba and Butts &amp;amp; Guts classes for a month."/>
    <input name="item_quantity_1" type="hidden" value="1"/>
    <input name="item_price_1" type="hidden" value="20.0"/>
    <input name="item_currency_1" type="hidden" value="USD"/>
    <input name="shopping-cart.items.item-1.digital-content.description" type="hidden" value="Enter key in the form at the bottom of page to download your unlimited card."/>
    <input name="shopping-cart.items.item-1.digital-content.key" type="hidden" value="6aaHiFAsGqiHzNXJtsabCXsUygPiHi62jKLYeootepU="/>
    <input name="shopping-cart.items.item-1.digital-content.key.is-encrypted" type="hidden" value="true"/>
    <input name="shopping-cart.items.item-1.digital-content.url" type="hidden" value="http://palmyrainmotion.com/?p=prices"/>
    <input name="_charset_" type="hidden" value="utf-8"/>
    <input alt="" src="https://checkout.google.com/buttons/buy.gif?merchant_id=164261846786212&amp;w=117&amp;h=48&amp;style=white&amp;variant=text&amp;loc=en_US" type="image"/>
</form></h2>

		<h2>Once purchased, enter your code here:
		<form action='/' method='get'>
			<input type='text' value='' name='passcode' />
			<input type='hidden' value='prices' name='p' />
		</form></h2>
		<?php } else { ?>
		<h2>Thanks for your purchase. Please <a href='/images/march_pass.png'>click and print the pass here</a></h2> 
	  <?php } ?>
	</div>
	</div>
      </div>
      
