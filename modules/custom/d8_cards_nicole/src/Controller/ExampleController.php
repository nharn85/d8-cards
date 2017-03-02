<?php
/**
 * Created by PhpStorm.
 * User: nmacdougall
 * Date: 2017-03-02
 * Time: 2:15 PM
 */

namespace Drupal\d8_cards_nicole\Controller;

use Drupal\Core\Controller\ControllerBase;

class ExampleController extends ControllerBase
{
    /**
     * Returns a simple page.
     *
     * @return array
     *   A simple renderable array.
     */
    public function myPage() {
        $element = array(
            '#title' => 'My first page in D8',
            '#markup' => 'Hello, world',
        );
        return $element;
    }
}