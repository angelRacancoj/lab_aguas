<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ParameterPackage
 *
 * @ORM\Table(name="PARAMETER_PACKAGE", indexes={@ORM\Index(name="fk_PARAMETER_PACKAGE_PACKAGE1_idx", columns={"package_id"}), @ORM\Index(name="fk_PARAMENTER_PACKAGE_PARAMETER1_idx", columns={"parameter_id"})})
 * @ORM\Entity
 */
class ParameterPackage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_PP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPp;

    /**
     * @var float
     *
     * @ORM\Column(name="LMA", type="float", precision=10, scale=0, nullable=false)
     */
    private $lma;

    /**
     * @var float
     *
     * @ORM\Column(name="LMP", type="float", precision=10, scale=0, nullable=false)
     */
    private $lmp;

    /**
     * @var \Parameter
     *
     * @ORM\ManyToOne(targetEntity="Parameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parameter_id", referencedColumnName="id_parameter")
     * })
     */
    private $parameter;

    /**
     * @var \Package
     *
     * @ORM\ManyToOne(targetEntity="Package")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="package_id", referencedColumnName="id_package")
     * })
     */
    private $package;


}
