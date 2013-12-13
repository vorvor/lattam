; $Id$
;
; Drush 5 makefile for downloading all required modules for the "Getting started with Openlayers in Drupal 7" tutorial
; http://drupal.org/node/1481374
;
; Download Drupal 7 core, all required modules and the Openlayers 2.11 library using the drush 5 command from the document root of your website:
; drush make openlayers.make
;
; After installing Drupal core via the usual browser based installation you can use the following drush command to enable all required modules:
; drush -y en libraries ctools views views_ui geophp geofield openlayers openlayers_ui openlayers_views
;
core = 7.x
api = 2

projects[] = drupal

projects[libraries] = 2
projects[] = ctools
projects[] = views
projects[openlayers] = 2
  libraries[openlayers][download][type] = "file"
  libraries[openlayers][download][url] = "http://openlayers.org/download/OpenLayers-2.11.tar.gz"
  libraries[openlayers][download][md5] = "286dfde1db8c4c654df28c5e5664415e"
  libraries[openlayers][destination] = "libraries"
projects[] = geophp
projects[] = geofield

