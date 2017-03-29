<?php

namespace tq\plcr\listingsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use \DateTime;
use \DateInterval;

class lecturaFiltersType extends AbstractType {

  private function getSlotNames($er) {
    $result = array('all' => 'Todos');
    $slots = $er->findAllSortByName();
    if (is_array($slots)) {
      foreach ($slots as $slot) {
        $result[$slot->getSimbolo()] = $slot->getSimbolo();
      }
    }
    return $result;
  }

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('dateFrom', 'date', array(
        'widget' => 'single_text',
        'format' => 'yyyy-MM-dd',
        'label' => 'Desde'
      ))
      ->add('dateTo', 'date', array(
        'widget' => 'single_text',
        'format' => 'yyyy-MM-dd',
        'label' => 'Hasta',
        'required' => false
      ))
      ->add('slotName', 'choice', array(
        'label' => 'Simbolo',
        'multiple' => false,
        'expanded' => false,
        'preferred_choices' => array('all'),
        'choices' => $this->getSlotNames($options['er'])
      ))
      ->add('submit', 'submit', array(
        'label' => 'Consultar'
      ));
    
    $formModifier = function (FormEvent $event) {
        $lecturaFilters = $event->getData();
        $filterDateFrom = $lecturaFilters->getDateFrom();
        $filterDateTo = $lecturaFilters->getDateTo();
        if (empty($filterDateFrom) and empty($filterDateTo)) {
          $lecturaFilters->setDateFrom(
            DateTime::createFromFormat("Y-m-d", date("Y-m-d")));
          $lecturaFilters->setDateTo(
            DateTime::createFromFormat("Y-m-d", date("Y-m-d")));
          $lecturaFilters->getDateTo()->add(new DateInterval("P1D"));
        } elseif (!empty($filterDateFrom) and empty($filterDateTo)) {
          $lecturaFilters->setDateTo(
            DateTime::createFromFormat("Y-m-d", $filterDateFrom->format("Y-m-d")));
          $lecturaFilters->getDateTo()->add(new DateInterval("P1D"));
        }
    };

    $builder->addEventListener(FormEvents::PRE_SET_DATA, 
      function (FormEvent $event) use ($formModifier) {
        $formModifier($event);
      });
  }

  public function getName() {
    return 'lecturaFilters';
  }
  
  public function setDefaultOptions(OptionsResolverInterface $resolver) {
    $resolver->setDefaults(array(
      'data_class' => 'tq\plcr\listingsBundle\Entity\lecturaFilters',
      'er' => null
    ));
  }
}
?>
