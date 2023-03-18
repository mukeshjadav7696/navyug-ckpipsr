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
          'title' => 'Principal',
          'url' => '/about/principal'
        ],
        [
          'title' => 'Contact Us',
          'url' => '/about/contact-us'
        ]
      ]
    ],
    'academics' => [
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
          'title' => 'Approvals',
          'url' => '/academics/approvals'
        ],
        [
          'title' => 'Departments',
          'url' => '/departments/index'
        ],
      ]
    ],
    'staff' => [
      'title' => 'Staff',
      'links' => [
        [
          'title' => 'Faculties',
          'url' => '/staff/list/teaching'
        ],
        // [
        //   'title' => 'Administrative',
        //   'url' => '/staff/list/non-teaching'
        // ],
      ]
    ],
    'alumni' => [
      'title' => 'Cells',
      'links' => [
        [
          'title' => 'Internal Quality Assurance Cell',
          'url' => '/cells/iqac'
        ],
        [
          'title' => 'Grievance Redressal Cell',
          'url' => '/cells/grc'
        ],
        [
          'title' => 'Anti Ragging Committee',
          'url' => '/cells/arc'
        ],
        [
          'title' => 'Women Development Cell',
          'url' => '/cells/wdc'
        ],
        [
          'title' => 'Gender Sensitization Cell',
          'url' => '/cells/gsc'
        ],
        [
          'title' => 'Anti-Discrimination Cell',
          'url' => '/cells/adc'
        ],
        [
          'title' => 'SC-ST Cell',
          'url' => '/cells/scst'
        ],
      ]
    ],
  ],

  'right' => [
    'students' => [
      'title' => 'Students Corner',
      'links' => [
        [
          'title' => 'Timetables',
          'url' => '/students/timetables'
        ],
        [
          'title' => 'Scholorships',
          'url' => '/students/scholorships'
        ],
        [
          'title' => 'Notice Board',
          'url' => '/announcements/notice'
        ],
        [
          'title' => 'Alumni',
          'url' => '/students/alumni'
        ],
        [
          'title' => 'SSIP',
          'url' => '/students/ssip'
        ],
        [],
        [
          'title' => 'Academic Results',
          'url' => 'https://www.gtu.ac.in/result.aspx'
        ],
        [
          'title' => 'Documents',
          'url' => '/documents'
        ],
      ]
    ],
    'tandp' => [
      'title' => 'T&P',
      'links' => [
        [
          'title' => 'Committee',
          'url' => '/tnp/committee'
        ],
        [
          'title' => 'Placements',
          'url' => '/tnp/placements'
        ],
        [
          'title' => 'Industrial Visits',
          'url' => '/tnp/visits'
        ]
      ]
    ],
    'resources' => [
      'title' => 'Resources',
      'links' => [
        [
          'title' => 'Laboratories',
          'url' => '/resources/laboratories'
        ],
        [
          'title' => 'Photo Galary',
          'url' => '/resources/photo-gallery'
        ]
      ]
    ],
    'activities' => [
      'title' => 'Activities',
      'links' => [
        [
          'title' => 'Achievements',
          'url' => '/activities/achievements'
        ],
        [
          'title' => 'Events',
          'url' => '/activities/events'
        ],
      ]
    ],
    // 'announcements' => [
    //   'title' => 'Announcements',
    //   'url' => '/announcements/announcement',
    //   'icon' => 'fas fa-bullhorn'
    // ],
  ],

  'quick' => [
    'docs' => [
      'PCI SIF 2022-23' => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/6402ffe40fcad.pdf',
      'NIRF 2022-23' => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/6402ff721152d.pdf',
      'Mandatory Disclosure' => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/6402ff23a17be.pdf',
    ],
    'newletters' => [
      'e-Bulletin 2022-23' => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/64030079e570a.pdf'
    ],
    'important links' => [
      'JACPC' => 'https://jacpcldce.ac.in/degree-diploma-pharmacy',
      'PCI' => 'https://www.pci.nic.in/',
      'AICTE' => 'http://www.aicte-india.org/',
      'GTU' => 'http://www.gtu.ac.in/'
    ],
  ],
];
