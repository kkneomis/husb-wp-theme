
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <input type="text" value="" name="s" id="s" placeholder="Start your search here..." />
    <input type="submit" value="Search" id="search">
</form>


<style>
#s {
	color: #333;
	padding: 10px 10px 10px 12px;
	width: 500px;
	border: 5px solid #2a6ebb;
	border-radius: 0;
	-moz-appearance: none;
	-webkit-appearance: none;
     box-shadow: none; 
	outline: 0;
	margin: 0;
}


#search{
    position:relative;
    padding:10px 15px;
    left:-8px;
    border:5px solid #2a6ebb;
    background-color:#2a6ebb;
    color:#fafafa;
    text-transform: uppercase;
}
</style>