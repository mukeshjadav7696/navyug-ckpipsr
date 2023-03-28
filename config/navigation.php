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
          'title' => 'Approvals',
          'url' => '/academics/approvals'
        ],
        [
          'title' => 'Faculties',
          'url' => '/staff/list/teaching'
        ],
        [
          'title' => 'Resources',
          'links' => [
            [
              'title' => 'Laboratories',
              'url' => '/resources/laboratories'
            ],
            [
              'title' => 'Photo Galary',
              'url' => '/resources/photo-gallery'
            ],
          ]
        ]
        // [
        //   'title' => 'Admission',
        //   'url' => '/academics/admission'
        // ],
        // [
        //   'title' => 'Departments',
        //   'url' => '/departments/index'
        // ],
      ]
    ],
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
    'cells' => [
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
    'rni' => [
      'title' => 'Research & Innovation',
      'links' => [
        [
          'title' => 'Research',
          'links' => [
            [
              'title' => 'About Research',
              'url' => '/rni/research/about'
            ],
            [
              'title' => 'Research Ethics',
              'url' => '/rni/research/ethics'
            ],
            [
              'title' => 'Patents',
              'url' => '/rni/research/patents'
            ],
            [
              'title' => 'Research Publications',
              'url' => '/rni/research/publications'
            ],
            [
              'title' => 'MOUs',
              'url' => '/rni/research/mous'
            ],
            [
              'title' => 'Books and Chapters',
              'url' => '/rni/research/books'
            ],
            [
              'title' => 'Consultancy and Sponsored Project',
              'url' => '/rni/research/consultancy'
            ],
            [
              'title' => 'Seminar and Consultancy Grants',
              'url' => '/rni/research/grants'
            ],
            [
              'title' => 'Doctaral Studies',
              'url' => '/rni/research/doctaral'
            ],
            [
              'title' => 'PG Projects',
              'url' => '/rni/research/pg'
            ],
          ]
        ],
        [
          'title' => 'SSIP',
          'links' => [
            [
              'title' => 'About SSIP',
              'url' => '/rni/ssip/about'
            ],
            [
              'title' => 'Mentors',
              'url' => '/rni/ssip/mentors'
            ],
            [
              'title' => 'Update',
              'url' => '/rni/ssip/updates'
            ],
            [
              'title' => 'Apply to Get Assistance',
              'url' => '/rni/ssip/apply'
            ],
          ]
        ],
        [
          'title' => 'IIC',
          'url' => '/rni/iic'
        ],

      ]
    ],
    'iqac' => [
      'title' => 'IQAC',
      'links' => [
        [
          'title' => 'About IQAC',
          'url' => '/iqac/about'
        ],
        [
          'title' => 'IQAC Composition',
          'url' => '/iqac/composition'
        ],
        [
          'title' => 'Initiatives and Activities',
          'url' => '/iqac/initiatives'
        ],
        [
          'title' => 'MoMs and ATR',
          'url' => '/iqac/moms'
        ],
        [
          'title' => 'AISHE',
          'url' => '/iqac/aishe'
        ],
        [
          'title' => 'IIQA',
          'url' => '/iqac/iiqa'
        ],
        [
          'title' => 'Best Practices',
          'url' => '/iqac/practices'
        ],
        [
          'title' => 'Institution Distinctiveness',
          'url' => '/iqac/distinctiveness'
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
        ],
        [
          'title' => 'Activity',
          'url' => '/tnp/activity'
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
      '2022-23' => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/64030079e570a.pdf',
      "2020-21" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bddf2cad4b.pdf",
      "Winter 2019" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bdddcb38ba.pdf",
      "Winter 2018" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd8cbc2bfa.pdf",
      "Summer 2018" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd8e4cfdbd.pdf",
      "Summer 2017" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd85b4d034.pdf",
      "Winter 2016" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd9516f8b0.pdf",
      "2016" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd8af982a6.pdf",
      "2015" => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd8957541b.pdf'
    ],
    'important links' => [
      'JACPC' => 'https://jacpcldce.ac.in/degree-diploma-pharmacy',
      'PCI' => 'https://www.pci.nic.in/',
      'AICTE' => 'http://www.aicte-india.org/',
      'GTU' => 'http://www.gtu.ac.in/'
    ],
  ],
];
