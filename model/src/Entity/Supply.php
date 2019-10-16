<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Supply
 *
 * @ORM\Table(name="SUPPLY", indexes={@ORM\Index(name="fk_SUPPLY_MEASURE1_idx", columns={"measure_id"})})
 * @ORM\Entity
 */
class Supply
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupply;

    /**
     * @var string
     *
     * @ORM\Column(name="name_supply", type="string", length=45, nullable=false)
     */
    private $nameSupply;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expiry", type="date", nullable=false)
     */
    private $dateExpiry;

    /**
     * @var float
     *
     * @ORM\Column(name="quantity_available", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantityAvailable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="security_sheet", type="blob", length=255, nullable=true)
     */
    private $securitySheet;

    /**
     * @var \Measure
     *
     * @ORM\ManyToOne(targetEntity="Measure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="measure_id", referencedColumnName="id_measure")
     * })
     */
    private $measure;


}
