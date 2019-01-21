<?php
class Calculator
{
 
    public function add($a, $b)
    {
        return $a + $b;
    }
 
}
get('reporting', function() {
	return 'Reporting feature';
});