<?php

// Factory Design Pattern

abstract class Product {
  private $sku_code;
  private $name;
  protected $type;
  public $price;

  public function __construct($sku_code, $name) {
    $this->sku_code = $sku_code;
    $this->name = $name;
  }

  public function getSku() {
    return $this->sku_code;
  }
  public function getName() {
    return $this->name;
  }
  public function getType() {
    return $this->type;
  }

  public function showProduct() {
    echo "Sku : $this->sku_code <br/> Name : $this->name <br/> Type : $this->type <br/>";
  }
}

class Chair extends Product {
  protected $type = 'chair';
}

class Table extends Product {
  protected $type = 'table';
}
class Book extends Product {
  protected $type = 'book';
}

// $prod_1 = new Chair('1234', 'reminder');
// $prod_2 = new Table('12342', 'reminder Table');
// echo $prod_1->getType();
// echo  $prod_1->getName();
Class ProductController {
  public function create($prod_type, $sku, $name){
    switch($prod_type) {
      case 'chair':
        $newInstance = new Chair($sku, $name);
        break;
        case 'table':
        $newInstance = new Table($sku, $name);
        break;
    }

    return $newInstance;
  }
}
class ProductFactory {
  public static function build($prod_type, $sku_code, $name) {
    $class_name =  ucfirst($prod_type);
    if (class_exists($class_name)) {
      return new $class_name($sku_code, $name);
    }
    else {
      throw new Exception("Invalid product type !!");
    }
  }
}
$p1 = ProductFactory::build('chair', '1234', 'Reminder');
$p2 = ProductFactory::build('table', '1234', 'Reminder Table');
$p3 = ProductFactory::build('book', '1234', 'Reminder Book');
$p1->showProduct();
$p2->showProduct();
$p3->showProduct();

// $prod = new ProductController();
// $p1 = $prod_1->create('chair', '1234', 'Reminder');
// $p2 = $prod_1->create('table', '1234', 'Reminder Table');
