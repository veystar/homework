<?php

abstract class StringProcessor
{
	public $inputString;
	public $strLength;

	public function __construct(string $inputString)
	{
		$this->str = $inputString;
		$this->strLength = strlen($this->str);
	}
	
	abstract protected function processStringData();
}


class InString extends StringProcessor // strpos
{
	public $findBlock;
	public $str;
	public $count;
	
	public function __construct($symbols, string $inputString)
	{
		parent::__construct($inputString);
		$this->findBlock = $symbols;
		$this->count = strlen($this->findBlock);
	}

	public function collectSymbols(int $starter, int $quantity, string $input)
	{
		$result = "";
		for ($j = $starter; $j < ($starter + $quantity); $j++) { $result .= $input[$j]; }
		return $result;
	}
	
	public function processStringData()
	{
	$i = 0;
	$j = 0;
	
		while ($i < $this->strLength)
		{
			if ($this->str[$i] == $this->findBlock[0] and $this->count == 1)
			{
				return $i;
			}
			if ($this->str[$i] == $this->findBlock[0] and $this->count > 1)
			{
				$subString = "";
				$k = $i;
				$subString = $this->collectSymbols($i, $this->count, $this->str);
				if ($subString == $this->findBlock) {return $i;}
			}
			$i++;
		}
	return FALSE;
	}

}


class GetSubString extends StringProcessor // substr
{
	public $str;
	public $start;
	public $length;
        
    public function __construct(string $inputString, int $start, int $length)
	    {
			parent::__construct($inputString);
			$this->start = $start;
			$this->length = $length;
       	}

	public function processStringData()
		{
			$outString = "";
			$outString = InString::collectSymbols($this->start, $this->length, $this->str);
		return $outString;
		}
}

class SubStringCount extends InString //substr_count
{
	public $countBlock = 0;

	public function processStringData()
		{
			$i = 0;
			$j = 0;
			
			if ($this->count == 1)
				{
					while ($i < $this->strLength)
						{
							if ($this->str[$i] == $this->findBlock)
								{
									$this->countBlock++;
								}
								$i++;
						}
						return $this->countBlock;
				}
			else
				{
					while ($i < $this->strLength)
					{
						if ($this->str[$i] == $this->findBlock[0])
							{
								$subString = "";
								$subString = parent::collectSymbols($i, $this->count, $this->str);
								if ($subString == $this->findBlock)
									{
										$this->countBlock++;
										$i += $this->count;
									}
								else {$i++;}
							}	
						else {$i++;}
					}
				}
		return $this->countBlock;
	}

}


class GetExplode extends StringProcessor
{
    public $sign;
    public $temp;
    public $outString;
	public function __construct(string $inputString, $delimiter)
	{
		parent::__construct($inputString);
		$this->sign = $delimiter;
	}
	public function processStringData()
{
	$i = 0;
	$j = 0;
	
    while ($i < $this->strLength)
    {
        if ($this->str[$i] != $this->sign)
			{
				$this->temp .= $this->str[$i];
			}
        if ($this->str[$i] == $this->sign)
			{
			$this->outString[$j] = $this->temp;
			$this->temp = "";
			$j++;
			}
		if ($this->str[$i] != $this->sign and $i == ($this->strLength-1))
			{
			$this->outString[$j] = $this->temp;
			$this->temp = "";
			}
		$i++;
    }

    return $this->outString;
}

}
// testing...

$start = 0;
$len = 10;
$delimit = " ";
$str = "This is the test string!";

$strObj = new GetSubString($str, $start, $len);

echo($strObj->processStringData());

echo "<hr>";

$explodeObj = new GetExplode($str, $delimit);

var_dump($explodeObj->processStringData());

echo "<hr>";

$inObj = new InString("test", $str);

var_dump($inObj->processStringData());

echo "<hr>";

$countObj = new SubStringCount("is", $str);

var_dump($countObj->processStringData());