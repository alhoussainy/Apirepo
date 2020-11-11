<?php
declare(strict_types=1);
namespace App\Entity;

use ApiPlatform\Core\Bridge\Doctrine\Common\Filter\DateFilterInterface;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

trait timmeTempAble
{
    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private  DateTimeInterface $created_At;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime" ,nullable=true)
     */
    private DateTimeInterface $updatedAt;


    public function getCreatedAt(): DateTimeInterface
    {
        return $this->created_At;
    }



    public function getUpdatedAt():? DateTimeInterface
    {
        return $this->updatedAt;
    }


    public function setUpdatedAt(DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }


}