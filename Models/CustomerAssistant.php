<?php

namespace JsCustomerAssistant\Models;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Shopware\Components\Model\ModelEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="js_customer_assistant")
 */
class CustomerAssistant extends ModelEntity {
    /**
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(name="company", type="integer")
     */
    protected $companyId;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Shopware\Models\Customer\Address")
     * @ORM\JoinColumn(name="customer", referencedColumnName="id")
     */
    protected $company;

    /**
     * @var
     * @ORM\Column(name="assistant", type="integer")
     */
    protected $assistantId;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="\JsCustomerAssistant\Models\Assistant")
     * @ORM\JoinColumn(name="assistant", referencedColumnName="id")
     */
    private $assistant;


    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     * @return string
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomer() {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer) {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getAssistant() {
        return $this->assistant;
    }

    /**
     * @param mixed $assistant
     */
    public function setAssistant($assistant) {
        $this->assistant = $assistant;
    }

}
