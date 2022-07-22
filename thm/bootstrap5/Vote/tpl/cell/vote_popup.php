<?php
use GDO\Votes\GDT_VotePopup;
use GDO\Votes\GDT_VoteSelection;
use GDO\UI\GDT_Icon;
/** @var $field GDT_VotePopup **/
$field instanceof GDT_VotePopup;
$gdo = $field->gdo;
$table = $gdo->gdoVoteTable();
$idOutcome = $gdo->getVoteOutcomeId();

$votes = $gdo->getVoteCountColumn()->render();
$rating = $gdo->getVoteRatingColumn()->render();

$votesNeeded = $table->gdoVotesBeforeOutcome();
$votesHave = $gdo->getVoteCount();
$enough = $votesHave >= $votesNeeded;

echo '<span>';
echo GDT_Icon::make()->icon('trophy')->iconColor('gold')->render();
echo "&nbsp;";
echo '<span id="'.$idOutcome.'">';
if ($enough)
{
	echo $rating . $votes;
}
else
{
	echo $rating;
}
echo '</span>';
echo GDT_VoteSelection::make()->gdo($gdo)->render();
echo '</span>';
