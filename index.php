<?php
  $counterFile = 'counter.txt' ;
  if (isset($_GET['increase'])) {
    if (($counter = @file_get_contents($counterFile)) === false) die('Error : file counter does not exist') ;
    file_put_contents($counterFile,++$counter);
    echo $counter;
    return false;
  }
  if (!$counter = @file_get_contents($counterFile)) {
    if (!$myfile = fopen($counterFile,'w'))
    die('Unable to create counter file !!');
    chmod($counterFile,0644);
    file_put_contents($counterFile,0);
  }
?>

<!doctype html>
<html>
<head>
  <title>gridder.io</title>
  <meta charset="utf-8">
  <meta name="description" content="A simple flexbox base grid system">
  <meta name="author" content="Tristan White">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/app.css" />
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/assets/img/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="/assets/img/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/assets/img/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/assets/img/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/assets/img/manifest.json">
  <link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/assets/img/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="/assets/img/mstile-144x144.png">
  <meta name="msapplication-config" content="/assets/img/browserconfig.xml">
  <meta name="theme-color" content="#212836">
</head>

<body>

<div class="container">

<header>
  <div class="row center-tiny banner">
    <svg width="80px" height="100px" viewBox="0 0 189 228" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
      <g id="gridder-logo" sketch:type="MSLayerGroup" transform="translate(114.000000, 113.292893) rotate(45.000000) translate(-114.000000, -113.292893) translate(33.500000, 32.792893)">
        <rect id="Rectangle-1" fill="#27AE60" sketch:type="MSShapeGroup" x="56" y="1" width="50" height="50"></rect>
        <rect id="Rectangle-2" fill="#F39C12" sketch:type="MSShapeGroup" x="1" y="1" width="50" height="50"></rect>
        <rect id="Rectangle-3" fill="#D2527F" sketch:type="MSShapeGroup" x="1" y="56" width="50" height="50"></rect>
        <rect id="Rectangle-4" fill="#9B59B6" sketch:type="MSShapeGroup" x="1" y="111" width="50" height="50"></rect>
        <rect id="Rectangle-5" fill="#E74C3C" sketch:type="MSShapeGroup" x="56" y="111" width="50" height="50"></rect>
        <rect id="Rectangle-6" fill="#2980D9" sketch:type="MSShapeGroup" x="111" y="111" width="50" height="50"></rect>
        <rect id="Rectangle-7" fill="#F1C40F" sketch:type="MSShapeGroup" x="111" y="56" width="50" height="50"></rect>
      </g>
    </svg>
    <h1>Gridder</h1>
  </div>
	<div class="row center-tiny">
		<a class="btn primary" id="download" href="/gridder/gridder.css" download>
			<svg enable-background="new 0 0 141.732 141.732" height="1rem" id="Livello_1" version="1.1" viewBox="0 0 141.732 141.732" width="1rem" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_32"><path fill="#FFFFFF" d="M120.674,125.138H20.793v16.594h99.881V125.138z M119.019,58.776c-2.561-2.562-6.716-2.562-9.275,0L77.21,91.312V6.562   C77.21,2.936,74.269,0,70.648,0c-3.624,0-6.56,2.937-6.56,6.563v84.75L31.992,59.218c-2.562-2.564-6.715-2.564-9.277,0   c-2.565,2.562-2.565,6.716,0,9.279l43.294,43.293c0.15,0.154,0.314,0.299,0.481,0.438c0.076,0.062,0.155,0.113,0.234,0.176   c0.094,0.065,0.186,0.142,0.279,0.206c0.097,0.063,0.192,0.114,0.286,0.174c0.088,0.054,0.174,0.105,0.265,0.153   c0.1,0.056,0.199,0.1,0.298,0.147c0.097,0.045,0.19,0.091,0.283,0.132c0.098,0.04,0.196,0.072,0.295,0.105   c0.104,0.038,0.207,0.078,0.312,0.109c0.101,0.03,0.197,0.052,0.297,0.077c0.108,0.023,0.214,0.058,0.324,0.078   c0.115,0.021,0.231,0.033,0.346,0.054c0.097,0.015,0.192,0.032,0.289,0.042c0.43,0.042,0.865,0.042,1.295,0   c0.1-0.01,0.191-0.027,0.289-0.042c0.114-0.021,0.233-0.029,0.344-0.054c0.109-0.021,0.217-0.055,0.324-0.078   c0.102-0.025,0.199-0.047,0.299-0.077c0.105-0.031,0.207-0.071,0.312-0.109c0.102-0.03,0.195-0.062,0.295-0.105   c0.096-0.041,0.191-0.087,0.283-0.132c0.1-0.048,0.199-0.092,0.297-0.147c0.091-0.048,0.177-0.104,0.264-0.153   c0.098-0.06,0.193-0.11,0.287-0.174c0.096-0.064,0.189-0.141,0.281-0.206c0.076-0.062,0.156-0.113,0.233-0.176   c0.249-0.204,0.479-0.437,0.694-0.67c0.076-0.067,0.154-0.131,0.229-0.203l43.294-43.296   C121.581,65.491,121.581,61.337,119.019,58.776"/></g><g id="Livello_1_1_"/></svg>
			Download Gridder
		</a>

    <span id="counter">
      <?php
        $fp = fopen("counter.txt", "r");
        $count = fread($fp, 1024);
        fclose($fp);
        echo $count;
      ?>
    </span>

		<a class="btn" href="https://github.com/triss90405/gridder.dev" target="top">
			<svg enable-background="new 0 0 32 32" height="1rem" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="1rem" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" d="M16.003,0C7.17,0,0.008,7.162,0.008,15.997  c0,7.067,4.582,13.063,10.94,15.179c0.8,0.146,1.052-0.328,1.052-0.752c0-0.38,0.008-1.442,0-2.777  c-4.449,0.967-5.371-2.107-5.371-2.107c-0.727-1.848-1.775-2.34-1.775-2.34c-1.452-0.992,0.109-0.973,0.109-0.973  c1.605,0.113,2.451,1.649,2.451,1.649c1.427,2.443,3.743,1.737,4.654,1.329c0.146-1.034,0.56-1.739,1.017-2.139  c-3.552-0.404-7.286-1.776-7.286-7.906c0-1.747,0.623-3.174,1.646-4.292C7.28,10.464,6.73,8.837,7.602,6.634  c0,0,1.343-0.43,4.398,1.641c1.276-0.355,2.645-0.532,4.005-0.538c1.359,0.006,2.727,0.183,4.005,0.538  c3.055-2.07,4.396-1.641,4.396-1.641c0.872,2.203,0.323,3.83,0.159,4.234c1.023,1.118,1.644,2.545,1.644,4.292  c0,6.146-3.74,7.498-7.304,7.893C19.479,23.548,20,24.508,20,26c0,2,0,3.902,0,4.428c0,0.428,0.258,0.901,1.07,0.746  C27.422,29.055,32,23.062,32,15.997C32,7.162,24.838,0,16.003,0z" fill="black" fill-rule="evenodd"/><g/><g/><g/><g/><g/><g/></svg>
			Visit Github
		</a>
	</div>
