<?php
//application/views/news/success.php

$this->load->view($this->config->item('theme') . 'header');

?>
<h1>Shit yeah! You successfully created some stuff. Yay for you!</h1>
<p>Wouldn't it be nice if I could actually SEE the new record?</p>

<?php

$this->load->view($this->config->item('theme') . 'footer');

?>