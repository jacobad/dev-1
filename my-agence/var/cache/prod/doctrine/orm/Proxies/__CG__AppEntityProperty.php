<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Property extends \App\Entity\Property implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'surface', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'room', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'bedrooms', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'floor', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'heat', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'postal_code', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'sold', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'options', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'picturesShow'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'surface', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'room', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'bedrooms', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'floor', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'heat', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'postal_code', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'sold', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'options', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'picturesShow'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Property $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurface(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurface', []);

        return parent::getSurface();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurface(int $surface): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurface', [$surface]);

        return parent::setSurface($surface);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoom(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoom', []);

        return parent::getRoom();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoom(int $room): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoom', [$room]);

        return parent::setRoom($room);
    }

    /**
     * {@inheritDoc}
     */
    public function getBedrooms(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBedrooms', []);

        return parent::getBedrooms();
    }

    /**
     * {@inheritDoc}
     */
    public function setBedrooms(int $bedrooms): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBedrooms', [$bedrooms]);

        return parent::setBedrooms($bedrooms);
    }

    /**
     * {@inheritDoc}
     */
    public function getFloor(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFloor', []);

        return parent::getFloor();
    }

    /**
     * {@inheritDoc}
     */
    public function setFloor(int $floor): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFloor', [$floor]);

        return parent::setFloor($floor);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(int $price): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormatedPrice(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormatedPrice', []);

        return parent::getFormatedPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function getHeat(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeat', []);

        return parent::getHeat();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeat(int $heat): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeat', [$heat]);

        return parent::setHeat($heat);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeatType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeatType', []);

        return parent::getHeatType();
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(string $city): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress', []);

        return parent::getAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdress(string $adress): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdress', [$adress]);

        return parent::setAdress($adress);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalCode', []);

        return parent::getPostalCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalCode(string $postal_code): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalCode', [$postal_code]);

        return parent::setPostalCode($postal_code);
    }

    /**
     * {@inheritDoc}
     */
    public function getSold(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSold', []);

        return parent::getSold();
    }

    /**
     * {@inheritDoc}
     */
    public function setSold(bool $sold): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSold', [$sold]);

        return parent::setSold($sold);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $created_at): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created_at]);

        return parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', []);

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function addOption(\App\Entity\Options $option): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOption', [$option]);

        return parent::addOption($option);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOption(\App\Entity\Options $option): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOption', [$option]);

        return parent::removeOption($option);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture($picture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicturesShow(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicturesShow', []);

        return parent::getPicturesShow();
    }

    /**
     * {@inheritDoc}
     */
    public function addPicturesShow(\App\Entity\Pictures $picturesShow): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPicturesShow', [$picturesShow]);

        return parent::addPicturesShow($picturesShow);
    }

    /**
     * {@inheritDoc}
     */
    public function removePicturesShow(\App\Entity\Pictures $picturesShow): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePicturesShow', [$picturesShow]);

        return parent::removePicturesShow($picturesShow);
    }

}
