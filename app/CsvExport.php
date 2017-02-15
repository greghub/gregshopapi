<?php

namespace App;

class CsvExport implements Exporter {
	
	public function export($data, $filename = "export", $delimiter=";") {

		$file = fopen('php://memory', 'w'); 

		// get array keys and implde them
		// to get the first line (column title in CSV)
		$titles = array_keys($data[0]);

		// write the first line
		fputcsv($file, $titles, $delimiter); 

		// loop and write the rest
		foreach ($data as $line) { 
			fputcsv($file, $line, $delimiter); 
		}
		fseek($file, 0);

		// headers for making it csv and downloading
		header('Content-Type: application/csv');
		header('Content-Disposition: attachment; filename="'.$filename.'.csv";');
		fpassthru($file);

	}

}