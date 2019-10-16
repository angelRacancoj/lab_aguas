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
     * @var string
     *
     * @ORM\Column(name="working_hours", type="decimal", precision=10, scale=0, nullable=false)
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


}
