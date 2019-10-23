<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ParameterSupply
 *
 * @ORM\Table(name="PARAMETER_SUPPLY", indexes={@ORM\Index(name="fk_PARAMETER_SUPPLY_PARAMETER1_idx", columns={"parameter_id"}), @ORM\Index(name="fk_PARAMETER_SUPPLY_SUPPLY1_idx", columns={"supply_id"})})
 * @ORM\Entity
 */
class ParameterSupply
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_parameter_supply", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParameterSupply;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_used", type="float", precision=10, scale=0, nullable=false)
     */
    private $amountUsed;

    /**
     * @var \Parameter
     *
     * @ORM\ManyToOne(targetEntity="Parameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parameter_id", referencedColumnName="id_parameter")
     * })
     */
    private $parameter;

    /**
     * @var \Supply
     *
     * @ORM\ManyToOne(targetEntity="Supply")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_id", referencedColumnName="id_supply")
     * })
     */
    private $supply;

    /**
     * ParameterSupply constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get idParameterSupply.
     *
     * @return int
     */
    public function getIdParameterSupply()
    {
        return $this->idParameterSupply;
    }

    /**
     * Set amountUsed.
     *
     * @param float $amountUsed
     *
     * @return ParameterSupply
     */
    public function setAmountUsed($amountUsed)
    {
        $this->amountUsed = $amountUsed;

        return $this;
    }

    /**
     * Get amountUsed.
     *
     * @return float
     */
    public function getAmountUsed()
    {
        return $this->amountUsed;
    }

    /**
     * Set parameter.
     *
     * @param \Parameter|null $parameter
     *
     * @return ParameterSupply
     */
    public function setParameter(\Parameter $parameter = null)
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * Get parameter.
     *
     * @return \Parameter|null
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Set supply.
     *
     * @param \Supply|null $supply
     *
     * @return ParameterSupply
     */
    public function setSupply(\Supply $supply = null)
    {
        $this->supply = $supply;

        return $this;
    }

    /**
     * Get supply.
     *
     * @return \Supply|null
     */
    public function getSupply()
    {
        return $this->supply;
    }
}
