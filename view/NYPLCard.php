<?php
	if($_GET['rid']){} else{header("Location: ../"); exit();}
	if($varName = $_GET['nm']){} else{header("Location: ../"); exit();}
	if($varCN = $_GET['cn']){} else{header("Location: ../"); exit();}
	if($varPIN = $_GET['pn']){} else{header("Location: ../"); exit();}
	if($varDate = $_GET['io']){} else{header("Location: ../"); exit();}
?>
<head>
    <title>NYPL Provided by HELLIX IT</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<table border="0" style="border-collapse: collapse; background-image:url(https://raw.githubusercontent.com/EdviconAdmin/resources-internal-use/main/New_York_Public_Library_Card/New_York_Public_Library_card_by_HELLIX_IT.jpg); border:none; background-size:100% auto; margin:0px; color: white; font-size:1.5vw">
    <tr>
        <td colspan="3" style="height:4vw"></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MEMBER NAME</td>
        <td width="50%" rowspan="2"><img src="https://raw.githubusercontent.com/EdviconAdmin/resources-internal-use/main/New_York_Public_Library_Card/New_York_Public_Library_logo_by_HELLIX_IT.png" style="width: 80%; float:left;"></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font style="font-size: 3vw;"><?php echo $varName; ?></font></td>
    </tr>
    <tr>
        <td colspan="3" style="height:3vw"></td>
    </tr>
    <tr>
        <td colspan="3">
            <center>
                <table style="background-color: white; width: 95%; border-spacing: 4vw; border-radius: 13px;">
                    <tr>
                        <td><center><img src="https://raw.githubusercontent.com/EdviconAdmin/resources-internal-use/main/New_York_Public_Library_Card/New_York_Public_Library_Hellix_IT_logo_by_HELLIX_IT.png" style="width: 30%; float:left">
                            <img src="https://raw.githubusercontent.com/EdviconAdmin/resources-internal-use/main/New_York_Public_Library_Card/New_York_Public_Library_Edvicon_logo_by_HELLIX_IT.png" style="width: 30%; float:right"></center></td>
                    </tr>
                    <tr>
                        <td><center><font style="color: black; font-size: 5vw;"><?php echo $varCN; ?></font></center></td>
                    </tr>
                </table>
            </center>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="height:2vw"></td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PIN</td>
        <td></td>
        <td>ISSUED</td>
    </tr>
    <tr>
        <td width="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font style="font-size: 2vw;"><?php echo $varPIN; ?></font></td>
        <td width="60%"></td>
        <td width="20%"><font style="font-size: 2vw;"><?php echo $varDate; ?></font></td>
    </tr>
    <tr>
        <td colspan="3" style="height:3vw"></td>
    </tr>
    <tr>
        <td width="30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; www.hellixit.com</td>
        <td width="40%"></td>
        <td width="30%">www.edvicon.org &nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3" style="height:1vw"></td>
    </tr>
</table>
