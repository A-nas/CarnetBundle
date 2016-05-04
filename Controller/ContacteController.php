<?php

namespace P\CarnetBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContacteController extends Controller
{

    public function indexAction()
    {
    	$listContactes = $this
    	->getDoctrine()
    	->getManager()
    	->getRepository('PCarnetBundle:Contacte')
    	->getListeContactes($this->getUser()->getId())
    	;

        return $this->render('PCarnetBundle:Contacte:listeContactes.html.twig', array('listContactes' => $listContactes));
    }

    public function addContactesAction()
    {
    	$listContactes = $this
    	->getDoctrine()
    	->getManager()
    	->getRepository('PCarnetBundle:Contacte')
    	->getListeNonContactes($this->getUser()->getId())
    	;

        return $this->render('PCarnetBundle:Contacte:ajouterContactes.html.twig', array('listContactes' => $listContactes));
    }

    public function deleteContacteAction($id){
    	$em = $this->getDoctrine()->getManager();
    	//$idd = $request->query->get('id');
    	$idu = $this->getUser()->getId();
    	$currentUser = $em->getRepository('PCarnetBundle:Contacte')->find($idu);
    	$deletedUser = $em->getRepository('PCarnetBundle:Contacte')->find($id);
    	$currentUser->removeContacte($deletedUser);
    	$em->flush();
    	return $this->redirectToRoute('p_carnet_homepage');
    }

    public function  addContacteAction($id){
    	$em = $this->getDoctrine()->getManager();
    	//$idd = $request->query->get('id');
    	$idu =$this->getUser()->getId();
    	$currentUser = $em->getRepository('PCarnetBundle:Contacte')->find($idu);
    	$addedUser = $em->getRepository('PCarnetBundle:Contacte')->find($id);
    	$currentUser->addContacte($addedUser);
    	$em->flush();
    	return $this->redirectToRoute('p_carnet_ajouterContactes');
    }
}