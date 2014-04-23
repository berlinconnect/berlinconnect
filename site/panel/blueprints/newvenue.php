<?php if(!defined('KIRBY')) exit ?>

title: Easter
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
  introtitle:
    label: Intro Title
    type:  text
  introcopy:
    label: Intro Copy
    type:  textarea
    size:  large
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo
  detailscopy:
    label: Details Copy
    type:  textarea
    size:  large
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo
  address:
    label: Address
    type:  text
  transport:
    label: Transport
    type:  text
  openmaps:
    label: Maps Button Lable
    type:  text
  visithome:
    label: HHome Button Label
    type:  text