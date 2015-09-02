<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  subtitle:
    label: Sub Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo