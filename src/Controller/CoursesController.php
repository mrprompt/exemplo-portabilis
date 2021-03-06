<?php
declare(strict_types = 1);

namespace App\Controller;

use App\Service\CourseService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Courses Controller
 * 
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class CoursesController extends Controller
{
    /**
     * @Route("/courses", name="courses")
     * @Method("GET")
     * @Template("courses/index.html.twig")
     */
    public function indexAction(
        Request $request, 
        SessionInterface $session, 
        CourseService $courseService
    ): array
    {
        $courses = $courseService->findAll((int) $request->get('page', 1));
        
        return ['courses' => $courses];
    }

    /**
     * @Route("/course/{id}", name="course_details")
     * @Method("GET")
     * @Template("courses/view.html.twig")
     */
    public function viewAction(
        Request $request, 
        SessionInterface $session, 
        CourseService $courseService
    ): array
    {
        $course = $courseService->find((int) $request->get('id'));

        if (!$course) {
            throw $this->createNotFoundException('The product does not exist');
        }
        
        return ['course' => $course];
    }

    /**
     * @Route("/course/{id}", name="course_subscribe")
     * @Method("POST")
     */
    public function subscribeAction(
        Request $request, 
        SessionInterface $session, 
        CourseService $courseService
    ): array
    {
        $course = $courseService->find((int) $request->get('id'));

        if (!$course) {
            throw $this->createNotFoundException('The product does not exist');
        }
        
        return ['course' => $course];
    }
}