<?php
$phone = $users['phone'] ?? '';
$id = $users['id'] ?? '';
$registration_no = $users['registration_no'] ?? '';
$nick_name = $users['name_kor'] ?? '';
$curl = curl_init();
$error = "";

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://sms.gabia.com/oauth/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "grant_type=client_credentials",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/x-www-form-urlencoded",
        "Authorization: Basic " . base64_encode("intowebinar:a756c0edd55b504a0c4138411ad41055")
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    // echo $response;
    $responseData = json_decode($response, true);
    $accessToken = $responseData['access_token'];

    //mms 포토문자
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sms.gabia.com/api/send/mms",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array(
            'phone' =>  $phone, 'callback' => '01090224867', 'message' => '안녕하세요. 정보기술팀 입니다.
            본 문자는 이번 정보기술팀 자체 QR네임택 시스템 개발 테스트로 진행되는 문자입니다.
            테스트 진행에 도움 주시면 감사하겠습니다.
            * 테스트 진행 일시 : 2023년 8월 17일~18일 / 양일 09:30~10:30
            * 3층 정보기술팀 방문하시여 전달 받으신 QR코드를 스캔하시고 네임택을 수령 부탁드립니다.
            * 네임택 수령 후 출결 태그 / 퇴근 시 다시한번 출결 태그
            ' .
                '
                =========================================================
                안녕하세요.' . $nick_name . '  선생님[접수번호 :' . $registration_no . ']  ' . '

대한내분비학회 2023년 개원의 연수강좌에 참석 해주셔서 감사합니다.

현장 등록데스크에 방문하여 위 QR코드를 제시 후 네임택을 수령 부탁드립니다.

위 QR코드는 출석 태그 QR코드가 아니며, 출석 태그는 네임택 수령 후 네임택 QR코드을 사용 부탁 드립니다.

기타 문의 사항은 02-2285-2579로 연락 주시면 감사하겠습니다.

-운영사무국 드림-
        ', 'refkey' => 'RESTAPITEST1548722798', 'subject' => 'QR 네임택 시스템 테스트 도움요청', 'image_cnt' =>
            '1', '
             images0' => new CURLFILE('assets/images/QR/qrcode_' . $registration_no . '.jpg')
        ),
        CURLOPT_HTTPHEADER => array(
            "Authorization: Basic " . base64_encode("intowebinar:" . $accessToken)
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;

        $error = $err;
        $error = json_decode($err, true);
    } else {
        // echo $response;
        $responseData = json_decode($response, true);
        $code = $responseData['code'];
        // $after = $responseData['data']['AFTER_SMS_QTY'];
    }
}

?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full h-full flex items-center justify-center">
    <?php if ($code == "200" && isset($responseData['data'])) : ?>
        <div class="w-2/4 h-2/4 bg-lime-500 flex flex-col items-center justify-center">
            <h1 class="text-white font-semibold text-3xl">MMS 전송이 성공하였습니다.</h1>
            <p class="text-xl font-semibold mt-5">문자 잔여량 : <?= $responseData['data']['AFTER_SMS_QTY'] ?> </p>
            <button id="closed" class="bg-white text-lime-500 py-3 px-5 translate-y-32 font-semibold rounded">확인</button>
        </div>


    <?php endif; ?>
    <?php if ($code != "200") : ?>
        <div class="w-2/4 h-3/4 bg-orange-500 flex flex-col items-center justify-center">
            <h1 class="text-white font-semibold text-3xl">MMS 전송이 실패하였습니다.</h1>
            <p class="text-xl font-semibold mt-5"><?= $error ? $error : null ?> </p>
            <button class="bg-white bg-orange-500 p-3 font-semibold rounded">확인</button>
        </div>
    <?php endif; ?>
</div>

<script>
    const closed = document.querySelector("#closed");

    closed.addEventListener("click", () => {
        window.close()
    })
</script>