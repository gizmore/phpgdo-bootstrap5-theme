<?php /** @var $field \GDO\OnlineUsers\GDT_OnlineUsers **/
use GDO\UI\GDT_Tooltip;
use GDO\UI\GDT_Link;
use GDO\OnlineUsers\Module_OnlineUsers;
$users = $field->getOnlineUsers();
$ausers = [];
$max = Module_OnlineUsers::instance()->cfgNumOnline();

if ($users['users'])
{
	foreach ($users['users'] as $user)
	{
		$uid = $user->getID();
		$ausers[$uid] = GDT_Link::anchor(href('Profile', 'View', "&user=$uid"), $user->displayNameLabel());
	}
}
$online = count($ausers);
$onlineUsers = implode(', ', array_slice($ausers, 0, $max));

if ($online > $max)
{
	echo GDT_Tooltip::make()->tooltip('num_online_more', [$online, $onlineUsers, ($max-$online)])->render();
}
else 
{
	echo GDT_Tooltip::make()->tooltip('num_online', [$online, $onlineUsers])->render();
}
