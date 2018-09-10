<?php

abstract class ArrayProcessor
{
	public $array;
	public $count;

	public function __construct(array $inputArray)
	{
		$this->array = $inputArray;
		$this->count = count($this->array);
	}

	abstract protected function calcArray();
}


class InArray extends ArrayProcessor
{
	public $number;
	public $array;

	public function __construct($num, array $inputArray)
	{
		$this->array = $inputArray;
		$this->number = $num;
	}

	public function calcArray()
	{
		foreach ($this->array as $value)
			{
		if ($value == $this->number) { return TRUE; }
			}
		return FALSE;
	}

}


class ArraySum extends ArrayProcessor
{
	public $sum;

	public function __construct(array $inputArray)
	{
		$this->array = $inputArray;
	}

	public function calcArray()
		{
			$sum = 0;
			foreach ($this->array as $value) { $sum += $value; }
		return $sum;
		}
}

class ArrayDiff extends ArrayProcessor
{
	public $array1;
	public $array2;

	public function __construct(array $inputArray1, $inputArray2)
		{
			$this->array1 = $inputArray1;
			$this->array2 = $inputArray2;
		}

		public function inArray($number, $arr)
		{
			foreach ($arr as $value)
				{
			if ($value == $number) { return TRUE; }
				}
			return FALSE;
		}

	public function calcArray()
		{
			$diff[] = NULL;
			$i = 0;
			foreach ($this->array1 as $value)
			{
				if ((!$this->inArray($value, $this->array2)) and (!$this->inArray($value, $diff)))
					{
						$diff[$i] = $value;
						$i++;
					}
			}
			return $diff;
		}

}


class SortArray extends ArrayProcessor
{
	public function __construct(array $inputArray)
	{
		$this->array = $inputArray;
		$this->count = count($this->array);
	}
	public function calcArray()
{
    for ($i = 0; $i < $this->count; $i++)
    {
        $min = $i;

        for($k = $i+1; $k < $this->count; $k++)
        {
            if ($this->array[$k] < $this->array[$min])
            {
                $min = $k;
            }
        }

        $replace = $this->array[$i];
        $this->array[$i] = $this->array[$min];
        $this->array[$min] = $replace;
    }

    return $this->array;
}

}


$num = 100;
$arr = [4, 79, 4, 5, 68, 0, 3, 9];
$arr2 = [5, 25, 33, 40, 17, 4, 23];

$arrObj = new InArray($num, $arr);

var_dump($arrObj->calcArray());

$sumObj = new ArraySum($arr);

var_dump($sumObj->calcArray());

$diffObj = new ArrayDiff($arr, $arr2);

var_dump($diffObj->calcArray());

$sortObj = new SortArray($arr);

var_dump($sortObj->calcArray());
