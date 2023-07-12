
<script type="text/javascript">
    $(function() {
        <?php
            $url = "https://kscp.webeon.net/qrcode/print_file?registration_no=" . $user['registration_no'] ."\"";
            echo "window.open(\"" . $url . ", \"_blank\");"
        ?>
    });
</script>

<dl class="boldTit qr_cont">
    <div class="qr_info" id="qr_nick_name">
        <center>이　　름 <input type="text" value="<?php if(isset($user['nick_name'])) echo $user['nick_name'] ?>" readonly></center>
    </div>
    <div class="qr_info" id="qr_org">
        <center>소　　속
        <input type="text" value="<?php if(isset($user['org'])) echo $user['org'] ?>" readonly></center>
    </div>
    <div class="qr_info" id="" style="opacity:0;">
        <center>소속
        <input type="text" value="hidden" readonly></center>
    </div>
</dl>

<dl class="boldTit qr_cont">
    <div class="qr_info" id="qr_entrance">
        <center>참가구분
        <input type="text" value="<?php
                if(isset($user['type'])){
                    echo $user['type'];
                }
            ?>
        " readonly></center>
    </div>
    <div class="qr_info" id="qr_exit">
        <center>메　　모
        <input type="text" value="<?php
                if(isset($user['memo'])){
                    echo $user['memo'];
                }
            ?>
        " readonly></center>
    </div>
    <div class="qr_info" id="" style="opacity:0;">
        <center>소속
        <input type="text" value="hidden" readonly></center>
    </div>
</dl>

<form action="https://kscp.webeon.net/index.php/qrcode" id="accessForm" name="accessForm" method="post" accept-charset="utf-8">
    <fieldset>
            <div class="btn btnSubm">
                <input type="submit" value="돌아가기" class="btnPoint">
            </div>
        </div>
    </fieldset>
</form>