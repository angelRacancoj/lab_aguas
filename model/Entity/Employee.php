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
     * @var int
     *
     * @ORM\Column(name="dpi_employee", type="bigint", nullable=false)
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
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

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
     * Employee constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getDpiEmployee()
    {
        return $this->dpiEmployee;
    }

    /**
     * @param int $dpiEmployee
     */
    public function setDpiEmployee($dpiEmployee)
    {
        $this->dpiEmployee = $dpiEmployee;
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
     * Set isActive.
     *
     * @param bool $isActive
     *
     * @return Employee
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive.
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
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
