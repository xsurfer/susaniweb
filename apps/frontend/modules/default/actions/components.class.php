<?php 

class defaultComponents extends sfComponents
{
  public function executeNews()
  {
    $this->news = Doctrine::getTable('News')
      ->createQuery('a')
      ->execute();
  }
  
  public function executeTariffario()
  {
  	$q = Doctrine_Query::create()
  	->from('Page j')
  	->where('j.name = ?', "tariffario");
  	
  	$this->tariffario = $q->fetchOne();
  	
  }
}