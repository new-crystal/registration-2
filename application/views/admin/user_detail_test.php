<style>
.detail_table {
    display: flex;
    align-items: left;
    justify-content: space-between;
}

.detail_table>table {
    width: 48%;
    border: 1px solid #ddd;
}

.detail_table>table th,
.detail_table>table td {
    border: 1px solid #ddd;
    padding-left: 15px;
}

.detail_table table th {
    width: 25%;
    background-color: #eee;
}

.detail_table>table input {
    border: none
}

.detail_table>table input:focus {
    outline: 1px solid #000;
}
</style>
<?php
$contry = "";
if ($item['nation'] == 'Republic of Korea') $contry = '국내';
else {
    $contry = '국외';
}
$luckyNum = substr($item['registration_no'], 11, 4);
if ($item['onsite_reg'] == '0') {
    $on_site = '사전등록';
} else {
    $on_site = '현장등록';
}

?>
<!-- container section start -->
<section id="container" class="">

    <!--main content start-->
    <?php echo form_open('/admin/update_user?n=' . $item['registration_no'], 'id="updateForm" name="updateForm"') ?>
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel form-horizontal">
                    <div class="panel-body">
                        <div class="detail_table">
                            <table>
                                <tr>
                                    <th>Registration No.</th>
                                    <td style="background-color:#fafafa;"> <input class="form-control" type="text"
                                            value="<?php echo $item['registration_no']; ?>" name="registration_no"
                                            id="registration_no" readonly></td>
                                </tr>
                                <tr>
                                    <th>사전등록여부</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $on_site;  ?>"
                                            name="onsite_reg" id="onsite_reg"></td>
                                </tr>
                                <tr>
                                    <th>Registration No.(Lucky Draw)</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $luckyNum;  ?>"
                                            name="etc2" id="etc2"></td>
                                </tr>
                                <tr>
                                    <th>등록시간</th>
                                    <td> <input id="time" type="text" value="<?php echo substr($item['time'], 0, 10) ?>"
                                            size="16" class="form-control" name="time">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Type of Participation</th>
                                    <td> <input class="form-control" type="text"
                                            value="<?php echo $item['attendance_type']; ?>" name="attendance_type"
                                            id="attendance_type"></td>
                                </tr>
                                <tr>
                                    <th>국내/국외</th>
                                    <td> <input class="form-control" type="text" name="contry" id="type2"
                                            value="<?php echo $contry ?>">

                                    </td>
                                </tr>
                                <tr>
                                    <th>국가</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['nation']; ?>"
                                            name="nation" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>KSSO 회원 여부</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo  $item['ksso_member_status']; ?>"
                                            name="ksso_member_status" id="ln"></td>
                                </tr>


                                <tr>
                                    <th>비자 생년월일</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['date_of_birth']; ?>" name="date_of_birth"
                                            id="registration_no"></td>
                                </tr>


                                <!-- <tr>
                                    <th>구분 3</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['occupation_type']; ?>" name="occupation_type"
                                            id="type2"></td>
                                </tr> -->
                                <tr>
                                    <th>이름</th>
                                    <td>
                                        <div style="display: flex; align-items: center;"><span>firstname:</span> <input
                                                class="form-control" type="text"
                                                value="<?php echo $item['first_name']; ?>" name="first_name"
                                                id="nick_name"></div>
                                        <div style="display: flex; align-items: center;"><span>lastname:</span> <input
                                                class="form-control" type="text"
                                                value="<?php echo $item['last_name']; ?>" name="last_name"
                                                id="nick_name"></div>
                                        <div style="display: flex; align-items: center;"><span> fullname:</span> <input
                                                class="form-control" type="text"
                                                value="<?php echo $item['first_name'] . " " . $item['last_name']; ?>"
                                                name="fullname" id="nick_name"></div>
                                        <input class="form-control" type="text" value="<?php echo $item['name_kor']; ?>"
                                            name="name_kor" id="nick_name">
                                    </td>
                                </tr>
                                <tr>
                                    <th>소속</th>
                                    <td> <input class="form-control" type="text"
                                            value="<?php echo $item['affiliation']; ?>" name="affiliation" id="org">
                                        <input class="form-control" type="text"
                                            value="<?php echo $item['affiliation_kor']; ?>" name="affiliation_kor"
                                            id="org">
                                    </td>
                                </tr>
                                <tr>
                                    <th>소속(네임택용)</th>
                                    <td> <input class="form-control" type="text"
                                            value="<?php echo $item['org_nametag']; ?>" name="org_nametag"
                                            id="org_nametag">
                                    </td>
                                </tr>
                                <tr>
                                    <th>부서</th>
                                    <td> <input class="form-control" type="text"
                                            value="<?php echo $item['department']; ?>" name="department"
                                            id="org_nametag">
                                        <input class="form-control" type="text"
                                            value="<?php echo $item['department_kor']; ?>" name="department_kor"
                                            id="org_nametag">
                                    </td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['email']; ?>"
                                            name="email" id="email"></td>
                                </tr>
                                <tr>
                                    <th>전화번호</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $item['phone']; ?>"
                                            name="phone" id="phone"></td>
                                </tr>
                            </table>
                            <table>

                                <tr>
                                    <th>Occupation</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['occupation_type']; ?>" name="occupation_type"
                                            id="ln"></td>
                                </tr>
                                <tr>
                                    <th>Occupation (Others)</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['occupation_other_type']; ?>"
                                            name="occupation_other_type" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>
                                        <?php if ($item['member_type'] == "Student") { ?>
                                        <input class="form-control" type="text" style="color: red;"
                                            value="<?php echo $item['member_type']; ?>" name="member_type" id="type1">
                                        <?php  } else { ?>
                                        <input class="form-control" type="text"
                                            value="<?php echo $item['member_type']; ?>" name="member_type" id="type1">
                                        <?php  }    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Category(Others)</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['member_other_type']; ?>" name="member_other_type"
                                            id="type1">
                                    </td>
                                </tr>
                                <tr>
                                    <th>평점신청여부</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['is_score']; ?>" name="is_score" id="is_score">
                                    </td>
                                </tr>
                                <tr>
                                    <th>의사면허번호</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['licence_number']; ?>" name="licence_number"
                                            id="ln">
                                    </td>
                                </tr>
                                <tr>
                                    <th>전문의번호</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['specialty_number']; ?>" name="specialty_number"
                                            id="sn"></td>
                                </tr>
                                <tr>
                                    <th>영양사면허번호</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['nutritionist_number']; ?>"
                                            name="nutritionist_number" id="sn"></td>
                                </tr>
                                <tr>
                                    <th>임상영양사자격번호</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['dietitian_number']; ?>" name="dietitian_number"
                                            id="sn"></td>
                                </tr>
                                <!-- <tr>
                                    <th>운동사 신청(Y/N)</th>
                                    <td> <input type="text" class="form-control" id="ln"></td>
                                </tr> -->
                                <tr>
                                    <th>결제상태</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['deposit']; ?>"
                                            name="deposit" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>등록비</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['fee']; ?>"
                                            name="fee" id="fee">
                                    </td>
                                </tr>
                                <tr>
                                    <th>결제일</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['deposit_date']; ?>"
                                            size="16" class="form-control" name="deposit_date">

                                    </td>
                                </tr>
                                <tr>
                                    <th>결제방식</th>
                                    <td> <input type="text" class="form-control" name="etc1" id="ln"
                                            value="<?php echo $item['etc1']; ?>"></td>
                                </tr>
                                <tr>
                                    <th>결제금액

                                    </th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['fee']; ?>">
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <th>할인율
                                    </th>
                                    <td><input class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Promotion Code
                                    </th>
                                    <td><input class="form-control" type="text">
                                    </td>
                                </tr> -->
                                <tr>
                                    <th>추천인
                                    </th>
                                    <td><input class="form-control" type="text" name="etc4"
                                            value="<?php echo $item['etc4']; ?>" id="etc4">
                                    </td>
                                </tr>
                                <tr>
                                    <th>welcome_reception</th>
                                    <td> <input id="dp1" type="text"
                                            value="<?php echo $item['welcome_reception_yn']; ?>" size="16"
                                            class="form-control" name="welcome_reception_yn">

                                    </td>
                                </tr>
                                <tr>
                                    <th>day2_breakfast</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day2_breakfast_yn']; ?>"
                                            size="16" class="form-control" name="day2_breakfast_yn">

                                    </td>
                                </tr>
                                <tr>
                                    <th>day2_luncheon</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day2_luncheon_yn']; ?>"
                                            size="16" class="form-control" name="day2_luncheon_yn">
                                    </td>
                                </tr>
                                <tr>
                                    <th>day3_breakfast</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day3_breakfast_yn']; ?>"
                                            size="16" class="form-control" name="day3_breakfast_yn">
                                    </td>
                                </tr>
                                <tr>
                                    <th>day3_luncheon</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day3_luncheon_yn']; ?>"
                                            size="16" class="form-control" name="day3_luncheon_yn">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Where did you get the information about the conference?</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['conference_info']; ?>" name="conference_info"
                                            id="phone"></td>
                                </tr>
                                <tr>
                                    <th>qr print 여부</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['qr_print']; ?>"
                                            name="qr_print" id="phone"></td>
                                </tr>
                                <tr>
                                    <th>day 1 출결여부</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['qr_chk_day_1']; ?>" name="qr_chk_day_1" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>day 2 출결여부</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['qr_chk_day_2']; ?>" name="qr_chk_day_2" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>day 3 출결여부</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['qr_chk_day_3']; ?>" name="qr_chk_day_3" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>memo</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['memo']; ?>"
                                            name="memo" id="memo">
                                    </td>
                                </tr>





                                <!-- <tr>
                                    <th>평점신청여부</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['is_score']; ?>" name="is_score" id="ln"></td>
                                </tr> -->



                                <!-- <tr>
                                    <th>입금자명</th>
                                    <td> <input class="form-control" type="text"
                                            value="<?php echo $item['deposit_name']; ?>" name="deposit_name"
                                            id="deposit_name">

                                    </td>
                                </tr> -->

                                <!-- <tr>
                                    <th>메모</th>
                                    <td><?php if ($item['memo'] == 'null') { ?>
                                        <input id="memo" type="text" value="" size="16" class="form-control"
                                            name="memo">
                                        <?php  } else { ?>
                                        <input id="memo" type="text" value="<?php echo $item['memo']; ?>" size="16"
                                            class="form-control" name="memo">
                                        <?php } ?>
                                    </td>
                                </tr> -->

                                <!-- <tr>
                                    <th>총회 만찬식 참석 여부</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['banquet_yn']; ?>"
                                            size="16" class="form-control" name="banquet_yn">
                                    </td>
                                </tr> -->


                            </table>
                        </div>
                        <div class="detail_table">
                            <table>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 1(하단택) </th>
                                    <td><input class="form-control" type="text" name="remark1" id="remark1"
                                            value="<?php echo $item['remark1']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 2(Special Requst for Food)</th>
                                    <td>
                                        special_request_food:
                                        <input class="form-control" type="text"
                                            value="<?php echo $item['special_request_food']; ?>"
                                            name="special_request_food" id="special_request_food">
                                        remark2
                                        <input class="form-control" type="text" value="<?php echo $item['remark2']; ?>"
                                            name="remark2" id="remark2">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 3</th>
                                    <td><input class="form-control" type="text" name="remark3"
                                            value="<?php echo $item['remark3']; ?>" id="remark3">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 4</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['remark4']; ?>"
                                            name="remark4" id="remark4">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 5</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['remark5']; ?>"
                                            name="remark5" id="remark5">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div clss="btn_group" style="float: right;">
                            <button type="submit" data-toggle="modal" class="btn btn-primary">수정</button>
                            </form>
                            <a href="/admin/delete_user?d=<?php echo $item['registration_no']; ?>"
                                class="btn btn-danger">삭제</a>
                        </div>
                    </div>
            </div>
    </section>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel form-horizontal">
                <div class="panel-body">
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <p class="col-sm-2">입장</p>
                            <p class="col-sm-10">
                                <?php
                                if (empty($item2['min_time'])) {
                                    echo "태깅 기록이 없습니다.";
                                } else {
                                    echo $item2['min_time'];
                                };
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="col-sm-2">퇴장</p>
                            <p class="col-sm-10">
                                <?php
                                if (empty($item2['max_time'])) {
                                    echo "태깅 기록이 없습니다.";
                                } else {
                                    echo $item2['max_time'];
                                };
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <p class="col-sm-2">총 시간</p>
                            <p class="col-sm-10">
                                <?php
                                if (empty($item2['duration'])) {
                                    echo "태깅 기록이 없습니다.";
                                } else {
                                    echo $item2['duration'] . '분';
                                };
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="col-sm-2">총 평점</p>
                            <p class="col-sm-10">
                                <?php
                                if (empty($item2['duration'])) {
                                    echo "태깅 기록이 없습니다.";
                                } else {
                                    $score = $item2['duration'] / 60;
                                    echo round($score, 2) . '점';
                                };
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Basic Forms & Horizontal Forms-->

</section>
</section>
<script src="/assets/js/form-component.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script>
$(document).ready(function() {
    // var type1_val = $('select#type1').attr('data-select');
    // $('select#type1 option[value=' + type1_val + ']').attr('selected', 'selected');
    // var type2_val = $('select#type2').attr('data-select');
    // $('select#type2 option[value=' + type2_val + ']').attr('selected', 'selected');
    // var type3_val = $('select#type3').attr('data-select');
    // $('select#type3 option[value=' + type3_val + ']').attr('selected', 'selected');

    var registration_no = $('#registration_no').val();
    $("#updateForm").attr("action", "/admin/update_user?n=" + registration_no);
});
</script>


</body>

</html>