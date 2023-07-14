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
      'title' => ' About Us',
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
          'title' => 'PO and PEOs',
          'url' => '/about/po-peos'
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
          'links' => [
            [
              'title' => 'B.Pharm',
              'url' => '/academics/courses/bpharm'
            ],
            [
              'title' => 'M.Pharm',
              'url' => '/academics/courses/mpharm'
            ],
            [
              'title' => 'Short Term Certificate',
              'url' => '/academics/courses/shortterm'
            ],          
          ]
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
              'title' => 'Sports',
              'url' => '/resources/sports'
            ],
            [
              'title' => 'Hostel',
              'url' => '/resources/hostel'
            ],
            [
              'title' => 'Medical',
              'url' => '/resources/medical'
            ],
            [
              'title' => 'Transportation',
              'url' => '/resources/transportation'
            ],
            [
              'title' => 'Seminar Hall',
              'url' => '/resources/seminar-hall'
            ],
            [
              'title' => 'Cafeteria',
              'url' => '/resources/cafeteria'
            ],
            [
              'title' => 'Central Facilities',
              'url' => '/resources/central'
            ],
            [
              'title' => 'EV Charging Station',
              'url' => '/resources/echarge'
            ],
            [
              'title' => 'Medicinal Garden',
              'url' => '/resources/garden'
            ],
            // [
            //   'title' => 'Photo Galary',
            //   'url' => '/resources/photo-gallery'
            // ],
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
          'title' => 'Hobby Club',
          'url' => '/students/hobbyclub'
        ],
        [
          'title' => 'Notice Board',
          'url' => '/announcements/notice'
        ],
        [
          'title' => 'Alumni',
          'url' => '/students/alumni'
        ],
        [],
        [
          'title' => 'Course Website',
          'url' => '/students/courses'
        ],
        [
          'title' => 'Educational Videos',
          'url' => '/students/evideos'
        ],
        [
          'title' => 'E-Library',
          'url' => '/students/elib'
        ],
        [
          'title' => 'Academic Results',
          'url' => 'https://www.gtu.ac.in/result.aspx'
        ]
      ]
    ],
    'cells' => [
      'title' => 'Cells',
      'links' => [
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
        [
          'title' => 'Entrepreneurship Development Cell',
          'url' => '/cells/edc'
        ],
        [
          'title' => 'Physically Disability Grievance Redressal Cell',
          'url' => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/644412c0db2c6.pdf'
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
        [
          'title' => 'RTI',
          'url' => '/iqac/rti'
        ],
        [
          'title' => 'NIRF',
          'url' => '/iqac/nirf'
        ],
      ]
    ],
    'tandp' => [
      'title' => 'T&P',
      'links' => [
        [
          'title' => 'About T & P Cell',
          'url' => '/tnp/committee'
        ],
        [
          'title' => 'Placement Details',
          'url' => '/tnp/placements'
        ],
        [
          'title' => 'Industrial Visits',
          'url' => '/tnp/visits'
        ],
        [
          'title' => 'Industrial Training',
          'url' => '/tnp/training'
        ],
        [
          'title' => 'Activities',
          'url' => '/tnp/activity'
        ],
        [
          'title' => 'Placement Brochures',
          'url' => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/643e69c173a1c.pdf'
        ],
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
      'Mandatory Disclosure' => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/6402ff23a17be.pdf',
    ],
    'newletters' => [
      'Gunadhya Summmer 2022' => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/64030079e570a.pdf',
      "Gunadhya 2020-21" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bddf2cad4b.pdf",
      "Gunadhya 2019" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bdddcb38ba.pdf",
      "CKPIPSR e-newsletter Volume 9, Issue II, 2017" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd8cbc2bfa.pdf",
      "CKPIPSR e-newsletter Volume 1o, Issue I, 2018" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd8e4cfdbd.pdf",
      "CKPIPSR e-newsletter Volume 9, Issue I, 2017" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd85b4d034.pdf",
      "CKPIPSR e-newsletter Volume 8, Issue 2, 2016" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd9516f8b0.pdf",
      "CKPIPSR e-newsletter Volume 7, Issue 1, 2016" => "https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd8af982a6.pdf",
      "CKPIPSR e-newsletter Volume 6, Issue 1, 2015" => 'https://console-navyugtrust-org.s3.ap-south-1.amazonaws.com/app/institutes/102/departments/docs/641bd8957541b.pdf'
    ],
    'important links' => [
      'JACPC' => 'https://jacpcldce.ac.in/degree-diploma-pharmacy',
      'PCI' => 'https://www.pci.nic.in/',
      'AICTE' => 'http://www.aicte-india.org/',
      'GTU' => 'http://www.gtu.ac.in/'
    ],
  ],
];
