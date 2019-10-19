<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Analysis
 *
 * @ORM\Table(name="ANALYSIS", indexes={@ORM\Index(name="fk_ANALYSIS_SAMPLE1_idx", columns={"sample_id"}), @ORM\Index(name="fk_ANALYSIS_EMPLOYEE1_idx", columns={"employee_dpi"}), @ORM\Index(name="fk_ANALYSIS_PACKAGE1_idx", columns={"package_id"})})
 * @ORM\Entity
 */
class Analysis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_analysis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnalysis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_analysis", type="date", nullable=false)
     */
    private $dateAnalysis;

    /**
     * @var float
     *
     * @ORM\Column(name="cost_analysis", type="float", precision=10, scale=0, nullable=false)
     */
    private $costAnalysis;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_dpi", referencedColumnName="DPI_employee")
     * })
     */
    private $employeeDpi;

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
     * @var \Sample
     *
     * @ORM\ManyToOne(targetEntity="Sample")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sample_id", referencedColumnName="id_sample")
     * })
     */
    private $sample;



    /**
     * Get idAnalysis.
     *
     * @return int
     */
    public function getIdAnalysis()
    {
        return $this->idAnalysis;
    }

    /**
     * Set dateAnalysis.
     *
     * @param \DateTime $dateAnalysis
     *
     * @return Analysis
     */
    public function setDateAnalysis($dateAnalysis)
    {
        $this->dateAnalysis = $dateAnalysis;

        return $this;
    }

    /**
     * Get dateAnalysis.
     *
     * @return \DateTime
     */
    public function getDateAnalysis()
    {
        return $this->dateAnalysis;
    }

    /**
     * Set costAnalysis.
     *
     * @param float $costAnalysis
     *
     * @return Analysis
     */
    public function setCostAnalysis($costAnalysis)
    {
        $this->costAnalysis = $costAnalysis;

        return $this;
    }

    /**
     * Get costAnalysis.
     *
     * @return float
     */
    public function getCostAnalysis()
    {
        return $this->costAnalysis;
    }

    /**
     * Set employeeDpi.
     *
     * @param \Employee|null $employeeDpi
     *
     * @return Analysis
     */
    public function setEmployeeDpi(\Employee $employeeDpi = null)
    {
        $this->employeeDpi = $employeeDpi;

        return $this;
    }

    /**
     * Get employeeDpi.
     *
     * @return \Employee|null
     */
    public function getEmployeeDpi()
    {
        return $this->employeeDpi;
    }

    /**
     * Set package.
     *
     * @param \Package|null $package
     *
     * @return Analysis
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

    /**
     * Set sample.
     *
     * @param \Sample|null $sample
     *
     * @return Analysis
     */
    public function setSample(\Sample $sample = null)
    {
        $this->sample = $sample;

        return $this;
    }

    /**
     * Get sample.
     *
     * @return \Sample|null
     */
    public function getSample()
    {
        return $this->sample;
    }
}
