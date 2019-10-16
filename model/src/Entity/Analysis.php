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
     * @return int
     */
    public function getIdAnalysis()
    {
        return $this->idAnalysis;
    }

    /**
     * @param int $idAnalysis
     */
    public function setIdAnalysis($idAnalysis)
    {
        $this->idAnalysis = $idAnalysis;
    }

    /**
     * @return DateTime
     */
    public function getDateAnalysis()
    {
        return $this->dateAnalysis;
    }

    /**
     * @param DateTime $dateAnalysis
     */
    public function setDateAnalysis($dateAnalysis)
    {
        $this->dateAnalysis = $dateAnalysis;
    }

    /**
     * @return float
     */
    public function getCostAnalysis()
    {
        return $this->costAnalysis;
    }

    /**
     * @param float $costAnalysis
     */
    public function setCostAnalysis($costAnalysis)
    {
        $this->costAnalysis = $costAnalysis;
    }

    /**
     * @return Employee
     */
    public function getEmployeeDpi()
    {
        return $this->employeeDpi;
    }

    /**
     * @param Employee $employeeDpi
     */
    public function setEmployeeDpi($employeeDpi)
    {
        $this->employeeDpi = $employeeDpi;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param Package $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @return Sample
     */
    public function getSample()
    {
        return $this->sample;
    }

    /**
     * @param Sample $sample
     */
    public function setSample($sample)
    {
        $this->sample = $sample;
    }
}
