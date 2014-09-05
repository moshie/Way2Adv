<?php

function set_active($path, $spriteName)
{
	return Request::is($path) ? 'sprites-' . $spriteName . ' ' . $spriteName . '-active' : 'sprites-' . $spriteName ;
}