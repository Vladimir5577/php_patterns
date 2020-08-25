<?php

	abstract class AbstractObserver {
		abstract function update(AbstractSubject $subject_in);
	}

	abstract class AbstractSubject {
		abstract function attach(AbstractObserver $observer_in);
		abstract function detach(AbstractObserver $observer_in);
		abstract function notify();
	}

	class PatternObserver extends AbstractObserver {
		public function __construct () {
		
		}

		public function update (AbstractSubject $subject) {
			echo ' / ' . $subject->getFavorites();
		}
	}

	class PatternSubject extends AbstractSubject {
		private $favoritePatterns = NULL;
		private $observers = array();

		function __construct () {
		
		}


	}


?>
