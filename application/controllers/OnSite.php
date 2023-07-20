<?php
defined('BASEPATH') or exit('No direct script access allowed');
require __DIR__ . '/../../vendor/autoload.php';

class OnSite extends CI_Controller
{
    private $sheets;
    private $data;

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Seoul');
        $this->load->model('users');
    }

    public function index()
    {

        $this->load->view('header');
        $this->load->view('on-site', $this->data);
        $this->load->view('footer');
    }

    public function mobile()
    {
        $this->load->view('on-site-mo');
        $firstName = isset($_GET['firstName']) ? $_GET['firstName'] : null;
        $lastName = isset($_GET['lastName']) ? $_GET['lastName'] : null;
        $type = isset($_GET['type1']) ? $_GET['type1'] : null;
        $type2 = isset($_GET['type2']) ? $_GET['type2'] : null;
        $type4 = isset($_GET['type4']) ? $_GET['type4'] : null;
        $type5 = isset($_GET['type5']) ? $_GET['type5'] : null;
        $name = isset($_GET['nick_name']) ? $_GET['nick_name'] : null;
        $phone = isset($_GET['phone']) ? $_GET['phone'] : null;
        $email1 = isset($_GET['email1']) ? $_GET['email1'] : null;
        $email2 = isset($_GET['email2']) ? $_GET['email2'] : null;
        $org = isset($_GET['org']) ? $_GET['org'] : null;
        $license = isset($_GET['sn']) ? $_GET['sn'] : null;

        if (!empty($name) || !empty($firstName)) {
            if ($type4 == "on") {
                $type3 = "회원";
            } else {
                $type3 = "비회원";
            }
            if ($license == "") {
                $license = "00000";
            }
            if ($type2 == '개원의' || $type2 == '봉직의' || $type2 == '전문의' || $type2 == '교수' || $type2 == '군의관') {
                if ($type == '좌장' || $type == '연자' || $type == '패널') {
                    $fee = 0;
                } else {
                    if ($type3 == '비회원') {
                        $fee = 50000;
                    } else {
                        $fee = 30000;
                    }
                }
            } else if ($type2 == '간호사' || $type2 == '영양사' || $type2 == '약사' || $type2 == '운동처방사' || $type2 == '연구원') {
                if ($type == '좌장' || $type == '연자' || $type == '패널') {
                    $fee = 0;
                } else {
                    if ($type3 == '비회원') {
                        $fee = 40000;
                    } else {
                        $fee = 20000;
                    }
                }
            } else {
                $fee = 0;
            }

            if ($fee == 0)
                $deposit = '입금완료';
            else
                $deposit = '미결제';

            $time = date("Y-m-d H:i:s");
            // $uagent = $this->agent->agent_string();

            $email = $email1 . "@" . $email2;
            $info = array(
                'nick_name' => preg_replace("/\s+/", "", $name),
                'sn' => preg_replace("/\s+/", "", $license),
                'org' => trim($org),
                'org_nametag' => trim($org),
                'phone' => preg_replace("/\s+/", "", $phone),
                'email' => preg_replace("/\s+/", "", $email),
                'type' => trim($type),
                'type2' => trim($type2),
                'type3' => trim($type3),
                'fee' => $fee,
                'time' => $time,
                'deposit' => $deposit,
                // 'uagent' => $uagent,
            );
            $this->users->add_onsite_user($info);
        }
    }

    public function success()
    {
        $this->load->view('success', $this->data);
    }
}
