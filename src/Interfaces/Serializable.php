<?php


namespace App\Interfaces;


interface Serializable extends \JsonSerializable
{
    public function jsonSerialize(): array;
}