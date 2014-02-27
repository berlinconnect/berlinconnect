<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Sections
pages: true
files: true
fields:
  id:
    label: Unique ID (eg: sunday, kids, giving)
    type:  text
  section:
    label: Umbrella
    type: select
    options:
      1: Sundays
      2: Community
      3: Social
    default: 1
  title: 
    label: Title
    type:  text
  intro: 
    label: Intro
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large