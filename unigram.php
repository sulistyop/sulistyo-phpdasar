<?php
	function generateUBT($input)
	{
		$str_input = explode(' ', $input);

		// unigram
		$unigram = '';
		foreach ($str_input as $word) {
			$unigram .= $word.', ';
		}
		$unigram = substr($unigram, 0, -2);

		// bigram
		$x = 0;
		$bigram = '';
		foreach ($str_input as $word) {
			if ($x < 1) {
				$bigram .= $word.' ';
				$x++;
			} else {
				$bigram .= $word.', ';
				$x = 0;
			}
		}
		$bigram = substr($bigram, 0, -2);

		// trigram
		$y = 0;
		$trigram = '';
		foreach ($str_input as $word) {
			if ($y < 2) {
				$trigram .= $word.' ';
				$y++;
			} else {
				$trigram .= $word.', ';
				$y = 0;
			}
		}
		$trigram = substr($trigram, 0, -2);

		$result = 'Unigram : '. $unigram . '<br>';
		$result .= 'Bigram : '. $bigram . '<br>';
		$result .= 'Trigram : '. $trigram;

		return $result;
	}

	echo generateUBT('Jakarta adalah ibukota negara Republik Indonesia');


?> 