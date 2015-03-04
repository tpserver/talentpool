<?php

class LanguageName extends \Eloquent {
    protected $table = 'language_names';
    public $timestamps = false;
    public $fillable = ['name', 'approved'];
}