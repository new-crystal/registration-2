<script type="text/javascript" src="/assets/js/admin/lecture_history.js"></script>
<style>
table th {
    padding: 0;
    font-size: 11px !important;
    padding: 8px !important;
}

table {
    font-size: 11px !important;
}

table td {
    padding: 4px !important;
}

.loading_box {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    transform: translateX(-200px);
    z-index: 9999;
}

.loading {
    position: absolute;
    top: 20%;
    left: 52%;
    transform: translate(-50%, -50%);
}
</style>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div style="display: none;" class="loading_box" onclick="alert('진행중입니다.')">

        <svg class="loading" version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
            enable-background="new 0 0 0 0" xml:space="preserve" width="70px" height="70px">
            <circle fill="#fff" stroke="none" cx="6" cy="50" r="6">
                <animateTransform attributeName="transform" dur="1s" type="translate" values="0 15 ; 0 -15; 0 15"
                    repeatCount="indefinite" begin="0.1" />
            </circle>
            <circle fill="#fff" stroke="none" cx="30" cy="50" r="6">
                <animateTransform attributeName="transform" dur="1s" type="translate" values="0 10 ; 0 -10; 0 10"
                    repeatCount="indefinite" begin="0.2" />
            </circle>
            <circle fill="#fff" stroke="none" cx="54" cy="50" r="6">
                <animateTransform attributeName="transform" dur="1s" type="translate" values="0 5 ; 0 -5; 0 5"
                    repeatCount="indefinite" begin="0.3" />
            </circle>
        </svg>
    </div>
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">학회등록인원</span></h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic datatable -->
        <div class="panel panel-flat">

            <div class="panel-heading">
                <h5 class="panel-title">등록 인원(<?php echo count($users) ?>)</h5>
                <div class="heading-elements">
                    <form action="/admin/excel_download" method="post">
                        <button class="btn btn-primary pull-right"><i class="icon-download4"></i> &nbspExcel
                            Download</button>
                    </form>
                    <form action="/admin/all_deposit_check" method="post" id="all_depositForm">
                        <button class="btn btn-primary pull-right"><i class="icon-checkmark"></i>전부 입금확인</button>
                    </form>
                    <form action="/admin/deposit_check" method="post" id="depositForm">
                        <button class="btn btn-primary pull-right"><i class="icon-checkmark"></i> 입금확인</button>
                    </form>
                    <form action="/admin/non_deposit_check" method="post" id="non_depositForm">
                        <button class="btn btn-danger pull-right"><i class="icon-checkmark"></i> 미결제처리</button>
                    </form>
                    <!-- <form action="/admin/qr_layout_post" method="post" id="nametagForm">
                        <button class="btn btn-primary pull-right"><i class="icon-printer2"></i> 네임택 출력</button>
                    </form> -->
                    <a class="btn btn-primary pull-right" href="/admin/add_user"><i class="icon-add"></i> 등록</a>
                    <!--
                                <a class="btn btn-primary pull-right" href="/admin/qr_layout_all?type=좌장"><i class="icon-printer2"></i> 좌장</a>
                                <a class="btn btn-primary pull-right" href="/admin/qr_layout_all?type=연자"><i class="icon-printer2"></i> 연자</a>
                                <a class="btn btn-primary pull-right" href="/admin/qr_layout_all?type=패널"><i class="icon-printer2"></i> 패널</a>
                                <a class="btn btn-primary pull-right" href="/admin/qr_layout_all?type=president"><i class="icon-printer2"></i> president</a>
                                <a class="btn btn-primary pull-right" href="/admin/qr_layout_all?type=임원"><i class="icon-printer2"></i> 임원</a>
                                <a class="btn btn-primary pull-right" href="/admin/qr_layout_all?type=일반참가자"><i class="icon-printer2"></i> 일반</a>
                                <a class="btn btn-primary pull-right" href="/admin/qr_layout_all?type=후원사"><i class="icon-printer2"></i> 후원</a>
