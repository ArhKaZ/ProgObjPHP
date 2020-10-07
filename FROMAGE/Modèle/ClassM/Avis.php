<?php

namespace FROMAGE\ClassM;
class Avis
{
    private $_avis_txt;
    private $_avis_etoiles;
    private $_membre;
    private $_fromage;

    /**
     * Avis constructor.
     * @param $_avis_txt
     * @param $_avis_etoiles
     * @param $_membre
     * @param $_fromage
     */
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    private function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            //Récupération du nom du setter correspondant à l'attribut
            $method = 'set' . ucfirst($key);

            //Si le setter existe
            if (method_exists($this, $method)) {
                //On appelle le setter
                $this->$method($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getAvisTxt()
    {
        return $this->_avis_txt;
    }

    /**
     * @param mixed $avis_txt
     */
    public function setAvisTxt($avis_txt): void
    {
        $this->_avis_txt = $avis_txt;
    }

    /**
     * @return mixed
     */
    public function getAvisEtoiles()
    {
        return $this->_avis_etoiles;
    }

    /**
     * @param mixed $avis_etoiles
     */
    public function setAvisEtoiles($avis_etoiles): void
    {
        $this->_avis_etoiles = $avis_etoiles;
    }

    /**
     * @return mixed
     */
    public function getMembre()
    {
        return $this->_membre;
    }

    /**
     * @param mixed $membre
     */
    public function setMembre($membre): void
    {
        $this->_membre = $membre;
    }

    /**
     * @return mixed
     */
    public function getFromage()
    {
        return $this->_fromage;
    }

    /**
     * @param mixed $fromage
     */
    public function setFromage($fromage): void
    {
        $this->_fromage = $fromage;
    }


}