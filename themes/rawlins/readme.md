READ THIS -

Create document first using semantic dom structure, and then style.
It's important to use class names and IDs properly.
Minimalism is key. Rely upon mixins when possible.
If element is included inside dynamic content, a class name is required.



	// Plugins To Install
	// +++++++++++++++++++
	// Advanced Custom Fields Pro
	// Post Thumbnail Editor
	// W3 Total Cache
	// Dynamic Links 0.2
	// WP Media Category Management



There is no reason why every block of content can't follow a semantic structure and then style based off class or ID.
Try your best to create a clean, minimal dom - style based off parent ID or class.

It is approriate to use a class name when defining a component or module that needs to stand alone. When possible, seek
out an HTML5 element that could serve a better purpose than a div with a class.

Modules and components should be complete, styled, functional, and work independant of other modules and templates - though
it is okay to minimally rely upon styling elements such as buttons, typography, etc.

While nesting is a great use of SASS, it is only appropriate to nest 3 levels deep at most. Nesting is most appropraite when
defining styles for modules and components. You want your stlye definitions for modules to be robust enough that they can't be
easily over-ridden by generic or template specific styles. If needed, provide a module-reset to clear generic and template based
style definitions.

Use structured data and aria roles/tags when you can.
http://getschema.org/index.php/Main_Page
http://searchengineland.com/how-to-use-rich-snippets-structured-markup-for-high-powered-seo-99081
http://www.deque.com/blog/aria-blog-series-landmark-roles-page-structure/

Examples:

<!-- article inside a loop -->
<article class="archive-{posttypename}" itemscope itemType="http://schema.org/BlogPosting">
	<header>
		<h2 itemprop="headline"></h2>
		<h3></h3>
		<h4></h4>
		<time>
			<meta itemprop="datePublished" content="2011-06-02T16:00Z"/>
		</time>
	</header>
	<section itemprop="articleBody">
		<p></p>
	</section>
	<section class="dark">
		<h4></h4>
	</section>
	<footer></footer>
</article>
<!-- END -->

<!-- single article -->
<article class="single-{posttypename}" role="main" itemscope itemType="http://schema.org/BlogPosting">
	<header>
		<h2 itemprop="headline"></h2>
		<h3></h3>
		<h4></h4>
		<time>
			<meta itemprop="datePublished" content="2011-06-02T16:00Z"/>
		</time>
	</header>
	<section itemprop="articleBody">
		<p></p>
	</section>
	<footer></footer>
</article>
<!-- END -->