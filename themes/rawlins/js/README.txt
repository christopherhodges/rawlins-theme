### How We Organize .js files (with Grunt) ###

Grunt has a package that will concatenate all of the .js files into one file, which is mostly nice but some files need to remain separate. The idea is that (on Wordpress) some .js files need to load in the <head>, some need to load on specific templates, and the rest can be loaded on the bottom of every page.

Files that need to be included in the <head> would be primary stuff that other scripts depend on, namely jQuery, Conditionizr, and Modernizr (including HTML5shiv). These files remain in the base js/ folder and are individually enqueued as needed.

For .js files that need to load only on a specific template(s), they also should remain in the base /js folder. These should be registered in inc/enqueue.php but enqueued in their respective template files.

Any other .js files that would need to be included on all (or most) pages should be placed in the js/development/ folder. Additionally, any libraries (such as Fancybox or Viewport selectors) go in js/develpment/libs/.

Everything inside of the js/development/ folder will be concatenated into one file - js/scripts.js - and then minified into the final file - js/scripts.min.js