</header>



<div class="row">
  <div class="tiny-12">
    <!-- Responsive -->
    <h2>The Grid</h2>
    <p>Gridder is <a href=""></a> simple grid system based on <a href="http://caniuse.com/#search=flexbox" target="top">Flexbox.</a></p>
    <p>Gridder's fluid grid and breakpoints enable endless combinations of column sizes, offsets, allignments and viewport widths.</p>
  </div>
</div>
<div class="row">
	<div class="tiny-7 small-3 medium-2 large-4">
		<div class="box-row"></div>
	</div>
	<div class="tiny-2 small-6 medium-8 large-7">
		<div class="box-row"></div>
	</div>
	<div class="tiny-3 small-3 medium-2 large-1">
		<div class="box-row"></div>
	</div>
</div>
<div class="row">
	<div class="tiny-3 small-3 medium-2 large-1">
		<div class="box-row"></div>
	</div>
	<div class="tiny-9 small-9 medium-10 large-11">
		<div class="box-row"></div>
	</div>
</div>
<div class="row">
	<div class="tiny-6 small-6 medium-8 large-9">
		<div class="box-row"></div>
	</div>
	<div class="tiny-6 small-6 medium-4 large-3">
		<div class="box-row"></div>
	</div>
</div>
<div class="row">
	<div class="tiny-3 small-3 medium-2 large-6">
		<div class="box-row"></div>
	</div>
	<div class="tiny-4 small-6 medium-8 large-4">
		<div class="box-row"></div>
	</div>
	<div class="tiny-5 small-3 medium-2 large-2">
		<div class="box-row"></div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row">
    &lt;div class="tiny-12 small-8 medium-6 large-4">
        &lt;div class="box">Fluid and Responsive grid&lt;/div>
    &lt;/div>
