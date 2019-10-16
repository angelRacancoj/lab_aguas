<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ParameterResult
 *
 * @ORM\Table(name="PARAMETER_RESULT", indexes={@ORM\Index(name="fk_PARAMETER_RESULT_ANALYSIS1_idx", columns={"analysis_id"}), @ORM\Index(name="fk_PARAMETER_RESULT_PARAMENTER_PACKAGE1_idx", columns={"parameter_package_id"})})
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


}
