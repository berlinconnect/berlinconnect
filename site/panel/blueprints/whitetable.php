<?php if(!defined('KIRBY')) exit ?>

# the white table blueprint

title: White Table
pages: true
files: false
fields:
  title:
    label: Title
    type:  text
    help: This is the page title.
  subtitle:
    label: Subtitle
    type:  textarea
    size:  medium
    help: This is the text below the logo
  podcasttitle:
    label: Podcast Title
    type: text
  podcastsubtitle:
    label: Podcast Subtitle
    type: text
  blogtitle:
    label: Transcripts Title
    type: text
  blogsubtitle:
    label: Transcripts Subtitle
    type: text
  bookstitle:
    label: Books Title
    type: text
  bookssubtitle:
    label: Books Subtitle
    type: text
  downloadsstitle:
    label: Download Title
    type: text
  downloadssubtitle:
    label: Download Subtitle
    type: text