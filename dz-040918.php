// 0) inArray

<?php
function inArray($number, array $arr)
  {
    foreach ($arr as $value) {
      if ($value == $number) {
        return TRUE;

      }
    }
   return FALSE;
  }

// 1) arraySum

function arraySum(array $arr)
  {
    $sum = 0;
    foreach ($arr as $value) { $sum += $value; }
    return $sum;
  }

// 2) arrayDiff

function arrayDiff(array $array1, array $array2)
  {
    $diff[] = NULL;
    $i = 0;
    foreach ($array1 as $value)
    {
      if (!inArray($value, $array2) and !inArray($value, $diff))
      {
          $diff[$i] = $value;
          $i++;
      }
    }
  return $diff;
  }

// 3) arraySort

function arraySort($array)
{
    function arrayLength($array)
    {
        $count = 0;
        foreach ($array as $value)
        if ($value != NULL) { $count++; }
        else break;
        return $count;
    }
    $arrLength = arrayLength($array);
    for ($i = 0; $i < arrLength-1; $i++)
    {
        $min = $i;

        for($k = $i+1; $k < $arrLength; $k++)
        {
            if ($array[$k] < $array[$min])
            {
                $min = $k;
            }
        }

        $replace = $array[$i];
        $array[$i] = $array[$min];
        $array[$min] = $replace;
    }

    return $array;
}
