# The Persistent Grid

More info can be found here: [http://babsgosgens.github.com/persistent-grid](http://babsgosgens.github.com/persistent-grid/)

The Persistent Grid is a very lightweight and simple, responsive grid. It is still in its early stages and I'm currently test driving it.

Feel free to use it. I would appreciate any feedback you may have.

## Recent changes
Include mixins for easy 'mixing' of column behavior. Example use:

```
.myclass {
	@include column(1/2);
}
```

Or:

```
.myclass {
	// Will force the element to behave as a column
	@extend .column-behavior();
	// Will include the margins as per the settings
	@extend .column-spacing();
	// Will make the column half the size of its container
	@include column-width(1/2);
}
```

Adding the optional parameter true will make the columnwidth persistent on all screen sizes. By omitting it, the column will span the full width of the screen below the first breakpoint.

For more info on the included mixins, view: [https://github.com/babsgosgens/persistent-grid/blob/master/sass/persistent-grid/_mixins.scss](https://github.com/babsgosgens/persistent-grid/blob/master/sass/persistent-grid/_mixins.scss)

And this gives you an idea of what settings can be applied: [https://github.com/babsgosgens/persistent-grid/blob/master/sass/persistent-grid/_settings.scss](https://github.com/babsgosgens/persistent-grid/blob/master/sass/persistent-grid/_settings.scss)

## Additional style rules
The extended branch [https://github.com/babsgosgens/persistent-grid/tree/extended](https://github.com/babsgosgens/persistent-grid/tree/extended) contains additional styles for common markup, among which:
* forms,
* tables,
* buttons,

as well as a number of helper functions and mixins.

All elements are setup to include a vertical rhythm and I am also doctoring a way to impose the vertical rhythm on images. Work in progress.

I'm currently using these in one of my projects now, so there are changes to expect as I go.

## To do
Add proper annotation
