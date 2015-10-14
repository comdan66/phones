<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class User extends OaModel {

  static $table_name = 'users';

  static $has_one = array (
  );

  static $has_many = array (
  );

  static $belongs_to = array (
  );
  private static $current = '';

  public function __construct ($attributes = array (), $guard_attributes = true, $instantiating_via_find = false, $new_record = true) {
    parent::__construct ($attributes, $guard_attributes, $instantiating_via_find, $new_record);
  }

  public static function current () {
      if (self::$current !== '')
        return self::$current;

      if ($id = Session::getData ('user_id'))
        return self::$current = User::find_by_id ($id);
      else
        return self::$current = null;
  }
}