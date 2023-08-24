<?php
$firstName = "";
$lastName = "";
if (isset($user['first_name'])) {
    $firstName = $user['first_name'];
}
if (isset($user['last_name'])) {
    $lastName = $user['last_name'];
}
$en_name = $firstName . " " . $lastName
?>

<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript" src="/assets/js/admin/lecture_history.js"></script>
<style>
.qr-info-table {
    margin-top: 1rem;
    border: 2px solid #eee;
    border-collapse: collapse;
    width: 50%;
}

.qr-info-table th {
    background-color: #1d3557;
    border-color: #1d3557;
    color: #fff !important;
    font-size: 1.7rem;
    line-height: 2.5rem;
    font-weight: 600;
}

.qr-info-table>tr,
.qr-info-table th {
    border: 2px solid #eee;
    text-align: center;
    font-size: 1.25rem;
    line-height: 2.5rem;
}

.qr-info-table td {
    border: 1px solid #eee;
    text-align: left;
    font-size: 1.5rem;
    line-height: 2.5rem;
    padding-left: 4rem;
    display: flex;
    align-items: center;
    height: 5rem;
    font-weight: bold;
}

.qr-info-table tr {
    height: 5rem;
    padding: 4px 8px;
}

#open {
    background-color: #1d3557;
    float: right;
}
</style>

