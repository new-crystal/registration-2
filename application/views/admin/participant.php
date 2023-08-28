<script src="https://cdn.tailwindcss.com"></script>
<style>
th,
td {
    text-align: center !important;
    border: 2px solid rgb(163 163 163);
    font-weight: 600;
    font-size: 1.5rem;
    line-height: 2rem;
}

tr {
    height: 4.5rem;
    border: 2px solid rgb(163 163 163);
    font-weight: 600;
    font-size: 1.5rem;
    line-height: 2rem;
}
</style>
<div class="text-center flex flex-col items-center justify-center">
    <h1 class="text-6xl font-semibold text-orange-600 my-10">ICOMES 2023</h1>
    <h6 class="text-3xl font-semibold mb-20 ">현장 참석자 데이터</h6>
    <?php
    // print_r($statistics);
    $total_1 = 0;
    $total_2 = 0;
    $total_3 = 0;
    for ($i = 0; $i < count($statistics); $i++) {
        $total_1 += $statistics[$i]['202303_R_2023-07-11'] + $statistics[$i]['202303_A_2023-07-11'];
        $total_2 += $statistics[$i]['202303_R_2023-07-12'] + $statistics[$i]['202303_A_2023-07-12'];
        $total_3 += $statistics[$i]['202303_R_2023-07-13'] + $statistics[$i]['202303_A_2023-07-13'];
    }

    ?>
    <table class="w-9/12 text-2xl mb-20">
        <tr class="bg-green-300 text-black">
            <th colspan="2" rowspan="2">등록구분</th>
            <th colspan="2">9월 7일(목)</th>
            <th colspan="2">9월 8일(금)</th>
            <th colspan="2">9월 9일(토)</th>
        </tr>
        <tr class="bg-green-300 text-black">
            <th>국외</th>
            <th>국내</th>
            <th>국외</th>
            <th>국내</th>
            <th>국외</th>
            <th>국내</th>

        </tr>
        <tr>
            <th class="bg-red-100" rowspan="7">사전등록</th>
            <th class="bg-red-100">Chairperson</th>
            <td><?php echo isset($statistics[3]['202303_K_2023-09-07']) ? $statistics[3]['202303_K_2023-09-07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-12']) ? $statistics[3]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-13']) ? $statistics[3]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-11']) ? $statistics[3]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-12']) ? $statistics[3]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-13']) ? $statistics[3]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Speakers</th>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-11']) ? $statistics[0]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-12']) ? $statistics[0]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-13']) ? $statistics[0]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-11']) ? $statistics[0]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-12']) ? $statistics[0]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-13']) ? $statistics[0]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Panel</th>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-11']) ? $statistics[4]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-12']) ? $statistics[4]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-13']) ? $statistics[4]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-11']) ? $statistics[4]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-12']) ? $statistics[4]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-13']) ? $statistics[4]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Committee</th>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-11']) ? $statistics[2]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-12']) ? $statistics[2]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-13']) ? $statistics[2]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-11']) ? $statistics[2]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-12']) ? $statistics[2]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-13']) ? $statistics[2]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Participants</th>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Press</th>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Others</th>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100" rowspan="7">현장등록</th>
            <th class="bg-blue-100">Chairperson</th>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-11']) ? $statistics[3]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-12']) ? $statistics[3]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-13']) ? $statistics[3]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-11']) ? $statistics[3]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-12']) ? $statistics[3]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['202303_R_2023-07-13']) ? $statistics[3]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Speakers</th>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-11']) ? $statistics[0]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-12']) ? $statistics[0]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-13']) ? $statistics[0]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-11']) ? $statistics[0]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-12']) ? $statistics[0]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[0]['202303_R_2023-07-13']) ? $statistics[0]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Panel</th>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-11']) ? $statistics[4]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-12']) ? $statistics[4]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-13']) ? $statistics[4]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-11']) ? $statistics[4]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-12']) ? $statistics[4]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['202303_R_2023-07-13']) ? $statistics[4]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Committee</th>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-11']) ? $statistics[2]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-12']) ? $statistics[2]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-13']) ? $statistics[2]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-11']) ? $statistics[2]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-12']) ? $statistics[2]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['202303_R_2023-07-13']) ? $statistics[2]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Participants</th>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Press</th>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Others</th>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-11']) ? $statistics[1]['202303_R_2023-07-11'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-12']) ? $statistics[1]['202303_R_2023-07-12'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['202303_R_2023-07-13']) ? $statistics[1]['202303_R_2023-07-13'] : 0; ?>
            </td>
        </tr>
        <tr class="bg-green-300 text-black">
            <th colspan="2" rowspan="2">합계</th>
            <th><?php echo $total_1; ?></th>
            <th><?php echo $total_2; ?></th>
            <th><?php echo $total_3; ?></th>
            <th><?php echo $total_1; ?></th>
            <th><?php echo $total_2; ?></th>
            <th><?php echo $total_3; ?></th>
        </tr>
        <tr class="bg-green-300 text-black">
            <th colspan="2"></th>
            <th colspan="2"><?php echo $total_1; ?></th>
            <th colspan="2"> <?php echo $total_2; ?></th>

        </tr>
    </table>
</div>
</div>
<!-- /page content -->

</div>
<!-- /page container -->