<?php

namespace FROMAGE\ClassM;
class Membre
{
    private $_id;
    private $_nom_user;
    private $_pseudo;
    private $_email;
    private $_mdp;
    private $_last_co;
    private $_date_inscri;
    private $_description_role;
    private $_actif;

    /**
     * Membre constructor.
     * @param $_id
     * @param $_nom_user
     * @param $_pseudo
     * @param $_email
     * @param $_mdp
     * @param $_last_co
     * @param $_date_inscri
     * @param $_description_role
     * @param $_actif
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
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomUser()
    {
        return $this->_nom_user;
    }

    /**
     * @param mixed $nom_user
     */
    public function setNomUser($nom_user): void
    {
        $this->_nom_user = $nom_user;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo): void
    {
        $this->_pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->_mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp): void
    {
        $this->_mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getLastCo()
    {
        return $this->_last_co;
    }

    /**
     * @param mixed $last_co
     */
    public function setLastCo($last_co): void
    {
        $this->_last_co = $last_co;
    }

    /**
     * @return mixed
     */
    public function getDateInscri()
    {
        return $this->_date_inscri;
    }

    /**
     * @param mixed $date_inscri
     */
    public function setDateInscri($date_inscri): void
    {
        $this->_date_inscri = $date_inscri;
    }

    /**
     * @return mixed
     */
    public function getDescriptionRole()
    {
        return $this->_description_role;
    }

    /**
     * @param mixed $description_role
     */
    public function setDescriptionRole($description_role): void
    {
        $this->_description_role = $description_role;
    }

    /**
     * @return mixed
     */
    public function getActif()
    {
        return $this->_actif;
    }

    /**
     * @param mixed $actif
     */
    public function setActif($actif): void
    {
        $this->_actif = $actif;
    }


}