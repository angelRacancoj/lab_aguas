<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ParameterPackage
 *
 * @ORM\Table(name="PARAMETER_PACKAGE", indexes={@ORM\Index(name="fk_PARAMENTER_PACKAGE_PARAMETER1_idx", columns={"parameter_id"}), @ORM\Index(name="fk_PARAMETER_PACKAGE_PACKAGE1_idx", columns={"package_id"})})
 * @ORM\Entity
 */
class ParameterPackage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_PP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPp;

    /**
     * @var float
     *
     * @ORM\Column(name="LMA", type="float", precision=10, scale=0, nullable=false)
     */
    private $lma;

    /**
     * @var float
     *
     * @ORM\Column(name="LMP", type="float", precision=10, scale=0, nullable=false)
     */
    private $lmp;

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
     * @var \Package
     *
     * @ORM\ManyToOne(targetEntity="Package")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="package_id", referencedColumnName="id_package")
     * })
     */
    private $package;

    /**
     * ParameterPackage constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get idPp.
     *
     * @return int
     */
    public function getIdPp()
    {
        return $this->idPp;
    }

    /**
     * Set lma.
     *
     * @param float $lma
     *
     * @return ParameterPackage
     */
    public function setLma($lma)
    {
        $this->lma = $lma;

        return $this;
    }

    /**
     * Get lma.
     *
     * @return float
     */
    public function getLma()
    {
        return $this->lma;
    }

    /**
     * Set lmp.
     *
     * @param float $lmp
     *
     * @return ParameterPackage
     */
    public function setLmp($lmp)
    {
        $this->lmp = $lmp;

        return $this;
    }

    /**
     * Get lmp.
     *
     * @return float
     */
    public function getLmp()
    {
        return $this->lmp;
    }

    /**
     * Set parameter.
     *
     * @param \Parameter|null $parameter
     *
     * @return ParameterPackage
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

    /**
     * Set package.
     *
     * @param \Package|null $package
     *
     * @return ParameterPackage
     */
    public function setPackage(\Package $package = null)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get package.
     *
     * @return \Package|null
     */
    public function getPackage()
    {
        return $this->package;
    }
}
