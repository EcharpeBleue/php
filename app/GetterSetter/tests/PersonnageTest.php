<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use aventures\Personnage;
require_once './src/personnage.php';
final class PersonnageTest extends TestCase
{
    /**
     * TESTS UNITAIRE POUR LA SEANCE 3
     */
    public function testNotNull(): void
    {
        $personnage = new Personnage();
        $this->assertNotNull($personnage);
    }
    public function testPrivatePrenom():void
    {
        $personnage = new aventures\Personnage();
        $this->assertObjectHasProperty("_prenom", $personnage);
    }
    public function testPrivateForceAttaque():void
    {
        $personnage = new aventures\Personnage();
        $this->assertObjectHasProperty("_forceAttaque", $personnage);
    }
    public function testPrivatePointDeVies():void
    {
        $personnage = new aventures\Personnage();
        $this->assertObjectHasProperty("_pointsDeVie",$personnage);
    }
    public function testGetPrenomTest1():void
    {
        $personnage = new aventures\Personnage();
        $this->assertEquals("",$personnage->getPrenom());
    }
    public function testGetPrenomTest2():void
    {
        $personnage = new aventures\Personnage('Bilbo',5,10);
        $this->assertEquals("Bilbo",$personnage->getPrenom());
    }
    public function testSetPrenomTest1():void
    {
        $personnage = new aventures\Personnage('Bilbo',5,10);
        $this->assertEquals("Gollum",$personnage->setPrenom("Gollum"));
    }
    public function testSetPrenomTest2():void
    {
        $personnage = new aventures\Personnage('<script>',5,10);
        $this->assertEquals(htmlentities('<script>'),$personnage->getPrenom());
    }
    public function testSetPrenomTes3():void
    {
        $personnage = new aventures\Personnage('Gollum',5,10);
        $this->assertEquals(htmlentities('<script>'),$personnage->setPrenom("<script>"));
    }
    public function testSetForceAttaque1():void
    {
        $personnage = new aventures\Personnage('Bilbo',5,10);
        $this->assertEquals(3,$personnage->setForceAttaque((3)));
    }
    public function testGetForceAttaque1():void
    {
        $personnage = new aventures\Personnage('Bilbo',5,10);
        $this->assertEquals(5,$personnage->GetForceAttaque());
    }
    public function testSetPointsDeVie1():void
    {
        $personnage = new aventures\Personnage('Bilbo',5,10);
        $this->assertEquals(12,$personnage->setPointsDeVie((12)));
    }
    public function testGetPointsDeVie1():void
    {
        $personnage = new aventures\Personnage('Bilbo',5,10);
        $this->assertEquals(10,$personnage->getPointsDeVie());
    }
}