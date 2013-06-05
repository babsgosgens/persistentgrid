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
The directory structure is designed such, that it will allow for easy implementation of new modules and styles. On a lower level, it is also possible to extend existing styles. This can come in handy if - for example - you want to use the existing buttons, but only add more rounded corners. An example setup of this can be found in the UI/Buttons module.

The basic structure for any module is such:

/Modulename
	/base
		/_behavior.scss
		/_dependencies.scss
		/_functions.scss
		/_mixins.scss
		/_settings.scss
	/skins
		/skinone
			/_settings.scss
		/skintwo
			/_settings.scss
	_all.scss
	_modulename.scss

The module root contains two base files, only ever one of which you will call via the @import directive. See the section 'Configuring PG Framework' for more information.

A module may also be part of a group, for instance 'Buttons' is a module that sist within the 'UI' group:

/Group
	/ModuleOne
		/base
		/skins
		_all.scss
		_moduleone.scss
	/ModuleTwo
		/base
		/skins
		_all.scss
		_moduletwo.scss

# Configuring PG Framework

As all the modules contain their individual settings files, and some of them inherit settings from other modules (for example, the Vertical Rhythm module inherits its base-font-size and base-line-height from the Typography module), it is important to load all settings in the correct order. Also - and this very importany - all settings must be loaded before any behavior is rendered. This is especially important when extending existing behavior.