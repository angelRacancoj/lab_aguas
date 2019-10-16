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


}
