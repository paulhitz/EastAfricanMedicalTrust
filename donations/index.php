<?php $title = "Donations"; include("../header.html"); ?>
  <h1>Donations</h1>

  <p>The East African Medical Trust is a registered Irish charity (CHY-16991). It is helping to establish a centre of medical excellence in care, education and research in Northern Tanzania. Any donations you can give are greatly appreciated.</p>

  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <p>Please click on the 'Make a Donation' button to make a one-time donation at our PayPal donation site.<br/>
      <input type="hidden" name="cmd" value="_xclick"/>
      <input type="hidden" name="business" value="east-african-medical-trust@hotmail.com"/>
      <input type="hidden" name="item_name" value="East African Medical Trust"/>
      <input type="hidden" name="item_number" value="Donate to the East African Medical Trust"/>
      <input type="hidden" name="no_shipping" value="1"/>
      <input type="hidden" name="no_note" value="1"/>
      <input type="hidden" name="currency_code" value="EUR"/>
      <input type="hidden" name="tax" value="0"/>
      <input type="hidden" name="lc" value="IE"/>
      <input type="hidden" name="bn" value="PP-DonationsBF"/>
      <input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but21.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"/>
    </p>
  </form>

  <p style="padding-top: 20px;">You can also set up a monthly donation by entering the monthly amount and the number of payments in the fields below and clicking on the subscribe button.</p>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <p>
      <strong>&euro;</strong><input type="text" name="a3" value="10.00" size="6" class="textbox"/>
      for <input type="text" name="srt" value="12" size="3" class="textbox"/> months
      <input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but24.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style=" vertical-align: bottom;"/>
      <input type="hidden" name="cmd" value="_xclick-subscriptions"/>
      <input type="hidden" name="business" value="east-african-medical-trust@hotmail.com"/>
      <input type="hidden" name="item_name" value="East African Medical Trust"/>
      <input type="hidden" name="item_number" value="Donate to the East African Medical Trust"/>
      <input type="hidden" name="no_shipping" value="1"/>
      <input type="hidden" name="no_note" value="1"/>
      <input type="hidden" name="currency_code" value="EUR"/>
      <input type="hidden" name="lc" value="IE"/>
      <input type="hidden" name="bn" value="PP-SubscriptionsBF"/>
      <input type="hidden" name="p3" value="1"/>
      <input type="hidden" name="t3" value="M"/>
      <input type="hidden" name="src" value="1"/>
      <input type="hidden" name="sra" value="1"/>
    </p>
  </form>

  <p style="padding-top: 20px;">Alternatively, you can send a cheque (made out to the <strong>East African Medical Trust</strong>) to the address below:<br/>
  FAO Kevin O'Doherty/East African Medical Trust<br/>
  O'Doherty Warren &amp; Associates Solicitors<br/>
  Melrose<br/>
  2 Charlotte Row<br/>
  Gorey<br/>
  Co Wexford<br/>
  Ireland<br/>
  </p>

  <div style="text-align: center; margin-top: 30px;">
    <img src="resources/images/paypal.gif" width="115" height="45" alt="Payments by PayPal" style="margin-bottom: 10px;"/><br/>
    <img src="resources/images/logo_ccVisa.gif" width="37" height="21" alt="Visa"/>
    <img src="resources/images/logo_ccMC.gif" width="37" height="21" alt="MasterCard"/>
    <img src="resources/images/logo_ccAmex.gif" width="37" height="21" alt="AMEX"/>
  </div>

<?php include("../footer.html"); ?>
