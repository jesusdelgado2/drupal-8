<?php
/**
 * @file
 * Contains \Drupal\mymodule\Controller\MyModuleController
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase{
    public function content(){
        return array(
            '#type' => 'markup',
            '#markup' => t('
            <h1>testing module</h1>
            <h5>line 2</h5>
            '),
        );
    }
}