<div class="page-container">
    <div class="page-content">
        <!-- <div class="page-header">
            <div class="page-header-content">
                <div class="page-title flex items-center justify-between">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">QR code 등록</span>
                    </h4>
                </div>
            </div>
        </div> -->
        <div class="content">
            <div class="panel panel-flat">
                <div>
                    <button class="w-[150px] h-[40px] bg-slate-300 mt-20 hover:bg-slate-400 active:bg-slate-500"
                        type="button" id="open">새창</button>
                </div>
                <form action="/admin/access" id="qr_form" name="qr_form"
                    class="w-full h-screen flex flex-col items-center justify-center bg-slate-50">

                    <div class="w-2/5 flex flex-col items-center justify-center translate-y-60">
                        <?php print_r($firstName) ?>
                        <h1 class="text-5xl mt-32 font-semibold -translate-y-20">QR CODE 입력 </h1>
                        <h6 class="text-3xl mt-20 -translate-y-20">커서를 텍스트박스 안에 놓고 QR 코드 스캐너를 사용하세요.</h6>
                        <input id="qrcode_input" name="qrcode" class="w-[400px] h-[50px] mt-20 p-3 -translate-y-20"
                            type="text" autofocus />

                        <button
                            class="w-[150px] h-[40px] bg-slate-300 mt-20 mb-20 hover:bg-slate-400 active:bg-slate-500 -translate-y-20 text-black"
                            type="submit" id="submit">등록</button>

                    </div>

                    <!-- <div class="w-3/5 h-[1px] bg-slate-400 translate-y-24"></div> -->
                    <div class="w-full bg-white mt-40 flex items-center justify-center">
                        <table class="qr-info-table mb-80" id="qrTable">
                            <colgroup>
                                <col width="30%" />
                                <col />
                            </colgroup>
                            <tr>
                                <th>Registartion No.</th>
                                <td id="number" class="qr_text">
                                    <?php if (isset($user['registration_no'])) echo $user['registration_no'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td id="en_name" class="qr_text">
                                    <?php if (isset($user['first_name'])) echo $user['first_name'] . " " . $user['last_name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>성함</th>
                                <td id="name" class="qr_text">
                                    <?php if (isset($user['name_kor'])) echo $user['name_kor'] ?></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td id="nation" class="qr_text">
                                    <?php if (isset($user['nation'])) echo $user['nation'] ?></td>
                            </tr>
                            <tr>
                                <th>Affiliation</th>
                                <td id="202303_A01264" class="qr_text">
                                    <?php if (isset($user['202303_A01264'])) echo $user['affiliation'] ?></td>
                            </tr>
                            <tr>
                                <th>소속</th>
                                <td id="202303_A01264" class="qr_text">
                                    <?php if (isset($user['affiliation'])) echo $user['affiliation_kor'] ?></td>
                            </tr>
                            <tr>
                                <th>비만학회 회원 여부</th>
                                <td id="ksso_member_status" class="qr_text">
                                    <?php if (isset($user['ksso_member_status'])) echo $user['ksso_member_status'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Type of Participation</th>
                                <td id="attendance_type" class="qr_text">
                                    <?php if (isset($user['attendance_type'])) echo $user['attendance_type'] ?></td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td id="member_type" class="qr_text">
                                    <?php if (isset($user['member_type'])) echo $user['member_type'] ?></td>
                            </tr>
                            <tr>
                                <th>member_type</th>
                                <td id="deposit" class="qr_text">
                                    <?php if (isset($user['deposit'])) echo $user['deposit'] ?></td>
                            </tr>

                            <tr>
                                <th>등록비</th>
                                <td id="fee" class="qr_text">
                                    <?php if (isset($user['fee'])) echo $user['fee'] ?></td>
                            </tr>
                            <tr>
                                <th>평점신청여부</th>
                                <td id="is_score" class="qr_text">
                                    <?php if (isset($user['is_score'])) echo $user['is_score'] ?></td>
                            </tr>
                            <tr>
                                <th>메모</th>
                                <td id="memo" class="qr_text"><?php
                                                                if (isset($user['memo'])) {
                                                                    echo $user['memo'] == 'null' ? "" : $user['memo'];
                                                                }
                                                                ?></td>
                            </tr>

                            <tr>
                                <th>Remark 1</th>
                                <td id="etc2" class="qr_text"></td>
                            </tr>
                            <tr>
                                <th>Remark 2</th>
                                <td id="special_request_food" class="qr_text">
                                    <?php if (isset($user['special_request_food'])) echo $user['special_request_food'] ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Remark 3</th>
                                <td id="etc2" class="qr_text"></td>
                            </tr>
                            <tr>
                                <th>Remark 4</th>
                                <td id="etc3" class="qr_text"></td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="footer text-muted mt-20">
    © 2023. <a href="#">온라인 학술대회</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">(주)인투온</a>
</div>

</div>
<!-- /page content -->

</div>
<!-- /page container -->

<script>
const form = document.querySelector("#qr_form");
const qrcode = document.querySelector("#qrcode_input");
const submit = document.querySelector("#submit");
const qrTexts = document.querySelectorAll(".qr_text")
const table = document.querySelector(".qr-info-table")
const open = document.querySelector("#open")
const name = document.querySelector("#name")
const enName = document.querySelector("#en_name")
const org = document.querySelector("#org")
const category = document.querySelector("#category")
const memo = document.querySelector("#memo")
const number = document.querySelector("#number")
const etc1 = document.querySelector("#etc1")
const etc2 = document.querySelector("#etc2")
const etc3 = document.querySelector("#etc3")
var childWindow;
let qrvalue = "";

qrcode.focus();


function openQR() {
    const url = `/qrcode/open`
    if (childWindow && !childWindow.closed) {
        childWindow = null;
    } else {
        childWindow = window.open(url, 'ChildWindow', 'width=400,height=300');
    }
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    qrvalue = qrcode.value
    fetchData(qrcode.value)
    qrcode.value = "";
    qrcode.focus();
})

function fetchData(qrcode) {
    // Ajax 요청 수행
    fetch(`/admin/access?qrcode=${qrcode}`)
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const htmlDocument = parser.parseFromString(data, 'text/html');
            if (htmlDocument.querySelector("#number").innerText.replace(/<br\s*\/?>/gi, "").replace(/\s/g,
                    "")) {
                number.innerText = htmlDocument.querySelector("#number").innerText.replace(/<br\s*\/?>/gi, "")
                    .replace(
                        /\s/g, "");
                enName.innerText = htmlDocument.querySelector("#en_name").innerText.replace(/<br\s*\/?>/gi, "")
                    .replace(
                        /\s/g, "");
                name.innerText = htmlDocument.querySelector("#name").innerText.replace(/<br\s*\/?>/gi, "").replace(
                    /\s/g, "");
                org.innerText = htmlDocument.querySelector("#org").innerText.replace(/<br\s*\/?>/gi, "").replace(
                    /\s/g,
                    "");
                category.innerText = htmlDocument.querySelector("#category").innerText.replace(/<br\s*\/?>/gi, "")
                    .replace(/\s/g, "");
                memo.innerText = htmlDocument.querySelector("#memo").innerText.replace(/<br\s*\/?>/gi, "").replace(
                    /\s/g, "");
                etc1.innerText = htmlDocument.querySelector("#etc1").innerText.replace(/<br\s*\/?>/gi, "").replace(
                    /\s/g, "");
                etc2.innerText = htmlDocument.querySelector("#etc2").innerText.replace(/<br\s*\/?>/gi, "").replace(
                    /\s/g, "");
                etc3.innerText = htmlDocument.querySelector("#etc3").innerText.replace(/<br\s*\/?>/gi, "").replace(
                    /\s/g, "");
            } else {
                number.innerText = qrvalue
                name.innerText = "없는 QR입니다."
                org.innerText = ""
                category.innerText = ""
                etc1.innerText = ""
                throw new Error("없는 QR입니다.");
            }
        }).then((data) => {
            executeFunctionInChildWindow(qrcode);
        }).then(() => {
            // window.open(`https://reg2.webeon.net/qrcode/print_file?registration_no=${qrvalue}`, "_blank")
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}


function executeFunctionInChildWindow(data) {

    if (childWindow && !childWindow.closed) {
        childWindow.postMessage({
            qrcode: data
        }, '*');
    } else {

    }
}

// 자식 창으로부터의 메시지를 받아 처리하는 함수
function receiveMessage(event) {
    if (event.data === "child") {

    }
}


function hideText() {
    qrTexts.forEach((text) => {
        text.textContent = "";
    })
}

open.addEventListener("click", () => {
    openQR()
})

// 메시지 이벤트 리스너 등록
window.addEventListener('message', (e) => {
    // childWindow = null;
    receiveMessage(e)
}, false);

window.onload = () => {
    if (qrvalue) {
        number.innerText = qrvalue
    }
}
</script>
</body>