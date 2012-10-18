<!DOCTYPE html>

<html>
<head>
  <title>The Persistent Grid</title>
  <style type="text/css">
  .col {
	vertical-align: top;
  	display: inline-block;
  	width: 33.333333%;
  	margin-right: -0.2em !important;
  }
  .col.twelfth  { width: 8.333333%; }
  .col.sixth    { width: 16.666667%; }
  .col.fourth   { width: 25%; }
  .col.third    { width: 33.333333%; }
  .col.half     { width: 50%; }
  .col.twothird { width: 66.666667%; }
  .col.full     { width: 100%; }

  @media screen and (max-width: 767px) {
	.col:not(.persistent) { width: 100%; }
  }
  @media screen and (min-width: 768px) and (max-width: 1023px) {
	.col { width: 50%; }
  }
  @media screen and (min-width: 1280px) and (max-width: 1679px) {
	.col { width: 25%; }
  }
  @media screen and (min-width: 1680px) {
	.col { width: 16.666667%; }
  }


  /* Cosmetic styles */
  .container {
  	margin: 0 20px;
  }
  .col {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	padding: 10px;
  }
  .col:nth-of-type(odd) {
	background-color: LightGrey;
  }
  .col:nth-of-type(even) {
	background-color: WhiteSmoke;
  }
  .collection {
  	margin: 0 -10px;
  }
  table {
  	width: 100%;
  	border-spacing: 0;
  	border-collapse: collapse;
  }
  thead th {
  	text-align: right;
  	padding: 0 1%;
  }
  tbody th {
  	text-align: left;
  }
  th, td {
  padding: 5px;
  border-bottom: 1px solid LightGrey;
  }
  thead th:nth-of-type(even),
  td:nth-of-type(odd) {
  	background-color: WhiteSmoke;
  }
  tbody td {
	text-align: right;
  	padding: 0 1%;
  }
  ul {
  	padding: 0;
  }

  </style>
</head>

