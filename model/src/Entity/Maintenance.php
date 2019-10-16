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


}
