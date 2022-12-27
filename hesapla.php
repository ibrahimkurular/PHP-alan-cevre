<?php

class islem
{
    public $kenar1;
    public $kenar2;
    public $kenar3;
    public $yukseklik;
}

class Dikdortgen extends islem
{
    public function Alandt($kenar1, $kenar2)
    {
        return $kenar1 * $kenar2;
    }
    public function Cevredt($kenar1, $kenar2)
    {
        return ((2 * $kenar1) + (2 * $kenar2));
    }
}

class Ucgen extends islem
{
    public function AlanUcgen($kenar3, $yukseklik)
    {
        return (($kenar3 * $yukseklik) / 2);
    }
    public function CevreUcgen($kenar1, $kenar2, $kenar3)
    {
        return $kenar1 + $kenar2 + $kenar3;
    }
}

class Kare extends islem
{
    public function Alankare($kenar1)
    {
        return $kenar1 * $kenar1;
    }
    public function Cevrekare($kenar1)
    {
        return $kenar1 * 4;
    }
}

$sonucDt = new Dikdortgen();

echo "Dikdörtgen alanı: " . $sonucDt->Alandt(8, 10) . "<br>";
echo "Dikdörtgen çevre: " . $sonucDt->Cevredt(8, 10) . "<br>";

$sonucUcg = new Ucgen();

echo "Üçgen alanı: " . $sonucUcg->AlanUcgen(17, 5) . "<br>";
echo "Üçgen çevre: " . $sonucUcg->CevreUcgen(3, 4, 5) . "<br>";

$sonuckare = new Kare();

echo "Kare alanı: " . $sonuckare->Alankare(8) . "<br>";
echo "Kare çevre: " . $sonuckare->Cevrekare(8) . "<br>";
