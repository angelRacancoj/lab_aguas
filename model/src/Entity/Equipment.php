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



    /**
     * Get idEquipment.
     *
     * @return int
     */
    public function getIdEquipment()
    {
        return $this->idEquipment;
    }

    /**
     * Set nameEquipment.
     *
     * @param string $nameEquipment
     *
     * @return Equipment
     */
    public function setNameEquipment($nameEquipment)
    {
        $this->nameEquipment = $nameEquipment;

        return $this;
    }

    /**
     * Get nameEquipment.
     *
     * @return string
     */
    public function getNameEquipment()
    {
        return $this->nameEquipment;
    }

    /**
     * Set modelEquipment.
     *
     * @param string $modelEquipment
     *
     * @return Equipment
     */
    public function setModelEquipment($modelEquipment)
    {
        $this->modelEquipment = $modelEquipment;

        return $this;
    }

    /**
     * Get modelEquipment.
     *
     * @return string
     */
    public function getModelEquipment()
    {
        return $this->modelEquipment;
    }

    /**
     * Set workingHours.
     *
     * @param int $workingHours
     *
     * @return Equipment
     */
    public function setWorkingHours($workingHours)
    {
        $this->workingHours = $workingHours;

        return $this;
    }

    /**
     * Get workingHours.
     *
     * @return int
     */
    public function getWorkingHours()
    {
        return $this->workingHours;
    }

    /**
     * Set maintenanceTime.
     *
     * @param int $maintenanceTime
     *
     * @return Equipment
     */
    public function setMaintenanceTime($maintenanceTime)
    {
        $this->maintenanceTime = $maintenanceTime;

        return $this;
    }

    /**
     * Get maintenanceTime.
     *
     * @return int
     */
    public function getMaintenanceTime()
    {
        return $this->maintenanceTime;
    }
}
