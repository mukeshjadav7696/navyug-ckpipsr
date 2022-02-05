<?php

return [
  'MODULES' => [
    'ADMIN', 'MASTER', 'DEPARTMENT', 'STAFF', 'ACTIVITY', 'RESOURCE', 'INTERACTION'
  ],
  'USER' => [
    'ROLES' => [
      'SUPER_ADMIN' => 'SUPER_ADMIN',
      'ADMIN' => 'ADMIN',
      'INSTITUTE_ADMIN' => 'INSTITUTE_ADMIN',
      'STAFF' => 'STAFF',
    ],
    'DEFAULT_ROLES' => [
      'ADMIN' => 'Administrator',
      'INSTITUTE_ADMIN' => 'Institute Admin',
      'STAFF' => 'Staff',
    ],
  ]
];
