<?php

declare(strict_types=1);

class Gateau
{
    public string $name;
    public string $recipe;
    public float $pricePerHundredGram;
    public bool $gluten;
    public float $weight;

    public function getTotalPrice() : float
    {
        return $this->pricePerHundredGram * $this->weight;
    }

    public function getCakeRecipe() : string
    {
        return "La recette de la ". $this->name. " est ". $this->recipe." 
        et son poids total est de ". $this->weight.".";
    }
}

$foretNoire = new Gateau;

$foretNoire->name = "Foret noire";
$foretNoire->recipe = "Dans un saladier, battre les jaunes d'oeufs, le sucre en poudre et le sucre vanillé jusqu'à ce que la préparation fasse un ruban. Tout en continuant de battre, ajouter peu à peu la farine, la maïzena et le cacao en poudre.Dans un autre saladier, monter les blancs en neige très ferme avec un batteur électrique puis les incorporer petit à petit et très délicatement à la pâte. Verser dans un moule à manqué beurré (en silicone pour moi), mettre et four et laisser cuire environ 30 mn.
A la sortie du four, laisser le biscuit 5 à 10 mn dans son moule puis le démouler et le laisser refroidir sur une grille.";
$foretNoire->pricePerHundredGram = 1.5;
$foretNoire-> gluten = true;
$foretNoire -> weight = 5;

var_dump($foretNoire->getTotalPrice());
echo ($foretNoire->getCakeRecipe());