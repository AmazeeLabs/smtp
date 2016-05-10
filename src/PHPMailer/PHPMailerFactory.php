<?php

/**
 * @file
 *  Contains \Drupal\smtp\PHPMailer\PHPMailerFactory
 */

namespace Drupal\smtp\PHPMailer;


class PHPMailerFactory {

  public static function getPHPMailer() {
    static $mailer;
    if (!isset($mailer)) {
      $mailer = new PHPMailer();
    }
    return $mailer;
  }
}
