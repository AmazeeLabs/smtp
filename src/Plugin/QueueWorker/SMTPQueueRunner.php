<?php

/**
 * @file
 *  Contains \Drupal\smtp\Plugin\QueueWorker\SMTPQueueRunner
 */

namespace Drupal\smtp\Plugin\QueueWorker;


use Drupal\Core\Queue\QueueWorkerBase;

/**
 * Runs the mails from the queue.
 *
 * @QueueWorker(
 *   id = "smtp_send_queue",
 *   title = @Translation("SMTP Queue Runner"),
 *   cron = {"time" = 60}
 * )
 */
class SMTPQueueRunner extends QueueWorkerBase {

  /**
   * {@inheritdoc}
   */
  public function processItem($data) {
    _smtp_mailer_send($data);
  }
}
