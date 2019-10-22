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



    /**
     * Get idParameter.
     *
     * @return string
     */
    public function getIdParameter()
    {
        return $this->idParameter;
    }

    /**
     * Set nameParameter.
     *
     * @param string $nameParameter
     *
     * @return Parameter
     */
    public function setNameParameter($nameParameter)
    {
        $this->nameParameter = $nameParameter;

        return $this;
    }

    /**
     * Get nameParameter.
     *
     * @return string
     */
    public function getNameParameter()
    {
        return $this->nameParameter;
    }

    /**
     * Set mrCode.
     *
     * @param string $mrCode
     *
     * @return Parameter
     */
    public function setMrCode($mrCode)
    {
        $this->mrCode = $mrCode;

        return $this;
    }

    /**
     * Get mrCode.
     *
     * @return string
     */
    public function getMrCode()
    {
        return $this->mrCode;
    }

    /**
     * Set belowLimit.
     *
     * @param bool|null $belowLimit
     *
     * @return Parameter
     */
    public function setBelowLimit($belowLimit = null)
    {
        $this->belowLimit = $belowLimit;

        return $this;
    }

    /**
     * Get belowLimit.
     *
     * @return bool|null
     */
    public function getBelowLimit()
    {
        return $this->belowLimit;
    }

    /**
     * Set measure.
     *
     * @param \Measure|null $measure
     *
     * @return Parameter
     */
    public function setMeasure(\Measure $measure = null)
    {
        $this->measure = $measure;

        return $this;
    }

    /**
     * Get measure.
     *
     * @return \Measure|null
     */
    public function getMeasure()
    {
        return $this->measure;
    }
}
