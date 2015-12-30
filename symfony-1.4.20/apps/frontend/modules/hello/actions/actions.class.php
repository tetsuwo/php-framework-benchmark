<?php

/**
 * hello actions.
 *
 * @package    benchmark
 * @subpackage hello
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class helloActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        return $this->renderText('Hello World!');
    }
}
