<?php include_once "header.php" ?> 


<div id="templatemo_right_column">
    
    	<div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="images/slider/1.jpg" alt="1" /></a>
                        <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="images/slider/2.jpg" alt="2" /></a>
                        <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="images/slider/3.jpg" alt="3" />
                        <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="images/slider/4.jpg" alt="4" />
                        <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>
        
        <div id="templatemo_main">
            
        <?php foreach ($articles as $id => $article) { ?>
            <div class="post_section">
                <span class="comment"><a href="blog_post.html">128</a></span>
                <h2><a href="index.php?page=article&id=<?=$id ?>"><?=$article['title'] ?></a></h2>
                <?php include 'article'.$id.'.php'?>
                
            </div>
	   <?php } ?>
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->

<?php include_once "footer.php" ?>  