<?php
session_start();
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
    <form id="form1" runat="server">
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
                   
           
                      <fieldset><legend style="font-weight: 700; text-align: center; font-size: large">Transaction Details</legend>
    <table class="auto-style1">
        <tr>
            <td class="auto-style57"></td>
            <td class="auto-style58"><fieldset>
                <table class="auto-style1">
                    <tr>
                        <td class="auto-style27">Pay To:</td>
                        <td class="auto-style28">
                            <input type="text" name="name" value="Myshop" />
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style25">Total Payable Amount:</td>
                        <td class="auto-style26">
                            <span class="auto-style62"></span><input type="text" value="<?php echo $_SESSION['tot']; ?>" name="name" />
                            <span class="auto-style62">Rs./-</span></td>
                    </tr>
                </table>
                </fieldset></td>
            <td class="auto-style59"></td>
        </tr>
        <tr>
            <td class="auto-style35"></td>
            <td class="auto-style36"><fieldset><legend>Card Details</legend>
                <table class="auto-style1">
                    <tr>
                        <td class="auto-style33">Payment Method:</td>
                        <td class="auto-style32">Test Payment </td>
                    </tr>
                    <tr>
                        <td class="auto-style34">Card Number:</td>
                        <td class="auto-style26">
                            <input type="text" name="cno" <?php echo $_SESSION['cardnumber'] ?>  style="font-weight: 700"/>                        </td>
                    </tr>
                </table>
                </fieldset></td>
            <td class="auto-style37"></td>
        </tr>
        <tr>
            <td class="auto-style38"></td>
            <td class="auto-style39"><fieldset><legend>Bill Details</legend>
                <table class="auto-style1">
                    <tr>
                        <td class="auto-style41">
                            <p align="justify">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The billing address is used to prevent fraud by matching it to your account information, enter this as close to the way it appears on your card statement
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #99CCFF; text-align: center;"><b>If the billing address is the same as your contact address,then click
                            <input type="submit" value="Copy It" name="sub"/>
                            &nbsp;.</b></td>
                    </tr>
                    <tr>
                        <td >
                            <table class="auto-style1">
                                <tr>
                                    <td class="auto-style51">1. *Your Name</td>   
                                    <td class="auto-style52" colspan="2">
                                        <input type="text" name="txtName" Width="300px" />
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="auto-style45">2. *Address</td>
                                    <td class="auto-style53" colspan="2">
                                       <input type="text" name="txtadrs" Width="300px" Height="43px" Width="300px" />
                                        
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="auto-style55">4. *Email</td>
                                    <td class="auto-style55" colspan="2">
                                        <input type="text" name="txtemail" Width="300px" Height="43px" Width="300px" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="auto-style56">5. *Phone</td>
                                    <td class="auto-style56">
                                       <input type="text" name="txtphon" Width="300px" Height="43px" Width="300px" />
                                    </td>
                                    <td class="auto-style56">
                                    <form method="post">
                                       <input type="submit" value="Make Payment" name="pay"/>
                                       <?php
                                       if(isset($_REQUEST["pay"]))
                                       {
                                        echo'<script>window.location.href="Third.php";</script>';
                                       }
                                       ?>
    </form>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="auto-style47" colspan="3">
                                        <table class="auto-style1">
                                            <tr>
                                                <td class="auto-style50">
                                                    <p align="justify" style="color:#666666">
                                                        <b>&nbsp;&nbsp;&nbsp; In order to protect your card from fradulent transactions we might redirect you to partner site that will verify your card information. before we proceed with the payment </b>
                                                    </p>
                                                </td>
                                                <td>
                                                    <img alt="" class="auto-style49" src="Images/msc.gif" /></td>
                                                <td>
                                                    <img alt="" class="auto-style48" src="Images/vbv.gif" /></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="auto-style60" colspan="3" style="background-color: #99CCFF"><em>*</em> Denotes required field </td>
                                </tr>
                                <tr>
                                    <td class="auto-style61" colspan="3">
                                        <fieldset style="border-style:solid;border-color:#d4d0c8;">
                                            <div>
                                                <p class="style2">
                                                    The normal process time is approximately 5 seconds, however it may take longer at times.
                                                </p>
                                                <p class="style2">
                                                    Please wait for the intimation from the server, DO NOT press Back or Refresh button in order to avoid double charge.</p>
                                            </div>
                                        </fieldset></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                </fieldset></td>
            <td class="auto-style40"></td>
        </tr>
        <tr>
            <td class="auto-style20">&nbsp;</td>
            <td class="auto-style22">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table></fieldset>
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
