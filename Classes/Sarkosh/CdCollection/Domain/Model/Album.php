<?php
namespace Sarkosh\CdCollection\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Sarkosh.CdCollection".  *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Album {

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var integer
	 */
	protected $year;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var integer
	 */
	protected $rating;


	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @return integer
	 */
	public function getYear() {
		return $this->year;
	}

	/**
	 * @param integer $year
	 * @return void
	 */
	public function setYear($year) {
		$this->year = $year;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return integer
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * @param integer $rating
	 * @return void
	 */
	public function setRating($rating) {
		$this->rating = $rating;
	}

}