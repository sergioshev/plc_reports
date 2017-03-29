<?php

namespace tq\plcr\Types;

use \DateTime;

class customDateTime extends DateTime {
  public function __toString()
  {
    return $this->format('Y-m-d H:i:s');
  }
}

use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class customDateTimeType extends DateTimeType {
  public function getName() {
    return 'customdatetime';  
  }

  public function convertToPHPValue($value, AbstractPlatform $platform) {
    $dateTime = parent::convertToPHPValue($value, $platform);
#    if (! $dateTime) { return $dateTime; }
    return new customDateTime($dateTime->format('Y-m-d H:i:s'));
  }

  public function convertToDatabaseValue($value, AbstractPlatform $platform) {
    return parent::convertToDataBaseValue($value, $platform);
  }

  public function canRequireSQLConversion() {
    return false;
  }
}
?>
