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



    /**
     * Get idMeasure.
     *
     * @return int
     */
    public function getIdMeasure()
    {
        return $this->idMeasure;
    }

    /**
     * Set nameMeasure.
     *
     * @param string $nameMeasure
     *
     * @return Measure
     */
    public function setNameMeasure($nameMeasure)
    {
        $this->nameMeasure = $nameMeasure;

        return $this;
    }

    /**
     * Get nameMeasure.
     *
     * @return string
     */
    public function getNameMeasure()
    {
        return $this->nameMeasure;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Measure
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
}
