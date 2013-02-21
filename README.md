# The Persistent Grid
===================

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

Or, better yet:

```
.myclass {
	@extend .column;
	@include column-width(1/2);
}
```
Adding the optional parameter true will make the columnwidth persistent on all screen sizes. By omitting it, the column will span the full width of the screen below the first breakpoint.


In the latest version, breakpoints and default column widths are configurable, although the grid only employs the first breakpoint. It'sup to you to decide if and which breakpoints you want to implement as it is also up to you to decide which column-widths you want to add rules for.

For more info on the included mixins, view: [https://github.com/babsgosgens/persistent-grid/blob/master/sass/persistent-grid/_mixins.scss](https://github.com/babsgosgens/persistent-grid/blob/master/sass/persistent-grid/_mixins.scss)

## Additional style rules
The framework branch [https://github.com/babsgosgens/persistent-grid/tree/framework](https://github.com/babsgosgens/persistent-grid/tree/framework) contains additional styles for common markup, among which:
* forms,
* tables,
* buttons,

as well as a number of helper functions and mixins.

All elements are setup to include a vertical rhythm and I am also doctoring a way to impose the vertical rhythm on images. Work in progress.

I'm currently using these in one of my projects now, so there are changes to expect as I go.

## To do
Add proper annotation
