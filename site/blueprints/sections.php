<?php if(!defined('KIRBY')) exit ?>

# sections blueprint

title: Sections
pages: true
files: true
fields:
  pagelink:
    label: Enter a url (leaving this blank opens the lightbox)
    type:  text
    help: If you enter a link here the section slate will be converted into a link. If you leave it blank, clicking on the slate will open a lightbox
  uniqueid:
    label: Unique ID (eg: sunday, kids, giving)
    type:  text
    help: This is a unique ID. It should describe the content. It can't have spaces or capital letters.
  umbrella:
    label: Umbrella
    type: text
    help: This is the part the section goes in. It can be either Sundays, Community or Social
  slatesize:
    label: Size
    type: text
    help: This determines the size of the container with the image. It can be square big, square small or rectangle
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
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo