<?php
// src/Product.php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'products')]

class Product 
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'string')]
    private string $name;

    //getter de l'id
    public function getId(): ?int
    {
        return $this->id;
    }

    //getter du nom
    public function getName(): string
    {
        return $this->name;
    }

    //setter du nom
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}                   