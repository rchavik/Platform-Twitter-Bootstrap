<?php

Croogo::hookHelper('*', array(
	'Tabs' => array(
		'className' => 'TwitterBootstrap.BootstrapTabs',
	),
));

Croogo::hookHelper('*', array(
	'Form' => array(
		'className' => 'TwitterBootstrap.BootstrapForm',
	),
));

Croogo::hookHelper('*', array(
	'Paginator' => array(
		'className' => 'TwitterBootstrap.BootstrapPaginator',
	),
));
