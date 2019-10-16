<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Measure
 *
 * @ORM\Table(name="MEASURE")
 * @ORM\Entity
 */
class Measure
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_measure", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMeasure;

    /**
     * @var string
     *
     * @ORM\Column(name="name_measure", type="string", length=45, nullable=false)
     */
    private $nameMeasure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=255, nullable=true)
     */
    private $description;


}
