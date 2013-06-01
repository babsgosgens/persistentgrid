# Reset

Compass's reset-box-model should also include box-sizing: border-box;
@mixin reset-box-model {
  margin: 0;
  padding: 0;
  border: 0;
  @include box-sizing(border-box)
}

Compass's reset-font should also include the default font settings, possibly by adding a mixin on the html level
@mixin reset-base-typography {
  html {
    @include font;
  }
}
@mixin reset-font {
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

## global styles settings

Display horizontal rules for the pages's base line-height
@mixin debug-base-line($base-line-height: $base-line-height;
.debug {
  @include debug-base-line;
}



## Lists

### Reset

@mixin reset-list {
	display: inline-block;
}
.list {
	
}
.list-bullet {}
.list-alpha {}