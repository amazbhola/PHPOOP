<?php include 'partials/header.php'; ?>
<?php include 'partials/nav.php'; ?>

<?php
  /**
   *
   */
  /**
   *
   */
  class OOP
  {

    function __construct()
    {
    echo "wellcome to PHP world";
    }
    public function sayHello()
    {
      echo "Hello World";
    }
    public function __destruct()
    {
      echo "<br /> I am about to desappear - bye bye";
    }
  }
  $obj = new OOP;
  echo "<br />";
  $obj->sayHello();



 ?>
<hr />
<?php
  class oopdes{
      private $name;
    public function __construct($val)
    {
      return $this->name=$val;
    }
    public function sayHello2()
    {
      echo "Hello World";
    }

    public function __destruct()
    {
      echo "<br /> Bye Bye $this->name!";
    }
  }
  $objects = new oopdes('Sohel');
  echo "<br />";
  $objects->sayHello2();
 ?>


<?php include 'partials/footer.php'; ?>
