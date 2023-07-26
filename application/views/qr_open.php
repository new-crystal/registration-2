<script src="https://cdn.tailwindcss.com"></script>

<div class="w-full h-screen flex flex-col items-center justify-center">
    <div class="flex">
        <div id="nickname"> <?php if (isset($users['nick_name'])) echo $users['nick_name'] ?> </div>
        <p>교수님 환영합니다.</p>
    </div>
    <div class="flex">
        <p>소속</p>
        <div id="org"> <?php if (isset($users['org'])) echo $users['org'] ?></div>
    </div>
</div>

<script>
const nickname = document.querySelector("#nickname")
const org = document.querySelector("#org")

function childFunction(data) {
    console.log(data)
    if (data.qrcode) {

        window.location.href = `/qrcode/open?qrcode=${data.qrcode}`
        // 부모 창으로 메시지를 보내어 함수가 실행되었다고 알림
        window.opener.postMessage("child", '*');
    }
}

// 자식 창이 로드되면 자식 함수 실행
// 부모 창으로부터의 메시지를 받아 처리하는 함수 등록
window.addEventListener('message', function(event) {
    if (event.data) {
        childFunction(event.data);
    }
});
</script>