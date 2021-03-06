<?php

use LiveVoting\Option\xlvoOption;
use LiveVoting\Player\xlvoPlayer;
use LiveVoting\QuestionTypes\xlvoQuestionTypes;
use LiveVoting\Voter\xlvoVoter;
use LiveVoting\Voting\xlvoVoting;
use LiveVoting\Voting\xlvoVotingManager2;

/**
 * Class xlvoDisplayPlayerGUI
 *
 * @author  Daniel Aemmer <daniel.aemmer@phbern.ch>
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @version 1.0.0
 *
 * The display is used in the view of a admin when presenting the livevoting, only the content of a voting
 */
class xlvoDisplayPlayerGUI {

	/**
	 * @var \ilTemplate
	 */
	protected $tpl;
	/**
	 * @var xlvoVoting
	 */
	protected $voting;
	/**
	 * @var int
	 */
	protected $answer_count = 64;
	/**
	 * @var xlvoVotingManager2
	 */
	protected $manager;


	/**
	 * xlvoDisplayPlayerGUI constructor.
	 *
	 * @param xlvoVotingManager2 $manager
	 */
	public function __construct(xlvoVotingManager2 $manager) {
		$this->manager = $manager;
		$this->tpl = new \ilTemplate('./Customizing/global/plugins/Services/Repository/RepositoryObject/LiveVoting/templates/default/Player/tpl.player.html', true, true);
		$this->pl = ilLiveVotingPlugin::getInstance();
	}


	protected function render() {
		/**
		 * @var xlvoVotingConfig $config
		 */
		$config = $this->manager->getVotingConfig();
		/**
		 * @var xlvoPlayer $player
		 */
		$player = $this->manager->getPlayer();

		$xlvoInputResultGUI = xlvoInputResultsGUI::getInstance($this->manager);
		if ($player->isShowResults()) {
			//add result view to player
			$this->tpl->setVariable('OPTION_CONTENT', $xlvoInputResultGUI->getHTML());
		}
		else {
			//add options to player
			$xlvoOptions = $this->manager->getVoting()->getVotingOptions();
			usort($xlvoOptions, function ($option1, $option2) {
				return $option1->getPosition() > $option2->getPosition();
			});

			foreach ($xlvoOptions as $item) {
				$this->addOption($item);
			}
		}

		$this->tpl->setVariable('TITLE', $this->manager->getVoting()->getTitle());
		$this->tpl->setVariable('QUESTION', $this->manager->getVoting()->getQuestionForPresentation());
		$this->tpl->setVariable('VOTING_ID', $this->manager->getVoting()->getId());
		$this->tpl->setVariable('OBJ_ID', $this->manager->getVoting()->getObjId());
		$this->tpl->setVariable('FROZEN', $player->isFrozen());
		$this->tpl->setVariable('PIN', $config->getPin());
		if ($this->manager->getVotingConfig()->isShowAttendees()) {
			$this->tpl->setCurrentBlock('attendees');
			$this->tpl->setVariable('ATTENDEES', xlvoVoter::countVoters($this->manager->getPlayer()->getId()));

			$this->tpl->setVariable('ONLINE', $this->pl->txt('player_voters_online'));
			$this->tpl->parseCurrentBlock();
		}
		if ($this->manager->getPlayer()->isCountDownRunning()) {
			$this->tpl->setCurrentBlock('countdown');
			$cd = $this->manager->getPlayer()->remainingCountDown();
			$this->tpl->setVariable('COUNTDOWN', $cd . ' ' . $this->pl->txt('player_seconds'));
			$this->tpl->setVariable('COUNTDOWN_CSS', $this->manager->getPlayer()->getCountdownClassname());
			$this->tpl->parseCurrentBlock();
		}

		//parse votes block
		$this->tpl->setVariable('VOTERS', $this->manager->countVoters());
		$this->tpl->setVariable('VOTERS_DESCRIPTION', $this->pl->txt('player_voters_description'));

		$this->tpl->setVariable('COUNT', $this->manager->countVotings());
		$this->tpl->setVariable('POSITION', $this->manager->getVotingPosition());
	}


	/**
	 * @param bool $inner
	 * @return string
	 */
	public function getHTML($inner = false) {
		$this->render();
		$open = '<div id="xlvo-display-player" class="display-player panel panel-primary">';
		$close = '</div>';
		if ($inner) {
			return $this->tpl->get();
		} else {
			return $open . $this->tpl->get() . $close;
		}
	}


	/**
	 * @param xlvoOption $option
	 */
	protected function addOption(xlvoOption $option) {
		if ($option->getType() == xlvoQuestionTypes::TYPE_FREE_INPUT) {
			return;
		}

		//workaround due to the old question design.
		if($option->getType() == xlvoQuestionTypes::TYPE_NUMBER_RANGE)
		{
			$columnWith = 6; //because of bootstrap grid 12 = 100%, 6 = 50% therefore 2 columns
			$percentage = (int)$this->manager->getVoting()->getPercentage() === 1 ? '%' : '';

			$this->tpl->setCurrentBlock('option');
			$this->tpl->setVariable('OPTION_LETTER', $this->pl->txt('qtype_6_range_start'));
			$this->tpl->setVariable('OPTION_COL', $columnWith);
			$this->tpl->setVariable('OPTION_TEXT', "{$this->manager->getVoting()->getStartRange()}{$percentage}");
			$this->tpl->parseCurrentBlock();

			$this->tpl->setCurrentBlock('option');
			$this->tpl->setVariable('OPTION_LETTER', $this->pl->txt('qtype_6_range_end'));
			$this->tpl->setVariable('OPTION_COL', $columnWith);
			$this->tpl->setVariable('OPTION_TEXT', "{$this->manager->getVoting()->getEndRange()}{$percentage}");
			$this->tpl->parseCurrentBlock();
			return;
		}

		$this->answer_count ++;
		$this->tpl->setCurrentBlock('option');
		$this->tpl->setVariable('OPTION_LETTER', $option->getCipher());
		$this->tpl->setVariable('OPTION_COL', $this->manager->getVoting()->getComputedColums());
		$this->tpl->setVariable('OPTION_TEXT', $option->getTextForPresentation());
		$this->tpl->parseCurrentBlock();
	}
}