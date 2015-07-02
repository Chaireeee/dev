<?php

namespace Proxies\__CG__\GenerateurBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Stype2 extends \GenerateurBundle\Entity\Stype2 implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'GenerateurBundle\\Entity\\Stype2' . "\0" . 'texte', '' . "\0" . 'GenerateurBundle\\Entity\\Stype2' . "\0" . 'photo1', '' . "\0" . 'GenerateurBundle\\Entity\\Stype2' . "\0" . 'photo2', 'id', 'ordre');
        }

        return array('__isInitialized__', '' . "\0" . 'GenerateurBundle\\Entity\\Stype2' . "\0" . 'texte', '' . "\0" . 'GenerateurBundle\\Entity\\Stype2' . "\0" . 'photo1', '' . "\0" . 'GenerateurBundle\\Entity\\Stype2' . "\0" . 'photo2', 'id', 'ordre');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Stype2 $proxy) {
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
    public function setPhoto1($photo1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto1', array($photo1));

        return parent::setPhoto1($photo1);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto1', array());

        return parent::getPhoto1();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto2($photo2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto2', array($photo2));

        return parent::setPhoto2($photo2);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto2', array());

        return parent::getPhoto2();
    }

    /**
     * {@inheritDoc}
     */
    public function setTexte($texte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTexte', array($texte));

        return parent::setTexte($texte);
    }

    /**
     * {@inheritDoc}
     */
    public function getTexte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTexte', array());

        return parent::getTexte();
    }

    /**
     * {@inheritDoc}
     */
    public function gethtml()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'gethtml', array());

        return parent::gethtml();
    }

    /**
     * {@inheritDoc}
     */
    public function geteditpath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'geteditpath', array());

        return parent::geteditpath();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdre($ordre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdre', array($ordre));

        return parent::setOrdre($ordre);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdre', array());

        return parent::getOrdre();
    }

    /**
     * {@inheritDoc}
     */
    public function setFond($fond)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFond', array($fond));

        return parent::setFond($fond);
    }

    /**
     * {@inheritDoc}
     */
    public function getFond()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFond', array());

        return parent::getFond();
    }

    /**
     * {@inheritDoc}
     */
    public function setPage($page)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPage', array($page));

        return parent::setPage($page);
    }

    /**
     * {@inheritDoc}
     */
    public function getPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPage', array());

        return parent::getPage();
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

}
