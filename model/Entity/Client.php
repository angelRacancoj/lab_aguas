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
     * @ORM\Column(name="dpi_client", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dpiClient;

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
     * @var string
     *
     * @ORM\Column(name="phone_client", type="string", length=15, nullable=false)
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

    /**
     * Client constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get dpiClient.
     *
     * @return int
     */
    public function getDpiClient()
    {
        return $this->dpiClient;
    }

    /**
     * Set nameClient.
     *
     * @param string $nameClient
     *
     * @return Client
     */
    public function setNameClient($nameClient)
    {
        $this->nameClient = $nameClient;

        return $this;
    }

    /**
     * Get nameClient.
     *
     * @return string
     */
    public function getNameClient()
    {
        return $this->nameClient;
    }

    /**
     * Set directionClient.
     *
     * @param string|null $directionClient
     *
     * @return Client
     */
    public function setDirectionClient($directionClient = null)
    {
        $this->directionClient = $directionClient;

        return $this;
    }

    /**
     * Get directionClient.
     *
     * @return string|null
     */
    public function getDirectionClient()
    {
        return $this->directionClient;
    }

    /**
     * Set cityClient.
     *
     * @param string|null $cityClient
     *
     * @return Client
     */
    public function setCityClient($cityClient = null)
    {
        $this->cityClient = $cityClient;

        return $this;
    }

    /**
     * Get cityClient.
     *
     * @return string|null
     */
    public function getCityClient()
    {
        return $this->cityClient;
    }

    /**
     * Set companyClient.
     *
     * @param string|null $companyClient
     *
     * @return Client
     */
    public function setCompanyClient($companyClient = null)
    {
        $this->companyClient = $companyClient;

        return $this;
    }

    /**
     * Get companyClient.
     *
     * @return string|null
     */
    public function getCompanyClient()
    {
        return $this->companyClient;
    }

    /**
     * Set phoneClient.
     *
     * @param string $phoneClient
     *
     * @return Client
     */
    public function setPhoneClient($phoneClient)
    {
        $this->phoneClient = $phoneClient;

        return $this;
    }

    /**
     * Get phoneClient.
     *
     * @return string
     */
    public function getPhoneClient()
    {
        return $this->phoneClient;
    }

    /**
     * Set phoneClientExtra.
     *
     * @param string|null $phoneClientExtra
     *
     * @return Client
     */
    public function setPhoneClientExtra($phoneClientExtra = null)
    {
        $this->phoneClientExtra = $phoneClientExtra;

        return $this;
    }

    /**
     * Get phoneClientExtra.
     *
     * @return string|null
     */
    public function getPhoneClientExtra()
    {
        return $this->phoneClientExtra;
    }

    /**
     * Set phoneExtra.
     *
     * @param string|null $phoneExtra
     *
     * @return Client
     */
    public function setPhoneExtra($phoneExtra = null)
    {
        $this->phoneExtra = $phoneExtra;

        return $this;
    }

    /**
     * Get phoneExtra.
     *
     * @return string|null
     */
    public function getPhoneExtra()
    {
        return $this->phoneExtra;
    }

    /**
     * Set emailClient.
     *
     * @param string|null $emailClient
     *
     * @return Client
     */
    public function setEmailClient($emailClient = null)
    {
        $this->emailClient = $emailClient;

        return $this;
    }

    /**
     * Get emailClient.
     *
     * @return string|null
     */
    public function getEmailClient()
    {
        return $this->emailClient;
    }

    /**
     * Set webSiteClient.
     *
     * @param string|null $webSiteClient
     *
     * @return Client
     */
    public function setWebSiteClient($webSiteClient = null)
    {
        $this->webSiteClient = $webSiteClient;

        return $this;
    }

    /**
     * Get webSiteClient.
     *
     * @return string|null
     */
    public function getWebSiteClient()
    {
        return $this->webSiteClient;
    }

    /**
     * Set costumClient.
     *
     * @param \CostumClient|null $costumClient
     *
     * @return Client
     */
    public function setCostumClient(\CostumClient $costumClient = null)
    {
        $this->costumClient = $costumClient;

        return $this;
    }

    /**
     * Get costumClient.
     *
     * @return \CostumClient|null
     */
    public function getCostumClient()
    {
        return $this->costumClient;
    }
}