&lt;/div></code></pre><br>


<div class="row">
  <div class="tiny-12">
    <!-- Simple Syntax -->
    <h2>Syntax</h2>
    <p>First, make sure to wrap your columns in a <code>row</code> element. Then specify your columns and stick your content inside.</p>
    <p>Use the following classes to identify your coloumns.</p>
    <ul>
    	<li><code>tiny-*</code></li>
    	<li><code>small-*</code></li>
    	<li><code>medium-*</code></li>
    	<li><code>large-*</code></li>
    </ul>
    <p>* is a number between 1 and 12, where 1 is a single column.</p>
  </div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row">
    &lt;div class="tiny-12">
        &lt;div class="box">This spans 12/12 columns&lt;/div>
    &lt;/div>
&lt;/div></code></pre><br>


<div class="row">
  <div class="tiny-12">
    <!-- Offsets -->
    <h2>Offsets</h2>
    <p>Offsetting columns is easy, simply and <code>*-offset-3</code> if you wish to offset your column 3 columns from the left.</p>
    <p>The * in this case referes to one of the breakpoints (tiny, small, medium and large).</p>
  </div>
</div>
<div class="row">
	<div class="tiny-offset-11 tiny-1">
		<div class="box-row"></div>
	</div>
</div>
<div class="row">
	<div class="tiny-offset-10 tiny-2">
		<div class="box-row"></div>
	</div>
</div>
<div class="row">
	<div class="tiny-offset-9 tiny-3">
		<div class="box-row"></div>
	</div>
</div>
<div class="row">
	<div class="tiny-offset-8 tiny-4">
		<div class="box-row"></div>
	</div>
</div>
<div class="row">
	<div class="tiny-offset-7 tiny-5">
		<div class="box-row"></div>
	</div>
</div>
<div class="row">
	<div class="tiny-offset-6 tiny-6">
		<div class="box-row"></div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row">
    &lt;div class="tiny-offset-3 tiny-9">
        &lt;div class="box">offset&lt;/div>
    &lt;/div>
&lt;/div></code></pre><br>


<div class="row">
  <div class="tiny-12">
    <!-- Auto Width -->
    <h2>Auto Grid</h2>
    <p>The flexbox grid is clever! You can add any number of columns to your rows without defining their width and let the grid figure it out.</p>
  </div>
</div>
<div class="row">
	<div class="tiny">
		<div class="box-row"></div>
	</div>
	<div class="tiny">
		<div class="box-row"></div>
	</div>
</div>
<div class="row">
	<div class="tiny">
		<div class="box-row"></div>
	</div>
	<div class="tiny">
		<div class="box-row"></div>
	</div>
	<div class="tiny">
		<div class="box-row"></div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row">
    &lt;div class="tiny">
        &lt;div class="box">auto&lt;/div>
    &lt;/div>
&lt;/div></code></pre><br>


<div class="row">
  <div class="tiny-12">
    <!-- Nested Grids -->
    <h2>Nesting Grids</h2>
    <p>Ofcourse you can nest grids aswell.</p>
  </div>
</div>
<div class="row">
	<div class="tiny-5">
		<div class="box box-container">
			<div class="row">
				<div class="tiny-12">
					<div class="box-first box-container">
						<div class="row">
							<div class="tiny-12">
								<div class="box-nested"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tiny-7">
		<div class="box box-container">
			<div class="row">
				<div class="tiny-9">
					<div class="box-first box-container">
						<div class="row">
							<div class="tiny-4">
								<div class="box-nested"></div>
							</div>
							<div class="tiny-8">
								<div class="box-nested"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="tiny-3">
					<div class="box-first box-container">
						<div class="row">
							<div class="tiny">
								<div class="box-nested"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row">
    &lt;div class="tiny">
        &lt;div class="box">auto&lt;/div>
            &lt;div class="row">
                &lt;div class="tiny">
                    &lt;div class="box">auto&lt;/div>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre><br>



