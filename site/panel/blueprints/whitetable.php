<?php if(!defined('KIRBY')) exit ?>

# homepage blueprint

title: White Table
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
    help: This is the page title.
  herotitle:
    label: Hero Title
    type:  text
    help: This is the title in the hero image.
  herocopy:
    label: Hero Copy
    type:  textarea
    size:  medium
    help: This is the text below the hero title.
  sundaysubtitle:
    label: Sunday Subtitle
    type: text
    help: This is the about Berlin Connect subtitle above the title in uppercase.
  sundaytitle:
    label: Sunday Tile
    type: text
    help: This is the uppercase title below the subtitle.
  sundaycopy:
    label: Sunday Copy
    type: textarea
    size: medium
    help: This is the text about Berlin Connect
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo
  communitysubtitle:
    label: Community Subtitle
    type: text
  communitytitle:
    label: Community Title
    type: text
  communitycopy:
    label: Community Copy
    type: textarea
    size: medium
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo
  socialsubtitle:
    label: Social Subtitle
    type: text
  socialtitle:
    label: Social Title
    type: text
  socialcopy:
    label: Social Copy
    type: textarea
    size: medium
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo
  charitywatersubtitle:
    label: Charity Water Subtitle
    type: text
  joinussubtitle:
    label: Join Us Subtitle
    type: text
  joinustitle:
    label: Join Us Title
    type: text
  joinuscopy:
    label: Join Us Copy
    type: textarea
    size: medium
    buttons:
      - h3
      - bold
      - italic
      - email
      - link
      - vimeo