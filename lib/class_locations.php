<?php
// *************************************************************************
// *                                                                       *
// * DEPRIXA -  Integrated Web system                                      *
// * Copyright (c) JAOMWEB. All Rights Reserved                            *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: osorio2380@yahoo.es                                            *
// * Website: http://www.jaom.info                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************

  
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

  class Locations
  {
    const uTable = "users";
	  const lTable = "locations";
	  const cTable = "add_courier";
	  const addcourierTable = "detail_addcourier";
	  const contaTable = "add_container";
	  const addcontaTable = "add_consolidate";
	  const addcouriertmpTable	= "detail_addcourier_tmp";
	  const ctmpTable = "detail_container_tmp";
	  const cdetailTable = "detail_container";
	  const contmpTable = "cons_tmp";
	  const consolTable = "consolidate";
	  const ctrackTable = "courier_track";
	  const oTable = "offices";
	  const yTable = "styles";
	  public $logged_in = null;
	  public $uid = 0;
	  public $userid = 0;
      public $username;
	  public $email;
	  public $name;
      public $userlevel;
	  public $last;
	  private $lastlogin = "NOW()";
	  private static $db;
      

      /**
       * Users::__construct()
       */
      function __construct()
      {
		  self::$db = Registry::get("Database");
		  $this->startSession();
      }
 

      /**
       * Users::startSession()
       */
      private function startSession()
      {
          if (strlen(session_id()) < 1)
              session_start();

          $this->logged_in = $this->loginCheck();

          if (!$this->logged_in) {
              $this->username = $_SESSION['username'] = "Guest";
              $this->sesid = md5(session_id());
              $this->userlevel = 0;
          }
      }

	  /**
	   * Users::loginCheck()
	   */
      private function loginCheck()
      {
          if (isset($_SESSION['username']) && $_SESSION['username'] != "Guest") {
			  
              $row = $this->getUserInfo($_SESSION['username']);
              $this->uid = $row->id;
              $this->username = $row->username;
			  $this->locker = $row->locker;
			  $this->name_off = $row->name_off;
              $this->email = $row->email;
              $this->name = $row->fname . ' ' . $row->lname;
              $this->userlevel = $row->userlevel;
			  $this->last = $row->lastlogin;
              return true;
          } else {
              return false;
          }
      }

	  /**
	   * Users::is_Admin()
	   */
	  public function is_Admin()
	  {
		 if ($this->userlevel == 9) {	 
			return($this->userlevel == 9);
		} else {  
			return($this->userlevel == 2);
		}
	  }

	  /**
	   * Users::login()
	   */
	  public function login($username, $pass)
	  {

		  if ($username == "" && $pass == "") {
			  Filter::$msgs['username'] = 'Enter a valid username and password.';
		  } else {
			  $status = $this->checkStatus($username, $pass);
			  
              switch ($status) {
                  case 0:
                      Filter::$msgs['username'] = 'The login and / or password do not match the database.';
                      break;

                  case 1:
                      Filter::$msgs['username'] = 'Your account has been banned.';
                      break;

                  case 2:
                      Filter::$msgs['username'] = 'Your account is not activated.';
                      break;

                  case 3:
                      Filter::$msgs['username'] = 'You must verify your email address.';
                      break;
              }
		  }
          if (empty(Filter::$msgs) && $status == 5) {
              $row = $this->getUserInfo($username);
              $this->uid = $_SESSION['userid'] = $row->id;
              $this->username = $_SESSION['username'] = $row->username;
              $this->email = $_SESSION['email'] = $row->email;
			  $this->name_off = $_SESSION['name_off'] = $row->name_off;
              $this->name = $_SESSION['name'] = $row->fname . ' ' . $row->lname;
              $this->userlevel = $_SESSION['userlevel'] = $row->userlevel;
			  $this->last = $_SESSION['last'] = $row->lastlogin;

			  $data = array(
					'lastlogin' => $this->lastlogin, 
					'lastip' => sanitize($_SERVER['REMOTE_ADDR'])
			  );

			  self::$db->update(self::uTable, $data, "username='" . $this->username . "'");
				  
			  return true;
		  } else
			  Filter::msgStatus();
	  }

      /**
       * Users::logout()
       */
      public function logout()
      {
          unset($_SESSION['username']);
		  unset($_SESSION['email']);
		  unset($_SESSION['name']);
          unset($_SESSION['userid']);
          session_destroy();
		  session_regenerate_id();
          
          $this->logged_in = false;
          $this->username = "Guest";
          $this->userlevel = 0;
      }

	  /**
	   * Users::getUserInfo()
	   */
      private function getUserInfo($username)
      {
          $username = sanitize($username);
          $username = self::$db->escape($username);

          $sql = "SELECT * FROM " . self::uTable . " WHERE username = '" . $username . "'";
          $row = self::$db->first($sql);
          if (!$username)
              return false;

          return ($row) ? $row : 0;
      }
	  
	  
	  /**
       * Core::getCourier Online Booking()
       */
      public function getLocation()
      {
		    $sql = "SELECT name FROM " . self::lTable;
          $row = self::$db->fetch_all($sql);
          
          return ($row) ? $row : 0;
      }
  }
?>