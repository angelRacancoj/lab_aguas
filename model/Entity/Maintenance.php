<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Maintenance
 *
 * @ORM\Table(name="MAINTENANCE", indexes={@ORM\Index(name="fk_MAINTENANCE_EQUIPMENT1_idx", columns={"equipment_id"}), @ORM\Index(name="fk_MAINTENANCE_PROVIDER1_idx", columns={"provider_id"})})
 * @ORM\Entity
 */
class Maintenance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_maintenance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMaintenance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maintenance_date", type="date", nullable=false)
     */
    private $maintenanceDate;

    /**
     * @var float
     *
     * @ORM\Column(name="maintenance_cost", type="float", precision=10, scale=0, nullable=false)
     */
    private $maintenanceCost;

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
     * Maintenance constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get idMaintenance.
     *
     * @return int
     */
    public function getIdMaintenance()
    {
        return $this->idMaintenance;
    }

    /**
     * Set maintenanceDate.
     *
     * @param \DateTime $maintenanceDate
     *
     * @return Maintenance
     */
    public function setMaintenanceDate($maintenanceDate)
    {
        $this->maintenanceDate = $maintenanceDate;

        return $this;
    }

    /**
     * Get maintenanceDate.
     *
     * @return \DateTime
     */
    public function getMaintenanceDate()
    {
        return $this->maintenanceDate;
    }

    /**
     * Set maintenanceCost.
     *
     * @param float $maintenanceCost
     *
     * @return Maintenance
     */
    public function setMaintenanceCost($maintenanceCost)
    {
        $this->maintenanceCost = $maintenanceCost;

        return $this;
    }

    /**
     * Get maintenanceCost.
     *
     * @return float
     */
    public function getMaintenanceCost()
    {
        return $this->maintenanceCost;
    }

    /**
     * Set equipment.
     *
     * @param \Equipment|null $equipment
     *
     * @return Maintenance
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
     * @return Maintenance
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
}
