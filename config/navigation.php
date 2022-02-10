<?php

return [

  /*
    |--------------------------------------------------------------------------
    | Institute navigations
    |--------------------------------------------------------------------------
    |
    | This file is for storing navigation of the institute
    |   For divider between to links - [],
    |   For internal routes use url syntax    
    */

  'left' => [
    'home' => [
      'title' => 'Home',
      'url' => '/',
      'icon' => 'fas fa-home'
    ],
    'about' => [
      'title' => 'About Us',
      'links' => [
        [
          'title' => 'Profile',
          'url' => '/about/profile'
        ],
        [
          'title' => 'Vision and Mission',
          'url' => '/about/vision-mission'
        ],
        [
          'title' => 'The Trust',
          'url' => '/about/trust'
        ],
        [
          'title' => 'The Founder',
          'url' => '/about/founder'
        ],
        [
          'title' => 'Governing Body',
          'url' => '/about/governing-body'
        ],
        [
          'title' => 'Contact Us',
          'url' => '/about/contact-us'
        ]
      ]
    ],
    [
      'title' => 'Academics',
      'links' => [
        [
          'title' => 'Courses Offered',
          'url' => '/academics/courses'
        ],
        [
          'title' => 'Admission',
          'url' => '/academics/admission'
        ],
        [
          'title' => 'College App',
          'url' => 'https://play.google.com/store/apps/details?id=com.mayursoft.collegeerpnavyugcommerce'
        ],
        [
          'title' => 'VNSGU Admission',
          'url' => 'https://admission.vnsgu.net/'
        ]
      ]
    ]
  ],

  'right' => [
    'scholorship' => [
      'title' => 'Scholorship',
      'links' => [
        [
          'title' => 'Digital Gujarat',
          'url' => 'https://www.digitalgujarat.gov.in/'
        ],
        [
          'title' => 'National Scholorship',
          'url' => 'https://scholarships.gov.in/'
        ]
      ]
    ],
    'mobile_app' => [
      'title' => 'College App',
      'url' => 'https://play.google.com/store/apps/details?id=com.mayursoft.collegeerpnavyugcommerce',
      'icon' => 'fab fa-google-play'
    ],
    'contact' => [
      'title' => 'Contact Us',
      'url' => '/about/contact-us',
      'icon' => 'fas fa-map'
    ],
  ],

  'quick' => [
    'home' => [
      'Home' => '/',
      'Profile' => '/about/profile'
    ],
    'about' => [
      'The Founder' => '/about/founder',
      'College App' => 'https://play.google.com/store/apps/details?id=com.mayursoft.collegeerpnavyugcommerce',
    ],
    'links' => [
      'Digital Gujarat' => 'https://www.digitalgujarat.gov.in/',
      'National Scholorship' => 'https://scholarships.gov.in/',
      'Digital Gujarat' => 'https://www.digitalgujarat.gov.in/',
      'National Scholorship' => 'https://scholarships.gov.in/'
    ],
    'newletters' => [
      'The Founder' => '/about/founder',
      'College App' => 'https://play.google.com/store/apps/details?id=com.mayursoft.collegeerpnavyugcommerce',
    ],
  ],
];
