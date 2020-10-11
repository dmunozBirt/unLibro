<?php

namespace App\EntityListener;

use App\Entity\Conference;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\SluggerInterface;


/**
 * Description of ConferenceEntityListener
 *
 * @author daniel
 */
class ConferenceEntityListener 
{
	
	private $slugger;
	
	public function __construct(SluggerInterface $slugger) 
	{
		$this->slugger = $slugger;
	}
	
	public function prePersist(Conference $conference, LifecycleEventArgs $event) 
	{
		$conference->computeSlug($this->slugger);
	}
	
	public function preUpdate(Conference $conference, LifecycleEventArgs $event) 
	{
		$conference->computeSlug($this->slugger);
	}
	
}
