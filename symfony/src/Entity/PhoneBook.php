<?php

namespace App\Entity;

use App\Repository\PhoneBookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhoneBookRepository::class)
 */
class PhoneBook
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, name="first_name")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="last_name")
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255, name="phone_number")
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="country_code")
     */
    private $countryCode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="time_zone")
     */
    private $timeZone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }

    public function setTimeZone(?string $timeZone): self
    {
        $this->timeZone = $timeZone;

        return $this;
    }
}
