<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript" src="/assets/js/admin/lecture_history.js"></script>
<style>
.qr-info-table {
    margin-top: 10rem;
    border: 2px solid #eee;
    border-collapse: collapse;
    width: 40%;
}

.qr-info-table th {
    background-color: rgb(148 163 184);
    border-color: rgb(148 163 184);
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
    font-size: 1.25rem;
    line-height: 2.5rem;
    padding-left: 4rem;
    display: flex;
    align-items: center;
    height: 5rem;
}

.qr-info-table tr {
    height: 5rem;
    padding: 4px 8px;
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

                <form action="/admin/access" id="qr_form" name="qr_form"
                    class="w-full h-screen flex flex-col items-center justify-center bg-slate-50">

                    <div class="w-2/5 flex flex-col items-center justify-center translate-y-60">
                        <button class="w-[150px] h-[40px] bg-slate-300 mt-20 hover:bg-slate-400 active:bg-slate-500"
                            type="button" id="open">새창</button>
                        <h1 class="text-5xl mt-32 font-semibold -translate-y-20">QR CODE 입력 </h1>
                        <h6 class="text-3xl mt-20 -translate-y-20">커서를 텍스트박스 안에 놓고 QR 코드 스캐너를 사용하세요.</h6>
                        <input id="qrcode" name="qrcode" class="w-[400px] h-[50px] mt-20 p-3 -translate-y-20"
                            type="text" autofocus />

                        <button
                            class="w-[150px] h-[40px] bg-slate-300 mt-20 hover:bg-slate-400 active:bg-slate-500 -translate-y-20"
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
                                <th>이름</th>
                                <td id="name" class="qr_text">
                                    <?php if (isset($user['nick_name'])) echo $user['nick_name'] ?></td>
                            </tr>
                            <tr>
                                <th>참가구분</th>
                                <td id="category" class="qr_text"><?php
                                                                    if (isset($user['type'])) {
                                                                        echo $user['type'];
                                                                    }
                                                                    ?></td>
                            </tr>
                            <tr>
                                <th>소속</th>
                                <td id="org" class="qr_text"><?php if (isset($user['org'])) echo $user['org'] ?></td>
                            </tr>
                            <tr>
                                <th>메모</th>
                                <td id="memo" class="qr_text"><?php
                                                                if (isset($user['memo'])) {
                                                                    echo $user['memo'] == 'null' ? "" : $user['memo'];
                                                                }
                                                                ?></td>
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
const qrcode = document.querySelector("#qrcode");
const submit = document.querySelector("#submit");
const qrTexts = document.querySelectorAll(".qr_text")
const table = document.querySelector(".qr-info-table")
const open = document.querySelector("#open")
const name = document.querySelector("#name")
const org = document.querySelector("#org")
const category = document.querySelector("#category")
const memo = document.querySelector("#memo")
var childWindow;

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

    if (qrcode.value === "") {
        alert("QR CODE를 입력하세요.");
        qrcode.focus();
        return;
    }

    fetchData(qrcode.value)
    //프린트 실행함수
    window.open(`https://kscp.webeon.net/qrcode/print_file?registration_no=${qrcode.value}`, "_blank")
    qrcode.value = "";
    qrcode.focus();
    // window.scrollBy(0, 200);
});

function fetchData(qrcode) {
    // Ajax 요청 수행
    fetch(`/admin/access?qrcode=${qrcode}`)
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const htmlDocument = parser.parseFromString(data, 'text/html');
            name.innerText = htmlDocument.querySelector("#name").innerText.replace(/<br\s*\/?>/gi, "").replace(
                /\s/g, "");
            org.innerText = htmlDocument.querySelector("#org").innerText.replace(/<br\s*\/?>/gi, "").replace(/\s/g,
                "");
            category.innerText = htmlDocument.querySelector("#category").innerText.replace(/<br\s*\/?>/gi, "")
                .replace(/\s/g, "");
            memo.innerText = htmlDocument.querySelector("#memo").innerText.replace(/<br\s*\/?>/gi, "").replace(
                /\s/g, "");

        }).then((data) => {
            executeFunctionInChildWindow(qrcode);
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
</script>
</body>