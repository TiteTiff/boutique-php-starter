<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class BankAccount
{
    function __construct(private int $balance)
    {
        $this->balance = $balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$newBAccount = new BankAccount(1000);
$newBAccount->deposit(400);
$newBAccount->withdraw(100);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $newBAccount->getBalance() ?></p>
</body>

</html>