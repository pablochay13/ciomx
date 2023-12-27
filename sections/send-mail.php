<?php
// api resend re_Ci76zCmX_4LwEzCJD86Hcq91bnkgyCYCP

$resend = Resend::client('re_Ci76zCmX_4LwEzCJD86Hcq91bnkgyCYCP');

$resend->emails->send([
  'from' => 'onboarding@resend.dev',
  'to' => 'longinus.dev@gmail.com',
  'subject' => 'Hello World',
  'html' => '<p>Congrats on sending your <strong>first email</strong>!</p>'
]);