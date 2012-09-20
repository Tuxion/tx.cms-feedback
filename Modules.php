<?php namespace components\feedback; if(!defined('TX')) die('No direct access.');

class Modules extends \dependencies\BaseViews
{

  protected function feedback_form()
  {
    return array(
      'title' =>
        'Verstuur feedback',
      'description' =>
        'Wat vindt u van de applicatie? Heeft u opmerkingen of suggesties ter verbetering ervan? Laat het ons ontwikkelaarsteam weten. Bij voorbaat dank!'
    );
  }

}
