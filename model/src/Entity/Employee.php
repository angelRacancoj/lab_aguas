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



    /**
     * Get dpiEmployee.
     *
     * @return string
     */
    public function getDpiEmployee()
    {
        return $this->dpiEmployee;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return Employee
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nameEmployee.
     *
     * @param string $nameEmployee
     *
     * @return Employee
     */
    public function setNameEmployee($nameEmployee)
    {
        $this->nameEmployee = $nameEmployee;

        return $this;
    }

    /**
     * Get nameEmployee.
     *
     * @return string
     */
    public function getNameEmployee()
    {
        return $this->nameEmployee;
    }

    /**
     * Set phoneEmployee.
     *
     * @param string|null $phoneEmployee
     *
     * @return Employee
     */
    public function setPhoneEmployee($phoneEmployee = null)
    {
        $this->phoneEmployee = $phoneEmployee;

        return $this;
    }

    /**
     * Get phoneEmployee.
     *
     * @return string|null
     */
    public function getPhoneEmployee()
    {
        return $this->phoneEmployee;
    }

    /**
     * Set staffPosition.
     *
     * @param \StaffPosition|null $staffPosition
     *
     * @return Employee
     */
    public function setStaffPosition(\StaffPosition $staffPosition = null)
    {
        $this->staffPosition = $staffPosition;

        return $this;
    }

    /**
     * Get staffPosition.
     *
     * @return \StaffPosition|null
     */
    public function getStaffPosition()
    {
        return $this->staffPosition;
    }
}
