<?php
	//tkGr33n HTTP ERROR HEADER (fake)
	//		BASIC USEAGE
	// 			include '/path/to/HTTP.php';
	//			$x = new HEH;
	//			$x -> createList();
	//		  	$x -> err(418); //Change 418 to desired error code ( http://en.wikipedia.org/wiki/List_of_HTTP_status_codes )


	class HEH {
		private $status = array("");
		private $add = array("");
		private $version = "1.01";
		public $compiled;
		
		public function err($c, $ad = "") {
/* 			error_reporting(0); */
			$s = "<h1>__CODE__ __NAME__</h1><p>__ADDITIONAL__</p><p></p><hr><address>"
			.$_SERVER['SERVER_SOFTWARE'].
			" HEH/".$this->version.
			" PHP/".phpversion().
			" Server at ".$_SERVER['SERVER_NAME'].
			" Port ".$_SERVER['SERVER_PORT'].
			"<br /></address>";
			$return = $s;
			$this -> compiled = str_replace(array("__CODE__", "__NAME__", "__ADDITIONAL__"), array($c, $this->status[$c], $this->add[$c].$ad), $return);
			error_reporting(E_ALL);
		}
		
		public function createList() {
			//0xx HEH Customs
			$this->status[000] = "HEH"; $this->add[000] = "If you see this, that means everything is OKAY!";
			$this->status[001] = "Win"; $this->add[001] = "You win at what ever your browser may be!";
			$this->status[002] = "Fail"; $this->add[002] = "You fail at life";
			$this->status[003] = "Pie"; $this->add[003] = "You may have pies";
			$this->status[004] = "Cake"; $this->add[004] = "You may have cake";
			//1xx Informational
			$this->status[100] = "Continue"; $this->add[100] = "You may continue";
			$this->status[101] = "Switching protocols	"; $this->add[101] = "The server is acknowledging that it will switch protocols.";
			$this->status[102] = "Processing (WebDAV)"; $this->add[102] = "WebDAV is still processing a request";
			//2xx Success
			$this->status[200] = "OK"; $this->add[200] = "This was a triumph";
			$this->status[201] = "Created"; $this->add[201] = "Resource is created";
			$this->status[202] = "Accepted"; $this->add[202] = "It's still processing though";
			$this->status[203] = "Non-authoritative Information"; $this->add[203] = "Content is returning! But, it might be from an other source";
			$this->status[204] = "No content"; $this->add[204] = "Content is returning! But, it's empty";
			$this->status[205] = "Reset sontent"; $this->add[205] = "Content is returning! But, its requesting in a way which will never complete";
			$this->status[206] = "Partial sontent"; $this->add[206] = "Content is returning! But part of it, because YOU were requesting too much!";
			$this->status[207] = "Multi-status (WebDAV)"; $this->add[207] = "Content is returning! But it's part of what you requested (WebDAV)";
			//3xx Redirection
			$this->status[300] = "Multiple choices"; $this->add[300] = "Young jedi master, what side shall you take? Dark side or Light side";
			$this->status[301] = "Moved permentally"; $this->add[301] = "Please move to this selected desitination";
			$this->status[302] = "Found"; $this->add[302] = "Arrdy har har! We found a hidden booty!";
			$this->status[303] = "See other"; $this->add[303] = "See this other one you might be interested in";
			$this->status[304] = "Not modified"; $this->add[304] = "It's not modified! And it will never will";
			$this->status[305] = "Use proxy"; $this->add[305] = "You should use a proxy y'know";
			$this->status[306] = "Switch proxy"; $this->add[306] = "Switch your proxy!";
			$this->status[307] = "Temporary redirect"; $this->add[307] = "Moved here due to reconstruction!";
			//4xx Client error
			$this->status[400] = "Bad request"; $this->add[400] = "The request contains bad syntax or cannot be fulfilled";
			$this->status[401] = "Unauthorized"; $this->add[401] = "You need to gain access to view this first mate'y";
			$this->status[402] = "Payment required"; $this->add[402] = "Please pay via PalePay";
			$this->status[403] = "Forbidden"; $this->add[403] = "You're simply not allowed!";
			$this->status[404] = "Not found"; $this->add[404] = "Equal to dividing by zero";
			$this->status[405] = "Method not allowed"; $this->add[405] = "You didn't use DELETE, GET, POST or PUT. WTH IS WRONG WITH YOU?";
			$this->status[406] = "Not acceptable"; $this->add[406] = "Eh, This is is unacceptable!";
			$this->status[407] = "Proxy auth. required"; $this->add[407] = "Proxy -> Allow Cookies -> HAX";
			$this->status[408] = "Request timeout"; $this->add[408] = "Division by zero";
			$this->status[409] = "Conflict"; $this->add[409] = "THERES A CHAIN REACTION ON ROUTE 66";
			$this->status[410] = "Gone"; $this->add[410] = "Now here, is an obvious case of division of zero";
			$this->status[411] = "Length required"; $this->add[411] = "You're practically saying you want a contract with zero letters";
			$this->status[412] = "Precondition failed"; $this->add[412] = "A wild Abra appeared!";
			$this->status[413] = "Request entity too large"; $this->add[413] = "The entity your using is simply too large";
			$this->status[414] = "Request URI too large"; $this->add[414] = "The URI is too large";
			$this->status[415] = "Unsupported media type"; $this->add[415] = "Use application/octet-stream";
			$this->status[416] = "Requested Range not satisfiable"; $this->add[416] = "Simply because 0-6 is not enough!";
			$this->status[417] = "Extraction failed"; $this->add[417] = "Please install `zip`";
			$this->status[418] = "I'm a teapot"; $this->add[418] = "The resulting entity body MAY be short and stout.";
			$this->status[422] = "Unprocessable entity"; $this->add[422] = "Don't use ABCDEFGHIJKLMNOPQRTUVXYZ0123456789";
			$this->status[423] = "Locked"; $this->add[423] = "Senile errors";
			$this->status[424] = "Failed dependency"; $this->add[424] = "PROPPATCH is void";
			$this->status[425] = "Unordered collection"; $this->add[425] = "You ordered too many pizza's";
			$this->status[426] = "Upgrade required"; $this->add[426] = "Stop using DOS";
			$this->status[449] = "Retry with"; $this->add[449] = "Firefox or Safari";
			$this->status[450] = "Blocked with Windows parental controls"; $this->add[450] = "Unblock it, Now.";
			//5xx Server error
			$this->status[500] = "Internal server error"; $this->add[500] = "Server = Blown";
			$this->status[501] = "Not implemented"; $this->add[501] = "Server equals dumb";
			$this->status[502] = "Bad gateway"; $this->add[502] = "We thought we're a gateway, but actually we're a server";
			$this->status[503] = "Service unavailable"; $this->add[503] = "Server is too busy handling your porno downloads";
			$this->status[504] = "Gateway timeout"; $this->add[504] = "We're not a gateway or a proxy. Period";
			$this->status[505] = "HTTP Version not supported"; $this->add[505] = "We only allow 1.0 and 1.1, not 13.37";
			$this->status[506] = "Variant also negotiates"; $this->add[506] = "So it's a smarty pants!";
			$this->status[507] = "Insufficient storage"; $this->add[507] = "Upgrade server";
			$this->status[509] = "Bandwidth limit exceeded"; $this->add[509] = "Too... many... requests... must... tell.. ";
			$this->status[510] = "Not extended"; $this->add[510] = "Okay this is the end untill we say it aint";
	    }
	}
?>