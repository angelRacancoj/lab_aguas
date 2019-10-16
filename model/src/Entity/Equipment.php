<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Equipment
 *
 * @ORM\Table(name="EQUIPMENT")
 * @ORM\Entity
 */
class Equipment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_equipment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipment;

    /**
     * @var string
     *
     * @ORM\Column(name="name_equipment", type="string", length=45, nullable=false)
     */
    private $nameEquipment;

    /**
     * @var string
     *
     * @ORM\Column(name="model_equipment", type="string", length=45, nullable=false)
     */
    private $modelEquipment;

    /**
     * @var int
     *
     * @ORM\Column(name="working_hours", type="integer", nullable=false)
     */
    private $workingHours;

    /**
     * @var int
     *
     * @ORM\Column(name="maintenance_time", type="integer", nullable=false)
     */
    private $maintenanceTime;


}
