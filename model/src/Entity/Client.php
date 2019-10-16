<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="CLIENT", indexes={@ORM\Index(name="fk_CLIENT_COSTUM_CLIENT1_idx", columns={"costum_client_id"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="name_client", type="string", length=60, nullable=false)
     */
    private $nameClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="direction_client", type="string", length=60, nullable=true)
     */
    private $directionClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city_client", type="string", length=45, nullable=true)
     */
    private $cityClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_client", type="string", length=60, nullable=true)
     */
    private $companyClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_client", type="string", length=15, nullable=true)
     */
    private $phoneClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_client_extra", type="string", length=15, nullable=true)
     */
    private $phoneClientExtra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_extra", type="string", length=15, nullable=true)
     */
    private $phoneExtra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_client", type="string", length=45, nullable=true)
     */
    private $emailClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="web_site_client", type="string", length=45, nullable=true)
     */
    private $webSiteClient;

    /**
     * @var \CostumClient
     *
     * @ORM\ManyToOne(targetEntity="CostumClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="costum_client_id", referencedColumnName="id_costum_category")
     * })
     */
    private $costumClient;


}
