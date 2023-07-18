<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Entrance extends CI_Model
{
    private $access = "access";
    private $users = "users";

    public function record($info)
    {
        if ($this->db->insert($this->access, $info))
            return true;
        else
            return false;
    }

    public function history_all()
    {
        //
        //        $this->db->join('users as a', 'access.phone = a.phone','left');
        //        $this->db->select('a.type, a.type2, a.nick_name, access.phone, a.email, a.org, a.addr, access.time, access.id as idx');
        //		$this->db->order_by('a.nick_name');
        //		return $this->db->get($this->access)->result_array();
        $query = $this->db->query("SELECT *, time_format(b.duration,'%H시간 %i분') as d_format from users a LEFT JOIN( SELECT registration_no as qr_registration_no, MAX(time) as maxtime, MIN(time) as mintime, TIMEDIFF(MAX(time), MIN(time)) as duration from access GROUP by registration_no )b on a.registration_no = b.qr_registration_no ORDER BY a.nick_name ASC");

        return $query->result_array();
    }

    public function history($where)
    {
        $this->db->where($where);
        $this->db->select('time');
        return $this->db->get($this->access)->row_array();
    }

    public function access($where)
    {
        $this->db->where($where);
        $this->db->select('MIN(time) as min_time, MAX(time) as max_time, TIMESTAMPDIFF(MINUTE, MIN(time), MAX(time)) as duration');
        return $this->db->get($this->access)->row_array();
    }
}
