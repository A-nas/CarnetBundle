<?php

namespace P\CarnetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * Contacte
 *
 * @ORM\Table(name="contacte")
 * @ORM\Entity(repositoryClass="P\CarnetBundle\Repository\ContacteRepository")
 */
class Contacte extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    protected $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postale", type="string", length=255, nullable=true)
     */
    protected $codePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    protected $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=255, nullable=true)
     */
    protected $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    protected $pays;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_nais", type="date", nullable=true)
     */
    protected $dateNais;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=true)
     */
    protected $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=10, nullable=true)
     */
    protected $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=10, nullable=true)
     */
    protected $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="site_web", type="string", length=255, nullable=true)
     */
    protected $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    protected $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255, nullable=true)
     */
    protected $observation;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    protected $categorie;

	// slef pointing 
	
	/**
     * @ORM\ManyToMany(targetEntity="Contacte")
     * @ORM\JoinTable(name="avoir",
     * joinColumns={
     *     @ORM\JoinColumn(name="contacte_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_contacte2", referencedColumnName="id")
     *   }
     * )
     **/
    protected $contactes;
    /**
     * Constructor
     */
    public function __construct()
    {
		// appel du constructeur de base pour FOSUserBundle
		parent::__construct();
		// Go
        $this->contactes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add contacte
     *
     * @param \P\CarnetBundle\Entity\Contacte $contacte
     *
     * @return Contacte
     */
    public function addContacte(\P\CarnetBundle\Entity\Contacte $contacte)
    {
        $this->contactes[] = $contacte;

        return $this;
    }

    /**
     * Remove contacte
     *
     * @param \P\CarnetBundle\Entity\Contacte $contacte
     */
    public function removeContacte(\P\CarnetBundle\Entity\Contacte $contacte)
    {
        $this->contactes->removeElement($contacte);
    }

    /**
     * Get contactes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContactes()
    {
        return $this->contactes;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Contacte
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Contacte
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Contacte
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostale
     *
     * @param string $codePostale
     *
     * @return Contacte
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * Get codePostale
     *
     * @return string
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Contacte
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set departement
     *
     * @param string $departement
     *
     * @return Contacte
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Contacte
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set dateNais
     *
     * @param \DateTime $dateNais
     *
     * @return Contacte
     */
    public function setDateNais($dateNais)
    {
        $this->dateNais = $dateNais;

        return $this;
    }

    /**
     * Get dateNais
     *
     * @return \DateTime
     */
    public function getDateNais()
    {
        return $this->dateNais;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Contacte
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Contacte
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Contacte
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     *
     * @return Contacte
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Contacte
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Contacte
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Contacte
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
