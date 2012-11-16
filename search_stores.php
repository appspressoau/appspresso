<?php

require_once('db.php');

$result = pg_query("SELECT name, address, distance FROM stores ORDER BY id ASC");

$results = array();
while ($store = pg_fetch_assoc($result)) {
  $results[] = $store;
}

print json_encode($results);
