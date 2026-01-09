<?php
function greed()
{
    echo "Bienvenue sur la boutique!";
}

function greedClient($name)
{
    echo "Bienvenue sur la boutique $name!";
}

greed();
greedClient("Emma");
greed();
greedClient("Hugo");
greed();
greedClient("Léa");
