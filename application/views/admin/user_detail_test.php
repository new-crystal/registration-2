<style>
.detail_table {
    display: flex;
    align-items: center;
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
                                    <th>등록번호</th>
                                    <td style="background-color:#fafafa;"> <input class="form-control" type="text"
                                            value="<?php echo $item['registration_no']; ?>" name="registration_no"
                                            id="registration_no" readonly></td>
                                </tr>
                                <tr>
                                    <th>비자 생년월일</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['date_of_birth']; ?>" name="date_of_birth"
                                            id="registration_no"></td>
                                </tr>
                                <tr>
                                    <th>구분 1</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['member_type']; ?>" name="member_type" id="type1">
                                    </td>
                                </tr>
                                <tr>
                                    <th>구분 2</th>
                                    <td> <input class="form-control" type="text"
                                            value="<?php echo $item['attendance_type']; ?>" name="attendance_type"
                                            id="type2"></td>
                                </tr>
                                <tr>
                                    <th>구분 3</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['occupation_type']; ?>" name="occupation_type"
                                            id="type2"></td>
                                </tr>
                                <tr>
                                    <th>KSSO 회원 여부</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo  $item['ksso_member_status']; ?>"
                                            name="ksso_member_status" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>국가</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['nation']; ?>"
                                            name="nation" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>평점신청여부</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['is_score']; ?>" name="is_score" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>면허번호</th>
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
                                <tr>
                                    <th>이름</th>
                                    <td>
                                        firstname: <input class="form-control" type="text"
                                            value="<?php echo $item['first_name']; ?>" name="first_name" id="nick_name">
                                        lastname : <input class="form-control" type="text"
                                            value="<?php echo $item['last_name']; ?>" name="last_name" id="nick_name">
                                        <input class="form-control" type="text" value="<?php echo $item['name_kor']; ?>"
                                            name="nick_name" id="nick_name">
                                    </td>
                                </tr>
                                <tr>
                                    <th>전화번호</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $item['phone']; ?>"
                                            name="phone" id="phone"></td>
                                </tr>
                                <tr>
                                    <th>정보획득매체</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['conference_info']; ?>" name="conference_info"
                                            id="phone"></td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['email']; ?>"
                                            name="email" id="email"></td>
                                </tr>

                            </table>
                            <table>
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
                                    <th>주소</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $item['addr']; ?>"
                                            name="addr" id="addr">
                                    </td>
                                </tr>
                                <tr>
                                    <th>사전등록비</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['fee']; ?>"
                                            name="fee" id="fee">
                                    </td>
                                </tr>
                                <tr>
                                    <th>입금자명</th>
                                    <td> <input class="form-control" type="text"
                                            value="<?php echo $item['deposit_name']; ?>" name="deposit_name"
                                            id="deposit_name">

                                    </td>
                                </tr>
                                <tr>
                                    <th>입금예정일</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['deposit_date']; ?>"
                                            size="16" class="form-control" name="deposit_date">

                                    </td>
                                </tr>
                                <tr>
                                    <th>메모</th>
                                    <td><?php if ($item['memo'] == 'null') { ?>
                                        <input id="memo" type="text" value="" size="16" class="form-control"
                                            name="memo">
                                        <?php  } else { ?>
                                        <input id="memo" type="text" value="<?php echo $item['memo']; ?>" size="16"
                                            class="form-control" name="memo">
                                        <?php } ?>
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
                                    <th>총회 만찬식 참석 여부</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['banquet_yn']; ?>"
                                            size="16" class="form-control" name="banquet_yn">
                                    </td>
                                </tr>
                                <tr>
                                    <th>특이식단</th>
                                    <td> <input id="dp1" type="text"
                                            value="<?php echo $item['special_request_food']; ?>" size="16"
                                            class="form-control" name="special_request_food">
                                    </td>
                                </tr>
                                <tr>
                                    <th>등록시간</th>
                                    <td> <input id="time" type="text" value="<?php echo substr($item['time'], 0, 10) ?>"
                                            size="16" class="form-control" name="time">
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