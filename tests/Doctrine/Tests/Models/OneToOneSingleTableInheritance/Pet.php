<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\OneToOneSingleTableInheritance;

use Doctrine\ORM\Annotation as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="one_to_one_single_table_inheritance_pet")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorMap({"cat" = Cat::class})
 */
abstract class Pet
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue(strategy="AUTO") */
    public $id;
}
