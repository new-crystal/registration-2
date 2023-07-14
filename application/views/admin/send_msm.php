<?php
$phone = $users['phone'] ?? '';
$id = $users['id'] ?? '';
$registration_no = $users['registration_no'] ?? '';
$nick_name = $users['nick_name'] ?? '';
$curl = curl_init();


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
    // echo "cURL Error #:" . $err;
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
            'phone' =>  $phone, 'callback' => '01090224867', 'message' => '안녕하세요. ' . $nick_name . '  님[접수번호 :' . $registration_no . ']
        2023년 서울아산병원 당뇨병개원의 연수강
        좌에 참석 해주셔서 감사합니다.
        현장 등록데스크에 방문하여 위 QR코드를 제
        시 후 네임택을 수령 부탁드립니다.
        하기 QR코드는 출석 태깅 QR코드가 아니며,
        출석 태킹은 네임택 수령 후 네임택 QR코드
        을 사용 부탁 드립니다.
        -운영사무국 드림-
        ', 'refkey' => 'RESTAPITEST1548722798', 'subject' => ' 2023년 서울아산병원 당뇨병개원
        의 연수강좌 현장 사전 안내', 'image_cnt' =>
            '1', '
             images0' => new CURLFILE('assets/images/QR/qrcode_' . $registration_no . '.jpg')

            // images0' => new CURLFILE('assets/images/QR/qrcode_A2023-00105.jpg')
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
        // $error = $err;
        // $error = json_decode($err, true);
        $error_msg = $err['message'];
    } else {
        echo $response;
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
        <a href="/admin/qr_user"><button
                class="bg-white text-lime-500 p-3 translate-y-32 font-semibold rounded">뒤로가기</button></a>
    </div>


    <?php endif; ?>
    <?php if ($code != "200") : ?>
    <div class="w-2/4 h-3/4 bg-orange-500 flex flex-col items-center justify-center">
        <h1 class="text-white font-semibold text-3xl">MMS 전송이 실패하였습니다.</h1>
        <p class="text-xl font-semibold mt-5"> </p>
        <a href="/admin/qr_user"><button class="bg-white bg-orange-500 p-3 font-semibold rounded">뒤로
                가기</button></a>
    </div>
    <?php endif; ?>
</div>




<div>
    <!-- //단문 문자
// $curl = curl_init();

// curl_setopt_array($curl, array(
// CURLOPT_URL => "https://sms.gabia.com/api/send/sms",
// CURLOPT_RETURNTRANSFER => true,
// CURLOPT_ENCODING => "",
// CURLOPT_MAXREDIRS => 10,
// CURLOPT_TIMEOUT => 0,
// CURLOPT_FOLLOWLOCATION => false,
// CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// CURLOPT_CUSTOMREQUEST => "POST",
// CURLOPT_POSTFIELDS =>
// "phone=01040585269&callback=01090224867&message=SMS TEST MESSAGE&refkey=[[RESTAPITEST1549847130]]",
// CURLOPT_HTTPHEADER => array(
// "Content-Type: application/x-www-form-urlencoded",
// "Authorization: Basic " . base64_encode("intowebinar:" . $accessToken)
// ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
// echo "cURL Error #:" . $err;
// } else {
// echo $response;
// } -->

</div>