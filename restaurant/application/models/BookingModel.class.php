<?php 


class BookingModel{

	public function reserver($_post){

		$database = new Database();
		$database->executeSql(' INSERT INTO 
									Booking
									( `Date`,`Time`,SeatNumber,CreationDate) 
								VALUES 
									(?,?,?,NOW()) ',

			[ 	
				$_post['Year'].'-'.$_post['Month'].'-'.$_post['day'],
				$_post['hour'].':'.$_post['min'],
				$_post['couvert'] 
			]);
	}

}



?>