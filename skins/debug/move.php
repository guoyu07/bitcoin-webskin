<?php
/*
	Bitcoin Webskin - an open source PHP web interface to bitcoind
	Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
*/
?><?php $this->template('header'); ?>
<pre><b>move</b><hr />
<?php 


	isset( $this->move )
		? print_r($this->move)
		: print "Error: move not set";
		
?> 
</pre>
<?php $this->template('footer'); ?>