<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

<style>
@page {
    size: 10cm 24cm;
    margin: 0;
}

body {
    margin: 0;
    padding: 0;
}

/* @font-face {
    font-family: NanumSquare;
    src: url("../../../assets/font/NanumSquare-Hv.otf");
} */

.nick_name {
    font-family: 'Open Sans', sans-serif;
}

#printThis {
    width: 10cm;
    height: 24cm;
    margin: 0;
    padding: 0;
}

.small_name {
    font-size: 30px !important;
}

.small_text_box {
    position: relative;
    top: -18px;
}

.text_box {
    position: relative;
    top: -19px;
}

.kor_box {
    position: relative;
    top: 24px;
}

.lucky_num {
    position: relative;
    top: -118px;
    left: 143px;
}

.lucky_num_bottom {
    position: relative;
    top: -175px;
    left: 143px;
}
</style>
<!-- Main content -->
<div id="nametag_wrapper">
    <div class="edit_wrapper">
        <button id="btnPrint" type="button" class="btn btn-primary">Print</button>
        <!--
                    <div id="edit_area">
                        <textarea name="editor1" id="editor1" rows="10" cols="50">
                            This is my textarea to be replaced with CKEditor 4.
                        </textarea>
                    </div>
-->
    </div>
    <!-- Content area -->
    <div class="content" id="nametag">
        <div id="printThis">
            <div id="editor1" contenteditable="true">
                <?php
                $lang = preg_match("/[\xE0-\xFF][\x80-\xFF][\x80-\xFF]/", $users['name_kor']);
                $nation = $users['nation'];

                echo '<div class="a4_area">';
                echo '<div class="bg_area">';
                echo '<div class="txt_con">';
                if ($users['nt_info'] != '') {
                    echo '<div class="org" id="nt_info">' . $users['nt_info'] . '</div>';
                }
                echo '<div class="lucky_num" id="lucky_num">' . "1234" . '</div>';
                echo '<div class="org" id="org">' . $users['org_nametag'] . '</div>';

                /**닉네임 조건식 */
                // 한국인 X && firstname 15글자 이상
                if (mb_strlen($users['first_name']) >= 15) {
                    echo '<div class="nick_name lang_en small_name" id="first_name">' .  $users['first_name'] . '</div>';

                    // 한국인 X && firstname 15글자 이하
                } else if (mb_strlen($users['first_name']) <= 15) {
                    echo '<div class="nick_name lang_en" id="first_name">' .  $users['first_name'] . '</div>';
                }
                // 한국인 X && lastname 15글자 이상
                if (mb_strlen($users['last_name']) >= 15) {
                    echo '<div class="nick_name lang_en small_name" id="first_name">' .  $users['last_name'] . '</div>';

                    // 한국인 X && lastname 15글자 이하    
                } else if (mb_strlen($users['first_name']) <= 15) {
                    echo '<div class="nick_name lang_en" id="first_name">' .  $users['last_name'] . '</div>';
                }

                // //한국인 O
                // if ($nation == "Republic of Korea") {
                //     echo '<div class="nick_name lang_en small_name" id="first_name">' . $users['last_name'] . " " . $users['first_name'] . '</div>';
                // }
                echo '<div id="qrcode" class=""><img src="/assets/images/QR/qrcode_' . $users['registration_no'] . '.jpg"></div>';

                //한국인 X firstname & lastName 15글자 이상
                if (mb_strlen($users['first_name']) >= 15 || mb_strlen($users['last_name']) >= 15) {
                    echo '<div class ="small_text_box">';

                    //한국인 X firstname & lastName 15글자 이하
                } else if (mb_strlen($users['first_name']) <= 15 && mb_strlen($users['last_name']) <= 15) {
                    echo '<div class ="text_box">';
                }

                echo '<div class="receipt receipt_name">' . $users['first_name'] . ' ' . $users['last_name'] .   '</div>';
                echo '<div class="receipt receipt_num_1">' . $users['registration_no'] . '</div>';
                echo '<div class="receipt receipt_price">' . number_format($users['fee']) . '</div>';
                echo '</div>';


                // echo '<div class="receipt receipt_num_2">' . $users['registration_no'] . '</div>';
                // echo '<div class="receipt receipt_small small_nick">' . $users['nick_name'] . '</div>';
                // echo '<div class="receipt receipt_small smaill_ln">' . $users['ln'] . '</div>';
                // echo '<div class="receipt receipt_small small_sn">' . $users['sn'] . '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="lucky_num_bottom" id="lucky_num_bottom">' . "1234" . '</div>';
                ?>
            </div>
        </div>
    </div>
</div>
<!-- /content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->
<style>
body {
    background-color: #fff;
}
</style>
<script>
document.getElementById("btnPrint").onclick = function() {
    printElement(document.getElementById("printThis"));

}

function printElement(elem) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.style.width = "10cm";
        $printSection.style.height = "24cm";
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    //            console.log($printSection);
    window.print();
}
</script>

<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("qrcode"));
dragElement(document.getElementById("org"));
dragElement(document.getElementById("nick_name"));

function dragElement(elmnt) {
    var pos1 = 0,
        pos2 = 0,
        pos3 = 0,
        pos4 = 0;
    if (document.getElementById(elmnt.id)) {
        /* if present, the header is where you move the DIV from:*/
        document.getElementById(elmnt.id).onmousedown = dragMouseDown;
    } else {
        /* otherwise, move the DIV from anywhere inside the DIV:*/
        elmnt.onmousedown = dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        /* stop moving when mouse button is released:*/
        document.onmouseup = null;
        document.onmousemove = null;
    }
}
</script>
<script src="/ckeditor/ckeditor.js"></script>
<script>
// Replace the <textarea id="editor1"> with a CKEditor 4
// instance, using default configuration.
//        CKEDITOR.replace( 'editor1' );

// Turn off automatic editor creation first.
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editor1');
</script>
</body>