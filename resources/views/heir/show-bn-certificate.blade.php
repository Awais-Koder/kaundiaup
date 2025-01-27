
<html>
<head>
    <meta charset="utf-8">
    <base href="https://www.kaundiaup.com/">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/certificate_css/heir.css') }}">
    <title>বাংলা ওয়ারিশ সনদপত্র</title>
    <style>

        @media print
        {
            .no-print, .no-print *
            {
                visibility:hidden;

            }
            table{
                background:none !important;
            }
            #main{
                border:0px !important;
                overflow: hidden;

            }
            td.instruct{position:relative;top:0px;height:100px;}
            td.eweb	font{position:relative;top:0px !important;}
            td.dev font{position:relative;top:-10px;}
            img.qrcode{position:relative;top:-10px; height:100px !important;}
            table.certificate td{line-height:2px;}
        }
    </style>
</head>
<body>
<div id="main">
    <div id="main_second">
        <!------header div start here---->
        <div id="muri">
            <table border="0px" width="99%" height="60px" cellspacing="0"  cellpadding="0" style="border-collapse:collapse;margin:0px auto;">
                <tr height="60px">
                    <td  class="no-print"  style="width:1.5in; text-align:right;"><img src="logo_images/logo.png" height="55px" width="55px"/></td>
                    <td  class="no-print"  style="text-align:center;height:60px;"><font style="font-size:15px; font-weight:bold; color:blue; width:5.5in;">কাউন্দিয়া ইউনিয়ন পরিষদ</font>  <br />
                        <font style="font-size:9px; font-weight:bold;">
                            সাভার,&nbsp;ঢাকা-১৩৪০ <br />
                            ওয়েব সাইট  : www.kaundiaup.com</font>
                    </td>
                    <td style="width:1.4in;"></td>
                </tr>
            </table>

            <table width="95%" height='200px' border='0' class="muri_table" style="border-collapse:collapse;margin:0px auto;">
                <tr>
                    <td colspan="4" width='100%'>
                        <div class="owarishhead">ওয়ারিশ সনদ</div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 145px;font-size:15px;vertical-align:middle;">ক্রমিক নং</td>
                    <td style="width:330px;" >: <input type="text"  value="১৭৫৫" style="width:95%;font-size:13px;border-bottom:1px dashed black;" readonly /></td>
                    <td style="width: 38px;font-size:15px;vertical-align:middle;">তারিখ</td>
                    <td style="width:240px;">: <input type="text" value='৩১-১০-২০২৪' style="width:95%;font-size:13px;border-bottom:1px dashed black;" readonly /></td>
                </tr>
                <tr>
                    <td style="font-size:15px;vertical-align:middle;">সনদ নং</td>
                    <td colspan="3">: <input type="text" value='২০২৪২৬১৭২৫০০০১৭৪৯' style="width:98%;font-size:13px;border-bottom:1px dashed black;" readonly /></td>
                </tr>
                <tr>
                    <td style="font-size:15px;vertical-align:middle;"> নাম </td>
                    <td colspan="3">: <input type="text" value='মৃতঃ ননী গোপাল' style="width:98%;font-size:13px;border-bottom:1px dashed black;" readonly /></td>
                </tr>
                <tr>
                    <td style="font-size:15px;vertical-align:middle;"> পিতার নাম </td>
                    <td colspan="3">: <input type="text" value='মৃতঃ প্রান ভল্লব রাজবংশী' style="font-size:13px;width:260px;border-bottom:1px dashed black;" readonly />
                        <span style="font-size: 12px;">মাতার নাম</span>
                        : <input type="text" value='মৃতঃ সখিসোনা রাজবংশী' style="width:265px;font-size:13px;border-bottom:1px dashed black;" readonly /></td>
                </tr>
                <tr>
                    <td style="font-size:15px;vertical-align:middle;">বর্তমান ঠিকানা</td>
                    <td colspan="3">: <input type="text" value='&nbsp;মাঝিরদিয়া, কাউন্দিয়া,&nbsp;আমিন বাজার-১৩৪৮,&nbsp;সাভার,&nbsp;ঢাকা' style="width:98%;font-size:13px;border-bottom:1px dashed black;" readonly /></td>
                </tr>

                <tr>
                    <td style="font-size:15px;vertical-align:middle;">ন্যাশনাল আইডি নং</td>
                    <td colspan="3">:
                        <input type="text" value='২৬১৭২৫০০৪৮৮৬৯' style="width:265px;font-size:13px;border-bottom:1px dashed black;" readonly />
                        <span style="font-size: 12px;">ওয়ার্ড নং</span>
                        : <input type="text" name="" value="০৯" id="" style="width:270px;font-size:13px;border-bottom:1px dashed black;" readonly /></td>
                </tr>

                <tr>
                    <td style="font-size:15px;vertical-align:middle;">উত্তরাধিকারীগণের সংখ্যা</td>
                    <td style="width:270px;font-size:13px;border-bottom:1px dashed black;"  >: <span id='total'>&nbsp;&nbsp;</span>&nbsp;&nbsp;জন</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td style="width:50px;text-align:center;border-top:1px solid black;font-size:15px;">চেয়ারম্যান স্বাক্ষর</td>
                </tr>
            </table>
        </div>

        <!----muri div close here---->

        <!--- certificate div start here --->
        <div class="wrapper">
            <div id="cert">
                <table border="0px" width="98%" height="110px;" align="center"   style="border-collapse:collapse; margin:2px auto;"  >
                    <tr>
                        <td  class="no-print"  style="width:1.5in; text-align:center;"><img src="logo_images/logo.png" height="100px" width="100px"/></td>
                        <td   class="no-print"  style="text-align:center;"><font style="font-size:18px; font-weight:bold; color:blue;">কাউন্দিয়া ইউনিয়ন পরিষদ</font>  <br />
                            <font style="font-size:14px; font-weight:bold;">
                                সাভার,&nbsp;ঢাকা-১৩৪০<br />
                                ওয়েব সাইট  : www.kaundiaup.com</font>

                        </td>
                        <td style="width:1.5in; text-align:left;vertical-align:bottom;">
                            <p style="font-size: 15px; position:relative;top:27px;">তারিখ: ৩১-১০-২০২৪</p>
                        </td>
                    </tr>
                </table>
                <table border="0px" width="98%" height="25px" style="border-collapse:collapse;margin:60px auto;margin-bottom:30px;position: relative;top: 6px;" cellspacing="0" cellpadding="0" >
                    <tr>
                        <td style="text-align:center;"><font style="font-weight:bold; font-size:18px;"><u>ওয়ারিশ সনদপত্র</u></font></td>
                    </tr>
                </table>

                <div id="sonod_number" style="margin-bottom: 5px;">
                    <table border="1px" align="center" width="96%" align="center" height="25px" style="border-collapse:collapse; " cellspacing="0" cellpadding="0" >
                        <tr>
                            <td style="width:180px; text-align:center; font-size:17px; ">ওয়ারিশ সনদ  নং :</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">২							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">০							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">২							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">৪							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">২							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">৬							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">১							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">৭							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">২							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">৫							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">০							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">০							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">০							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">১							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">৭							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">৪							</td>

                            <td style="text-align:center; font-weight:bold; font-size:18px;">৯							</td>




                        </tr>
                    </table>
                </div>
                <table border="0px" width="99%"  align="center" height="25px" style="border-collapse:collapse; margin:0px auto;" cellspacing="0" cellpadding="0">
                    <tr height="18px">
                        <td  colspan="4" align="left" style="font-size:17px; text-indent:30px;">এই মর্মে প্রত্যয়ণ  করা যাইতেছে  যে,</td>
                    </tr>
                </table>


                <table border="0px" width="99%" height="40px"  align="center" style="border-collapse:collapse; margin:1px auto;" cellspacing="0" cellpadding="0">
                    <tr height="15px">
                        <td  style="font-size:15px; text-align:left; text-indent:25px; font-color:black; width:70px; ">নাম   </td>
                        <td><font style="font-size:15px;font-weight:bold; ">: মৃতঃ ননী গোপাল</font></td>
                        <td  style="font-size:15px; text-align:left; text-indent:25px; width:90px;">পিতা/স্বামী </td>
                        <td><font style="font-size:15px;font-weight:bold;  ">:  মৃতঃ প্রান ভল্লব রাজবংশী </font></td>
                        <td  style="font-size:15px; text-align:left; width:60px;">মাতা</td>
                        <td><font style="font-size:15px;font-weight:bold;  ">:  মৃতঃ সখিসোনা রাজবংশী </font></td>
                    </tr>

                </table>
                <table border="0px" width="99%"  align="center" style="border-collapse:collapse;margin:0px auto;" cellspacing="0" cellpadding="0" class="certificate">
                    <tr height="80px">
                        <td colspan="2" style="width:50%;">
                            <table width="100%" border="0" style="border-collapse:collapse;" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="2"><caption style="text-align:left; text-decoration:underline;font-size:16px;padding-left:130px;font-weight:bold; padding-bottom:5px;">  বর্তমান ঠিকানা  </caption></td>
                                </tr>
                                <tr height='20'>
                                    <td style="text-align:right; padding-left:10px; font-size:14px;">গ্রাম</td>
                                    <td><font style="font-size:14px;">: মাঝিরদিয়া, কাউন্দিয়া</font></td>
                                    <td style="text-align:right; padding-right:10px; font-size:14px;">ডাকঘর</td>
                                    <td> <font style="font-size:14px;">: আমিন বাজার-১৩৪৮</font></td>
                                </tr>

                                <tr height='20'>
                                    <td style="text-align:right; padding-left:10px; font-size:14px;">থানা</td>
                                    <td><font style="font-size:14px;">: সাভার</font></td>
                                    <td style="text-align:right; padding-right:10px; font-size:14px;">জেলা</td>
                                    <td><font style="font-size:14px;">: ঢাকা</font> </td>
                                </tr>

                            </table>
                        </td>
                        <td colspan="2" style="width:50%;">
                            <table width="100%" border="0" style="border-collapse:collapse;" cellpadding="0" cellspacing="0" >
                                <tr>
                                    <td colspan="2"><caption style="text-align:left; text-decoration:underline;font-size:16px;padding-left:90px;font-weight:bold; padding-bottom:5px;"> স্থায়ী ঠিকানা </caption> </td>
                                </tr>
                                <tr height='20'>
                                    <td style="width:20px;text-align:right; padding-right:5px; font-size:14px;">গ্রাম</td>
                                    <td><font style="font-size:14px;">: মাঝিরদিয়া, কাউন্দিয়া</font></td>
                                    <td style="width:20px; text-align:right; padding-right:5px; font-size:14px;">ডাকঘর </td>
                                    <td><font style="font-size:14px;">: আমিন বাজার-১৩৪৮</font></td>
                                </tr>

                                <tr height='20'>
                                    <td style="text-align:right; padding-right:10px; font-size:14px;">থানা</td>
                                    <td><font style="font-size:14px;">: সাভার</font></td>
                                    <td style="text-align:right; padding-right:10px; font-size:14px;">জেলা</td>
                                    <td><font style="font-size:14px;">: ঢাকা</font>  </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table >

                <table border="0px" width="99%" height="15px;" align="center" style="border-collapse:collapse;margin:0px auto;" cellspacing="0" cellpadding="0">

                    <tr>
                        <td  nowrap style="font-size:16px; text-align:left;text-indent: 25px;"><b>ওয়ার্ড নং</b> </td>
                        <td colspan="3" style="width:240px;"><font style="font-size:16px;"> :  ০৯</font></td>
                        <td  nowrap style="font-size:16px; text-align:left;text-indent: 5px;"><b>ন্যাশনাল আইডি নং </b></td>

                        <td colspan="3" style="width:260px;font-weight:bold;"><font style="font-size:16px; ">: ২৬১৭২৫০০৪৮৮৬৯</font></td>

                    </tr>
                </table>
                <table border="0px" width="99%"  align="center" height="30px" style="border-collapse:collapse;margin:4px auto; " cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="100%">
                            <font style="font-size:16px; padding-left:30px;"> অত্র ইউনিয়নের স্থায়ী অধিবাসী ছিলেন। মৃত্যুকালে তিনি নিম্নলিখিত ওয়ারিশগনকে রাখিয়া মৃত্যু বরণ করেন।</font>
                        </td>
                    </tr>
                </table>
                <table border="1px" align="center" width="93%" height="330px" align="center" style="border-collapse:collapse; " cellspacing="0" cellpadding="0" >
                    <tr height="20px">
                        <th style="width:5%;font-size:14px;">নং</th>
                        <th style="width:20%;font-size:14px;">নাম</th>
                        <th style="width:20%;font-size:14px;">সম্পর্ক</th>
                        <th style="width:8%;font-size:14px;">বয়স</th>

                        <th style="width:8%;font-size:14px;">জন্মনিবন্ধন/ন্যাশনাল আইডি</th>



                        <th style="width:5%;font-size:14px;">নং</th>
                        <th style="width:20%;font-size:14px;">নাম</th>
                        <th style="width:10%;font-size:14px;">সম্পর্ক</th>
                        <th style="width:8%;font-size:14px;">বয়স</th>

                        <th style="width:8%;font-size:14px;">জন্মনিবন্ধন/ন্যাশনাল আইডি</th>




                    </tr>

                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">১</td>
                        <td id='wn1' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel1' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage1' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid1' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">১১</td>
                        <td id='wn11' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel11' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage11' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid11' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">২</td>
                        <td id='wn2' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel2' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage2' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid2' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">১২</td>
                        <td id='wn12' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel12' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage12' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid12' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">৩</td>
                        <td id='wn3' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel3' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage3' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid3' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">১৩</td>
                        <td id='wn13' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel13' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage13' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid13' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">৪</td>
                        <td id='wn4' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel4' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage4' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid4' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">১৪</td>
                        <td id='wn14' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel14' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage14' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid14' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">৫</td>
                        <td id='wn5' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel5' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage5' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid5' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">১৫</td>
                        <td id='wn15' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel15' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage15' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid15' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">৬</td>
                        <td id='wn6' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel6' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage6' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid6' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">১৬</td>
                        <td id='wn16' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel16' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage16' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid16' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">৭</td>
                        <td id='wn7' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel7' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage7' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid7' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">১৭</td>
                        <td id='wn17' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel17' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage17' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid17' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">৮</td>
                        <td id='wn8' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel8' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage8' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid8' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">১৮</td>
                        <td id='wn18' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel18' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage18' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid18' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">৯</td>
                        <td id='wn9' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel9' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage9' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid9' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">১৯</td>
                        <td id='wn19' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel19' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage19' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid19' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height=''>
                        <td style="text-align:center;font-size:13px;">১০</td>
                        <td id='wn10' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel10' style="text-align:left;text-indent:15px;font-size:14px;"></td>


                        <td id='wage10' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid10' style="text-align:left;text-indent:15px;font-size:14px;"></td>





                        <td style="text-align:center;font-size:13px;">২০</td>
                        <td id='wn20' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wrel20' style="text-align:left;text-indent:15px;font-size:14px;"></td>
                        <td id='wage20' style="text-align:left;text-indent:15px;font-size:14px;"></td>

                        <td id='w_nid20' style="text-align:left;text-indent:15px;font-size:14px;"></td>



                    </tr>


                    <tr height="18px">

                        <td colspan="8" style="text-align:right;font-size:13px; padding-right:60px;">উত্তরাধিকারীর সংখা <span id='intotal'>&nbsp;&nbsp;</span>&nbsp;&nbsp;জন</td>

                    </tr>
                </table>

                <table  height="25px" width="98%" border="0" style="padding-top:5px;border-collapse:collapse;margin:0px auto;">
                    <tr height='24'>
                        <td style="font-size:15px; text-indent:30px;"> আমি মৃতের বিদ্বেহী আত্নার মাগফেরাত এবং উওরাধিকারীগণের মঙ্গল কামনা করি। </td>
                    </tr>
                </table>
                <table border='0' width="98%" height='60px' style="border-collapse:collapse;margin:2px auto;table-layout:fixed;">
                    <tr height="15px" valign='top'>
                        <td style="width:70px;font-size:13px; padding-left:3px;text-indent:4px;"><b>তদন্তকারীঃ</b></td>
                        <td style="vertical-align:top;line-height: 20px;font-size:12px;text-indent: 3px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">মজিবর রহমান</td>
                        <td style="width: 90px; font-size: 13px;"><b>আবেদনকারী :</b></td>
                        <td style="font-size: 12px !important;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">সুশীল রাজবংশী</td>
                        <td style="width: 40px; font-size: 13px;"><b>পিতা :</b></td>
                        <td style="font-size: 12px !important;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">মৃতঃ ননী গোপাল</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <table  border='0' width="99%" height="170px" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse;margin:0px auto;table-layout:fixed;" class="tbl_sil">

                    <tr>
                        <td style="padding-left:20px;font-size:16px;">
                            <div style="float:left;">
                                <font style='position:relative;float:left;left:30px;top: 5px;border-top: 1px solid black;font-size: 13px !important;'>মেম্বারের স্বাক্ষর</font>
                                <p style="padding:0px;margin:0px; font-size:13px; position:relative; left:30px; top:5px;">ওয়ার্ড নংঃ&nbsp;&nbsp;০৯</p>
                            </div>
                            <div style="display:inline;float:right">
                                <font style='float:right;position:relative;right:20px;top: 8px;border-top: 1px solid black;font-size: 13px !important;'> </font>
                            </div>
                        </td>
                        <td rowspan="2" style="width: 22%;text-align: center; border-left:1px solid black; border-top:1px solid black;"><img src="https://api.qrserver.com/v1/create-qr-code/?size=160x175&data=http%3A%2F%2Fwww.kaundiaup.com/index.php/onlinetrack/warish_onosondan?tid=731497%2F&choe=UTF-8" class="qrcode" height="130px" width="160px" style="padding:2px;box-sizing: border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"></td>

                    </tr>


                    <tr height="100px">
                        <td  style="padding-left:20px;font-size:14px !important;box-sizing: border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;border-bottom: 1px solid black;" class="instruct"><b>নির্দেশাবলীঃ </b><br />১) সার্টিফিকেট টি online এ verification এর জন্য <font style="color:blue;">www.kaundiaup.com/ntrack</font>  পেজ এ আসুন  এবং ১৭ ডিজিটের সনদ নং টি প্রবেশ করান। অথবা আপনার Android Mobile এ Google play store থেকে <b>”সনদ যাচাই”</b> ডাউনলোড করে QR code টি যাচাই করুন ।<br />
                            ২) যে কোন ধরনের তথ্য নেয়ার জন্য ফোন করুন অথবা ইমেইল করুন।
                        </td>

                    </tr>
                </table>

                <table border='0' width="99%" height="34px" cellpadding='0' cellspacing='0' style="border-collapse: collapse;margin: 2px auto;table-layout:fixed;">
                    <tr>
                        <td style="width: 75%;text-align:center;font-family: Arial;" class="eweb"> <font style="font-size:11px !important;"> Email:kaundiaup2022@gmail.com</font><font style="font-size:11px !important;">&nbsp;&nbsp;Web:www.kaundiaup.com</font></td>
                        <td style="width: 25%;text-align:center;" class="dev"><font style="font-size:10px !important;opacity:0.7;position:relative;top:-20px;">   Developed by Innovation IT. </font> <br><font style="font-size:12px !important;opacity:0.7;position:relative;top:-18px;">www.innovationit.com.bd   </font></td>

                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>

