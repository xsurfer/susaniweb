<?php

/**
 * default actions.
 *
 * @package    studiosusani
 * @subpackage default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

  }
  
  
  public function executeContatta(sfWebRequest $request)
  {
  	$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
  	
  	$nome = $request->getPostParameter('contact[nome]');
  	$cognome = $request->getPostParameter('contact[cognome]');
  	$text = $request->getPostParameter('contact[text]');
  	$email = $request->getPostParameter('contact[email]');
  	$tel = $request->getPostParameter('contact[telefono]');
  	
  	$msg = 'Ti ha contattato '. $nome . ' ' . $cognome . ' ('. $email .') (tel. '. $tel .') con testo: ' . $text;
  	
  	$message = $this->getMailer()->compose(
			array('info@studiosusani.org' => 'Susani Bot'),
			'robertosusani@libero.it',
			'Nuovo messaggio dal sito StudioSusani',
			$msg
  		);

	$this->getMailer()->send($message);
	
	$this->setLayout(false);
  }
  
  public function executeInfo(sfWebRequest $request)
  {
  	$this->setLayout(false);
  }
  
  public function executeTerapie(sfWebRequest $request)
  {
  	if(strlen($request->getParameter('id'))>0 ){
  		$this->terapia = Doctrine_Core::getTable('Terapie')->find(array($request->getParameter('id')));  		
  	}
  	
  	$this->setLayout(false);
  }
  
  public function executeClinica(sfWebRequest $request)
  {
   	$ok = array("impianti", "protesi", "sbiancamento", "prevenzione", "ortodonzia");
   	if(strlen($request->getParameter('id'))>0 ){
   		if(in_array($request->getParameter('id'), $ok)){
   			$this->setTemplate($request->getParameter('id'));
   		}
   	}
  	
  	$this->setLayout(false);
  }
  
  public function executeConvenzioni(sfWebRequest $request)
  {
  	$q = Doctrine_Query::create()
  		->from('Page j')
  		->where('j.name = ?', "convenzioni");
  	
  	$this->convenzioni = $q->fetchOne();
  	$this->setLayout(false);
  }
  
  public function executeNewsread(sfWebRequest $request)
  {
  	$this->setLayout(false);
  	$this->news = Doctrine_Core::getTable('News')->find(array($request->getParameter('id')));
  	
  	$this->forward404Unless($this->news);  	
  } 
  
}
