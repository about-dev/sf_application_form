<?php
namespace Demo\TestBundle\Model;

class Address{
	public static function getAllRegions(){
		return array(
					1=>'Bucharest',
					2=>'Iasi',
					3=>'Cluj'
					);
	}

	public static function getLocalitiesByRegion($regionId){
		$localities = array(
							1=>array(
									1=>'Sector 1', 
									2=>'Sector 2', 
									3=>'Sector 3', 
									4=>'Sector 4', 
									5=>'Sector 5', 
									6=>'Sector 6'
									),
							2=>array(
									1=>'Albesti', 
									2=>'Alexandru cel Bun', 
									3=>'Badeni'
									),
							3=>array(
									1=>'Agris',
									)
							);
		if(!empty($regionId)){
			return $localities[$regionId];
		}
	}
}