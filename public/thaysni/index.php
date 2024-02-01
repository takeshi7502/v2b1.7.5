<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
    include "config.php";
?>

<html>

    <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://vpn.xn--ss-8ja.vn/settingsni/assets/css/umi.css">


	<link rel="stylesheet" id="css-main" href="https://vpn.xn--ss-8ja.vn/settingsni/assets/css/umi.css" />
	<title>SôS.vn VPN - Thay SNI</title>
	<!-- Icons -->
    <link rel="shortcut icon" href="/theme/GIF/icosos.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="/theme/GIF/icosos.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/theme/GIF/icosos.png"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no"/>

    </head>
    
    <body>
        <!---- Khoa sao chep JavaScript--->
<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="https://vpn.xn--ss-8ja.vn"}),shortcut.add("F12",function(){top.location.href="https://vpn.xn--ss-8ja.vn"}),shortcut.add("Ctrl+Shift+I",function(){top.location.href="https://vpn.xn--ss-8ja.vn"}),shortcut.add("Ctrl+S",function(){top.location.href="https://vpn.xn--ss-8ja.vn"}),shortcut.add("Ctrl+Shift+C",function(){top.location.href="https://vpn.xn--ss-8ja.vn"});
//]]>
</script>

<script type='text/javascript'>
//<![CDATA[
// JavaScript Document
var message="NoRightClicking"; function defeatIE() {if (document.all) {(message);return false;}} function defeatNS(e) {if (document.layers||(document.getElementById&&!document.all)) { if (e.which==2||e.which==3) {(message);return false;}}} if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;} else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;} document.oncontextmenu=new Function("return false")
//]]>
</script>
<!---- Khoa sao chep JavaScript--->

        <?php if ($_GET['search'] == '') {?>
        </br>
        
        <div align="center" class="mycolor">
            <h1 style="font-size:25px; color:green"><b>Kiểm Tra Thông Tin Người Dùng</br></b></h1>
            <form action="index.php" method="get">
                <b class="mycolor2">Token:</b> <input  type="text" placeholder="token" name="search" />
                <input type="submit" value="Kiểm Tra" />
                
        </form>
        </div>
        <?php }?>

            <?php 
                
                if($_GET['search'])
                if(isset($_GET['search'])) {
                    $linksub = $_GET['search'];
                    $token = substr($linksub, -32);
                }
                {
                    $con = mysqli_connect($ip_db, $db_name, $db_username, $db_password);
                    
                    // Kểm tra kết nối
                    if (!$con) {
                        die("ERROR: Không thể kết nối. " . mysqli_connect_error());
                    }
                    $checkuser = mysqli_query($con, "SELECT * FROM v2_user WHERE token LIKE '$token'");
                    $TenSni = null;
                    while ($row = mysqli_fetch_array($checkuser))
                    {
                        $mailkhach = $row["email"];
                        $id=$row["id"];
                        $plan_id=$row["plan_id"];
                        $is_admin=$row["is_admin"];
                        $TenSniOld=$row["sni_type"];
                        $showSNI=$row["network_settings"];
                        
                        if ($TenSniOld == 0)
                            $TenSNIOld = "Tài Khoản Của Bạn Đang Là SNI mặc định của web";
                        if ($TenSniOld == 1)
                            $TenSNIOld = "Nền Liên Quân Viettel";
                        if ($TenSniOld == 2)
                            $TenSNIOld = "Nền Free Fire Viettel";
                        if ($TenSniOld == 3)
                            $TenSNIOld = "Nền TikTok Viettel";
                        if ($TenSniOld == 4)
                            $TenSNIOld = "Nền Facebook Viettel";
                        if ($TenSniOld == 5)
                            $TenSNIOld = "Nền Lifebox Viettel";
                        if ($TenSniOld == 6)
                            $TenSNIOld = "Nền Mobiedu MobiFone";
                        if ($TenSniOld == 7)
                            $TenSNIOld = "Nền Soft Bank Nhật Bản";
                        if ($TenSniOld == 8)
                            $TenSNIOld = "Nền ADMIN TEST";
                        if ($TenSniOld == 9)
                            $TenSNIOld = "SNI Tự các bạn nhập";
                            
                        echo "<div style='padding-left:20px; color: black'><center><br><br>Chào bạn :<b> $mailkhach</b> <br>Tên SNI của bạn :<b> $TenSNIOld</b> <br> SNI của bạn :<b> $showSNI</b> </center></div>";
                        
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $selectSNI = $_POST['chonsni'];
                            
                            if ($selectSNI == 1)
                            {
                                $TenSni = "Nền Liên Quân Viettel";
                                $snionly = 'lienquan.garena.vn';
                            }
                            if ($selectSNI == 2)
                            {
                                $TenSni = "Nền Free Fire Viettel";
                                $snionly = 'dl.aw.freefiremobile.com';
                            }
                            if ($selectSNI == 3)
                            {
                                $TenSni = "Nền TikTok Viettel";
                                $snionly = 'sos4g.tiktok.com';
                            }
                            if ($selectSNI == 4)
                            {
                                $TenSni = "Nền Facebook Viettel";
                                $snionly = 'cloudctrl.gcloudsdk.com';
                            }
                            if ($selectSNI == 5)
                            {
                                $TenSni = "Nền Lifebox Viettel (chưa test)";
                                $snionly = 'cloudctrl.gcloudsdk.com';
                            }
                            if ($selectSNI == 6)
                            {
                                $TenSni = "Nền Mobiedu MobiFone";
                                $snionly = 'mobiedu.vn';
                            }
                            if ($selectSNI == 7)
                            {
                                $TenSni = "Nền Soft Bank Nhật Bản";
                                $snionly = 'www.linemo.jp';
                            }
                            if ($selectSNI == 8)
                            {
                                $TenSni = "Nền ADMIN TEST";
                                $snionly = 'connect.garenanow.com';
                            }
                            if ($selectSNI == 9)
                            {
                                $TenSni = "Tự Nhập SNI";
                                $snionly = $_POST['custom_sni'];
                            }

        
                            echo "<div style='padding-left:20px; color: green'><center><br>Tên SNI Mới: <b>$TenSni</b> <br> SNI Mới Của Bạn: <b>$snionly</b></center></div>";
                                
                            mysqli_query($con, "UPDATE v2_user SET network_settings='$snionly' WHERE email='$mailkhach'");
                            mysqli_query($con, "UPDATE v2_user SET sni_type='$selectSNI' WHERE email='$mailkhach'");
                            mysqli_query($con, "UPDATE v2_user SET name_sni='$TenSni' WHERE email='$mailkhach'");
                            
                            echo "<script>
                                Swal.fire({
                                    title: 'Thành công!',
                                    text: 'Thay Đổi SNI: $TenSni Thành Công',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = '/#/dashboard'; // Thay đổi đường dẫn tùy thuộc vào bước tiếp theo của bạn
                                    }
                                });
                            </script>";
                        }
                    }
                }                
            ?>
        

        <?php if ($token != null) { ?>
            <center>
            <br><br>
                <div class="col-12">
                    <div class="block block-rounded js-appear-enabled">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Cài Đặt SNI
                        </div>
                        <form method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    
                                    <div class="form-group">
                                        <div class="form-group">
                                        <select class="form-control mb-3 text-center" id="chonsni" name="chonsni">
                                            <option value="1" <?php if ($TenSniOld == 1) { echo "Selected"; } ?> >-- Liên Quân Viettel --</option>
                                            <option value="2" <?php if ($TenSniOld == 2) { echo "Selected"; } ?> >-- Free Fire Viettel --</option>
                                            <option value="3" <?php if ($TenSniOld == 3) { echo "Selected"; } ?> >-- Tiktok Viettel --</option>
                                            <!--<option value="4" <?php if ($TenSniOld == 4) { echo "Selected"; } ?> >-- Facebook Viettel --</option>-->
                                            <option value="7" <?php if ($TenSniOld == 7) { echo "Selected"; } ?> >-- Soft Bank Nhật Bản --</option>
                                            <option value="9" <?php if ($TenSniOld == 9) { echo "Selected"; } ?> >-- Tự Nhập SNI --  </option>

                                            <input type="text" class="form-control text-center" id="custom_sni" name="custom_sni" value="" placeholder="Nhập SNI vào đây" style="display:none;">
                                            <div id="hiensni" name="hiensni" style="display:none;">
                                                <center>
                                                    <font color='blue'>
                                                    Nếu bạn tự nhấp SNI nhớ xóa https:// nhé <br>
                                                    Bạn phải chắc chắn SNI bạn nhập đúng với nền. <br>
                                                    SNI tự nhập bên mình sẽ không trợ giúp bạn.<br>
                                                    </font>
                                                </center>
                                            </div>

                                            
                                            <script>
                                                // Lấy giá trị của trường select
                                                var selectSNI = document.getElementById("chonsni").value;

                                                // Kiểm tra giá trị của select
                                                if (selectSNI == 9) {
                                                // Hiển thị mục nhập custom_sni
                                                document.getElementById("custom_sni").style.display = "block";
                                                } else {
                                                // Ẩn mục nhập custom_sni
                                                document.getElementById("custom_sni").style.display = "none";
                                                }

                                                // Thay đổi giá trị của trường input khi giá trị của select thay đổi
                                                document.getElementById("chonsni").addEventListener("change", function() {
                                                // Lấy giá trị mới của select
                                                var selectSNI = this.value;

                                                // Kiểm tra giá trị mới của select
                                                if (selectSNI == 9) {
                                                    // Hiển thị mục nhập custom_sni
                                                    document.getElementById("custom_sni").style.display = "block";
                                                    document.getElementById("hiensni").style.display = "block";
                                                    document.getElementById("hiensni").innerHTML = "<center><br><font color='blue'><b>Nếu bạn tự nhập SNI nhớ xóa https:// nhé</b> <br><br>Bạn phải chắc chắn SNI bạn nhập đúng với nền. <br>SNI tự nhập bên mình sẽ không trợ giúp bạn.<br></font></center>"
                                                }  else if (selectSNI == 1) {
                                                    document.getElementById("custom_sni").style.display = "none"
                                                    document.getElementById("hiensni").style.display = "block";
                                                    document.getElementById("hiensni").innerHTML = "<center><strong>Đổi Thành SNI</strong>: <font color=`blue`><b> lienquan.garena.vn </b><br><br><strong>Hướng Dẫn Đăng Ký</strong>:<br><strong>Soạn LQ1 gửi 9029</strong> (2000 VNĐ/ngày)<br><strong>Soạn LQ7 gửi 9029</strong> (10000 VNĐ/tuần)<br></font></center>";
                                                } else if (selectSNI == 2) {
                                                    document.getElementById("custom_sni").style.display = "none"
                                                    document.getElementById("hiensni").style.display = "block";
                                                    document.getElementById("hiensni").innerHTML = "<center><strong>Đổi Thành SNI</strong>: <font color=`blue`><b> dl.aw.freefiremobile.com </b><br><br><strong>Hướng Dẫn</strong>:<br>Nền này đã dừng không thể đăng ký mới<br>Ai đang ký rồi thì cứ nạp đủ tiền để nó tự gia hạn<br>Khi nào không tự gia hạn nữa thì ae đổi sang nền khác</center>";
                                                } else if (selectSNI == 3) {
                                                    document.getElementById("custom_sni").style.display = "none"
                                                    document.getElementById("hiensni").style.display = "block";
                                                    document.getElementById("hiensni").innerHTML = "<center><strong>Đổi Thành SNI</strong>: <font color=`blue`><b> sos4g.tiktok.com </b><br><br><strong>Hướng Dẫn Đăng Ký</strong>:<br><strong>T30 gửi 191</strong> (30000 VNĐ/tháng)</center>";
                                                } else if (selectSNI == 4) {
                                                    document.getElementById("custom_sni").style.display = "none"
                                                    document.getElementById("hiensni").style.display = "block";
                                                    document.getElementById("hiensni").innerHTML = "<center><strong>Đổi Thành SNI</strong>: <font color=`blue`><b> cloudctrl.gcloudsdk.com </b><br><br><strong>Hướng Dẫn Đăng Ký</strong>:<br><strong>FB7 gửi 191</strong> (10000 VNĐ/tuần)<br><strong>FB30 gửi 191</strong> (30000 VNĐ/tháng)</center>";
                                                } else if (selectSNI == 7) {
                                                    document.getElementById("custom_sni").style.display = "none"
                                                    document.getElementById("hiensni").style.display = "block";
                                                    document.getElementById("hiensni").innerHTML = "<center><strong>Đổi Thành SNI</strong>: <font color=`blue`><b> www.linemo.jp </b><br><br><strong>Hướng Dẫn</strong>:<br>Nền này dùng cho các bạn ở nhật bản<br>Nếu không hiểu có thể nhắn vào Page ad sẽ hỗ trợ<br>AE ở VN không cần quan tâm</center>";
                                                } else {
                                                    // Ẩn đoạn văn bản tùy chỉnh và mục nhập custom_sni
                                                    document.getElementById("hiensni").style.display = "none";
                                                    document.getElementById("custom_sni").style.display = "none";
                                                }
                                                });
                                            </script>

                                            

                                        </select>
                                        
                                                <br/>
                                                    <div class="form-group">
                                                            <form action="" method="post">
                                                                <button type="submit" id="submit" class="ant-dropdown-trigger btn btn-sm btn-primary btn-rounded px-3 mr-1 my-1"></i> Dùng SNI Này</button>
                                                            </form>
                                                    </div>
                                            </input>
                                        </div>
                                    </div>
                                    <a href="/#/dashboard" class="btn btn-sm btn-success btn-rounded px-3 mr-1 my-1">Quay Lại Trang Chủ</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div></center>
        <?php } ?>


</body>
</html>