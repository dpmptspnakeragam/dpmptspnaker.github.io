<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
    'protocol'          => 'smtp',
    'smtp_host'         => 'mail.dpmptsp.agamkab.go.id',
    'smtp_port'         => 587,  // Port for TLS
    'smtp_user'         => 'pengaduan@dpmptsp.agamkab.go.id',
    'smtp_pass'         => 'p_ptsp@99agam',
    'smtp_crypto'       => 'tls', // Use TLS
    'mailtype'          => 'html',
    'charset'           => 'UTF-8',
    'wordwrap'          => TRUE,
    'newline'           => "\r\n",
    'smtp_timeout'      => 10,
    'validate'          => TRUE
);
