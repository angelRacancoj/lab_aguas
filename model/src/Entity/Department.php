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


}
