<?php
function tampil_full_kelas_byid($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('guru');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_gur . ' ' . $c->nik;
        return $stmt;
    }
   
}