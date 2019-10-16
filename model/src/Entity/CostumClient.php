<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CostumClient
 *
 * @ORM\Table(name="COSTUM_CLIENT")
 * @ORM\Entity
 */
class CostumClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_costum_category", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCostumCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="name_costum_category", type="string", length=45, nullable=false)
     */
    private $nameCostumCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;


}
