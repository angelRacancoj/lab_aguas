<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ParameterResult
 *
 * @ORM\Table(name="PARAMETER_RESULT", indexes={@ORM\Index(name="fk_PARAMETER_RESULT_PARAMENTER_PACKAGE1_idx", columns={"parameter_package_id"}), @ORM\Index(name="fk_PARAMETER_RESULT_ANALYSIS1_idx", columns={"analysis_id"})})
 * @ORM\Entity
 */
class ParameterResult
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_parameter_result", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParameterResult;

    /**
     * @var float
     *
     * @ORM\Column(name="result", type="float", precision=10, scale=0, nullable=false)
     */
    private $result;

    /**
     * @var \Analysis
     *
     * @ORM\ManyToOne(targetEntity="Analysis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="analysis_id", referencedColumnName="id_analysis")
     * })
     */
    private $analysis;

    /**
     * @var \ParameterPackage
     *
     * @ORM\ManyToOne(targetEntity="ParameterPackage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parameter_package_id", referencedColumnName="id_PP")
     * })
     */
    private $parameterPackage;



    /**
     * Get idParameterResult.
     *
     * @return int
     */
    public function getIdParameterResult()
    {
        return $this->idParameterResult;
    }

    /**
     * Set result.
     *
     * @param float $result
     *
     * @return ParameterResult
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result.
     *
     * @return float
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set analysis.
     *
     * @param \Analysis|null $analysis
     *
     * @return ParameterResult
     */
    public function setAnalysis(\Analysis $analysis = null)
    {
        $this->analysis = $analysis;

        return $this;
    }

    /**
     * Get analysis.
     *
     * @return \Analysis|null
     */
    public function getAnalysis()
    {
        return $this->analysis;
    }

    /**
     * Set parameterPackage.
     *
     * @param \ParameterPackage|null $parameterPackage
     *
     * @return ParameterResult
     */
    public function setParameterPackage(\ParameterPackage $parameterPackage = null)
    {
        $this->parameterPackage = $parameterPackage;

        return $this;
    }

    /**
     * Get parameterPackage.
     *
     * @return \ParameterPackage|null
     */
    public function getParameterPackage()
    {
        return $this->parameterPackage;
    }
}
