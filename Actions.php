<?php namespace components\feedback; if(!defined('TX')) die('No direct access.');

class Actions extends \dependencies\BaseComponent
{

  protected function send_feedback($data)
  {

    $body =
      $data->feedback.
      "\n\nUser ID: ".tx('Account')->user->id.
      "\nBrowser: ".tx('Data')->server->HTTP_USER_AGENT;

    mail(
      EMAIL_NAME_WEBMASTER.' <'.EMAIL_ADDRESS_WEBMASTER.'>',
      'Website feedback',
      $body,
      'FROM: '.EMAIL_NAME_AUTOMATED_MESSAGES.' <'.EMAIL_ADDRESS_AUTOMATED_MESSAGES.'>'
    );
  }

}
