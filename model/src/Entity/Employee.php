<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="EMPLOYEE", indexes={@ORM\Index(name="fk_EMPLOYEE_PERSONAL_CHARGE1_idx", columns={"staff_position_id"})})
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var string
     *
     * @ORM\Column(name="DPI_employee", type="string", length=13, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dpiEmployee;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=400, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name_employee", type="string", length=60, nullable=false)
     */
    private $nameEmployee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_employee", type="string", length=10, nullable=true)
     */
    private $phoneEmployee;

    /**
     * @var \StaffPosition
     *
     * @ORM\ManyToOne(targetEntity="StaffPosition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="staff_position_id", referencedColumnName="id_staff_position")
     * })
     */
    private $staffPosition;
    

}
