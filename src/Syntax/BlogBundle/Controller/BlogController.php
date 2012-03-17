<?php

namespace Syntax\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Syntax\BlogBundle\Entity\Article;
use Syntax\BlogBundle\Form\ArticleType;
use Syntax\BlogBundle\Form\ArticleHandler;
use JMS\SecurityExtraBundle\Annotation\Secure;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;

class BlogController extends Controller {

    /**
     * @Route("/{page}", name="blog_accueil", defaults={"page" = 1}, requirements={"page" = "\d+"})
     * @Template()
     */
    public function indexAction($page) {
        // Les articles :
        $articleRepo = $this->getDoctrine()
                ->getEntityManager()
                ->getRepository("SyntaxBlogBundle:Article");
        
        $articles = $articleRepo->findAll();
        $adapter = new ArrayAdapter($articles);
        $pagerfanta = new Pagerfanta($adapter);
        $nbArticlesPage = $this->container->getParameter('nbArticleParPage');
        $pagerfanta->setMaxPerPage($nbArticlesPage);
        $pagerfanta->setCurrentPage($page);
        
        return $this->render('SyntaxBlogBundle:Blog:index.html.twig', array(
                    'pagerfanta' => $pagerfanta
                ));
    }

    /**
     * @Route("/article/{id}", name="blog_voir", requirements={"id" = "\d+"})
     * 
     * @Template()
     */
    public function voirAction(Article $article) {

        return $this->render('SyntaxBlogBundle:Blog:voir.html.twig', array('article' => $article));
    }

    /**
     * @Route("/ajouter", name="blog_ajouter")
     * @Template()
     * 
     * @Secure(roles="ROLE_AUTEUR")
     */
    public function ajouterAction() {

        $article = new Article();

        $form = $this->createForm(new ArticleType(), $article);

        $request = $this->get('request');

        $articleHandler = new ArticleHandler($form, $request, $this->getDoctrine()->getEntityManager());

        if ($articleHandler->process()) {
            $this->get('session')->setFlash('notice', 'Article bien enregistré');

            // Puis on redirige vers la page de visualisation de cet article.
            return $this->redirect($this->generateUrl('blog_voir', array('id' => $article->getId())));
        }


        // Si on n'est pas en POST, alors on affiche le formulaire.
        return $this->render('SyntaxBlogBundle:Blog:ajouter.html.twig', array(
                    'form' => $form->createView()
                ));
    }

    /**
     * @Route("/modifier/{id}", name="blog_modifier", requirements={"id" = "\d+"})
     * @Template()
     */
    public function modifierAction(Article $article) {
        
        $form = $this->createForm(new ArticleType(), $article);

        $request = $this->get('request');

        $articleHandler = new ArticleHandler($form, $request, $this->getDoctrine()->getEntityManager());

        if ($articleHandler->process()) {
            $this->redirect($this->generateUrl('blog_voir', array('id' => $article->getId())));
        }
        return $this->render('SyntaxBlogBundle:Blog:modifier.html.twig', 
                array(
                    'form' => $form->createView(),
                    'article' => $article
                    ));
    }

    /**
     * @Route("/supprimer/{id}", name="blog_supprimer", requirements={"id" = "\d+"})
     * @Template()
     */
    public function supprimerAction(Article $article) {
        return $this->render('SyntaxBlogBundle:Blog:supprimer.html.twig');
    }

}
