<?php

/**
 * News form.
 *
 * @package    studiosusani
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsForm extends BaseNewsForm
{
  public function configure()
  {
  	$this->widgetSchema->setLabels(array(
  			'title'    => 'Titolo',
  			'description'      => 'Contenuto',
  	));
  	
  	unset(
  			$this['created_at'], $this['updated_at'],
  			$this['expires_at'], $this['is_activated']
  	);
  }
}
