<?php
namespace Sarkosh\CdCollection\Controller;

use TYPO3\Flow\Annotations as Flow;

class CollectionController extends \TYPO3\Flow\Mvc\Controller\ActionController
{
    /**
     * @Flow\Inject
     * @var \Sarkosh\CdCollection\Domain\Repository\AlbumRepository
     */
    protected $albumRepository;


    /**
     * @param \Sarkosh\CdCollection\Domain\Model\Album $album
     * @return void
     */
    public function showAction(\Sarkosh\CdCollection\Domain\Model\Album $album)
    {
        $this->view->assign('album', $album);
    }

    public function overviewAction()
    {
        $albums = $this->albumRepository->findAll();
        $this->view->assign('albums', $albums);
    }
} 