<?php

namespace App\Services;

class CheckFormService
{
  public static function checkGender($contact)
  {
    if ($contact->gender === 0) {
      $gender = 'male';
    } else {
      $gender = 'female';
    }
    return $gender;
  }

  public static function checkAge($contact)
  {
    if ($contact->age === 1) {
      $age = '~19';
    } else if ($contact->age === 2) {
      $age = '20~29';
    } else if ($contact->age === 3) {
      $age = '30~39';
    } else if ($contact->age === 4) {
      $age = '40~49';
    } else if ($contact->age === 5) {
      $age = '50~59';
    } else if ($contact->age === 6) {
      $age = '60~';
    }
    return $age;
  }
}