<body>
  <div class="container">
	<h1>The Persistent Grid</h1>
	<p class="third col">The Persistent Grid started out as a little experiment on how to evenly distribute containers across devices when it evolved into a very lightweight (around 20 lines of unminified CSS), simple, responsive grid. The idea was to have containers side-by-side with a width and number depending on the viewport size. Like most other responsive grids the columns will resize relative to their viewport. The difference is that the number of columns per row will also vary per viewport. This page uses some common breakpoints (see table) but it would be very simple to adapt to other scenarios.</p>
	<p class="third col">By default, all columns will have the same, different width across screen sizes. Adding classes like twelfth and third will make a column keep its (relative) size across all viewports except the smallest (mobile) views. Adding a class of persistent wil force the relative size on mobile as well - hence the grid's name. This table illustrates how the columns will behave. For this example, I used twelve columns because it can conveniently be divided by two, three, four and six. You can of course adapt it to nine, sixteen, twentyfour, fourtyeight or whatever else has your fancy:</p>
	<table>
		<thead>
			<tr>
				<th></th>
				<th>&lt;768</th>
				<th>768-1024</th>
				<th>1024-1280</th>
				<th>1280-1680</th>
				<th>&gt;1680</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>col</th>
				<td>100.00%</td>
				<td>50.00%</td>
				<td>33,33%</td>
				<td>25.00%</td>
				<td>16,67%</td>
			</tr>
			<tr>
				<th>twelfth</th>
				<td>100.00%</td>
				<td>8.33%</td>
				<td>8.33%</td>
				<td>8.33%</td>
				<td>8.33%</td>
			</tr>
			<tr>
				<th>sixth</th>
				<td>100.00%</td>
				<td>16.67%</td>
				<td>16.67%</td>
				<td>16.67%</td>
				<td>16.67%</td>
			</tr>
			<tr>
				<th>fourth</th>
				<td>100.00%</td>
				<td>25.00%</td>
				<td>25.00%</td>
				<td>25.00%</td>
				<td>25.00%</td>
			</tr>
			<tr>
				<th>third</th>
				<td>100.00%</td>
				<td>33.33%</td>
				<td>33.33%</td>
				<td>33.33%</td>
				<td>33.33%</td>
			</tr>
			<tr>
				<th>half</th>
				<td>100.00%</td>
				<td>50.00%</td>
				<td>50.00%</td>
				<td>50.00%</td>
				<td>50.00%</td>
			</tr>
			<tr>
				<th>twothird</th>
				<td>100.00%</td>
				<td>66.67%</td>
				<td>66.67%</td>
				<td>66.67%</td>
				<td>66.67%</td>
			</tr>
			<tr>
				<th>full</th>
				<td>100.00%</td>
				<td>100.00%</td>
				<td>100.00%</td>
				<td>100.00%</td>
				<td>100.00%</td>
			</tr>
			<tr>
				<th>persistent col</th>
				<td>33,33%</td>
				<td>50.00%</td>
				<td>33,33%</td>
				<td>25.00%</td>
				<td>16,67%</td>
			</tr>
			<tr>
				<th>persistent twelfth</th>
				<td>8.33%</td>
				<td>8.33%</td>
				<td>8.33%</td>
				<td>8.33%</td>
				<td>8.33%</td>
			</tr>
			<tr>
				<th>persistent sixth</th>
				<td>16.67%</td>
				<td>16.67%</td>
				<td>16.67%</td>
				<td>16.67%</td>
				<td>16.67%</td>
			</tr>
			<tr>
				<th>persistent fourth</th>
				<td>25.00%</td>
				<td>25.00%</td>
				<td>25.00%</td>
				<td>25.00%</td>
				<td>25.00%</td>
			</tr>
			<tr>
				<th>persistent third</th>
				<td>33,33%</td>
				<td>33,33%</td>
				<td>33,33%</td>
				<td>33,33%</td>
				<td>33,33%</td>
			</tr>
			<tr>
				<th>persistent half</th>
				<td>50.00%</td>
				<td>50.00%</td>
				<td>50.00%</td>
				<td>50.00%</td>
				<td>50.00%</td>
			</tr>
			<tr>
				<th>persistent twothird</th>
				<td>66.67%</td>
				<td>66.67%</td>
				<td>66.67%</td>
				<td>66.67%</td>
				<td>66.67%</td>
			</tr>
			<tr>
				<th>persistent full</th>
				<td>100.00%</td>
				<td>100.00%</td>
				<td>100.00%</td>
				<td>100.00%</td>
				<td>100.00%</td>
			</tr>
		</tbody>
	</table>
	<p class="half col">
	The columns do not automatically have a padding, but you can add that. In this example, the columns are box model, so padding can simply be added to the columns themselves without altering their widths. They are contained in a div that has negative left and white margins so the first and last column appear to not have left and right margin respectively. For older browser support, you would wrap the column content in a div with margins or padding, whatever suits best.
	</p>
	<p class="half col">
	None of the columns are floated. They are inline-blocks with a negative right margin to fix the space between elements because they would otherwise not fit their parent container. It's a clean hack (if such a thing exists) a the negative margin is subtracted from the block's width without affecting the width of the parent container. The columns can simply be stacked. If you want to group them you can, just create multiple collections holding columns in any variety.
	</p>
	<p>
	You easily can apply this to anything, from regular tags such as divs and articles to lists and even tables, although the table behavior is not consistent across browsers. That is to say, it behaves differently in MSIE8. Go figure. At present, it hasn't been tested in MSIE9 or higher.
	</p>

	<table>
		<caption></caption>
		<tr>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
			<td class="col">Col</td>
		</tr>
	</table>

	<ul>
		<li class="col">Col</li>
		<li class="col">Col</li>
		<li class="col">Col</li>
		<li class="col">Col</li>
		<li class="col">Col</li>
		<li class="col">Col</li>
		<li class="col">Col</li>
	</ul>

  	<div class="collection">
		<div class="full col">
		  <p>This column has an extra class of 'full' making it span across its container's full width.</p>
		</div>

		<div class="half col">
		   <p>This column has an extra class of 'half' making it half of its parent container width. On smaller devices (below 768px) it will span to its parent container's full width.</p>
		</div>

		<div class="half col">
		  <p>
		  This column has the same classes as its preceeding sibling.
		  </p>
		</div>

		<div class="persistent third col">
		   <p>
		   This column has an extra class of 'third' making it span a third of its parent container width. It will keep this width on all screen sizes because it has an added class of persistent.
		   </p>
		</div>

		<div class="persistent twothird col">
		  <p>
		  This column has a class of twothird. Guess what that makes it do. It also has the class persistent, so it will always be two thirds of its parent width.
		  </p>
		</div>

		<div class="persistent col">
		  <p>
		  This column has a class of persistent. Because the default width of a column is one third of its parent container, it will keep this width on smaller sizes. Add a class of 'third' to retain this width across all screen sizes.
		  </p>
		</div>

		<div class="persistent col">
		  <p>
		  This column has a class of persistent. Because the default width of a column is one third of its parent container, it will keep this width on smaller sizes. Add a class of 'third' to retain this width across all screen sizes.
		  </p>
		</div>

		<div class="persistent col">
		  <p>
		  This column has a class of persistent. Because the default width of a column is one third of its parent container, it will keep this width on smaller sizes. Add a class of 'third' to retain this width across all screen sizes.
		  </p>
		</div>

		<div class="col">
		  <p>
		  This column is just that. A column. Depending on the viewport size, it will be either 100% (on smallest devices), 50% (on portrait tablets), 33,333333% (1024px - 1280px, the default of this configuration), 25% (1280px-1680px) and finally 16,666667% for anything above 1680px.
		  </p>
		</div>

		<div class="col">
		  <p>
		  A column. Nothing more.
		  </p>
		</div>

		<div class="col">
		  <p>
		  Change your viewport to see me change size.
		  </p>
		</div>

		<div class="col">
		  <p>
		  Change your viewport to see me change size.
		  </p>
		</div>
	</div>

	<figure class="collection">
		<figcaption>Column widths</figcaption>
		<div class="twelfth col">twelfth (1/12)</div>
		<div class="sixth col">sixth (2/12)</div>
		<div class="fourth col">fourth (3/12)</div>
		<div class="third col">third (4/12)</div>
		<div class="half col">half (6/12)</div>
		<div class="twothird col">twothird (8/12)</div>
		<div class="full col">full (12/12)</div>
	</figure>

	<figure class="collection">
		<figcaption>Persistent column widths</figcaption>
		<div class="persistent twelfth col">twelfth (1/12)</div>
		<div class="persistent sixth col">sixth (2/12)</div>
		<div class="persistent fourth col">fourth (3/12)</div>
		<div class="persistent third col">third (4/12)</div>
		<div class="persistent half col">half (6/12)</div>
		<div class="persistent twothird col">twothird (8/12)</div>
		<div class="persistent full col">full (12/12)</div>
	</figure>

	<h2>The code</h2>
	<script src="https://gist.github.com/3913866.js?file=persistant-grid-gist"></script>

</body>
</html>
