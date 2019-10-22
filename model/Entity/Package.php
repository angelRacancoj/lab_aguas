<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Package
 *
 * @ORM\Table(name="PACKAGE")
 * @ORM\Entity
 */
class Package
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_package", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPackage;

    /**
     * @var string
     *
     * @ORM\Column(name="name_package", type="string", length=45, nullable=false)
     */
    private $namePackage;

    /**
     * @var float
     *
     * @ORM\Column(name="package_cost", type="float", precision=10, scale=0, nullable=false)
     */
    private $packageCost;



    /**
     * Get idPackage.
     *
     * @return string
     */
    public function getIdPackage()
    {
        return $this->idPackage;
    }

    /**
     * Set namePackage.
     *
     * @param string $namePackage
     *
     * @return Package
     */
    public function setNamePackage($namePackage)
    {
        $this->namePackage = $namePackage;

        return $this;
    }

    /**
     * Get namePackage.
     *
     * @return string
     */
    public function getNamePackage()
    {
        return $this->namePackage;
    }

    /**
     * Set packageCost.
     *
     * @param float $packageCost
     *
     * @return Package
     */
    public function setPackageCost($packageCost)
    {
        $this->packageCost = $packageCost;

        return $this;
    }

    /**
     * Get packageCost.
     *
     * @return float
     */
    public function getPackageCost()
    {
        return $this->packageCost;
    }
}
