<?php

/**
 * Page form.
 *
 * @package    studiosusani
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageForm extends BasePageForm
{
  public function configure()
  {
  	unset(
  			$this['title'], $this['name']
  	);
  	
  }
}
