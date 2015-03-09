<?php
/**
 * Created by PhpStorm.
 * User: Eunseok
 * Date: 2015-03-07
 * Time: 오후 6:32
 */

class Errors extends CI_Controller {
  public function notfound(){
      $this -> load -> view('head');
      $this -> load -> view('error/404');
      $this -> load -> view('footer');
  }
}

?>