; This is the makefile for the codebase for lamrt.org.uk
; run it using 'drush make lamrt.make'
; this just builds the codebase - you then need to clone the repo with git
; repo should be cloned to sites/lamrt.org.uk

core = 6.x

projects[] = "drupal"

; Modules - into sites/all/modules
projects[] = "admin_menu"
projects[] = "adminrole"
projects[] = "advanced_help"
projects[] = "auto_nodetitle"
projects[] = "better_formats"
projects[] = "ctools"
projects[] = "date"
projects[] = "devel"
projects[] = "filefield"
projects[] = "geo"
projects[] = "imageapi"
projects[] = "imagecache"
projects[] = "imagefield"
projects[] = "jquery_ui"
projects[] = "lightbox2"
projects[] = "mapstraction"
projects[] = "migrate"
projects[] = "noderef_image_helper"
projects[] = "openlayers"
projects[] = "panels"
projects[] = "pathauto"
projects[] = "popups"
projects[] = "popups_reference"
projects[] = "schema"
projects[] = "tabs"
projects[] = "token"
projects[] = "tw"
projects[] = "vertical_tabs"
;projects[] = "views"  --- we use a patched version below ---
projects[] = "views_attach"
projects[] = "views_tabs"
projects[] = "webform"
projects[] = "wysiwyg"

; Themes - we only need a custom theme which is in the git repo

; Libraries - into /sites/all/libraries unless specified
libraries[tinymce][download][type] = "get"
libraries[tinymce][download][url] = "http://downloads.sourceforge.net/project/tinymce/TinyMCE/3.2.7/tinymce_3_2_7.zip"
libraries[tinymce][directory_name] = "tinymce" 

libraries[jquery_ui][download][type] = "get"
libraries[jquery_ui][download][url] = "http://jquery-ui.googlecode.com/files/jquery.ui-1.6.zip"
libraries[jquery_ui][directory_name] = jquery.ui
libraries[jquery_ui][destination] = modules/jquery_ui

; Patches - will be automagically applied to each project
projects[views][version] ="2.8"
projects[views][patch][] = "http://github.com/pilotinternet/LAMRT/raw/master/dev/viewsformsfix.patch" 
