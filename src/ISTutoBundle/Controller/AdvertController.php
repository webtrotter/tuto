<?php

namespace ISTutoBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{
    public function indexAction()
    {

    	$adverts = $this->getDoctrine()->getManager()->getRepository('ISTutoBundle:Advert')->findAll();

   

        return $this->render('ISTutoBundle:Advert:index.html.twig',array('adverts'=> $adverts));
    }
    public function addAction(Request $request)
  	{
	    // Création de l'entité
	    $advert = new Advert();
	    $advert->setTitle('Recherche développeur Symfony3.');
	    $advert->setAuthor('Guy');
	    $advert->setContent("Nous recherchons un développeur Symfony3 confirmé sur Lyon.");
	    // On peut ne pas définir ni la date ni la publication,
	    // car ces attributs sont définis automatiquement dans le constructeur

	    // On récupère l'EntityManager
	    $em = $this->getDoctrine()->getManager();

	    // Étape 1 : On « persiste » l'entité
	    $em->persist($advert);

	    // Étape 2 : On « flush » tout ce qui a été persisté avant
	    $em->flush();

	    // Reste de la méthode qu'on avait déjà écrit
	    if ($request->isMethod('POST')) {
	      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
	      return $this->redirect($this->generateUrl('is_tuto_view', array('id' => $advert->getId())));
	    }

	    return $this->render('ISTutoBundle:Advert:add.html.twig');
  	}
}
