<?php if(!defined('KIRBY')) exit ?>

# sections blueprint

title: Sections
pages: true
files: true
fields:
  id:
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
    help: This determines the size of the container with the image. It can be big-square, small-square or rectangle
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