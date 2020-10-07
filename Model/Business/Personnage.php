<?php
namespace Model\Business\Personnage;

class Personnage
{
    const FORCE_PETITE = 5;
    const FORCE_MOYENNE = 7;
    const FORCE_GRANDE = 10;
    const VIE_PETITE = 80;
    const VIE_MOYENNE = 90;
    const VIE_GRANDE = 100;
    private int $_age = 20;
    private string $_nom;
    private $_force; // La force du personnage
    private $_localisation; // Sa localisation
    private float $_experience; // Son expérience
    private float $_degats; // Ses dégâts
    private float $_hp;

    /**
     * Personnage constructor.
     * @param int $_age
     * @param string $_nom
     * @param int $_force
     * @param $_localisation
     * @param float $_experience
     * @param float $_degats
     * @param float $_hp
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
     * @return int
     */
    public function getAge(): int
    {
        return $this->_age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->_age = $age;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->_nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->_nom = $nom;
    }

    /**
     * @return int
     */
    public function getForce(): int
    {
        return $this->_force;
    }


    /**
     * @param int $force
     */
    public function setForce(int $force): void
    {
        $tab = array(Personnage::FORCE_PETITE, Personnage::FORCE_MOYENNE, Personnage::FORCE_GRANDE);
        if ($force == in_array(Personnage::FORCE_PETITE, $tab)) {
            $this->_force = self::FORCE_PETITE;
        }
        if ($force == in_array(Personnage::FORCE_MOYENNE, $tab)) {
            $this->_force = self::FORCE_MOYENNE;
        }
        if ($force == in_array(Personnage::FORCE_GRANDE, $tab)) {
            $this->_force = self::FORCE_GRANDE;
        } else {
            trigger_error('La force doit être initialisé avec une des forces de bases', E_USER_WARNING);
        }
    }
    /**
     * @param float $hp
     */
    public function setHp(float $hp): void
    {
        $tab = array(Personnage::VIE_PETITE, Personnage::VIE_MOYENNE, Personnage::VIE_GRANDE);
        if ($hp == in_array(Personnage::VIE_PETITE, $tab)) {
            $this->_hp = self::VIE_PETITE;
        }
        if ($hp == in_array(Personnage::VIE_MOYENNE, $tab)) {
            $this->_hp = self::VIE_MOYENNE;
        }
        if ($hp == in_array(Personnage::VIE_GRANDE, $tab)) {
            $this->_hp = self::VIE_GRANDE;
        }
    }

    /**
     * @return float
     */
    public function getHp(): float
    {
        return $this->_hp;
    }



    /**
     * @return mixed
     */
    public function getLocalisation()
    {
        return $this->_localisation;
    }

    /**
     * @param mixed $localisation
     */
    public function setLocalisation($localisation): void
    {
        $this->_localisation = $localisation;
    }

    /**
     * @return float
     */
    public function getExperience(): float
    {
        return $this->_experience;
    }

    /**
     * @param float $experience
     */
    public function setExperience(float $experience): void
    {
        $this->_experience = $experience;
    }

    /**
     * @return float
     */
    public function getDegats(): float
    {
        return $this->_degats;
    }

    /**
     * @param float $degats
     */
    public function setDegats(float $degats): void
    {
        $this->_degats = $degats;
    }
    public function deplacer() // Une méthode qui déplacera le personnage (modifiera sa localisation).
    {
    }
    public function frapper(Personnage $persoAFrapper)// Une méthode qui frappera un personnage (suivant la force qu'il a).
    {
        $forcedefrappe = $this->_force;
        $persoAFrapper->_degats = $forcedefrappe;
        echo $this->_nom . " à infliger " . $persoAFrapper->_degats . " à " . $persoAFrapper->_nom;
    }
    public function gagnerExp() // Une méthode augmentant l'attribut $experience du personnage.
    {
        $this->_experience = $this->_age * 0.45;
        echo $this->_nom . " a gagner " . $this->_experience;
    }
    public function afficherStatPerso()
    {
        echo "Pseudo : " . $this->_nom . '</p>'. " Exp : " . $this->_experience . '</p>'." Age : " .$this->_age. '</p>'. "Force : " .$this->_force . '</p>'. " Localisation : " .$this->_localisation. '</p>' . "Dégats subits : ". $this->_degats . '</p>' . "HP : " . $this->_hp;
    }

    public function array_remplace_value( $oldValue, $newValue, &$array)
    {
        if ( ! ( $key = array_search( $oldValue, $array) ) || count( array_keys( $array, $key) ) > 1) {
            RETURN FALSE;
        } else {
            $array[$key] = $newValue;
            return TRUE;
        }
    }

    //private function _controle(int check) : bool //une méthode de contrôle qui retourne vrai ou faux
    //  { }
}