<?php

namespace App;

interface Exporter {
	
	public function export($data, $filename, $delimeter);
	
}