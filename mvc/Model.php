<?php

class Model
{
	public function getMain()
	{
		return ['title' => 'Home',
			'content' =>
			'<div class="pattern_box">
            <div class="pattern_box_icon"><img src="../images/icon1.png" alt="" title="" width="70" height="112" /></div>
            <div class="pattern_content">
            <h1>My <span class="blue">Medicine</span></h1>
            <p class="pat">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            </div>
        </div>
        
        
    	<div class="pattern_box">
            <div class="pattern_box_icon"><img src="../images/icon2.png" alt="" title="" width="70" height="112" /></div>
            <div class="pattern_content">
            <h1>Search <span class="blue"> Treatments</span></h1>
            <p class="pat">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            </div>
        </div>'];
	}

	public function getAboutUs()
	{
		return ['title' => 'About Us',
		'content' =>
		'<div class="pattern_box">
		<div class="pattern_box_icon"><img src="../images/icon1.png" alt="" title="" width="70" height="112" /></div>
		<div class="pattern_content">
		<h1>Our <span class="blue">History</span></h1>
		<p class="pat">
		How it goes
		</p>
		</div>
	</div>
	
	
	<div class="pattern_box">
		<div class="pattern_box_icon"><img src="../images/icon2.png" alt="" title="" width="70" height="112" /></div>
		<div class="pattern_content">
		<h1>Our <span class="blue"> Mission</span></h1>
		<p class="pat">
		What is this for?
		</p>
		</div>
	</div>'];
	}
	
	public function getContactUs()
	{
		return ['title' => 'Contact Us',
			'content' => '<div class="pattern_box">
            <div class="pattern_box_icon"><img src="../images/icon1.png" alt="" title="" width="70" height="112" /></div>
            <div class="pattern_content">
            <h1>Contact <span class="blue">Us</span></h1>
            <p class="pat">
            Where are we?
            </p>
            </div>
        </div>
        
        
    	<div class="pattern_box">
            <div class="pattern_box_icon"><img src="../images/icon2.png" alt="" title="" width="70" height="112" /></div>
            <div class="pattern_content">
            <h1>Social <span class="blue"> Networks</span></h1>
            <p class="pat">
            Facebook, Telegram, VK, OK, Viber, Skype
            </p>
            </div>
        </div>'];
	}

	public function getServices()
	{
		return ['title' => 'Services',
			'content' => '<div class="pattern_box">
            <div class="pattern_box_icon"><img src="../images/icon1.png" alt="" title="" width="70" height="112" /></div>
            <div class="pattern_content">
            <h1>Relaxive <span class="blue">Massage</span></h1>
            <p class="pat">
            Where are we?
            </p>
            </div>
        </div>
        
        
    	<div class="pattern_box">
            <div class="pattern_box_icon"><img src="../images/icon2.png" alt="" title="" width="70" height="112" /></div>
            <div class="pattern_content">
            <h1>Traditional <span class="blue"> Curement</span></h1>
            <p class="pat">
            Herbs, Solutions, Vodka, etc.
            </p>
            </div>
        </div>'];
	}
}