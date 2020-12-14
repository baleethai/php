#!/usr/bin/php-zts
<?php

# By: https://github.com/zheltikov
# Used in: https://www.youtube.com/watch?v=L_FdpmJatdw

# Define a custom Thread class
class MyThread extends Thread {
	private $name = "";
	private $duration = 0;

	public function __construct(string $name, int $duration) {
		# Initialize some variables
		$this->name = $name;
		$this->duration = $duration;
	}

	public function run() {
		# Print some messages and sleep
		echo "---> {$this->name} running, belonging to process ID {$this->getCreatorId()}\n";
		sleep($this->duration);
		echo "---> {$this->name} over\n";
	}
}

function main() {
	$start_time = time();
	$count = 10;
	$threads = [];

	# Thread Creation
	for($i = 0; $i < $count; $i++) {
		$threads[$i] = new MyThread("Thread#{$i}", rand(1, 10));
	}

	# Thread Running
	for($i = 0; $i < $count; $i++) {
		$threads[$i]->start();
	}

	# Thread joining
	for($i = 0; $i < $count; $i++) {
		$threads[$i]->join();
	}

	# End
	echo "End\n";

	# Execution Time
	echo "--- " . (time() - $start_time) . " seconds ---\n";

}

# Entry point
main();