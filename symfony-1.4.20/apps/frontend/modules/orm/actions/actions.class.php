<?php

/**
 * orm actions.
 *
 * @package    benchmark
 * @subpackage orm
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ormActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $q = Doctrine_Query::create()
            ->select('*')
            ->from('Item')
            ->orderBy('id', 'ASC')
            ->limit(1000);

        $this->items = $q->execute();
    }
}
