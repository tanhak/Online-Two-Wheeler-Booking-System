<?php
session_start();
include "../connect.php";
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style4 {
            height: 80px;
        }
        .auto-style5 {
            width: 327px;
            height: 81px;
        }
        .auto-style6 {
            width: 785px;
            text-align: left;
        }
        .auto-style7 {
            width: 444px;
            height: 124px;
        }
        .auto-style8 {
            width: 61px;
            height: 70px;
        }
        .auto-style9 {
            width: 112px;
            height: 66px;
        }
        .auto-style10 {
            width: 88px;
            height: 74px;
        }
        .auto-style11 {
            width: 886px;
            text-align: center;
        }
        .auto-style12 {
            width: 173px;
        }
        .auto-style14 {
            width: 624px;
            height: 93px;
        }
        .auto-style15 {}
        .auto-style16 {
            width: 101px;
        }
        .auto-style17 {
            width: 990px;
        }
    </style>
</head>
<body>
    <form method="post">
    <div>
        <table class="auto-style1">
            <tr>
                <td class="auto-style4">
                    <table class="auto-style1">
                        <tr>
                            <td class="auto-style6">
                                <img alt="" class="auto-style7" src="Images/dp_hm_slider03.jpg" /></td>
                            <td style="text-align: right">
                                <img alt="" class="auto-style5" src="Images/payment-gateway-security.jpg" /></td>
                        </tr>
                    </table>
                </td>
                
            </tr>
            <tr>
                <td class="auto-style15" >
                    <asp:ScriptManager ID="ScriptManager1" runat="server"></asp:ScriptManager>
           
                      <fieldset><legend style="font-weight: 700; text-align: center; font-size: large;">Enter Your Card Details</legend>
    <table class="auto-style1">
        <tr>
            <td class="auto-style20"></td>
            <td class="auto-style22"></td>
            <td class="auto-style20"></td>
            <td class="auto-style20"></td>
        </tr>
        <form>
        <tr>
            <td>&nbsp;</td>
            
            <td class="auto-style18">Choose your card type</td>
            <td style="vertical-align:middle;">
                  
                   <input type="radio" name="test" value="credit" checked>
  <!-- <img src="Images/1391796960_payment_method_card_visa.png" alt="Smiley face" height="31" width="58"> -->
  
  <span>Credit Card</span>
  <input type="radio" name="test" value="debit" checked>
  
  <span>Debit Card</span>
  <!-- <img src="Images/1391796956_payment_method_master_card.png" alt="Smiley face" height="31" width="58"> </td> -->
            <td>&nbsp;</td>
        </tr>
        <form>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style18">Enter your card number</td>
            <td>
                <input type="text" name="cardno" maxlength="16"/>
                 
                
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style18">Enter your name on card</td>
            <td>
                <input type="text" name="cardname" maxlength="36"/>
                 
                
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style18">Enter 4 digit Confirmation PIN</td>
            <td>
                <input type="password" name="pinno" maxlength="4"/>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style26">&nbsp;</td>
            <td>
                <!-- <input type="checkbox" name="terms" value="terms" CssClass="auto-style25" > -->
                
                <!-- <span class="auto-style25">&nbsp;I Accept the Terms &amp; Conditions</span></td> -->
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>
                <input type="submit" value="Submit" name="sub"/>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>
                
                </form>
            </td>
            <td>&nbsp;</td>
        </tr>
        <?php
	// session_start();
	if(isset($_REQUEST["sub"]))
	{
        $dat= date('Y-m-d');
        $_SESSION["cardtype"]=$_REQUEST["test"];
        $type=$_REQUEST["test"];

		$_SESSION["cardnumber"]=$_REQUEST["cardno"];
        $cno=$_REQUEST["cardno"];

		$_SESSION["cardName"]=$_REQUEST["cardname"];
        $cname=$_REQUEST["cardname"];

		$_SESSION["pinno"]=$_REQUEST["pinno"];
        $uname=$_SESSION["uname"];
        $bid=$_SESSION["cid"];
$qry="insert into tbl_carddetails (`custid`,`cardtype`,`cardno`,`card_name`,`expdate`) values('$uname','$type','$cno','$cname','$dat')";
mysqli_query($con,$qry);
$qry="insert into tbl_payment (`booking_id`,`cardno`,`type`,`payment_date`,`status`) values('$bid','$cno','$type','$dat','payed')";
mysqli_query($con,$qry);

		$_SESSION["cardtype"]=$_REQUEST["test"];
		$_SESSION["cardnumber"]=$_REQUEST["cardno"];
		$_SESSION["pinno"]=$_REQUEST["pinno"];

		echo'<script>window.location.href="Third.php";</script>';
	}
	?>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style21"></td>
            <td class="auto-style24"></td>
            <td class="auto-style21"></td>
            <td class="auto-style21"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>

            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
        </fieldset>
                </td>
            </tr>
            <tr>
               
                <td class="auto-style4">
                    <table class="auto-style1">
                        <tr>
                            <td class="auto-style12">
                                <img alt="" class="auto-style8" src="Images/secure.jpg" /><img alt="" class="auto-style9" src="Images/firstdataglobal_cardinal_centinel_3d-secure_b909dac69bbd832054c1bf467e389c8f_verified_by_visa_1.gif" /></td>
                            <td class="auto-style11">
                                <img alt="" class="auto-style14" src="Images/seq.JPG" /></td>
                            <td style="text-align: right">
                                <img alt="" class="auto-style10" src="Images/ImgSml_PaymentGateway.jpg" /></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    
</form>
</body>
</html>
