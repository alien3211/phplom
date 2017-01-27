<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Comment;
use AppBundle\Entity\Post;

use AppBundle\Form\CommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $qb = $this->getDoctrine()
            ->getManager()
            ->createQueryBuilder()
            ->from('AppBundle:Post','p')
            ->select('p');

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb,
            $request->query->get('page', 1),
            20
        );

        return $this->render('default/index.html.twig', [
            'posts' => $pagination
        ]);
    }

    /**
     * @Route("/post/{id}", name="post_show")
     */
    public function showAction(Post $post, Request $request)
    {

        $form = null;
        if ($user = $this->getUser()){
            $comment = new Comment();
            $comment->setPost($post);
            $comment->setUser($user);
            $form = $this->createFormBuilder($comment)
                ->add('content', TextareaType::class, array('label' => false))
//            ->add('save', SubmitType::class, array('label' => 'Create Comments'))
                ->getForm();


            $form->handleRequest($request);
            if ($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($comment);
                $em->flush();

                $this->addFlash('success', "successful add comment");
                return $this->redirectToRoute('post_show', array('id' => $post->getId()));
            }
        }


        return $this->render('default/show.html.twig', [
            'post' => $post,
            'form' => is_null($form) ? $form :$form->createView()
        ]);
    }

    /**
     * @Route("/category/{id}", name="category_show")
     */
    public function showCategory(Category $category, Request $request)
    {

        $form = null;
        if ($user = $this->getUser()){
            $category = new Category();
            $category->setPost($category);
            $category->setUser($user);
            $form = $this->createFormBuilder($category)
                ->add('content', TextareaType::class, array('label' => false))
//            ->add('save', SubmitType::class, array('label' => 'Create Comments'))
                ->getForm();


            $form->handleRequest($request);
            if ($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($category);
                $em->flush();

                $this->addFlash('success', "successful add category");
                return $this->redirectToRoute('category_show', array('id' => $category->getId()));
            }
        }


        return $this->render('default/show.html.twig', [
            'post' => $category,
            'form' => is_null($form) ? $form :$form->createView()
        ]);
    }

    /**
     * @Route("/post/create", name="post_create")
     */
    public function createPost(Post $post, Request $request)
    {

        $form = null;
        if ($user = $this->getUser()){
            $post = new Post();
            $post->setPost($category);
            $post->setUser($user);
            $form = $this->createFormBuilder($post)
                ->add('content', TextareaType::class, array('label' => false))
//            ->add('save', SubmitType::class, array('label' => 'Create Comments'))
                ->getForm();


            $form->handleRequest($request);
            if ($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($category);
                $em->flush();

                $this->addFlash('success', "successful add Post");
                return $this->redirectToRoute('post_show', array('id' => $category->getId()));
            }
        }


        return $this->render('default/show.html.twig', [
            'post' => $category,
            'form' => is_null($form) ? $form :$form->createView()
        ]);
    }
}
