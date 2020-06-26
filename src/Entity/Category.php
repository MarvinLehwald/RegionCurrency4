<?php


namespace App\Entity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */

class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Get creative and think of a label!")
     */
    private $label;


}