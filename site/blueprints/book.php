<?php if(!defined('KIRBY')) exit ?>

title: Book
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
  text:
    label: Copy
    type:  textarea
    size:  large
    buttons:
      - h3
      - bold
      - italic
      - link