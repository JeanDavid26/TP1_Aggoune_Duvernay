<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AdherentTest extends TestCase
{
    public function testCanBeCreatedFromValidPerson(): void
    {
        $this->assertInstanceOf(
            Adherent::class,
            new Adherent('Nom', 'Prenom', '20/04/1984')
        );
    }

}

