<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Sections
pages: true
files: true
fields:
  id:
    label: Unique ID (eg: sunday, kids, giving)
    type:  text
  umbrella:
    label: Section
    type: text
  slatesize:
    label: Size
    type: text
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