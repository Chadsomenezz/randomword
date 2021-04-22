<?php


$count = $this->session->userdata('count');
$count++;
$this->session->set_userdata('count',$count);
$this->session->set_userdata('randword', $randword);

header("location: /randword/home");

die();