<?php
namespace FROMAGE\ClassM;
class Pays
{
    private $_id;
    private $_nom;

    /**
     * Pays constructor.
     * @param $_id
     * @param $_nom
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
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->_nom = $nom;
    }


}