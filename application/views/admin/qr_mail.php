<style>
@font-face {
    font-family: 'Times New Roman', Times, serif;
    src: url("../../../assets/font/Times_New_Roman.otf");
}


#send_mail {
    background-color: #fff;
    padding: 4px 8px;
    border: 2px solid #ddd;
    cursor: pointer;
    margin-left: 1rem;
    font-weight: 600;
}

#send_mail:hover {
    background-color: #ddd;
}

table {
    font-family: 'Times New Roman', Times, serif;
}
</style>

<table width='750' style='border:none; padding: 0;'>
    <tbody>
        <tr>
            <td colspan='3'>
                <img src='https://icomes.or.kr/main/img/mail_header_2023.png' width='750' style='width:750px;'>
            </td>
        </tr>
        <tr>
            <td colspan='3'>
                <div style='font-weight:bold; text-align:left;font-size: 21px; color: #00666B;padding: 20px 0;'>
                    <p>Dear
                        Distinguished Participants,</p>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan='3'>
                <div style='text-align:left;font-size: 18px;'>
                    <p>We sincerely appreciate your valuable participation in ICOMES 2023, Hosted by the Korean Society
                        for
                        the
                        Study of Obesity (KSSO). We are pleased to provide you with essential registration
                        information.</p><br><br>

                    <p>Kindly review the following details to ensure a smooth and efficient registration process.
                        Included
                        for
                        your convenience is a 'QR code', which we appreciate you presenting at the registration desk to
                        receive
                        your name badge.</p><br><br>

                    <p><span style="font-weight: 600;">[ICOMES 2023 Overview]</span><br>
                        * Dates: September 7th (Thursday) to 9th (Saturday), 2023<br>
                        * Venue: CONRAD Hotel, Seoul (10 Gukjegeumyung-ro, Yeongdeungpo-gu, Seoul, Republic of
                        Korea)<br>
                        * Directions: <a
                            href="https://icomes.or.kr/main/venue.php">https://icomes.or.kr/main/venue.php</a><br>
                        <span style="color:blue; font-weight:600;">* Location of Registration Desk: Lobby (3F), Conrad
                            Seoul<br>
                            * Operating Hours: Sep 7(Thu): 14:00 ~ / Sep 8(Fri), Sep 9(Sat): 07:00 ~</span>
                    </p><br><br>

                    <p><span style="font-weight: 600;">[Registration & Name Badge Collection]</span><br>
                        We kindly request all attendees to visit the registration desk for the collection of their name
                        badges
                        and program books. Your own registration QR code can be confirmed through email, SMS, or our
                        mobile
                        application, and we would appreciate your presentation of this code at the registration desk
                        (3F).</p><br><br>
                    </p>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan='3' style="text-align: center;">
                <img width="200px" height="200px"
                    src="data:image/jpg;base64,<?php echo base64_encode(file_get_contents(getcwd() . '/assets/images/QR/qrcode_' . $users['registration_no'] . '.jpg')); ?>"
                    alt="" />
                <!-- <img width="200px" height="200px" src="data:image/jpg;base64,{$text4}" alt="" /> -->

            </td>
        </tr>
        <tr>
            <td colspan='3' style="text-align: left;">
                <p><br><br>
                    <span style="font-weight: 600;">* Additional Verification Process</span><br>
                    For student attendees, please ensure you have your student ID or proof of current enrollment readily
                    available.
                    For international attendees, kindly have your passport accessible for verification.
                </p><br><br>

                <p><span style="font-weight: 600;">[Download the ICOMES 2023 Mobile Application]</span><br>
                    We are delighted to introduce the ICOMES 2023 mobile application.<br>
                    For this edition of ICOMES, printed abstract books will <span
                        style="color:red; font-weight:600">NOT</span> be
                    provided. Instead, all the essential
                    information for attendees can be accessed through the application.</p><br><br>

                <p><span style="font-weight: 600;">Key Features of the application:</span> All session programs,
                    setting the favorite session schedule,
                    invited speaker profiles, session abstracts, program book downloads, and all the necessary
                    information of participation.</p><br><br>

                <p><span style="font-weight: 600;">* Mobile Application Download<br>
                        - Scan the QR Code:<br></span></p>
                <img src="https://image.webeon.net/icomes2023/1st/google_strore.png" alt="" width="100" />
                <p> (Google Play Store)</p>
                <img src="https://image.webeon.net/icomes2023/1st/apple_app.png" alt="" width="100" />
                <p>(Apple App Store)</p><br>
                <p><span style="font-weight: 600;">- Search in Android/ IOS APP Stores: ‘ICOMES 2023’</span></p><br><br>

                <p> Once again, we appreciate your participation in ICOMES 2023. Should you have any questions or
                    require assistance, please do not hesitate to contact our Secretariat.<br><br></p>

                <p> Best Regards,<br><br>
                    ICOMES 2023 Secretariat
                <p>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan='3' style='padding-top:50px;'>
                <img src='https://icomes.or.kr/main/img/mail_footer_2023.png' width='750' style='width:750px;'>
            </td>
        </tr>
    </tbody>
</table>
<div style="width:750px;display:flex; justify-content:center; margin-top:1rem;">
    <input id="email" style="width:350px; height:40px; padding:1rem;" placeholder="받으실 email주소를 작성해주세요." />
    <button id="send_mail" data-registration-no="<?php echo $users['registration_no'] ?>">이메일발송</button>
    <!-- <button style="background-color: #fff; padding: 4px 8px; border:1px solid #ddd; cursor:pointer"> <a
            id="sendMailLink" data-registration-no="<?php echo $users['registration_no'] ?>" href="#"
            style="text-decoration:none">기존 이메일로 발송</a></button> -->


</div>

<script>
// JavaScript 코드
document.addEventListener("DOMContentLoaded", function() {
    const sendMailLink = document.getElementById("sendMailLink");
    const sendMail = document.querySelector("#send_mail")
    const email = document.querySelector("#email")
    let regex = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');

    sendMail.addEventListener("click", () => {
        if (!email.value) {
            alert("보내실 이메일을 입력해주세요.")
            email.focus()
            return;
        } else if (!regex.test(email.value)) {
            alert("이메일 형식을 확인해주세요.")
            email.focus()
            return;
        } else {
            const registrationNo = sendMail.getAttribute("data-registration-no");
            const url = `https://reg2.webeon.net/admin/sendemail?n=${registrationNo}&m=${email.value}`;

            fetch(url, {
                    method: 'POST',
                })
                .then(response => {
                    // 응답 처리
                    alert("이메일 발송 성공");
                })
                .catch(error => {
                    // 에러 처리
                    console.error("POST 요청 실패", error);
                });
        }
    })



    // sendMailLink.addEventListener("click", function(event) {
    //     event.preventDefault();

    //     const registrationNo = sendMailLink.getAttribute("data-registration-no");
    //     const url = `https://reg2.webeon.net/admin/sendmail?n=${registrationNo}`;

    //     fetch(url, {
    //             method: 'POST',
    //         })
    //         .then(response => {
    //             // 응답 처리
    //             alert("이메일 발송 성공");
    //         })
    //         .catch(error => {
    //             // 에러 처리
    //             console.error("POST 요청 실패", error);
    //         });
    // });
});
</script>