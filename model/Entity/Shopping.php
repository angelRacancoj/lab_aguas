<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Shopping
 *
 * @ORM\Table(name="SHOPPING", indexes={@ORM\Index(name="fk_SHOPPING_PROVIDER1_idx", columns={"provider_id"}), @ORM\Index(name="fk_SHOPPING_SUPPLY1_idx", columns={"supply_id"}), @ORM\Index(name="fk_SHOPPING_EQUIPMENT1_idx", columns={"equipment_id"})})
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_shopping", type="date", nullable=false)
     */
    private $dateShopping;

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



    /**
     * Get idShopping.
     *
     * @return int
     */
    public function getIdShopping()
    {
        return $this->idShopping;
    }

    /**
     * Set amountPurchased.
     *
     * @param float $amountPurchased
     *
     * @return Shopping
     */
    public function setAmountPurchased($amountPurchased)
    {
        $this->amountPurchased = $amountPurchased;

        return $this;
    }

    /**
     * Get amountPurchased.
     *
     * @return float
     */
    public function getAmountPurchased()
    {
        return $this->amountPurchased;
    }

    /**
     * Set dateShopping.
     *
     * @param \DateTime $dateShopping
     *
     * @return Shopping
     */
    public function setDateShopping($dateShopping)
    {
        $this->dateShopping = $dateShopping;

        return $this;
    }

    /**
     * Get dateShopping.
     *
     * @return \DateTime
     */
    public function getDateShopping()
    {
        return $this->dateShopping;
    }

    /**
     * Set noteShopping.
     *
     * @param string|null $noteShopping
     *
     * @return Shopping
     */
    public function setNoteShopping($noteShopping = null)
    {
        $this->noteShopping = $noteShopping;

        return $this;
    }

    /**
     * Get noteShopping.
     *
     * @return string|null
     */
    public function getNoteShopping()
    {
        return $this->noteShopping;
    }

    /**
     * Set equipment.
     *
     * @param \Equipment|null $equipment
     *
     * @return Shopping
     */
    public function setEquipment(\Equipment $equipment = null)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Get equipment.
     *
     * @return \Equipment|null
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Set provider.
     *
     * @param \Provider|null $provider
     *
     * @return Shopping
     */
    public function setProvider(\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider.
     *
     * @return \Provider|null
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set supply.
     *
     * @param \Supply|null $supply
     *
     * @return Shopping
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