<div class="row">
  <div class="tiny-12">
    <!-- Alignment -->
    <h2>Aligning Columns</h2>
    <p>Add one or more of the following classes to align columns as you see fit.</p>
    <!-- .start- -->
    <h3><code>.start-</code></h3>
  </div>
</div>

<div class="row">
	<div class="tiny-12">
		<div class="box box-container">
			<div class="row start-tiny">
				<div class="tiny-6">
					<div class="box-nested"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row start-tiny">
    &lt;div class="tiny-6">
        &lt;div class="box">
            start
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>


<div class="row">
  <div class="tiny-12">
    <!-- .center- -->
    <h3><code>.center-</code></h3>
  </div>
</div>
<div class="row">
	<div class="tiny-12">
		<div class="box box-container">
			<div class="row center-tiny">
				<div class="tiny-6">
					<div class="box-nested"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row center-tiny">
    &lt;div class="tiny-6">
        &lt;div class="box">
            start
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>


<div class="row">
  <div class="tiny-12">
    <!-- .end- -->
    <h3><code>.end-</code></h3>
  </div>
</div>
<div class="row">
	<div class="tiny-12">
		<div class="box box-container">
			<div class="row end-tiny">
				<div class="tiny-6">
					<div class="box-nested"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row end-tiny">
    &lt;div class="tiny-6">
        &lt;div class="box">
            end
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>


<div class="row">
  <div class="tiny-12">
    <!-- .top- -->
    <h3><code>.top-</code></h3>
  </div>
</div>
<div class="row top-tiny">
	<div class="tiny-6">
		<div class="box-large"></div>
	</div>
	<div class="tiny-6">
		<div class="box"></div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row top-tiny">
    &lt;div class="tiny-6">
        &lt;div class="box">
            top
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>


<div class="row">
  <div class="tiny-12">
    <!-- .middle- -->
    <h3><code>.middle-</code></h3>
  </div>
</div>
<div class="row middle-tiny">
	<div class="tiny-6">
		<div class="box-large"></div>
	</div>
	<div class="tiny-6">
		<div class="box"></div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row middle-tiny">
    &lt;div class="tiny-6">
        &lt;div class="box">
            center
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>


<div class="row">
  <div class="tiny-12">
    <!-- .bottom- -->
    <h3><code>.bottom-</code></h3>
  </div>
</div>
<div class="row bottom-tiny">
	<div class="tiny-6">
		<div class="box-large"></div>
	</div>
	<div class="tiny-6">
		<div class="box"></div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row bottom-tiny">
    &lt;div class="tiny-6">
        &lt;div class="box">
            bottom
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre><br>


<div class="row">
  <div class="tiny-12">
    <!-- Distribution -->
    <h2>Distributing Columns</h2>
    <p>Add one or more of the following classes to distribute the content of a row or column, according to the flexbox properties <code>justify-content: space-around;</code> or <code>justify-content: space-between;</code></p>

    <!-- .between- -->
    <h3><code>.between-</code></h3>
  </div>
</div>
<div class="row">
	<div class="tiny-12">
		<div class="box box-container">
			<div class="row between-tiny">
				<div class="tiny-2">
					<div class="box-nested"></div>
				</div>
				<div class="tiny-2">
					<div class="box-nested"></div>
				</div>
				<div class="tiny-2">
					<div class="box-nested"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row between-tiny">
    &lt;div class="tiny-2">
        &lt;div class="box">
            between
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2">
        &lt;div class="box">
            between
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2">
        &lt;div class="box">
            between
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>



<div class="row">
  <div class="tiny-12">
    <!-- .around- -->
    <h3><code>.around-</code></h3>
  </div>
