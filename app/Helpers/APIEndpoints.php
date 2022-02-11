<?php

namespace App\Helpers;

class APIEndpoints
{
  public const GET_INSTITUTE_INFO = "/institute/info";

  public const MASTER_CATEGORIES = "/master/doc_categories";
  public const MASTER_DESIGNATIONS = "/master/designations";
  public const MASTER_EVENT_TYPES = "/master/event_types";
  public const MASTER_RESOURCE_TAGS = "/master/resource_tags";
  public const MASTER_ACHIEVEMENT_TYPES = "/master/achievement_types";

  public const GET_DEPARTMENTS = "/departments";
  public const GET_DOCUMENTS = "/documents";
  public const GET_STAFF_MEMBERS = "/staff_members";

  public const GET_ANNOUNCEMENTS = "/activity/announcements";
  public const GET_EVENTS = "/activity/events";
  public const GET_ACHIEVEMENTS = "/activity/achievements";

  public const GET_PHOTOS = "/resource/photos";
  public const GET_LABS = "/resource/labs";
}
