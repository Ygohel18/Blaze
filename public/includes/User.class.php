<?php namespace Blaze;

class User {

    private $user = array();

    public function __construct() {
        //
    }

    public function setFirstName($first_name) {
		$this->user['first_name'] = ucfirst( $first_name );
	}
	
	public function getFirstName() {
		return $this->user['first_name'];
	}
	
    public function setLastName($last_name) {
		$this->user['last_name'] = ucfirst( $last_name );
	}
	
	public function getLastName() {
		return $this->user['last_name'];
    }
    
    public function setUserName($user_name) {
		$this->user['user_name'] = $user_name;
	}
	
	public function getUserName() {
		return $this->user['user_name'];
    }
    
    public function setEmail($email) {
		$this->user['email'] = strtolower( $email );
	}
	
	public function getEmail() {
		return $this->user['email'];
    }
    
    public function setMobile($mobile) {
		$this->user['mobile'] = $mobile;
	}
	
	public function getMobile() {
		return $this->user['mobile'];
    }
    
    public function setCc($cc) {
		$this->user['cc'] = $cc;
	}
	
	public function getCc() {
		return $this->user['cc'];
    }
    
    public function setGender($gender) {
		$this->user['gender'] = $gender;
	}
	
	public function getGender() {
		return $this->user['gender'];
    }
    
    public function setBirthday($birthday) {
		$this->user['birthday'] = $birthday;
	}
	
	public function getBirthday() {
		return $this->user['birthday'];
    }
    
    public function setVerified($verified) {
		$this->user['verified'] = $verified;
	}
	
	public function getVerified() {
		return $this->user['verified'];
    }
    
    public function setSignup($signup) {
		$this->user['signup'] = $signup;
	}
	
	public function getSignup() {
		return $this->user['signup'];
    }
    
    public function setUserId($user_id) {
		$this->user['user_id'] = $user_id;
	}
	
	public function getUserId() {
		return $this->user['user_id'];
	}
	
	public function setUserDp($user_dp) {
		$this->user['user_dp'] = $user_dp;
	}
	
	public function getUserDp() {
		return $this->user['user_dp'];
    }

    public function setUserPassword($user_password) {
		$this->user['user_password'] = $user_password;
	}
	
	public function getUserPassword() {
		return $this->user['user_password'];
    }
    
    public function getFullName() {
        return self::getFirstName() . ' ' . self::getLastName(); 
    }
}

?>