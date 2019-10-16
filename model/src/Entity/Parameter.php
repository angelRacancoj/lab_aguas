<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Parameter
 *
 * @ORM\Table(name="PARAMETER", indexes={@ORM\Index(name="fk_PARAMETER_MEASURE1_idx", columns={"measure_id"})})
 * @ORM\Entity
 */
class Parameter
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_parameter", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParameter;

    /**
     * @var string
     *
     * @ORM\Column(name="name_parameter", type="string", length=45, nullable=false)
     */
    private $nameParameter;

    /**
     * @var string
     *
     * @ORM\Column(name="MR_code", type="string", length=20, nullable=false)
     */
    private $mrCode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="below_limit", type="boolean", nullable=true)
     */
    private $belowLimit;

    /**
     * @var \Measure
     *
     * @ORM\ManyToOne(targetEntity="Measure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="measure_id", referencedColumnName="id_measure")
     * })
     */
    private $measure;


}
