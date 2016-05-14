<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize / create pagess

———————————————————————————————————————————————————————————— */

$array_projects = array();

/* ————————————————————————————————————————————————————————— */

$array_projects[] = array(
	'type' => 'House Flip', //accepts any string, this will display as a title text for the page
	'location' => 'bremerton, WA', //this will display the location underneath project type
	'date' => array('2016','01'),
	'url_cover_new' => '3933.jpg', //this will place the front photo with a cover photo
	'url_cover_old' => '1027_51048.jpg', //this will place the front photo with a cover photo
	// 'url_video' => '', //this is hidden by default, but if this contains a value, switch value to video and display video instead of photo
	'url_after' => array(
		"3894.jpg",
		"3905.jpg",
		"3924.jpg",
		"3927.jpg",
		"3945.jpg",
		"3949.jpg",
		),
	'url_before' => array(
		"1027_51104.jpg",
		"1027_53214.jpg",
		"1027_53224.jpg",
		"1027_53306.jpg",
		"1027_53329.jpg",
		"1027_53347.jpg",
		),
	'description_before' => "This was a home in much need of attention. There were many holes in the wall, a tight bathroom, and not a single window that would open without breaking. We turned this unsightly mess into a beautiful home.",
	'description_after' => "With everything new (but the frame itself), this home is ready for its next family. There were challenges with this project, but it wasn't anything we weren't able to take care of.",
	);
$array_projects[] = array(
	'type' => 'Deck Build', //accepts any string, this will display as a title text for the page
	'location' => 'bremerton, WA', //this will display the location underneath project type
	'date' => array('2015','05'),
	'url_cover_new' => '1916.jpg', //this will place the front photo with a cover photo
	'url_cover_old' => '0279.jpg', //this will place the front photo with a cover photo
	// 'url_video' => '', //this is hidden by default, but if this contains a value, switch value to video and display video instead of photo
	'url_after' => array(
		"1917.jpg",
		),
	'url_before' => array(
		'0281.jpg',
		'0282.jpg',
		),
	'description_before' => "This homeowner wanted to add a space to entertain guests and enjoy it all year round. This job had a very tight budget, but we gave what our client wanted and stayed within their means.",
	'description_after' => "Now with a nicely sized deck that is covered, they can enjoy the views and stay dry no matter what time of year.",
	);
$array_projects[] = array(
	'type' => 'Basement Remodel', //accepts any string, this will display as a title text for the page
	'location' => 'gig harbor, WA', //this will display the location underneath project type
	'date' => array('2015','04'),
	'url_cover_new' => '110700.jpg', //this will place the front photo with a cover photo
	'url_cover_old' => '0214537.jpg', //this will place the front photo with a cover photo
	// 'url_video' => '', //this is hidden by default, but if this contains a value, switch value to video and display video instead of photo
	'url_after' => array(
		"110615.jpg",
		"110639.jpg",
		"110709.jpg",
		),
	'url_before' => array(
		"2381225.jpg",
		"2410305.jpg",
		"2781830.jpg",
		),
	'description_before' => "This Project was a handful with a lot of work and a short time to complete it. We turned this three bedroom one-bath basement into what our clients dreamed of.",
	'description_after' => "Now with a two-bedroom, two-bath basement (with heated floor), and a new electric fireplace thought-out, this family can stay warm and enjoy their new space.",
	);
$array_projects[] = array(
	'type' => 'Wall Repair', //accepts any string, this will display as a title text for the page
	'location' => 'graham, WA', //this will display the location underneath project type
	'date' => array('2015','03'),
	'url_cover_new' => '1888.jpg', //this will place the front photo with a cover photo
	'url_cover_old' => '26104656.jpg', //this will place the front photo with a cover photo
	// 'url_video' => '', //this is hidden by default, but if this contains a value, switch value to video and display video instead of photo
	'url_after' => array(
		"1888.jpg",
		"1900.jpg",
		),
	'url_before' => array(
		"1885.jpg",
		"26104453.jpg",
		),
	'description_before' => "This wall was in need of help when the owner was trying to sell the home. The wall was falling apart fast and was not appealing to potential buyers.",
	'description_after' => "With a simple fast fix of tearing off the wood and adding a skim coat, this wall looks new and won't scare buyers away.",
	);
// $array_projects[] = array(
// 	'date' => array('2015','06'),
// 	'url_cover_new' => '1888.jpg', //this will place the front photo with a cover photo
// 	'url_cover_old' => '1888.jpg', //this will place the front photo with a cover photo
// 	// 'url_video' => '', //this is hidden by default, but if this contains a value, switch value to video and display video instead of photo
// 	'type' => 'Kitchen', //accepts any string, this will display as a title text for the page
// 	'location' => 'bremerton, WA', //this will display the location underneath project type
// 	'url_after' => array(
// 		"1_url",
// 		"2_url",
// 		),
// 	'description' => "This is a short description of the situation and finish of project. And here is a second sentence, because we need to check out its readibility.",
// 	);
?>
