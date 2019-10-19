<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * StaffPosition
 *
 * @ORM\Table(name="STAFF_POSITION")
 * @ORM\Entity
 */
class StaffPosition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_staff_position", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStaffPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="name_staff_position", type="string", length=45, nullable=false)
     */
    private $nameStaffPosition;



    /**
     * Get idStaffPosition.
     *
     * @return int
     */
    public function getIdStaffPosition()
    {
        return $this->idStaffPosition;
    }

    /**
     * Set nameStaffPosition.
     *
     * @param string $nameStaffPosition
     *
     * @return StaffPosition
     */
    public function setNameStaffPosition($nameStaffPosition)
    {
        $this->nameStaffPosition = $nameStaffPosition;

        return $this;
    }

    /**
     * Get nameStaffPosition.
     *
     * @return string
     */
    public function getNameStaffPosition()
    {
        return $this->nameStaffPosition;
    }
}