</div>
<div class="row">
	<div class="tiny-12">
		<div class="box box-container">
			<div class="row around-tiny">
				<div class="tiny-2">
					<div class="box-nested"></div>
				</div>
				<div class="tiny-2">
					<div class="box-nested"></div>
				</div>
				<div class="tiny-2">
					<div class="box-nested"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row around-tiny">
    &lt;div class="tiny-2">
        &lt;div class="box">
            around
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2">
        &lt;div class="box">
            around
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2">
        &lt;div class="box">
            around
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre><br>


<div class="row">
  <div class="tiny-12">
    <!-- Reversing -->
    <h2>Reversing Columns</h2>

    <!-- .reverse- -->
    <h3><code>.reverse</code></h3>
  </div>
</div>
<div class="row">
	<div class="tiny-12">
		<div class="box box-container">
			<div class="row reverse">
				<div class="tiny-3">
					<div class="box-nested">1</div>
				</div>
				<div class="tiny-3">
					<div class="box-nested">2</div>
				</div>
				<div class="tiny-3">
					<div class="box-nested">3</div>
				</div>
				<div class="tiny-3">
					<div class="box-nested">4</div>
				</div>
			</div>
		</div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row reverse">
    &lt;div class="tiny-2">
        &lt;div class="box">
            1
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2">
        &lt;div class="box">
            2
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2">
        &lt;div class="box">
            3
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre><br>


<div class="row">
  <div class="tiny-12">
    <!-- Reordering -->
    <h2>Reordering Columns</h2>
    <p>Add one or more of the following classes to reorder your columns according the the flexbox property <code>order</code></p>

    <!-- .first- -->
    <h3><code>.first-</code></h3>
  </div>
</div>
<div class="row">
	<div class="tiny-12">
		<div class="box box-container">
			<div class="row">
				<div class="tiny-3">
					<div class="box-first">1</div>
				</div>
				<div class="tiny-3">
					<div class="box-first">2</div>
				</div>
				<div class="tiny-3">
					<div class="box-first">3</div>
				</div>
				<div class="tiny-3 first-tiny">
					<div class="box-nested">4</div>
				</div>
			</div>
		</div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row">
    &lt;div class="tiny-2">
        &lt;div class="box">
            1
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2">
        &lt;div class="box">
            2
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2 first-tiny">
        &lt;div class="box">
            3
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>


<div class="row">
  <div class="tiny-12">
    <!-- .last- -->
    <h3><code>.last-</code></h3>
  </div>
</div>
<div class="row">
	<div class="tiny-12">
		<div class="box box-container">
			<div class="row">
				<div class="tiny-3 last-tiny">
					<div class="box-nested">1</div>
				</div>
				<div class="tiny-3">
					<div class="box-first">2</div>
				</div>
				<div class="tiny-3">
					<div class="box-first">3</div>
				</div>
				<div class="tiny-3">
					<div class="box-first">4</div>
				</div>
			</div>
		</div>
	</div>
</div>
<pre data-src="index.html"><code class="language-html">&lt;div class="row">
    &lt;div class="tiny-2 last-tiny">
        &lt;div class="box">
            1
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2">
        &lt;div class="box">
            2
        &lt;/div>
    &lt;/div>
    &lt;div class="tiny-2">
        &lt;div class="box">
            3
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre><br>

</div>

<footer>
  <div class="contaier">
    <div class="row center-tiny">
      <div class="tiny-12">
        <p>
          Made with
          <svg enable-background="new 0 0 128 128" height="16px" id="Layer_1" version="1.1" viewBox="0 0 128 128" width="16px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M127,44.205c0-18.395-14.913-33.308-33.307-33.308c-12.979,0-24.199,7.441-29.692,18.276  c-5.497-10.835-16.714-18.274-29.694-18.274C15.912,10.898,1,25.81,1,44.205C1,79,56.879,117.104,64.001,117.104  C71.124,117.104,127,79.167,127,44.205z" fill="#E74C3C"/>
          </svg>
          by <a href="https://tristanwhite.info" target="_target">Tristan White</a>
        </p>
      </div>
    </div>
  </div>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="/assets/js/prism.js" data-default-language="markup"></script>
  <script src="/assets/js/main.js"></script>
  </body>
</html>
