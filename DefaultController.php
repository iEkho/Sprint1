<?php

namespace Hopital\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hopital\AdministrationBundle\Entity\Patient;
use Hopital\AdministrationBundle\Entity\Sejour;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HopitalAdministrationBundle:Default:index.html.twig');
    }
	public function patientAction()
	{
		$doctrine=$this->getDoctrine();
		$entityManager=$doctrine->getManager();
		$repository=$entityManager->getRepository('HopitalAdministrationBundle:Patient');
		$lesPatients=$repository->findAll();
		return $this->render('HopitalAdministrationBundle:Default:patient.html.twig',array('lesPatients'=>$lesPatients));
	}
	public function modifPatientAction(Request $request)
	{
	$id=$request->query->get('id');
	$em=$this->getDoctrine()->getManager();
	$repository=$em->getRepository('HopitalAdministrationBundle:Patient');
	$unPatient=$repository->find($id);
	$formBuilder=$this->createFormBuilder($unPatient);
	$formBuilder->add('nom','text',array('label'=>'Saisir le nom'));
	$formBuilder->add('prenom','text',array('label'=>'Saisir le prenom'));
	$formBuilder->add('dateNaiss','date',array('label'=>'Saisir la date de naissance'));
	$formBuilder->add('adresse','text',array('label'=>'Saisir l\'adresse'));
	$formBuilder->add('numSecu','text',array('label'=>'Saisir le numéro de sécurité social'));
	$formBuilder->add('mail','text',array('label'=>'Saisir le mail'));
	$formBuilder->add('estAssure','checkbox',array('label'=>'Cocher si il est assuré'));
	$formBuilder->add('Mettre a jour','submit');
	$form=$formBuilder->getForm();
	if($request->getMethod()=='POST')
	{
		$form->bind($request);
		if($form->isValid())
		{
		$em=$this->getDoctrine()->getManager();
		$em->persist($unPatient);
		$em->flush();
		}
	}
	return $this->render('HopitalAdministrationBundle:Default:modifPatient.html.twig',array('form'=>$form->createView()));
	}
	
	public function newPatientAction (Request $request)
	{
	$unPatient = new Patient();
	$formBuilder=$this->createFormBuilder($unPatient);
	$formBuilder->add('nom','text',array('label'=>'Saisir le nom'));
	$formBuilder->add('prenom','text',array('label'=>'Saisir le prenom'));
	$formBuilder->add('dateNaiss','date',array('label'=>'Saisir la date de naissance'));
	$formBuilder->add('adresse','text',array('label'=>'Saisir l\'adresse'));
	$formBuilder->add('numSecu','text',array('label'=>'Saisir le numéro de sécurité social'));
	$formBuilder->add('mail','text',array('label'=>'Saisir le mail'));
	$formBuilder->add('estAssure','checkbox',array('label'=>'Cocher si il est assuré'));
	$formBuilder->add('Ajouter','submit');
	$form=$formBuilder->getForm();
	if($request->getMethod()=='POST')
	{
		$form->bind($request);
		if($form->isValid())
		{
		$em=$this->getDoctrine()->getManager();
		$em->persist($unPatient);
		$em->flush();
		}
	}
		return $this->render('HopitalAdministrationBundle:Default:newPatient.html.twig',array('form' => $form ->createView()));
	}
	public function suppPatientAction(Request $request)
	{
	$id=$request->query->get('id');
	$em=$this->getDoctrine()->getManager();
	$repository=$em->getRepository('HopitalAdministrationBundle:Patient');
	$unPatient=$repository->find($id);
	$em-> remove($unPatient);
	$em->flush();
	
	return $this->redirectToroute('hopital_administration_viewPatient');
	}
    public function newsejourAction(Request $request)
    {
      $unSejour=new Sejour();
      $formbuilder=$this->createFormBuilder($unSejour);
      $formbuilder->add('lepatient','entity',array('class'=>'HopitalAdministrationBundle:Patient','property'=>'nom','prenom'));
      $formbuilder->add('dateDebut','date',array('label'=>'Saisir la date de début'));
      $formbuilder->add('dateFin','date',array('label'=>'Saisir la date de fin (ne rien saisir si séjour non terminé)'));
      $formbuilder->add('save','submit');
      $form=$formbuilder->getForm();
      if($request->getMethod()=='POST'){
        $form->bind($request);
        if($form->isValid())
        {
          $em = $this->getDoctrine()->getManager();
          $em->persist($unSejour);
          $em->flush();
        }
      }
      return $this->render('HopitalAdministrationBundle:Default:newsejour.html.twig',array('form' => $form ->createView()));
    }
}


