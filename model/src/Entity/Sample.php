<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sample
 *
 * @ORM\Table(name="SAMPLE", indexes={@ORM\Index(name="fk_SAMPLE_MUNICIPALITY1_idx", columns={"municipality_id"}), @ORM\Index(name="fk_MUESTRA_CLIENTE1_idx", columns={"client_id"})})
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


}
