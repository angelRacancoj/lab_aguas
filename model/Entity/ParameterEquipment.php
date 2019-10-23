<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ParameterEquipment
 *
 * @ORM\Table(name="PARAMETER_EQUIPMENT", indexes={@ORM\Index(name="fk_PARAMETER_EQUIPMENT_PARAMETER1_idx", columns={"parameter_id"}), @ORM\Index(name="fk_PARAMETER_EQUIPMENT_EQUIPMENT1_idx", columns={"equipment_id"})})
 * @ORM\Entity
 */
class ParameterEquipment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_parameter_equipment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParameterEquipment;

    /**
     * @var float
     *
     * @ORM\Column(name="working_hours", type="float", precision=10, scale=0, nullable=false)
     */
    private $workingHours;

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
     * @var \Parameter
     *
     * @ORM\ManyToOne(targetEntity="Parameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parameter_id", referencedColumnName="id_parameter")
     * })
     */
    private $parameter;

    /**
     * ParameterEquipment constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get idParameterEquipment.
     *
     * @return int
     */
    public function getIdParameterEquipment()
    {
        return $this->idParameterEquipment;
    }

    /**
     * Set workingHours.
     *
     * @param float $workingHours
     *
     * @return ParameterEquipment
     */
    public function setWorkingHours($workingHours)
    {
        $this->workingHours = $workingHours;

        return $this;
    }

    /**
     * Get workingHours.
     *
     * @return float
     */
    public function getWorkingHours()
    {
        return $this->workingHours;
    }

    /**
     * Set equipment.
     *
     * @param \Equipment|null $equipment
     *
     * @return ParameterEquipment
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
     * Set parameter.
     *
     * @param \Parameter|null $parameter
     *
     * @return ParameterEquipment
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
}
