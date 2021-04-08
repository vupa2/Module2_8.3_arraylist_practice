<?php

class MyList
{
  public $size = 0;
  public $elements = [];

  public function insert($index, $obj)
  {
    if (is_int($index) && $index >= 0 && $index < $this->size) {
      array_splice($this->elements, $index, 0, $obj);
      $this->size++;
    } else {
      exit('Error insert');
    }
  }

  public function add($obj)
  {
    $this->elements[] = $obj;
    $this->size++;
  }

  public function remove($index)
  {
    if (is_int($index) && $index >= 0 && $index < $this->size) {
      array_splice($this->elements, $index, 1);
      $this->size--;
    } else {
      exit('Error remove');
    }
  }

  public function get($index)
  {
    if (is_int($index) && $index >= 0 && $index < $this->size) {
      return $this->elements[$index];
    } else {
      exit('Error get');
    }
  }

  public function clear()
  {
    $this->elements = array();
    $this->size = 0;
  }

  public function addAll($arr)
  {
    array_merge($this->elements, $arr);
    return $this->elements;
  }

  public function indexOf($obj)
  {
    foreach ($this->elements as $key => $value) {
      if ($value === $obj) return "$obj is at index $key ";
    }

    return "This array isn't contain $obj";
  }

  public function isEmpty()
  {
    return empty($this->elements);
  }

  public function sort()
  {
    $array = $this->elements;
    sort($array);
    return $array;
  }

  public function reset()
  {
    reset($this->elements);
  }

  public function size()
  {
    return "Array size is ". count($this->elements);
  }
}

$list1 = new MyList();

$list1->add(1);
$list1->add(3);
$list1->add(5);
$list1->add(7);
$list1->add(9);
$list1->insert(0, 4);
$list1->remove(3);
echo $list1->size() . '<br>';

echo $list1->indexOf(3) . '<br>';
echo "<pre>";
var_dump($list1);

