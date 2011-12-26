<?php
defined('C5_EXECUTE') or die("Access Denied.");

class FlashDataHelper {
  public function notice($message = null) {
    return $this->flash('notice', $message);
	}
	public function error($message = null) {
	  return $this->flash('error', $message);
	}
	public function alert($message = null) {
	  return $this->flash('alert', $message);
	}
	
	// You should probably stick to the three type of messages exposed above.
	// But if you need finer control then you can set this method to public 
	// and name your flash messages whatever you'd like.
	private function flash($kind, $message = null) {
	  $name = 'flash_' . $kind;
	  $response = true;
    // Get the flash if message is null.
		if($message == null) {
		  $response = null;
		  if(isset($_SESSION[$name])) {
		    $response = $_SESSION[$name];
		    unset($_SESSION[$name]);
		  }
		}
		// Set the flash if message isn't null.
		else {
		  $_SESSION[$name] = $message;
		}
		
		return $response;
	}
}

?>