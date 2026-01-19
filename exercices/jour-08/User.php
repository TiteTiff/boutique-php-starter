<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class user
{
    function __construct(public string $name, public string $email, public DateTime $registrationDate = new DateTime()) {}

    public function isNewMember()
    {
        $dateJour = new DateTime("now");
        $interval = $this->registrationDate->diff($dateJour);
        if ($interval->days < 30) {
            return true;
        }
    }
}

$newUser = new user("Tiff ", "simon@gmail.com", new DateTime("18.01.2026"));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $newUser->isNewMember() ? "True" : "False" ?></p>
</body>

</html>