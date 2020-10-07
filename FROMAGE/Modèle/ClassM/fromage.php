<?php
namespace FROMAGE\ClassM;
class Fromage
{
    private $_id;
    private $_pays_origine_id;
    private $_nom;
    private $_creation;
    private $_image;

    /**
     * Fromage constructor.
     * @param $_id
     * @param $_pays_origine_id
     * @param $_nom
     * @param $_creation
     * @param $_image
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
    public function getPaysOrigineId()
    {
        return $this->_pays_origine_id;
    }

    /**
     * @param mixed $pays_origine_id
     */
    public function setPaysOrigineId($pays_origine_id): void
    {
        $this->_pays_origine_id = $pays_origine_id;
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

    /**
     * @return mixed
     */
    public function getCreation()
    {
        return $this->_creation;
    }

    /**
     * @param mixed $creation
     */
    public function setCreation($creation): void
    {
        $this->_creation = $creation;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->_image = $image;
    }

public function chance()
{
 echo 'Tu as de la chance?';
 echo 'Pile ou face ?';
 $num = rand(1,2);
 if ($num == 1)
     echo 'Pile!';
 else
     echo 'Face!';
}
}

