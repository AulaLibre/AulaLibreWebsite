<?php
/**
 * Main controller for static pages
 *
 * @package    AulaLibreWebsiteBundle
 * @copyright  2014 Fundación Aula Libre
 * @license    http://opensource.org/licenses/BSD-3-Clause  BSD License
 * @author     Edmundo Fuentes <me@edmundofuentes.com>
 * @version    1.0
 */

namespace AulaLibre\WebsiteController\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    public function homeAction()
    {
        return $this->render('AulaLibreWebsiteBundle:Page:home.html.twig');
    }

    public function pageAction($page)
    {
        switch($page)
        {
            case 'contact':
                $layout = 'AulaLibreWebsiteBundle:Page:contact.html.twig';
                break;
            case 'gallery':
                $layout = 'AulaLibreWebsiteBundle:Page:gallery.html.twig';
                break;
            default:
                // The requested page was not found, throw an exception
                throw $this->createNotFoundException();
                break;
        }

        return $this->render($layout);
    }

}