<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Provider
 *
 * @ORM\Table(name="PROVIDER")
 * @ORM\Entity
 */
class Provider
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_provider", type="integer", nullable=false)
     * @ORM\Id
     */
    private $idProvider;

    /**
     * @var string
     *
     * @ORM\Column(name="name_provider", type="string", length=45, nullable=false)
     */
    private $nameProvider;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_provider", type="string", length=15, nullable=false)
     */
    private $phoneProvider;

    /**
     * @var string|null
     *
     * @ORM\Column(name="direction_provider", type="text", length=255, nullable=true)
     */
    private $directionProvider;

    /**
     * Provider constructor.
     */
    public function __construct()
    {
    }

    /**
     * Set idProvider.
     *
     * @param int $idProvider
     *
     * @return Provider
     */
    public function setIdProvider($idProvider)
    {
        $this->idProvider = $idProvider;

        return $this;
    }

    /**
     * Get idProvider.
     *
     * @return int
     */
    public function getIdProvider()
    {
        return $this->idProvider;
    }

    /**
     * Set nameProvider.
     *
     * @param string $nameProvider
     *
     * @return Provider
     */
    public function setNameProvider($nameProvider)
    {
        $this->nameProvider = $nameProvider;

        return $this;
    }

    /**
     * Get nameProvider.
     *
     * @return string
     */
    public function getNameProvider()
    {
        return $this->nameProvider;
    }

    /**
     * Set phoneProvider.
     *
     * @param string $phoneProvider
     *
     * @return Provider
     */
    public function setPhoneProvider($phoneProvider)
    {
        $this->phoneProvider = $phoneProvider;

        return $this;
    }

    /**
     * Get phoneProvider.
     *
     * @return string
     */
    public function getPhoneProvider()
    {
        return $this->phoneProvider;
    }

    /**
     * Set directionProvider.
     *
     * @param string|null $directionProvider
     *
     * @return Provider
     */
    public function setDirectionProvider($directionProvider = null)
    {
        $this->directionProvider = $directionProvider;

        return $this;
    }

    /**
     * Get directionProvider.
     *
     * @return string|null
     */
    public function getDirectionProvider()
    {
        return $this->directionProvider;
    }
}
