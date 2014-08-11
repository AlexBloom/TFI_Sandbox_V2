Options

Most Commonly Used:
Offer links to all sub pages as default, use JS to conditionally load in said links instead of navigate to other pages
- Use permanent roots http://sandbox.tfi.org/...insertlinkhere... to keep things in sub-folders and sub-directories and navigate between directories with conditionals

Load All Sub Pages as default html, JS to conditionally prevent load

Use javascript to reload PHP includes on server side - possible?



Each of these sub pages uses php includes, so the templates do the organization
http://tfisandbox.digitalfrontiersman.com/discover/interactive-landscape/web
http://tfisandbox.digitalfrontiersman.com/discover/interactive-landscape/installations
 
Reloading each one will update each section, but we can also do a get request of the article within each section instead of reloading the whole page:

so javascript will look like this

Tag Navigation:
<a href="thefulllinkhere">Tagname</a>

a prevent default
get a href"thefulllinkhere > article"
and replace current "article" content with that article, then use the history api to re-write the links. Makes sense now. testing will be more difficult, but not terrible.

Other things to look into:

- server mod rewrite of extensions
- tfi analytics code
- CMS hookup code
- 
