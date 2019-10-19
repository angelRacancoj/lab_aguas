<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sample
 *
 * @ORM\Table(name="SAMPLE", indexes={@ORM\Index(name="fk_MUESTRA_CLIENTE1_idx", columns={"client_id"}), @ORM\Index(name="fk_SAMPLE_MUNICIPALITY1_idx", columns={"municipality_id"})})
 * @ORM\Entity
 */
class Sample
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sample", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSample;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="admission_date", type="date", nullable=false)
     */
    private $admissionDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sampling_date", type="date", nullable=false)
     */
    private $samplingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="batch", type="string", length=45, nullable=false)
     */
    private $batch;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sampling_time", type="time", nullable=false)
     */
    private $samplingTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="container", type="string", length=45, nullable=true)
     */
    private $container;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_refrigerated", type="boolean", nullable=false)
     */
    private $isRefrigerated;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=false)
     */
    private $temperature;

    /**
     * @var float
     *
     * @ORM\Column(name="sample_quantity", type="float", precision=10, scale=0, nullable=false)
     */
    private $sampleQuantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_water_birth", type="boolean", nullable=false)
     */
    private $isWaterBirth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hamlet", type="string", length=45, nullable=true)
     */
    private $hamlet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observations", type="text", length=255, nullable=true)
     */
    private $observations;

    /**
     * @var string|null
     *
     * @ORM\Column(name="village", type="string", length=45, nullable=true)
     */
    private $village;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_sample", type="text", length=255, nullable=true)
     */
    private $noteSample;

    /**
     * @var bool
     *
     * @ORM\Column(name="acceptance", type="boolean", nullable=false, options={"comment"="aceptacion: 1->Aceptado, 2->Rechazado,3->Bajo Condicion
"})
     */
    private $acceptance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Boleta_de_pago", type="string", length=45, nullable=true)
     */
    private $boletaDePago;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id_client")
     * })
     */
    private $client;

    /**
     * @var \Municipality
     *
     * @ORM\ManyToOne(targetEntity="Municipality")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="municipality_id", referencedColumnName="id_municipality")
     * })
     */
    private $municipality;



    /**
     * Get idSample.
     *
     * @return int
     */
    public function getIdSample()
    {
        return $this->idSample;
    }

    /**
     * Set admissionDate.
     *
     * @param \DateTime $admissionDate
     *
     * @return Sample
     */
    public function setAdmissionDate($admissionDate)
    {
        $this->admissionDate = $admissionDate;

        return $this;
    }

    /**
     * Get admissionDate.
     *
     * @return \DateTime
     */
    public function getAdmissionDate()
    {
        return $this->admissionDate;
    }

    /**
     * Set samplingDate.
     *
     * @param \DateTime $samplingDate
     *
     * @return Sample
     */
    public function setSamplingDate($samplingDate)
    {
        $this->samplingDate = $samplingDate;

        return $this;
    }

    /**
     * Get samplingDate.
     *
     * @return \DateTime
     */
    public function getSamplingDate()
    {
        return $this->samplingDate;
    }

    /**
     * Set batch.
     *
     * @param string $batch
     *
     * @return Sample
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * Get batch.
     *
     * @return string
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Set samplingTime.
     *
     * @param \DateTime $samplingTime
     *
     * @return Sample
     */
    public function setSamplingTime($samplingTime)
    {
        $this->samplingTime = $samplingTime;

        return $this;
    }

    /**
     * Get samplingTime.
     *
     * @return \DateTime
     */
    public function getSamplingTime()
    {
        return $this->samplingTime;
    }

    /**
     * Set container.
     *
     * @param string|null $container
     *
     * @return Sample
     */
    public function setContainer($container = null)
    {
        $this->container = $container;

        return $this;
    }

    /**
     * Get container.
     *
     * @return string|null
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Set isRefrigerated.
     *
     * @param bool $isRefrigerated
     *
     * @return Sample
     */
    public function setIsRefrigerated($isRefrigerated)
    {
        $this->isRefrigerated = $isRefrigerated;

        return $this;
    }

    /**
     * Get isRefrigerated.
     *
     * @return bool
     */
    public function getIsRefrigerated()
    {
        return $this->isRefrigerated;
    }

    /**
     * Set temperature.
     *
     * @param float $temperature
     *
     * @return Sample
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature.
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set sampleQuantity.
     *
     * @param float $sampleQuantity
     *
     * @return Sample
     */
    public function setSampleQuantity($sampleQuantity)
    {
        $this->sampleQuantity = $sampleQuantity;

        return $this;
    }

    /**
     * Get sampleQuantity.
     *
     * @return float
     */
    public function getSampleQuantity()
    {
        return $this->sampleQuantity;
    }

    /**
     * Set isWaterBirth.
     *
     * @param bool $isWaterBirth
     *
     * @return Sample
     */
    public function setIsWaterBirth($isWaterBirth)
    {
        $this->isWaterBirth = $isWaterBirth;

        return $this;
    }

    /**
     * Get isWaterBirth.
     *
     * @return bool
     */
    public function getIsWaterBirth()
    {
        return $this->isWaterBirth;
    }

    /**
     * Set hamlet.
     *
     * @param string|null $hamlet
     *
     * @return Sample
     */
    public function setHamlet($hamlet = null)
    {
        $this->hamlet = $hamlet;

        return $this;
    }

    /**
     * Get hamlet.
     *
     * @return string|null
     */
    public function getHamlet()
    {
        return $this->hamlet;
    }

    /**
     * Set observations.
     *
     * @param string|null $observations
     *
     * @return Sample
     */
    public function setObservations($observations = null)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations.
     *
     * @return string|null
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set village.
     *
     * @param string|null $village
     *
     * @return Sample
     */
    public function setVillage($village = null)
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Get village.
     *
     * @return string|null
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Set noteSample.
     *
     * @param string|null $noteSample
     *
     * @return Sample
     */
    public function setNoteSample($noteSample = null)
    {
        $this->noteSample = $noteSample;

        return $this;
    }

    /**
     * Get noteSample.
     *
     * @return string|null
     */
    public function getNoteSample()
    {
        return $this->noteSample;
    }

    /**
     * Set acceptance.
     *
     * @param bool $acceptance
     *
     * @return Sample
     */
    public function setAcceptance($acceptance)
    {
        $this->acceptance = $acceptance;

        return $this;
    }

    /**
     * Get acceptance.
     *
     * @return bool
     */
    public function getAcceptance()
    {
        return $this->acceptance;
    }

    /**
     * Set boletaDePago.
     *
     * @param string|null $boletaDePago
     *
     * @return Sample
     */
    public function setBoletaDePago($boletaDePago = null)
    {
        $this->boletaDePago = $boletaDePago;

        return $this;
    }

    /**
     * Get boletaDePago.
     *
     * @return string|null
     */
    public function getBoletaDePago()
    {
        return $this->boletaDePago;
    }

    /**
     * Set client.
     *
     * @param \Client|null $client
     *
     * @return Sample
     */
    public function setClient(\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return \Client|null
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set municipality.
     *
     * @param \Municipality|null $municipality
     *
     * @return Sample
     */
    public function setMunicipality(\Municipality $municipality = null)
    {
        $this->municipality = $municipality;

        return $this;
    }

    /**
     * Get municipality.
     *
     * @return \Municipality|null
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }
}
