<?php

/**
* Link model
*/
class Link extends Eloquent
{
    protected $table = 'links';
    protected $fillable = array('url', 'shortcut');
    public $timestamps = false;
}
?>