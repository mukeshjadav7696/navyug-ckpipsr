<?php

namespace App\Helpers;


class ViewHelper
{

  /**
   * Get social icons
   *
   * @return void
   */
  public static function socialIcons()
  {
    return [
      'facebook' => 'fab fa-facebook-f',
      'linkedin' => 'fab fa-linkedin',
      'twitter' => 'fab fa-twitter',
      'instagram' => 'fab fa-instagram',
      'telegram' => 'fab fa-telegram',
      'whatsapp' => 'fab fa-whatsapp',
      'youtube' => 'fab fa-youtube',
    ];
  }
}
