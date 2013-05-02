<?php

/**
 * tariffario actions.
 *
 * @package    studiosusani
 * @subpackage tariffario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tariffarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward("tariffario","edit");
  }
  
  public function executeEdit(sfWebRequest $request)
  {
    $page = Doctrine_Query::create()
  		->from('Page j')
  		->where('j.name = ?', "tariffario")
  		->fetchOne();
  	$this->forward404Unless($page);
  	
    $this->form = new PageForm($page);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($page = Doctrine_Core::getTable('Page')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
    $this->form = new PageForm($page);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($page = Doctrine_Core::getTable('Page')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
    $page->delete();

    $this->redirect('tariffario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $page = $form->save();

      $this->redirect('tariffario/edit?id='.$page->getId());
    }
  }
}
