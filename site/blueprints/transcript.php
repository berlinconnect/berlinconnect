<?php if(!defined('KIRBY')) exit ?>

title: Transcript
pages: true
files: false
fields:
  title:
    label: Title
    type:  text
  link:
    label: Link
    type:  text
  author:
    label: Author
    type:  text
  datestamp:
    label: Date (dd/mm/yy)
    type:  text
  text:
    label: Copy
    type:  textarea
    size:  large
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo