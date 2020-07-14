<?php $this->setSiteTitle('Home');?>
<?php $this->start('head'); ?>
<meta content="test">
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<style>
html{
	font-family:Arial;
}
h1{
font-size:1.2em;
color:rgb(49,215,163);
}
h2{
text-align:center;
font-size:1em;
color:rgb(49,215,163);
}
h3{
font-size:1.5em;
color:rgb(49,215,215);
}
h4{
	text-align:center;
font-size:1em;
color:rgb(49,215,163);
}
h5{
	font-size:0.8em;
	color:rgb(249,59,254);
}
.sovereignSearch{
	width:65%;
	height:1.3em;
	border-bottom:rgb(49,215,163) 2px solid; 
	border-right:rgb(49,215,163) 0px solid; 
	border-top:rgb(49,215,163) 2px solid; 
	border-left:rgb(49,215,163) 0px solid; 
	border-radius:5%;
}
</style>
<div style="width:100%;">

<div style="position:float; left:5px; top: 5px;">
<h1>Sovereign Search</h1>
<input type="text" placeholder="find something" class="sovereignSearch"/>
</div>
<br><br>
</div>
<img src="ruonA.png" style="width:28%; position:fixed; top:0px; left:72%;" />
<table style="text-align:center;color:rgb(49,215,163); font-weight:800; width:100%;">

<tr>

<td><img src="Media.png" style="width:49%; border-bottom:rgb(49,215,163) 5px solid; border-radius:40%;"/><br>Media<br><br></td>
<td><img src="Storefront.png" style="width:40%; border-bottom:rgb(49,215,163) 5px solid; border-radius:40%;"/><br>Merchandise<br><br></td>
</tr>
<tr>
<td><img src="Question.png" style="width:49%; border-bottom:rgb(49,215,163) 5px solid; border-radius:40%;"/><br>Learn More</td>
<td><img src="Marketing.png" style="width:40%; border-bottom:rgb(49,215,163) 5px solid; border-radius:40%;"/><br>Marketing</td>
</tr>
</table>
<br><br>
<hr>
<br><br>
<table style="text-align:center;color:rgb(49,215,163); font-weight:800; width:100%;">


<tr style="max_width:100%;">
<td>
<tr><td><h3>Media</h3>
<h4>Join society in the next generation of social media. Share your content on RUON AI.</h4><img src="Media.png" style="border-bottom:rgb(49,215,215) 0.3em solid;border-top:rgb(49,215,215) 0.3em solid; width:25%; margin-left:20%;"/></td>
<td  style="width:35%;"><h5 style="border-bottom:rgb(249,49,254) 0.3em solid">Publish and share your stories, content, and ideas. #RuonMedia</h5></td></tr>

<td><h3>Merchandising</h3>
<h4>Manage inventory and track your leads. Make a storefront on RUON AI.</h4><img src="Storefront.png" style="border-bottom:rgb(49,215,215) 0.3em solid;border-top:rgb(49,215,215) 0.3em solid; width:25%; margin-left:20%;"/></td>
<td  style="width:35%;"><h5 style="border-bottom:rgb(249,49,254) 0.3em solid">Protected and signed in our #SovereignNetwork.</h5><br><img style="width:100%;" src="SovereignSigned.png"/></td></tr>


<td><h3>Marketing</h3>
<h4>Find specific markets for your niche. Essence of target marketing. Learn More. </h4><img src="Marketing.png" style="border-bottom:rgb(49,215,215) 0.3em solid;border-top:rgb(49,215,215) 0.3em solid; width:25%; margin-left:20%;"/></td></tr></tr>

<td><h3>Inquire</h3>
<h4>Learn More. Ask Questions. Get Started! </h4><img src="Question.png" style="border-bottom:rgb(49,215,215) 0.3em solid;border-top:rgb(49,215,215) 0.3em solid; width:25%; margin-left:20%;"/></td></tr></tr>

</tr>
</table>
<?php // $params ?>
<?php $this->end(); ?>
