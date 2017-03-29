<?php

namespace tq\plcr\listingsBundle\Entity;

class lecturaFilters {

  protected $dateFrom;

  protected $dateTo;

  protected $slotName;

  public function getDateFrom() {
    return $this->dateFrom;
  }

  public function getDateTo() {
    return $this->dateTo;
  }

  public function getSlotName () {
    return $this->slotName;
  }

  public function setDateFrom($date) {
    $this->dateFrom = $date;
  }

  public function setDateTo($date) {
    $this->dateTo = $date;
  }

  public function setSlotName($slotName) {
    $this->slotName = $slotName;
  }

  public function getDQLConditions() {
    $conditions = '';
    if (!empty($this->dateFrom)) {
      $conditions .= "(l.fecha between '".
        $this->dateFrom->format("Y-m-d")."' and '".
        $this->dateTo->format("Y-m-d")."')";
    } 
    if (!empty($this->slotName) and ($this->slotName != 'all')) {
      $operator = ( empty($conditions) ? '' : ' and ' );
      $conditions .= $operator."(l.simbolo = '".$this->slotName."')";
    }
    return $conditions;
  }
}
?>
