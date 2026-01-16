<?php
class Car
{
    function __construct(public string $brand, public string $model, public int $year) {}

    public function getAge(): int
    {
        $age = date('Y') - $this->year;
        return $age;
    }

    public function display(): void
    {
        echo ($this->brand . $this->model . " " . $this->getAge() . " ans");
    }
    public function display2(): void
    {
        echo ($this->brand . $this->model . " " . $this->year);
    }
}
$auto = new Car("Kia ", "Rio ", 2021);
$auto2 = new Car("Peugeot ", 206, 2019);
$auto3 = new Car("Citroën ", "C5 ", 2023);

echo $auto->display();
?><br />
<?php
echo $auto2->display2();
?><br />
<?php
echo $auto3->display2();
?>