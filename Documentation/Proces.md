# Workflow of a new FE project

1) Reset
Based on Compass Reset - which is in turn based on Eric Meyer's reset - I have assembled a custom reset that is a little more configurable and specifically adapted for Persistent Grid.

2) Typography
Next, we declare the project's default typeface and style. We also set the project's default font size and leading.

3) Vertical Grid
Based on Compass Vertical Rhythm. The base-line-height and base-font-size are inherited from the Typography-module. These values are then inherited to the typography settings. If teh baseline was not yet set in the typography module - which is the default setting - you set the baseline here.

4) Base Styles
Next up are the base styles. This includes settings for the various colours that will be used throughout the project. These colours will be inherited by the submodules - unless otherwise set.

My next step would probably be to set the settings for the various headings. HTML is a highly hierarchical product, so inevitably you will need headings of various sizes to indicate the dependancies between content. However, instead of defining the headings as a base reset (at h# level), but rather identify the various levels of headings needed accross modules (main content, side bars, headers and footers and so on).

Not all headers may use the same style or fontface. This is why I like to define the different - what I have called - font-groups. I already have established one font-group, which is the project's base typography. A font-groups is simply a group of font-settings that make up the font short-declaration. By defining font-groups you leverage the use of proper weight and style tpefaces by declaring the actual bold or italic styles of your typeface, as opposed to usimg the faux versions that are rendered by the browser.

5) Now that the project's base typography has been set it's time to address some of the more commonly used UI blocks. Which ones largely depends on the type of applicationyou are building. A blog will have different requirements as a webshop, but you will probably need to style buttons, tabs, sliders and what have you.

Obviously you will also need some type of navigation styling, but I consider that as a chapter of its own.

What does the horizontal grid look like? What column widths will be introduced?


# Directory structure

Framework
/sass
	/Framework
		/Base
		 Base reset, for more info see: http://smacss.com/book/type-base
		/Forms
		/Helpers
		/Lists
		/PersistentGrid
		/Tables
		/Typography
		/UI
		/VerticalRhythm
/config.rb