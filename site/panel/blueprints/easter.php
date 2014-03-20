<?php if(!defined('KIRBY')) exit ?>

title: Easter
pages: true
files: false
fields:
  title:
    label: Title
    type:  text
  storytitle:
    label: Story Title
    type:  text
  storycopy:
    label: Story Copy
    type:  textarea
    size:  large
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo
  causetitle:
    label: Cause Title
    type:  text
  causecopy:
    label: Cause Copy
    type:  textarea
    size:  large
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo
  eventtitle:
    label: Event Title
    type:  text
  eventsubtitle:
    label: Event Subtitle
    type:  text
  eventcopy:
    label: Event Copy
    type:  textarea
    size:  small
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo
  eventdetails:
    label: Event Details
    type:  textarea
    size:  large
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo
  ticketbutton:
    label: Ticket Button Text
    type:  text
  buttonsubcopy:
    label: Text below button
    type:  text