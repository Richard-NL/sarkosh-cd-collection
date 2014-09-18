<?php
namespace Sarkosh\CdCollection\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Sarkosh.CdCollection".  *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class StandardController extends \TYPO3\Flow\Mvc\Controller\ActionController
{

    /**
     * @Flow\Inject
     * @var \Sarkosh\CdCollection\Domain\Repository\AlbumRepository
     */
    protected $albumRepository;

	/**
	 * @return void
	 */
	public function indexAction()
    {
        $albums = $this->albumRepository->findAll();
		$this->view->assign('albums', $albums);
	}

}