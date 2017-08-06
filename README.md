moodle-block_teacherassistant
============================

[![Build Status](https://travis-ci.org/halbo5/moodle-block_teacherassistant.svg?branch=master)](https://travis-ci.org/halbo5/moodle-block_teacherassistant)

Block to display a button to create courses from the dashboard. It also shows links to help teachers using moodle.

This block is very specific to our university (Universty Mulhouse, France). Not sure it can be used elsewhere as is. Tell us ;-)

Requirements
------------

This plugin requires Moodle 3.3+ (not tested on older version)


Motivation for this plugin
--------------------------

This plugin is used in a global project to simplify moodle. Basicly, we have two types of users : teacher that have a very basic use of moodle and geeks that want to test most of moodle functionalities.

With this block we display a visible button on the frontpage (dashboard). You have also the possibility to provide up to 6 links that can help teachers (training plan, how to delete a course, ...).


Installation
------------

Install the plugin like any other plugin to folder
/block/teacherassistant

See http://docs.moodle.org/en/Installing_plugins for details on installing Moodle plugins


Usage & Settings
----------------

### 1. Settings

Once installed, you have to provide the ID for the category where all teachers can create a course. By default it is the first category created (Miscellaneous). If you don't do that, the button for creating a course will send to an error page.

Then you can provide up to 5 links to help your teachers. 4 links has to be courses in moodle. You just have to provide the ID of the course :
- how to delete a course
- how to find a cohort
- a learning space to talk about moodle and learn how to use it
- ask for changing teachers rights (for example, the teachers wants to create a course in a new category)

And the last link points to a teacher training plan.

If the user is not a teacher (in fact if he has not the capability moodle/course:create), he sees only the link to ask for teacher's rights.

The settings can be changed in "Site administration > Plugins > Manage blockes > Teacher Assistant"

You can adapt the links. If you do not want to display a link about how to find a cohort, but you need a link about how to create a MOOC, you can edit the language string. This can be done from "site administration > language".

### 2. Usage

This block should be by default on the users dashboard.
The user can :
- change the title of the block
- change the categoryid and set the category where he creates courses the more often

Plugin repositories
-------------------

This block is very specific to our university (Universty Mulhouse, France). It will not be in the moodle's plugin directory.

The latest development version can be found on Github:
https://github.com/halbo5/moodle-block_teacherassistant


Bug and problem reports / Support requests
------------------------------------------

This plugin is carefully developed and thoroughly tested, but bugs and problems can always appear.

Please report bugs and problems on Github:
https://github.com/halbo5/moodle-block_teacherassistant/issues

We will do our best to solve your problems, but please note that due to limited resources we can't always provide per-case support.


Feature proposals
-----------------

Due to limited resources, the functionality of this plugin is primarily implemented for our own local needs and published as-is to the community. We are aware that members of the community will have other needs and would love to see them solved by this plugin.

Please issue feature proposals on Github:
https://github.com/halbo5/moodle-block_teacherassistant/issues

Please create pull requests on Github:
https://github.com/halbo5/moodle-block_teacherassistant/pulls

We are always interested to read about your feature proposals or even get a pull request from you, but please accept that we can handle your issues only as feature _proposals_ and not as feature _requests_.


Moodle release support
----------------------

Due to limited resources, this plugin is only maintained for the most recent major release of Moodle. However, previous versions of this plugin which work in legacy major releases of Moodle are still available as-is without any further updates in the Moodle Plugins repository.

There may be several weeks after a new major release of Moodle has been published until we can do a compatibility check and fix problems if necessary. If you encounter problems with a new major release of Moodle - or can confirm that this plugin still works with a new major relase - please let us know on Github.

If you are running a legacy version of Moodle, but want or need to run the latest version of this plugin, you can get the latest version of the plugin, remove the line starting with $plugin->requires from version.php and use this latest plugin version then on your legacy Moodle. However, please note that you will run this setup completely at your own risk. We can't support this approach in any way and there is a undeniable risk for erratic behavior.


Right-to-left support
---------------------

This plugin has not been tested with Moodle's support for right-to-left (RTL) languages.
If you want to use this plugin with a RTL language and it doesn't work as-is, you are free to send us a pull request on Github with modifications.


Copyright
---------

Alain Bolli