<!--- for print----->
<div id="print-full-page" class="no-print">
    <div class="print-certificate">
        <a target="" href="javaScript:window.print();" title="প্রিন্ট করুন">
            <img src="https://www.kaundiaup.com/library/print_big.png" alt="প্রিন্ট করুন" />
        </a>
    </div>
</div>
<!--- end for print------>

<script>
    document.getElementById('wn1').innerHTML='সুশীল রাজবংশী';
    document.getElementById('wrel1').innerHTML='ছেলে';
    document.getElementById('wage1').innerHTML='৩৩';

    document.getElementById('w_nid1').innerHTML='৫৫২২০৭৯৩৪১';


    document.getElementById('wn2').innerHTML='মহামায়া রাজবংশী';
    document.getElementById('wrel2').innerHTML='মেয়ে';
    document.getElementById('wage2').innerHTML='৪২';

    document.getElementById('w_nid2').innerHTML='৫৯৯০৪৮৩৭৯৩';


    document.getElementById('wn3').innerHTML='অমিতা রাজবংশী';
    document.getElementById('wrel3').innerHTML='মেয়ে';
    document.getElementById('wage3').innerHTML='৩৬';

    document.getElementById('w_nid3').innerHTML='৫৫৪০৪৭৬২০৬';


    document.getElementById('wn4').innerHTML='রাধা রানী রাজবংশী';
    document.getElementById('wrel4').innerHTML='স্ত্রী';
    document.getElementById('wage4').innerHTML='৭৭';

    document.getElementById('w_nid4').innerHTML='৬৮৯০৪২৯৭৩৮';


    document.getElementById('total').innerHTML='৪';
    document.getElementById('intotal').innerHTML='৪';
</script>
</body>
</html>
