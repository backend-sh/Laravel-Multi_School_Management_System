<?php
namespace App;
class Institute extends \Eloquent {
	protected $table = 'institute';
	protected $fillable = ['name','establish','name','email','web','phoneNo','address','logo'];
}
