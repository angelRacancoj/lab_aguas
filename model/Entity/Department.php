<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table(name="DEPARTMENT")
 * @ORM\Entity
 */
class Department
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_department", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="name_department", type="string", length=45, nullable=false)
     */
    private $nameDepartment;



    /**
     * Get idDepartment.
     *
     * @return int
     */
    public function getIdDepartment()
    {
        return $this->idDepartment;
    }

    /**
     * Set nameDepartment.
     *
     * @param string $nameDepartment
     *
     * @return Department
     */
    public function setNameDepartment($nameDepartment)
    {
        $this->nameDepartment = $nameDepartment;

        return $this;
    }

    /**
     * Get nameDepartment.
     *
     * @return string
     */
    public function getNameDepartment()
    {
        return $this->nameDepartment;
    }
}
