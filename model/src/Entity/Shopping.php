<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Shopping
 *
 * @ORM\Table(name="SHOPPING", indexes={@ORM\Index(name="fk_SHOPPING_EQUIPMENT1_idx", columns={"equipment_id"}), @ORM\Index(name="fk_SHOPPING_PROVIDER1_idx", columns={"provider_id"}), @ORM\Index(name="fk_SHOPPING_SUPPLY1_idx", columns={"supply_id"})})
 * @ORM\Entity
 */
class Shopping
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_shopping", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idShopping;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_purchased", type="float", precision=10, scale=0, nullable=false)
     */
    private $amountPurchased;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_shopping", type="string", length=200, nullable=true)
     */
    private $noteShopping;

    /**
     * @var \Equipment
     *
     * @ORM\ManyToOne(targetEntity="Equipment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipment_id", referencedColumnName="id_equipment")
     * })
     */
    private $equipment;

    /**
     * @var \Provider
     *
     * @ORM\ManyToOne(targetEntity="Provider")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provider_id", referencedColumnName="id_provider")
     * })
     */
    private $provider;

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
