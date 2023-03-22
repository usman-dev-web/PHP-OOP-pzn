<?php

// INTERFACE
/**
 * sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan untuk kontrak child class
 * namun yang lebih tepat untuk kontrak adalah interface
 * interface mirip seperti abstract class, yang membedakan adalah di interface, semua method/function
 * otomatis abstract, tidak memiliki blok
 * di interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant
 * untuk mewariskan interface kita menggunakan kata kunci implements
 * dan berbeda dengan class, kita bisa implements lebih dari satu interface
 */

 namespace Data;

 interface hasBrand{
    function getBrand():void;
 }

 interface isMaintenance{
    function isMaintenance():bool;
 }

 // interface extends ke interface lain
 interface Car extends hasBrand{
    // hanya method/function abstract(tidak memiliki blok function)
    function drive():void;
    function getTire():int;
 }

interface Drivers{
    function toLocation(string $name):void;
}

 // membuat class yang implements Car dan Drivers
 class Avanza implements Car, Drivers, isMaintenance{
    // override function pada interface Car
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    // override function pada interface Drivers
    public function toLocation(string $name): void
    {
        echo "Driver $name is going to home" . PHP_EOL;
    }

    // implements function getBrand dari interface hasBrand
    public function getBrand(): void
    {
        echo "Toyota" . PHP_EOL;
    }

    // implements function isMaintenance dari interface isMaintenance
    public function isMaintenance(): bool
    {
        return true;
    }
 }