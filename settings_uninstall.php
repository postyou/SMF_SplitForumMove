<?php
$request = $smcFunc['db_query']('', '
	Delete
	FROM {db_prefix}settings
	WHERE variable="subforum_redirect_wrong"',
	array()
);
?>