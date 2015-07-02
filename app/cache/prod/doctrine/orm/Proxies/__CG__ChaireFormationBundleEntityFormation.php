<?php

namespace Proxies\__CG__\Chaire\FormationBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formation extends \Chaire\FormationBundle\Entity\Formation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'student_escp', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'student_exte', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'executive', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'name', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'concept', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'canonicalname', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'syllabus', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'photo', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'fondaccueil', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'fond1', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'fond2', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'fond3', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'logopage', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'logoblanc', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourqui', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme1', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme2', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme3', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme4', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme5', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'intensiteprogramme', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourquoi1', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourquoi2', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourquoi3', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourquoi4', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'inscription1', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'inscription2');
        }

        return array('__isInitialized__', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'student_escp', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'student_exte', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'executive', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'name', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'concept', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'canonicalname', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'syllabus', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'photo', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'fondaccueil', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'fond1', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'fond2', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'fond3', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'logopage', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'logoblanc', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourqui', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme1', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme2', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme3', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme4', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pointprogramme5', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'intensiteprogramme', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourquoi1', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourquoi2', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourquoi3', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'pourquoi4', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'inscription1', '' . "\0" . 'Chaire\\FormationBundle\\Entity\\Formation' . "\0" . 'inscription2');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Formation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getStudentEscp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStudentEscp', array());

        return parent::getStudentEscp();
    }

    /**
     * {@inheritDoc}
     */
    public function setStudentEscp($student_escp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStudentEscp', array($student_escp));

        return parent::setStudentEscp($student_escp);
    }

    /**
     * {@inheritDoc}
     */
    public function getStudentExte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStudentExte', array());

        return parent::getStudentExte();
    }

    /**
     * {@inheritDoc}
     */
    public function setStudentExte($student_exte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStudentExte', array($student_exte));

        return parent::setStudentExte($student_exte);
    }

    /**
     * {@inheritDoc}
     */
    public function getExecutive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExecutive', array());

        return parent::getExecutive();
    }

    /**
     * {@inheritDoc}
     */
    public function setExecutive($exec)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExecutive', array($exec));

        return parent::setExecutive($exec);
    }

    /**
     * {@inheritDoc}
     */
    public function setCanonicalname($canonicalname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCanonicalname', array($canonicalname));

        return parent::setCanonicalname($canonicalname);
    }

    /**
     * {@inheritDoc}
     */
    public function getCanonicalname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCanonicalname', array());

        return parent::getCanonicalname();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setConcept($concept)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConcept', array($concept));

        return parent::setConcept($concept);
    }

    /**
     * {@inheritDoc}
     */
    public function getConcept()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConcept', array());

        return parent::getConcept();
    }

    /**
     * {@inheritDoc}
     */
    public function setFond1($fond1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFond1', array($fond1));

        return parent::setFond1($fond1);
    }

    /**
     * {@inheritDoc}
     */
    public function getFond1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFond1', array());

        return parent::getFond1();
    }

    /**
     * {@inheritDoc}
     */
    public function setFond2($fond2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFond2', array($fond2));

        return parent::setFond2($fond2);
    }

    /**
     * {@inheritDoc}
     */
    public function getFond2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFond2', array());

        return parent::getFond2();
    }

    /**
     * {@inheritDoc}
     */
    public function setFond3($fond3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFond3', array($fond3));

        return parent::setFond3($fond3);
    }

    /**
     * {@inheritDoc}
     */
    public function getFond3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFond3', array());

        return parent::getFond3();
    }

    /**
     * {@inheritDoc}
     */
    public function setFondaccueil($fondaccueil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFondaccueil', array($fondaccueil));

        return parent::setFondaccueil($fondaccueil);
    }

    /**
     * {@inheritDoc}
     */
    public function getFondaccueil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFondaccueil', array());

        return parent::getFondaccueil();
    }

    /**
     * {@inheritDoc}
     */
    public function setSyllabus($syllabus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSyllabus', array($syllabus));

        return parent::setSyllabus($syllabus);
    }

    /**
     * {@inheritDoc}
     */
    public function getSyllabus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSyllabus', array());

        return parent::getSyllabus();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', array($photo));

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', array());

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setInscription1($inscription1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInscription1', array($inscription1));

        return parent::setInscription1($inscription1);
    }

    /**
     * {@inheritDoc}
     */
    public function getInscription1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInscription1', array());

        return parent::getInscription1();
    }

    /**
     * {@inheritDoc}
     */
    public function setInscription2($inscription2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInscription2', array($inscription2));

        return parent::setInscription2($inscription2);
    }

    /**
     * {@inheritDoc}
     */
    public function getInscription2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInscription2', array());

        return parent::getInscription2();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntensiteprogramme($intensiteprogramme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntensiteprogramme', array($intensiteprogramme));

        return parent::setIntensiteprogramme($intensiteprogramme);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntensiteprogramme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntensiteprogramme', array());

        return parent::getIntensiteprogramme();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoblanc($logoblanc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoblanc', array($logoblanc));

        return parent::setLogoblanc($logoblanc);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoblanc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoblanc', array());

        return parent::getLogoblanc();
    }

    /**
     * {@inheritDoc}
     */
    public function setPointprogramme1($pointprogramme1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPointprogramme1', array($pointprogramme1));

        return parent::setPointprogramme1($pointprogramme1);
    }

    /**
     * {@inheritDoc}
     */
    public function getPointprogramme1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPointprogramme1', array());

        return parent::getPointprogramme1();
    }

    /**
     * {@inheritDoc}
     */
    public function setPointprogramme2($pointprogramme2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPointprogramme2', array($pointprogramme2));

        return parent::setPointprogramme2($pointprogramme2);
    }

    /**
     * {@inheritDoc}
     */
    public function getPointprogramme2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPointprogramme2', array());

        return parent::getPointprogramme2();
    }

    /**
     * {@inheritDoc}
     */
    public function setPointprogramme3($pointprogramme3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPointprogramme3', array($pointprogramme3));

        return parent::setPointprogramme3($pointprogramme3);
    }

    /**
     * {@inheritDoc}
     */
    public function getPointprogramme3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPointprogramme3', array());

        return parent::getPointprogramme3();
    }

    /**
     * {@inheritDoc}
     */
    public function setPointprogramme4($pointprogramme4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPointprogramme4', array($pointprogramme4));

        return parent::setPointprogramme4($pointprogramme4);
    }

    /**
     * {@inheritDoc}
     */
    public function getPointprogramme4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPointprogramme4', array());

        return parent::getPointprogramme4();
    }

    /**
     * {@inheritDoc}
     */
    public function setPointprogramme5($pointprogramme5)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPointprogramme5', array($pointprogramme5));

        return parent::setPointprogramme5($pointprogramme5);
    }

    /**
     * {@inheritDoc}
     */
    public function getPointprogramme5()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPointprogramme5', array());

        return parent::getPointprogramme5();
    }

    /**
     * {@inheritDoc}
     */
    public function setPourqui($pourqui)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPourqui', array($pourqui));

        return parent::setPourqui($pourqui);
    }

    /**
     * {@inheritDoc}
     */
    public function getPourqui()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPourqui', array());

        return parent::getPourqui();
    }

    /**
     * {@inheritDoc}
     */
    public function setPourquoi1($pourquoi1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPourquoi1', array($pourquoi1));

        return parent::setPourquoi1($pourquoi1);
    }

    /**
     * {@inheritDoc}
     */
    public function getPourquoi1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPourquoi1', array());

        return parent::getPourquoi1();
    }

    /**
     * {@inheritDoc}
     */
    public function setPourquoi2($pourquoi2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPourquoi2', array($pourquoi2));

        return parent::setPourquoi2($pourquoi2);
    }

    /**
     * {@inheritDoc}
     */
    public function getPourquoi2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPourquoi2', array());

        return parent::getPourquoi2();
    }

    /**
     * {@inheritDoc}
     */
    public function setPourquoi3($pourquoi3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPourquoi3', array($pourquoi3));

        return parent::setPourquoi3($pourquoi3);
    }

    /**
     * {@inheritDoc}
     */
    public function getPourquoi3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPourquoi3', array());

        return parent::getPourquoi3();
    }

    /**
     * {@inheritDoc}
     */
    public function setPourquoi4($pourquoi4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPourquoi4', array($pourquoi4));

        return parent::setPourquoi4($pourquoi4);
    }

    /**
     * {@inheritDoc}
     */
    public function getPourquoi4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPourquoi4', array());

        return parent::getPourquoi4();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogopage($logopage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogopage', array($logopage));

        return parent::setLogopage($logopage);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogopage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogopage', array());

        return parent::getLogopage();
    }

}
