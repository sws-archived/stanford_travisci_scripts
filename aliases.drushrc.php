<?php
# minimum data required to run tests within the Travis CI environment
$aliases['local'] = array(
  'uri' => 'http://127.0.0.1:8080',
  'root' => 'HOME/html',
  'db-url' => 'mysql://root:@127.0.0.1/drupal',
);
