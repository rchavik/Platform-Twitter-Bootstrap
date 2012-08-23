<?php

Croogo::hookHelper('*', array(
	'Tabs' => array(
		'className' => 'TwitterBootstrap.BootstrapTabs',
	),
));

Croogo::hookHelper('*', array(
	'Paginator' => array(
		'className' => 'TwitterBootstrap.BootstrapPaginator',
	),
));
