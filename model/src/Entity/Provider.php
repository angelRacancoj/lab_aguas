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
     * @ORM\GeneratedValue(strategy="IDENTITY")
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


}
