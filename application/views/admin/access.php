<script src="https://cdn.tailwindcss.com"></script>
<style>
.qr-info-table {
    margin-top: 10rem;
    border: 2px solid #eee;
    border-collapse: collapse;
    width: 50%;
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
    border: 2px solid #eee;
    text-align: left;
    font-size: 1.25rem;
    line-height: 2.5rem;
    padding-left: 4rem;
}

.qr-info-table tr {
    height: 5rem;
    padding: 4px 8px;
}
</style>

<form action="/admin/access" id="qr_form" name="qr_form"
    class="w-full h-screen flex flex-col items-center justify-center">
    <div class="w-2/5 flex flex-col items-center justify-center">
        <h1 class="text-5xl mt-32 font-semibold">QR CODE 입력 </h1>

        <h6 class="text-3xl mt-20">커서를 텍스트박스 안에 놓고 QR 코드 스캐너를 사용하세요.</h6>
        <input id="qrcode" name="qrcode" class="w-[400px] h-[50px] mt-20 p-3" autofocus />
        <button class="w-[150px] h-[40px] bg-slate-300 mt-20 hover:bg-slate-400" type="submit" id="submit">등록</button>
    </div>
    <div class="w-3/5 h-[1px] bg-slate-400 translate-y-24"></div>

    <table class="qr-info-table mb-80">
        <colgroup>
            <col width="20%" />
            <col />
        </colgroup>
        <tr>
            <th>이름</th>
            <td class="qr_text"><?php if (isset($user['nick_name'])) echo $user['nick_name'] ?></td>
        </tr>
        <tr>
            <th>참가구분</th>
            <td class="qr_text"><?php
                                if (isset($user['type'])) {
                                    echo $user['type'];
                                }
                                ?></td>
        </tr>
        <tr>
            <th>소속</th>
            <td class="qr_text"><?php if (isset($user['org'])) echo $user['org'] ?></td>
        </tr>
        <tr>
            <th>메모</th>
            <td class="qr_text"><?php
                                if (isset($user['memo'])) {
                                    echo $user['memo'] == 'null' ? "" : $user['memo'];
                                }
                                ?></td>
        </tr>
    </table>

    <script>
    const form = document.querySelector("#qr_form");
    const qrcode = document.querySelector("#qrcode");
    const submit = document.querySelector("#submit");
    const qrTexts = document.querySelectorAll(".qr_text")
    const table = document.querySelector(".qr-info-table")

    form.addEventListener("submit", (e) => {
        // e.preventDefault();
        if (qrcode.value === "") {
            alert("QR CODE를 입력하세요.");
            qrcode.focus();
            return;
        }
        qrcode.focus();
        // qrcode.value = "";
    });


    // setTimeout(() => {
    //     hideText()
    // }, 3000)


    function hideText() {
        qrTexts.forEach((text) => {
            text.textContent = "";
        })
    }
    </script>