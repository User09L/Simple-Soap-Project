<?php

function get_count($name,$code)
{
	$StudentInformation = [
		"Francis Kastro"=>0,
		"Mike Smith"=>1,
		"John Hayfield"=>2,
		"Josh River"=>3,
		"Mark Spencer"=>4,
		"Nash Speed"=>5,
		"Kazy Mekko"=>6,
		"Meno Lasto"=>7,
		"Joey Dano"=>8,
		"Miguel Gars"=>9,
	];
	$StudentAge = array(20,19,23,22,18,17,18,18,22,20);
	$StudentCourse = array("CS","IT","EE","ME","IE","BA","CS","IT","EE","ME");
	$StudentPhone = array("091233456789","09876985643","09870657843","09908876547","09000786543","09877776543","09888766544","09008811123","09088767654","09887676543");
	$StudentAddress = array("Sta.Rosa","North Fields","St.Joseph","New Mahogany","Eastridge","Ramax","North Fields","St.Joseph","New Mahogany","Ramax");
	$StudentName = array("Francis Kastro","Mike Smith","John Hayfield","Josh River","Mark Spencer","Nash Speed","Kazy Mekko","Meno Lasto","Joey Dano","Miguel Gars");
	$StudentNumber = array(10,11,12,13,14,15,16,17,18,19);


	foreach($StudentInformation as $StudentInformation=>$count)
	{
		if(($StudentInformation==$name) && ($StudentNumber[$count]==$code))
		{
			
			$txt = "Name:".$StudentName[$count]."   "."Student Number:".$StudentNumber[$count]."   "."Age:".$StudentAge[$count] ."   "."Course:". $StudentCourse[$count] ."   "."Phone number:".$StudentPhone[$count] ."   "."Address:".$StudentAddress[$count];
			//eturn $count." - ".$code;
			return $txt;
			//return $count;
			break;
			
		}
                                    
	}
        return "No student was found:"." ".$name;
	 
}