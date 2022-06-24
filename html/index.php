<?php

include "../src/TariffInterface.php";
include "../src/ServiceInterface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBasic.php";
include "../src/ServiceGPS.php";
include "../src/ServiceDriver.php";
include "../src/TariffHour.php";
include "../src/TariffStudent.php";

/** @var TariffInterface $tariff */
$tariff = new TariffStudent(5, 60);
/*$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDriver(100));*/
echo $tariff->countPrice();
