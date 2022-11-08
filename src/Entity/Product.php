<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ApiResource(operations: [
    new GetCollection()
])]
#[ApiFilter(SearchFilter::class, properties: [
    'product_id' => 'exact',
    'product_name' => 'partial',
    'product_link' => 'exact'
])]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?string $product_id = null;

    #[ORM\Column(length: 255)]
    private ?string $product_name = null;

    #[ORM\Column(length: 5000)]
    private ?string $product_description = null;

    #[ORM\Column(length: 5000)]
    private ?string $product_link = null;

    #[ORM\Column(type: Types::JSON)]
    private array $categories = [];

    #[ORM\Column(type: Types::JSON)]
    private array $docs = [];

    public function getProductId(): ?string
    {
        return $this->product_id;
    }

    public function setProductId(string $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): self
    {
        $this->product_name = $product_name;

        return $this;
    }

    public function getProductDescription(): ?string
    {
        return $this->product_description;
    }

    public function setProductDescription(string $product_description): self
    {
        $this->product_description = $product_description;

        return $this;
    }

    public function getProductLink(): ?string
    {
        return $this->product_link;
    }

    public function setProductLink(string $product_link): self
    {
        $this->product_link = $product_link;

        return $this;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getDocs(): array
    {
        return $this->docs;
    }

    public function setDocs(array $docs): self
    {
        $this->docs = $docs;

        return $this;
    }
}
