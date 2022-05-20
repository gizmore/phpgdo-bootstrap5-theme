<?php
use GDO\UI\GDT_Icon;
/** @var $field \GDO\Vote\GDT_VoteSelection **/
use GDO\User\GDO_User;
$vt = $field->voteTable();
$user = GDO_User::current();
$own = $field->gdo->getVote($user);
$own = $own ? $own->getVar('vote_value') : '0';
$max = $vt->gdoVoteMax();
?>
<div
 data-initial="<?=$own?>"
 class="gdo-rating-stars">
<?php
for ($i = 1; $i <= $max; $i++) :
$color = $own < $i ? '#999' : '#ffd700';
$icon = GDT_Icon::make()->icon('star')->iconColor($color)->render();
?>
<a
 rel="nofollow"
 data-rating="<?=$i?>"
 onclick="return GDO.Vote.vote(this)"
 onmouseenter="return GDO.Vote.hoverIn(this)"
 onmouseleave="return GDO.Vote.hoverOut(this)"
 href="<?=$field->hrefVoteScore($i)?>"><?=$icon?></a>
<?php endfor; ?>
</div>
