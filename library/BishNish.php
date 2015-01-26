<?php
class BishNish
{
	private $country_codes = array();

	public function __construct($countries_file=null)
	{
		if (!$file = fopen($countries_file,"r")) {
			throw new Exception("Cannot to open file: $countries_file");
		}
		
		while(! feof($file)) {
			$country = (fgetcsv($file));
			$this->country_codes[] = $country[0];
		}

		fclose($file);

		sort($this->country_codes);
	}

	public function process()
	{
		foreach ($this->country_codes as $code) {
			$bish = strstr($code,'B');
			$nish = strstr($code,'N');

			if ($bish && $nish) {
				echo "BishNish\n";
			} else if ($bish) {
				echo "Bish\n";
			} else if ($nish) {
				echo "Nish\n";
			} else {
				echo $code."\n";
			}
		}
	}
}
