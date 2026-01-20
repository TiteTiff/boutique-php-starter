<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Category
{
    function __construct(public int $id, public string $nom, public string $description) {}

    public function getSlug(): string
    {
        $slug = strtolower($this->nom);
        $slug = str_replace(' ', '-', $slug);
        return $slug;
    }
}

$category1 = new Category(1, "Développement informatique", "Le développement informatique permet de créer des logiciels, des applictions, des sites web etc...");
$category2 = new Category(2, "UI/UX", "L'UI/UX permet de gérer le design, l'ergonomie et l'interface avec laquelle intéragit l'utilisateur.");
$category3 = new Category(3, "Les bases de données", "Les bases de données permettent la persistance des données");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $category1->getSlug() ?></p>
    <p><?= $category2->getSlug() ?></p>
    <p><?= $category3->getSlug() ?></p>
</body>

</html>