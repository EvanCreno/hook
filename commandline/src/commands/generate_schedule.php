<?php

return array(
	'arg0'    => 'generate:schedule',
	'command' => 'generate:schedule',
	'description' => 'Generate schedule config file.',
	'run' => function($args) use ($commands) {

		$dest = Client\Project::root() . 'dl-ext/';
		$dest_file = $dest . 'schedule.yaml';
		@mkdir($dest, 0777, true);

		$template = file_get_contents(__DIR__ . '/../templates/schedule.yaml');
		file_put_contents($dest_file, $template);

		echo "Schedule configuration created at '{$dest_file}'." . PHP_EOL;
	}
);


