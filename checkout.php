<?php
require('config.php');
?>
<form action="submit.php" method="post">
    <script
             src="https://checkout.stripe.com/checkout.js" class="stripe-button"
             data-key="<?php echo $publishableKey?>"
             data-amount="4500"
             data-name="D & R Cafe"
             data-description="D & R Cafe"
             data-image=""
             data-currency="INR"
      >
     </script>
</form>