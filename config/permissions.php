<?php

$permisssions = [

  //Resource
  'RESOURCE' => [
    ["resource_labs_manage", "web", "Manage Laboratories"],
    ["resource_labs_read", "web", "Read Laboratories"],
    ["resource_photos_manage", "web", "Manage Photos"],
    ["resource_photos_read", "web", "Read Photos"],
  ],

  //Activity
  'ACTIVITY' => [
    ["activity_achievements_manage", "web", "Manage Achievements"],
    ["activity_achievements_read", "web", "Read Achievements"],
    ["activity_events_manage", "web", "Manage Events"],
    ["activity_events_read", "web", "Read Events"],
    ["activity_announcements_manage", "web", "Manage Announcements"],
    ["activity_announcements_read", "web", "Read Announcements"],
  ],

  //Staff
  'STAFF' => [
    ["staff_members_manage", "web", "Manage Staff Members"],
    ["staff_members_read", "web", "Read Staff Memebers"],
  ],

  //Department
  'DEPARTMENT' => [
    ["department_documents_manage", "web", "Manage Department Documents"],
    ["department_documents_read", "web", "Read Department Documents"],
    ["department_departments_manage", "web", "Manage Departments"],
    ["department_departments_read", "web", "Read Departments"],
  ],

  //Master
  'MASTER' => [
    ["master_resource_tags_manage", "web", "Manage Resource Tags"],
    ["master_resource_tags_read", "web", "Read Resource Tags"],
    ["master_doc_categories_manage", "web", "Manage Document Categories"],
    ["master_doc_categories_read", "web", "Read Document Categories"],
    ["master_event_types_manage", "web", "Manage Event Types"],
    ["master_event_types_read", "web", "Read Event Types"],
    ["master_achievement_types_manage", "web", "Manage Achievement Types"],
    ["master_achievement_types_read", "web", "Read Achievement Types"],
    ["master_designations_manage", "web", "Manage Designations"],
    ["master_designations_read", "web", "Read Designations"],
    ["master_configurations_manage", "web", "Manage Configurations"],
    ["master_configurations_read", "web", "Read Configurations"],
  ],

  //User
  'ADMIN' => [
    ["instiutes_manage", "web", "Manage Institutes"],
    ["permissions_manage", "web", "Manage Permissions"],
    ["roles_manage", "web", "Manage Roles"],
    ["users_manage", "web", "Manage Users"],
    ["user_profile", "web", "Update User Profile"],
  ]
];

return $permisssions;
