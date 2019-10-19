<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Municipality
 *
 * @ORM\Table(name="MUNICIPALITY", indexes={@ORM\Index(name="fk_MUNICIPALITY_DEPARTMENT1_idx", columns={"department_id"})})
 * @ORM\Entity
 */
class Municipality
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_municipality", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMunicipality;

    /**
     * @var string
     *
     * @ORM\Column(name="name_municipality", type="string", length=45, nullable=false)
     */
    private $nameMunicipality;

    /**
     * @var \Department
     *
     * @ORM\ManyToOne(targetEntity="Department")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="department_id", referencedColumnName="id_department")
     * })
     */
    private $department;



    /**
     * Get idMunicipality.
     *
     * @return int
     */
    public function getIdMunicipality()
    {
        return $this->idMunicipality;
    }

    /**
     * Set nameMunicipality.
     *
     * @param string $nameMunicipality
     *
     * @return Municipality
     */
    public function setNameMunicipality($nameMunicipality)
    {
        $this->nameMunicipality = $nameMunicipality;

        return $this;
    }

    /**
     * Get nameMunicipality.
     *
     * @return string
     */
    public function getNameMunicipality()
    {
        return $this->nameMunicipality;
    }

    /**
     * Set department.
     *
     * @param \Department|null $department
     *
     * @return Municipality
     */
    public function setDepartment(\Department $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department.
     *
     * @return \Department|null
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
