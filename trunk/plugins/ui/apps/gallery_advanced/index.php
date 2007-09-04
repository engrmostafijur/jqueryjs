<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery UI Demo Application: Gallery</title>


<style type="text/css">

  @import url(../../../../themes/ui/ui.all.css);

</style>

<style type="text/css" media="all">

body { background: #999; margin: 0; padding: 0; font-family: Lucida Sans, Arial; font-size: 12px; }
.container { border: 1px solid #50A029; height: 500px; width: 800px; margin: 0 auto; margin-top: 100px; position: relative; }

/* Inner container definitions */
div.gallery div.top { cursor: move; color: #fff; background: #bbb; height: 14px; padding: 7px; left: 0px; right: 5px; position: absolute; top: 0px; border-bottom: 1px solid #999; }
div.gallery div.left { background: #eee; width: 200px; position: absolute; top: 30px; bottom: 5px;  border-right: 1px solid #999; overflow-y: auto; overflow-x: hidden; }
div.gallery div.bottom { background: #ddd; height: 50px; left: 200px; right: 5px; position: absolute; bottom: 5px; border-top: 1px solid #999; }
div.gallery div.right {  background: #fafafa; position: absolute; top: 30px; right: 5px; bottom: 51px; padding-bottom: 20px; left: 201px; overflow: auto; border: 1px solid #fff; }

div.gallery div.overlay { display: none; background: #000; position: absolute; top: 30px; right: 5px; bottom: 56px; padding-bottom: 20px; left: 201px; overflow: auto; border: 1px solid #fff; z-index: 20; text-align: center; }
div.gallery div.overlay img { cursor: pointer; cursor: hand; border: 1px solid #50A029; padding: 5px; background-color: #C4E1A4; position: absolute; }
div.gallery div.overlay img:hover { border: 1px solid #fff; background-color: #86B255; }

/* Styling the left hand navigation */
div.gallery ul.menue { list-style-type: none; margin: 0; padding: 0; }
div.gallery ul.menue a.head { display: block; background: #ddd; padding: 5px; color: #fff; border-bottom: 1px solid #ccc; text-decoration: none; }
div.gallery ul.menue a.selected { background: #bbb; }
div.gallery ul.menue a.over { background: #aaa; }
div.gallery ul.menue ul.items { list-style-type: none; margin: 0; padding: 10px; }
div.gallery ul.menue ul.items a { text-decoration: none; display: block; position: relative; color: #333; height: 80px; margin-bottom: 10px; }
div.gallery ul.menue ul.items a:hover { background: #ccc; }
div.gallery ul.menue ul.items a.over { background: #ccc; }
div.gallery ul.menue ul.items a span { position: absolute; top: 35px; left: 100px; }
div.gallery ul.menue ul.items li img.thumb { border: 1px solid #50A029; width: 80px; position: absolute; top: 10px; left: 10px; }
div.gallery ul.tree { list-style-type: none; margin: 0; padding-left: 10px; }

/* The slider control at bottom */
div.gallery div.bottom div.slider { height: 30px; width: 200px; position: absolute; top: 10px; right: 10px; background-image: url(images/slider_bg.png); }
div.gallery div.bottom div.slider div.handle { position: absolute; top: 2px; left: 0px; height: 26px; width: 5px; background: black; }

/* The main thumbnails */
div.gallery div.right img.thumb { border: 1px solid #50A029; width: 100px; float: left; position: relative; margin-left: 10px; margin-top: 10px; cursor: pointer; cursor: hand; }
div.gallery div.right img.hover { border: 1px solid #fff; z-index: 5;}

/* The tabs */
div.gallery div.top ul.tabs { z-index: 10; position: absolute; bottom: 0px; left: 0px; right: 5px; list-style-type: none; margin: 0; padding: 0; height: 23px; }
div.gallery div.top ul.tabs li { border-bottom: 1px solid #999; background: #999;  float: right; padding: 3px; margin: 2px; }
div.gallery div.top ul.tabs li.active { border-bottom: 3px solid #fafafa; background: #fafafa;}
div.gallery div.top ul.tabs li.active a { color: #333; text-decoration: none; }
div.gallery div.top ul.tabs li a { color: #fff; text-decoration: none; }

/* Resizing handles */
div.gallery div.ui-resizable-se { position: absolute; bottom: 0px; right: 0px; z-index: 11; width: 9px; height: 9px; }
div.gallery div.ui-resizable-s { position: absolute; bottom: 0px; right: 6px; left: 0px; z-index: 10; height: 6px; }
div.gallery div.ui-resizable-e { position: absolute; bottom: 6px; right: 0px; top: 0px; z-index: 10; width: 6px; }
.resizeproxy { border: 1px dotted #fff; }


/* Drag & Drop */
div.draggable img { width: 100px; border: 1px solid #AED5EA; }

</style>


<script type="text/javascript" src="../../../../jquery/src/jquery/jquery.js"></script>
<script type="text/javascript" src="../../../../jquery/src/selector/selector.js"></script>
<script type="text/javascript" src="../../../../jquery/src/event/event.js"></script>
<script type="text/javascript" src="../../../../jquery/src/ajax/ajax.js"></script>
<script type="text/javascript" src="../../../../jquery/src/fx/fx.js"></script>
<script type="text/javascript" src="../../../dimensions/jquery.dimensions.js"></script>
<script type="text/javascript" src="../../../mousewheel/jquery.mousewheel.js"></script>


<script type="text/javascript" src="../../ui.accordion.js"></script>
<script type="text/javascript" src="../../ui.tabs.js"></script>
<script type="text/javascript" src="../../ui.effects.js"></script>
<script type="text/javascript" src="../../ui.mouse.js"></script>
<script type="text/javascript" src="../../ui.resizable.js"></script>
<script type="text/javascript" src="../../ui.slider.js"></script>
<script type="text/javascript" src="../../ui.draggable.js"></script>
<script type="text/javascript" src="../../ui.draggable.ext.js"></script>
<script type="text/javascript" src="../../ui.droppable.js"></script>
<script type="text/javascript" src="../../ui.droppable.ext.js"></script>
<script type="text/javascript" src="../../ui.magnifier.js"></script>
<script type="text/javascript" src="../../ui.tree.js"></script>


<script type="text/javascript" src="behaviour.js"></script>
</head>
<body>
	
	<div class="gallery container">
		<div class="ui-resizable-se"></div>
		<div class="ui-resizable-s"></div>
		<div class="ui-resizable-e"></div>
		
		<div class="top">jQuery UI Demo Application: Gallery
            <ul class="tabs">
                <li><a href="#container-0">National Geography</a></li>
            </ul>
		</div>
		<div class="left">
			<ul class="menue">
				<li>
					<a class="head" href="javascript:void(0)">Albums</a>
					<ul class="items">
<?php

$dir = dir("images/albums");
$i = 0;
while($file = $dir->read()) {
	if($file != "." && $file != ".." && $file != ".svn") {
		echo '<li><a href="javascript:void($(\'div.gallery ul.tabs li a:eq('.$i.')\').click())"><img class="thumb" src="images/select-1.jpg"><span>'.$file.'</span></a></li>';
		$i++;
  	}
}
$dir->close();

?>
					</ul> 
				</li>
				<li>
					<a class="head" href="javascript:void(0)">Categories</a>
					<ul class="items">
						<li><a href="javascript:void(0)"><img class="thumb" src="images/select-8.jpg"><span>Family</span></a></li>
						<li><a href="javascript:void(0)"><img class="thumb" src="images/select-4.jpg"><span>Animals</span></a></li>
					</ul> 
				</li>
				<li>
					<a class="head" href="javascript:void(0)">Years</a>
					<ul class="items">
						<li><a href="javascript:void(0)"><img class="thumb" src="images/select-9.jpg"><span>2007</span></a></li>
						<li><a href="javascript:void(0)"><img class="thumb" src="images/select-5.jpg"><span>2006</span></a></li>
					</ul> 
				</li>
				<li>
					<a class="head" href="javascript:void(0)">Disk</a>

					<div style='position: relative; left: 10px; top: 10px;'>
					<ul class="tree light">
					  <li>Images
					    <ul>
					      <li>Mixed</li>
					      <li>Anime
					        <ul>
					          <li>Fruits Basket</li>
					          <li>FLCL</li>
					        </ul>
					      </li>
					      <li>Flowers</li>
					    </ul>
					  </li>
					  <li>Fotos
					    <ul>
					      <li>Mixed</li>
					      <li>People</li>
					      <li>Nature</li>
					      <li>My Family</li>
					    </ul>
					  </li>
					  <li>Temp
					    <ul>
					      <li>Something</li>
					      <li>Something else</li>
					    </ul>
					  </li>
					</ul>
					</div>

				</li>
			</ul>
		</div>
		
		<div class="overlay">
		</div>

<?php

$dir = dir("images/albums");
$i = 0;
while($file = $dir->read()) {
	if($file != "." && $file != ".." && $file != ".svn") {
		echo '<div class="right" id="container-'.$i.'">';


			$dir2 = dir("images/albums/".$file);
			while($file2 = $dir2->read()) {
				if($file2 != "." && $file2 != ".." && $file2 != ".svn" && !preg_match('/_tn_/', $file2)) {
					echo '<img class="thumb" src="thumb.php?i=images/albums/'.$file.'/'.$file2.'&size=270" path="images/albums/'.$file.'/'.$file2.'" '.($i > 0 ? 'style="display: block"' : '').'>';
			  	}
			}
			$dir2->close();


		echo '</div>';
		$i++;
  	}
}
$dir->close();

?>
		
		<div class="bottom">

			<div class="slider">
				<div class="handle ui-slider-handle">
			</div>
		</div>
		
		
	</div>
	
</body>
</html>
