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


}
