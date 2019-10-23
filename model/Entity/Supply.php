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

    /**
     * Supply constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get idSupply.
     *
     * @return int
     */
    public function getIdSupply()
    {
        return $this->idSupply;
    }

    /**
     * Set nameSupply.
     *
     * @param string $nameSupply
     *
     * @return Supply
     */
    public function setNameSupply($nameSupply)
    {
        $this->nameSupply = $nameSupply;

        return $this;
    }

    /**
     * Get nameSupply.
     *
     * @return string
     */
    public function getNameSupply()
    {
        return $this->nameSupply;
    }

    /**
     * Set dateExpiry.
     *
     * @param \DateTime $dateExpiry
     *
     * @return Supply
     */
    public function setDateExpiry($dateExpiry)
    {
        $this->dateExpiry = $dateExpiry;

        return $this;
    }

    /**
     * Get dateExpiry.
     *
     * @return \DateTime
     */
    public function getDateExpiry()
    {
        return $this->dateExpiry;
    }

    /**
     * Set quantityAvailable.
     *
     * @param float $quantityAvailable
     *
     * @return Supply
     */
    public function setQuantityAvailable($quantityAvailable)
    {
        $this->quantityAvailable = $quantityAvailable;

        return $this;
    }

    /**
     * Get quantityAvailable.
     *
     * @return float
     */
    public function getQuantityAvailable()
    {
        return $this->quantityAvailable;
    }

    /**
     * Set securitySheet.
     *
     * @param string|null $securitySheet
     *
     * @return Supply
     */
    public function setSecuritySheet($securitySheet = null)
    {
        $this->securitySheet = $securitySheet;

        return $this;
    }

    /**
     * Get securitySheet.
     *
     * @return string|null
     */
    public function getSecuritySheet()
    {
        return $this->securitySheet;
    }

    /**
     * Set measure.
     *
     * @param \Measure|null $measure
     *
     * @return Supply
     */
    public function setMeasure(\Measure $measure = null)
    {
        $this->measure = $measure;

        return $this;
    }

    /**
     * Get measure.
     *
     * @return \Measure|null
     */
    public function getMeasure()
    {
        return $this->measure;
    }
}
