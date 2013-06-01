# Workflow of a new FE project

1) Reset
Based on Compass Reset - which is in turn based on Eric Meyer's reset - I have assembled a custom reset that is a little more configurable and specifically adapted for Persistent Grid.

2) Vertical Grid
Based on Compass Vertical Rhythm. This is where the project's default font size and line height are set. These values are then inherited to the typography settings. Depending on your preference, you set the baseline here. By default, the baseline is set through the Typography module.

3) Typography
Next, we declare the project's default typeface and style. If the baseline was not set in the Vertical Grid module, we set it here. Else, we only declare the font-family and styles.


What is the vertical grid? This is the easiest to start with as it will be the base for typographic resets. Set a baseline and use it to set a typographic base.
To set a base, I like to introduce the full font tag at the HTML level. I also like to declare a debug class that will display the documents vertical grid by rendering horizontal lines spaced by the settings's base-line-height.

2) Next, I like to reset margins and padding all block-level elements. I also prefer to use border-box on all elements so that - if inline elements are set to behave like (inline-)block elements - they are easier to manipulate within the container's available space.

3) My next step would probably be to set the settings for the various headings. HTML is a highly hierarchical product, so inevitably you will need headings of various sizes to indicate the dependancies between content. However, instead of defining the headings as a base reset (at h# level), but rather identify the various levels of headings needed accross modules (main content, side bars, headers and footers and so on).

Not all headers may use the same style or fontface. This is why I like to define the different - what I have called - font-groups. I already have established one font-group, which is the project's base typography. A font-groups is simply a group of font-settings that make up the font short-declaration. By defining font-groups you leverage the use of proper weight and style tpefaces by declaring the actual bold or italic styles of your typeface, as opposed to usimg the faux versions that are rendered by the browser.

5) Now that the project's base typography has been set it's time to address some of the more commonly used UI blocks. Which ones largely depends on the type of applicationyou are building. A blog will have different requirements as a webshop, but you will probably need to style buttons, tabs, sliders and what have you.

Obviously you will also need some type of navigation styling, but I consider that as a chapter of its own.

What does the horizontal grid look like? What column widths will be introduced?