-->
                </div>
            </div>

            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <!--									<th style="text-align: center;"><input type="checkbox" id="allChk" value="입금완료th"></th>-->
                        <!-- <th></th>
                        <th>회원여부</th>
                        <th>접수번호</th>
                        <th>구분1</th>
                        <th>구분2</th>
                        <th style="min-width: 100px">면허번호</th>
                        <th>이름</th>
                        <th>전화번호</th>
                        <th>이메일</th>
                        <th>소속</th>
                        <th>등록비</th>
                        <th>입금자명</th>
                        <th>입금여부</th>
                        <th>QR 생성여부</th>
                        <th>입장시간</th>
                        <th>퇴장시간</th>
                        <th>메모</th> -->

                        <th></th>
                        <!-- <th>No</th> -->
                        <th>Registration No.</th>
                        <th>결제상태</th>
                        <th>등록시간</th>
                        <th>KSSO 회원 여부</th>
                        <th>Type of Participation</th>
                        <th style="width:50px;">Full Name</th>
                        <th>성함</th>
                        <th style="width:130px; white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;">네임택용 Affiliation </th>
                        <th>Country</th>
                        <th>Phone Number</th>
                        <th>ID(E-mail)</th>
                        <th>Category</th>
                        <th>등록비</th>
                        <th>결제일</th>
                        <th>결제 방식</th>
                        <th>메모</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    foreach ($users as $item) {
                        $index++;
                        if ($index % 2 === 0) {
                            echo '<tr style="background-color:#eee">';
                        } else {
                            echo '<tr>';
                        }
                        echo '<td style="text-align: center;"><input type="checkbox" name="depositChk" class="depositChk" value="' .  $item['registration_no'] . '"></td>';
                        // echo '<td>' . $index++ . '</td>';
                        echo '<td>' . $item['registration_no']  . '</td>';
                        // echo '<td style="text-align: center;">' . number_format($item['fee']) . '</td>';
                        if ($item['deposit'] != "입금완료") {
                            echo '<td style="color:red;">';
                        } else {
                            echo '<td style="color:blue;">';
                        }
                        echo '' . $item['deposit'] . '</td>';
                        echo '</td>';
                        echo '<td>' . $item['time'] . '</td>';
                        echo '<td>' . $item['ksso_member_status'] . '</td>';
                        echo '<td>' . $item['attendance_type'] . '</td>';

                        echo '<td>' . $item['first_name']  ." ". $item['last_name'] .  '</td>';
                        echo '<td class="user_d"><a href="/admin/user_detail?n=' . $item['registration_no'] . '" target="_blank">' . $item['name_kor'] . '</a></td>';
                        echo '<td>' . $item['org_nametag'] . '</td>';
                        echo '<td>' . $item['nation'] . '</td>';
                        echo '<td>' . $item['phone'] . '</td>';
                        echo '<td>' . $item['email'] . '</td>';
                        echo '<td>' . $item['member_type']  . '</td>';
                        echo '<td>' . $item['fee']  . '</td>';
                        echo '<td>' . $item['deposit_date']  . '</td>';
                        echo '<td>' . $item['etc1']  . '</td>';
                        if ($item['memo'] != "" && $item['memo'] != 'null') {
                            echo '<td>';
                            echo '<button class="btn qr_btn memo bg-indigo-800" onclick="onClickMemo(\'' . $item['registration_no'] . '\')" data-id="' . $item['registration_no'] . '" style="padding:8px;">메모</button>';
                        } else {
                            echo '<td>';
                            echo '<button class="btn qr_btn memo border-indigo-800 text-indigo-800 bg-white" onclick="onClickMemo(\'' . $item['registration_no'] . '\')" data-id="' . $item['registration_no'] . '"style="padding:8px;">메모</button>';
                        }
                        echo '</td>';
                        // echo '<td>';
                        // echo '<a><div class="btn btn-non-success qr_btn" onclick="onClickReceipt(\'' . $item['registration_no'] . '\')">영수증</div></a>';
                        // echo '</td>';
                        // echo '<td>';

                        // if ($item['MAIL_SEND_YN'] == "Y") {
                        //     echo '<a href="/admin/email?n=' . $item['registration_no'] . '" target="_blank"><div class="btn btn-non-warning qr_btn" >입금요청메일발송</div></a>';
                        // } else {
                        //     echo '<a href="/admin/email?n=' . $item['registration_no'] . '" target="_blank"><div class="btn btn-warning qr_btn" >입금요청메일발송</div></a>';
                        // }
                        // echo '</td>';

                        // if ($item['memo'] != "" && $item['memo'] != 'null') {
                        //     echo '<td>';
                        //     echo '<button class="btn qr_btn memo bg-indigo-800" onclick="onClickMemo(\'' . $item['registration_no'] . '\')" data-id="' . $item['registration_no'] . '">메모</button>';
                        // } else {
                        //     echo '<td>';
                        //     echo '<button class="btn qr_btn memo border-indigo-800 text-indigo-800 bg-white" onclick="onClickMemo(\'' . $item['registration_no'] . '\')" data-id="' . $item['registration_no'] . '">메모</button>';
                        // }
                        // echo '</td>';

                        // echo $item['deposit'] . '</td>';
                        // if ($item['qr_chk'] == "N") {
                        //     echo '<td style="color:red;">';
                        //     echo '<a href="/admin/qr_generate?n=' . $item['phone'] . '"><div class="btn btn-danger qr_btn" >QR 생성</div></a>';
                        //     echo '</td>';
                        // } else {
                        //     echo '<td style="color:red;">';
                        //     echo '<a href="/admin/qr_layout?n=' . $item['phone'] . '"><div class="btn btn-success" >QR 보기</div></a>';
                        //     echo '</td>';
                        // }


                        // echo '<td>' . $item['mintime'] . '</td>';
                        // echo '<td>' . $item['maxtime'] . '</td>';
                        // echo '<td>' . $item['memo'] . '</td>';
                        echo '</tr>';
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <!-- /basic datatable -->
        <div class="footer text-muted">
            © 2023. <a href="#">온라인 학술대회</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">(주)인투온</a>
        </div>
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->
<script>
//        $('#allChk').click(function(){
//            if($('input:checkbox[id="allChk"]').prop('checked')){
//                $('input[type=checkbox]').prop('checked',true);
//            }else{
//                $('input[type=checkbox]').prop('checked',false);
//            }
//        })


function onClickMemo(id) {
    const url = `/admin/memo?n=${id}`;
    window.open(url, "Certificate", "width=500, height=300, top=30, left=30");
}

function onClickReceipt(id) {
    const url = `/admin/receipt?n=${id}`
    window.open(url, "Certificate", "width=500, height=300, top=30, left=30")
}


$('.depositChk').click(function() {
    var formName = $('#depositForm');
    var formName2 = $('#nametagForm');
    var formName3 = $('#non_depositForm');
    // var formName4 = $('#all_depositForm');
    var userId = $(this).val();
    var checkHtml = '<input type="hidden" class="userId user' + userId + '" name="userId[]" value="' + userId +
        '" id="">'
    if ($(this).prop('checked')) {
        formName.append(checkHtml);
        formName2.append(checkHtml);
        formName3.append(checkHtml);
        // formName4.append(checkHtml)
    } else {
        $('.user' + userId).remove();
    }
})

$('#all_depositForm').click(function() {
    var formName4 = $('#all_depositForm');
    $('.depositChk').prop('checked', true).each(function() {
        const loading = document.querySelector(".loading_box")
        loading.style.display = ""
        var userId = $(this).val();
        var checkHtml = '<input type="hidden" class="userId user' + userId +
            '" name="userId[]" value="' + userId +
            '" id="">';
        formName4.append(checkHtml);
    });
});
</script>
</body>