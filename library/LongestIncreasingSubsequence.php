<?php

class LongestIncreasingSubsequence
{
	public function calculate($n)
	{
		$pileTops = array();
		$count = 0;
		
		require_once('Node.php');

		// sort into piles
		foreach ($n as $x) {
			if ($count && $x > $pileTops[$count-1]->val) {
				$low = $count;
			} else {
				// binary search
				$low = 0; $high = $count-1;
				while ($low <= $high) {
					$mid = (int)(($low + $high) / 2);
					if ($pileTops[$mid]->val >= $x)
						$high = $mid - 1;
					else
						$low = $mid + 1;
				}
			}
			$i = $low;
			
			
			$node = new Node();
			$node->val = $x;
			if ($i != 0)
				$node->back = $pileTops[$i-1];

			if (!isset($pileTops[$i])) {
				// Maintain a count to avoid expensive use of count()
				$count++;
			}

			$pileTops[$i] = $node;
		}
		$result = array();
		for ($node = $count ? $pileTops[$count-1] : NULL; $node != NULL; $node = $node->back)
			$result[] = $node->val;

		return array_reverse($result);
	}
}
