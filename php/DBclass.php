<?php
class DBclass {
	public $host = 'localhost';
    public $username = 'root';
	public $password = '';
	public $dbname = 'producttracker';
	private $dbhandle;
	private $result;
	
	public function __construct() {
		$this->dbhandle = mysql_connect($this->host, $this->username, $this->password);
		if( !$this->dbhandle || !mysql_select_db($this->dbname) ) {
			die();
		}
	}
	public function __destruct() {
		mysql_close($this->dbhandle);
	}
	public function query($sql, $rhandle = 0) {
		$this->result[$rhandle] = mysql_query($sql);
		if( $this->result[$rhandle] ) {
			return true;
		} else {
			return false;
		}
	}
	public function getRow($rhandle = 0) {
		if( $row = mysql_fetch_assoc($this->result[$rhandle]) ) {
			return $row;
		} else {
			false;
		}
	}
	public function secure($input) {
		return htmlspecialchars(mysql_real_escape_string($input));
	}
	public function getLastError() {
		return mysql_error();
	}
	public function count($rhandle = 0) {
		return mysql_num_rows($this->result[$rhandle]);
	}

}
?>