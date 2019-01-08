<?php
if ($this->session->userdata('username') == "" && $this->session->userdata('akses_level') == "") {
    $this->session->set_flashdata('notifikasi', 'Silahkan login terlebih dahulu');
    redirect(site_url('login'), 'refresh');
} elseif ($this->session->userdata('akses_level') == "Alumni") {
    require_once('head.php');
    require_once('header.php');
    require_once('aside.php');
    require_once('main.php');
} else {
    $this->session->set_flashdata('notifikasi', 'Silahkan login sebagai admin terlebih dahulu');
    redirect(site_url('login'));
}
?>
