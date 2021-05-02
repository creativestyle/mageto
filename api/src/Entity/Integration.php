<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\IntegrationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={
 *     "groups"={"integration:read"}
 *     },
 *     denormalizationContext={
 *     "groups"={"integration:write"}
 *     }
 * )
 * @ORM\Entity(repositoryClass=IntegrationRepository::class)
 */
class Integration
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=System::class)
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"integration:read", "integration:write"})
     */
    private $system;

    /**
     * @ORM\ManyToOne(targetEntity=Industry::class)
     * @Groups({"integration:read", "integration:write"})
     */
    private $industry;

    /**
     * @ORM\ManyToOne(targetEntity=Partner::class)
     * @Groups({"integration:read", "integration:write"})
     */
    private $partner;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"integration:read", "integration:write"})
     */
    private $customer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"integration:read", "integration:write"})
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Groups({"integration:read", "integration:write"})
     */
    private $market;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"integration:read", "integration:write"})
     */
    private $note;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSystem(): ?System
    {
        return $this->system;
    }

    public function setSystem(?System $system): self
    {
        $this->system = $system;

        return $this;
    }

    public function getIndustry(): ?Industry
    {
        return $this->industry;
    }

    public function setIndustry(?Industry $industry): self
    {
        $this->industry = $industry;

        return $this;
    }

    public function getPartner(): ?Partner
    {
        return $this->partner;
    }

    public function setPartner(?Partner $partner): self
    {
        $this->partner = $partner;

        return $this;
    }

    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    public function setCustomer(?string $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getMarket(): ?string
    {
        return $this->market;
    }

    public function setMarket(?string $market): self
    {
        $this->market = $market;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }
}
