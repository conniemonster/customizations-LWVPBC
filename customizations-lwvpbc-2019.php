<?php
/*
Plugin Name: PMPro Customizations
Plugin URI: https://www.paidmembershipspro.com/wp/pmpro-customizations/
Description: Customizations for my Paid Memberships Pro Setup
Version: .1
Author: Paid Memberships Pro
Author URI: https://www.paidmembershipspro.com
*/
 
//Now start placing your customization code below this line




  //we have to put everything in a function called on init, so we are sure Register Helper is loaded
function my_pmprorh_init()
{

//don't break if Register Helper is not loaded
	if(!function_exists( 'pmprorh_add_registration_field' )) {
		return false;
	}
	 //define the fields
	$fields = array();
         //member_number field
         $fields[] = new PMProRH_Field(
                        
			"member number", 
			"text", 
			array(
				"label"=>"Membership #",
				"size"=>12,
				"profile"=>only,
				"required"=>false,
			        "memberslistcsv" => true,
                                )
		); 

	

      //gender field
        $fields[] = new PMProRH_Field(
		'gender',						// input name, will also be used as meta key
		'select',						// type of field
		array(
			'options' => array(				// <option> elements for select field
	                'Female'	=> 'Female',	        // <option value="Female">Female</option>
	                'Male'   	=> 'Male',	        // <option value="Male">Male</option>
	                'Gender Non-Conforming'	=> 'Gender Non-Conforming',     // <option value="Gender Non-Conforming">Gender Non-Conforming</option>
	                'I prefer not to say'	=> 'I prefer not to say',	// <option value="I prefer not to say">I prefer not to say</option>
			        ),
				"profile"		=> true,
				"memberslistcsv"	=> true,
				"required"		=> true,
			)
	);


         //member_birthdate field
         $fields[] = new PMProRH_Field(
			"birth date", 
			"date", 
			array(
				"label"=>"Birth Date",
				"size"=>50,
				"profile"=>true,
				"required"=>false,
			        "memberslistcsv" => true,)
		); 


        //cell_area field
         $fields[] = new PMProRH_Field(
			"cell", 
			"text", 
			array(
				"label"=>"Cell Phone #",
				"size"=>50,
				"profile"=>true,
				"required"=>false,
                                "memberslistcsv" => true,)
		);


          //income field
          $fields[] = new PMProRH_Field(
		'community',						// input name, will also be used as meta key
		'select',						// type of field
		array(
			'options' => array(				// <option> elements for select field
                          ''		=> '',		                // blank option - cannot be selected if this field is required
			  'Aberdeen' => 'Aberdeen',	        // <option value="Aberdeen">Aberdeen</option>
			  'Admirals Cove' => 'Admirals Cove',   // <option value="Admirals Cove">Admirals Cove</option>
			  'Atlantis' => 'Atlantis',	        // <option value="Atlantis">Atlantis</option>
			  'Avalon Estates' => 'Avalon Estates',	// <option value="Avalon Estates">Avalon Estates</option>
                          'Ballen Isles' => 'Ballen Isles',	// <option value="Ballen Isles">Ballen Isles</option>
			  'Banyan Springs' => 'Banyan Springs',	// <option value="Banyan Springs">Banyan Springs</option>
                          'Bellaggio' => 'Bellaggio',	        // <option value="Bellaggio">Bellaggio</option>
                          'Boca Grove' => 'Boca Grove',	        // <option value="Boca Grove">Boca Grove</option>
                          'Boca Pointe' => 'Boca Pointe',	// <option value="Boca Pointe">Boca Pointe</option>
                          'Breakers West' => 'Breakers West',   // <option value="Breakers West">Breakers West</option>
                          'Buena Vida' => 'Buena Vida',	        // <option value="Buena Vida">Buena Vida</option>
                          'Canyon Isles' => 'Canyon Isles',	// <option value="Canyon Isles">Canyon Isles</option>
                          'Casa Costa' => 'Casa Costa',	        // <option value="Casa Costa">Casa Costa</option>
                          'Cascade Lakes' => 'Cascade Lakes',	// <option value="Cascade Lakes">Cascade Lakes</option>
                          'Cascades' => 'Cascades',	        // <option value="Cascades">Cascades</option>
                          'Century Village' => 'Century Village', // <option value="Century Village">Century Village</option>
                          'Club Royale' => 'Club Royale',	// <option value="Club Royale">Club Royale</option>
                          'Coral Lakes' => 'Coral Lakes',	// <option value="Coral Lakes">Coral Lakes</option>
                          'Eastpointe' => 'Eastpointe',	        // <option value="Eastpointe">Eastpointe</option>
                          'Evergreen' => 'Evergreen',	        // <option value="Evergreen">Evergreen</option>
                          'Fountains' => 'Fountains',	        // <option value="Fountains">Fountains</option>
                          'Frenchmans Creek' => 'Frenchmans Creek', // <option value="Frenchmans Creek">Frenchmans Creek</option>
                          'Glen Eagles' => 'Glen Eagles',	// <option value="Glen Eagles">Glen Eagles</option>
                          'Golden Lakes' => 'Golden Lakes',	// <option value="Golden Lakes">Golden Lakes</option>
                          'Golden Lakes Village' => 'Golden Lakes Village', // <option value="Golden Lakes Village">Golden Lakes Village</option>
                          'Hunters Run' => 'Hunters Run',	// <option value="Hunters Run">Hunters Run</option>
                          'Ibis' => 'Ibis',	                // <option value="Ibis">Ibis</option>
                          'Indian Spring' => 'Indian Spring',	// <option value="Indian Spring">Indian Spring</option>
                          'Ironhorse' => 'Ironhorse',	        // <option value="Ironhorse">Ironhorse</option>
                          'Jonathans Landing' => 'Jonathans Landing',	// <option value="Jonathans Landing">Jonathans Landing</option>
                          'Lakeridge Falls' => 'Lakeridge Falls',	// <option value="Lakeridge Falls">Lakeridge Falls</option>
                          'Lakes of Delray' => 'Lakes of Delray',	// <option value="Lakes of Delray">Lakes of Delray</option>
                          'Land of the Presidents' => 'Land of the Presidents',	 // <option value="Land of the Presidents">Land of the Presidents</option>
                          'Marabella' => 'Marabella',	        // <option value="Marabella">Marabellan</option>
                          'Mirasol' => 'Mirasol',	        // <option value="Mirasol">Mirasol</option>
                          'Ocean Ridge' => 'Ocean Ridge',	// <option value="Ocean Ridge">Ocean Ridge</option>
                          'Old Port Cove' => 'Old Port Cove',	// <option value="Old Port Cove">Old Port Cove</option>
                          'Palm Beach Polo' => 'Palm Beach Polo',  // <option value="Palm Beach Polo">Palm Beach Polo</option>
                          'PGA National' => 'PGA National',	// <option value="PGA National">PGA National</option>
                          'Pine Ridge North' => 'Pine Ridge North', // <option value="Pine Ridge North">Pine Ridge North</option>
                          'Polo West Estates' => 'Polo West Estates',	// <option value="Polo West Estates">Polo West Estates</option>
                          'Porta Bella East' => 'Porta Bella East',	// <option value="Porta Bella East">Porta Bella East</option>
                          'Prosperity Harbor' => 'Prosperity Harbor',	// <option value="Prosperity Harbor">Prosperity Harbor</option>
                          'Prosperity Oaks' => 'Prosperity Oaks',	// <option value="Prosperity Oaks">Prosperity Oaks</option>
                          'Rainberry Lake' => 'Rainberry Lake',	        // <option value="Rainberry Lake">Rainberry Lake</option>
                          'Riverbridge' => 'Riverbridge',	        // <option value="Riverbridge">Riverbridge</option>
                          'Rivers Landing' => 'Rivers Landing',	        // <option value="Rivers Landing">Rivers Landing</option>
                          'Riverwalk' => 'Riverwalk',	        // <option value="Riverwalk">Riverwalk</option>
                          'San Marco' => 'San Marco',	        // <option value="San Marco">San Marco</option>
                          'Saturnia' => 'Saturnia',	        // <option value="Saturnia">Saturnia</option>
                          'Southpoint' => 'Southpoint',	        // <option value="Southpoint">Southpoint</option>
                          'Stonegate' => 'Stonegate',	        // <option value="Stonegate">Stonegate</option>
                          'The Bluffs' => 'The Bluffs',	        // <option value="The Bluffs">The Bluffs</option>
                          'The Classic at WPB' => 'The Classic at WPB',	        // <option value="The Classic at WPB">The Classic at WPB</option>
                          'The Harbors' => 'The Harbors',	// <option value="The Harbors">The Harbors</option>
                          'Traditions' => 'Traditions',	        // <option value="Traditions">Traditions</option>
                          'Valencia Cove' => 'Valencia Cove',	// <option value="Valencia Cove">Valencia Cove</option> 
                          'Valencia Pointe' => 'Valencia Pointe', // <option value="Valencia Pointe">Valencia Pointe</option>
                          'Venetian Isles' => 'Venetian Isles',	  // <option value="Venetian Isles">Venetian Isles</option>
                          'Village Walk' => 'Village Walk',	// <option value="Village Walk">Village Walk</option>
                          'Villaggio' => 'Villaggio',	        // <option value="Villaggio">Villaggio</option>
                          'Woodland Lakes' => 'Woodland Lakes',	// <option value="Woodland Lakes">Woodland Lakes</option>
                          'Woods Walk' => 'Woods Walk',	        // <option value="Woods Walk">Woods Walk</option>
                          'Wycliffe' => 'Wycliffe',	        // <option value="Wycliffe">Wycliffe</option>
                          'Other' => 'Other',	                // <option value="Other">Other</option>
			        ),
				"profile"		=> true,
				"memberslistcsv"	=> true,
				"required"		=> true,
			)
	);
 

         //precinct_area field
         $fields[] = new PMProRH_Field(
			"precinct area", 
			"text", 
			array(
				"label"=>"Your Voting Precinct Area (look up districts here: https://www.pbcelections.org)",
				"size"=>50,
				"profile"=>true,
				"required"=>false,
                                "memberslistcsv" => true,)
		);
 

        
          //income field
          $fields[] = new PMProRH_Field(
		'income',						// input name, will also be used as meta key
		'select',						// type of field
		array(
			'options' => array(				// <option> elements for select field
                          ''		=> '',		                // blank option - cannot be selected if this field is required
			  'lessthan24000' => '&lt; $24,000',	        // <option value="lessthan24000">&lt; $24,000</option>
			  '24000to50000' => '$24,000-$50,000',	        // <option value="24000to50000">$24,000-$50,000</option>
			  '50000to85000' => '$50,000-$85,000',	        // <option value="50000to85000">$50,000-$85,000</option>
			  '85000to125000' => '$85,000-$125,000',	// <option value="85000to125000">85,000-$125,000</option>
                          '125000to250000' => '$125,000-$250,000',	// <option value="125000to250000">$125,000-$250,000</option>
			  'morethan250000' => '&gt; $250,000',	        // <option value="morethan250000">&gt; $250,000</option>
			        ),
				"profile"		=> true,
				"memberslistcsv"	=> true,
				"required"		=> false,
			)
	);
 


           
        //add_a_household_member field   
                 $fields[] = new PMProRH_Field(
		'Adding a Household Member?',		// input name, will also be used as meta key
		'select',				// type of field
		array(
			'options' => array(		// <option> elements for select field
			''		=> '',		// blank option - cannot be selected if this field is required
	                'Yes'	=> 'Yes',	        // <option value="Yes">Yes</option>
	               
		),
				"profile"		=> false,
				"memberslistcsv"	=> true,
				"required"		=> false,
			)
	);  

                $fields[] = new PMProRH_Field(
                "household member name",
                "text",
                array(
		       "label"=>"Enter additional Household Member's Name",
		       "size"=>50,
		       "profile"=>true,
		       "required"=>false,
                       "memberslistcsv" => true,
                       )
	);

  
                $fields[] = new PMProRH_Field(
                "How did you hear about us",
                "text",
		'referral',						// input name, will also be used as meta key
		'select',						// type of field
		array(
			'options' => array(				// <option> elements for select field
                          ''		=> '',		                // blank option - cannot be selected if this field is required
			  'Facebook' => 'Facebook',    // <option value="Facebook">Facebook</option>
			  'Friend' => 'Friend',	       // <option value="Friend">Friend</option>
			  'Website' => 'Website',      // <option value="Website">Website</option>
			  'Twitter' => 'Twitter',	// <option value="Twitter">Twitter</option>
                          'Other' => 'Other',	// <option value="Other">Other</option>
			  ),
				"profile"		=> true,
				"memberslistcsv"	=> true,
				"required"		=> false,
                          )
	);


          /*
           Define the global array below for your main accounts and sponsored levels.
           Array keys should be the main account level.
          */
                	
             global $pmprosm_sponsored_account_levels;
$pmprosm_sponsored_account_levels = array(
	//set 1 seat at checkout
	3 => array(
		'main_level_id' => 3, //redundant but useful
		'sponsored_level_id' => array(7), //array or single id
		'seats' => 1
	),
        4 => array(
		'main_level_id' => 4, //redundant but useful
		'sponsored_level_id' => array(7), //array or single id
		'seats' => 1
	),
);

   
//add the fields into a new checkout_boxes are of the checkout page
	foreach($fields as $field)
		pmprorh_add_registration_field(
			'checkout_boxes',				// location on checkout page
			$field						// PMProRH_Field object
		);


	//that's it. see the PMPro Register Helper readme for more information and examples.
}
add_action( 'init', 'my_pmprorh_init' );




/*
	Add data from the wp_users and wp_user_meta fields tables to the Members List CSV Export.
	
	The pmpro_members_list_csv_extra_columns passes an array of columns.
	The keys of the array are the column headings. The values are callback functions to get the value for that row.
*/
//add the column to the export
function my_pmpro_members_list_csv_extra_columns ( $columns ) {
	$columns["member_number"] = "my_pmpro_members_list_member_number";
	$columns["gender"] = "my_pmpro_members_list_gender";
	$columns["birthdate"] = "my_pmpro_members_list_birthdate";
	$columns["cell"] = "my_pmpro_members_list_cell";
        $columns["community"] = "my_pmpro_members_list_community";
	$columns["household_member_name"] = "my_pmpro_members_list_household_member_name";
	$columns["precinct_area"] = "my_pmpro_members_list_precinct_area";
        $columns["income"] = "my_pmpro_members_list_income";
        $columns["referral_source"] = "my_pmpro_members_list_referral_source";
	return $columns;
}
add_filter( 'pmpro_members_list_csv_extra_columns', 'my_pmpro_members_list_csv_extra_columns', 10 );
//call back to get the column a value
function my_pmpro_members_list_column_a ( $user ) {
	//this is an example to retrive user meta
	$nickname_value = get_user_meta( $user->ID, 'Nickname', true );
	return $nickname_value;

//call back to get the column b value
	//this is an example to retrive userdata
	$member_number_value = $user->user_url;
	return $member_number_value;
	
	$gender_value = $user->user_url;
	return $gender_value;

	$birthdate_value = $user->user_url;
	return $birthdate_value;

	$cell_value = $user->user_url;
	return $cell_value;

        $community_value = $user->user_url;
	return $community_value;

	$household_member_name_value = $user->user_url;
	return $household_member_name_value;

	$precinct_area_value = $user->user_url;
	return $precinct_area_value;

	$income_value = $user->user_url;
	return $income_value;

        $referral_source_value = $user->user_url;
	return $referral_source_value;
}

//Add other columns to Members List Header
function my_pmpro_memberslist_extra_cols_header($theusers)
{
	?>
        <th><?php _e('Member #', 'pmpro');?></th>
        <th><?php _e('Gender', 'pmpro');?></th>
	<th><?php _e('Birthdate', 'pmpro');?></th>
	<th><?php _e('Cell', 'pmpro');?></th>
        <th><?php _e('Add. Household Member', 'pmpro');?></th>
        <th><?php _e('Precinct Area', 'pmpro');?></th>
	<th><?php _e('Community', 'pmpro');?></th>
        <th><?php _e('Income', 'pmpro');?></th>
        <th><?php _e('Referral Source', 'pmpro');?></th>
	<?php
}
add_action('pmpro_memberslist_extra_cols_header', 'my_pmpro_memberslist_extra_cols_header');

//Add other columns to Members List Rows
function my_pmpro_memberslist_extra_cols_body($theuser)
{
?>
<td>
	<?php 
		if(!empty($theuser->member_number))
			echo $theuser->member_number;
	?>
</td>
<td>
	<?php 
		if(!empty($theuser->gender))
			echo $theuser->gender;
	?>
</td>
<td>
	<?php 
		if(!empty($theuser->birthdate))
			echo $theuser->birthdate;
	?>
</td>
<td>
	<?php 
		if(!empty($theuser->cell))
			echo $theuser->cell;
	?>
</td>
<td>
	<?php 
		if(!empty($theuser->household_member_name))
			echo $theuser->household_member_name;
	?>
</td>
<td>
	<?php 
		if(!empty($theuser->precinct_area))
			echo $theuser->precinct_area;
	?>
</td>
<td>
	<?php 
		if(!empty($theuser->community))
			echo $theuser->community;
	?>
</td>
<td>
	<?php 
		if(!empty($theuser->income))
			echo $theuser->income;
	?>
</td>
<td>
	<?php 
		if(!empty($theuser->referral_source))
			echo $theuser->referral_source;
	?>
</td>

<?php
}
add_action('pmpro_memberslist_extra_cols_body', 'my_pmpro_memberslist_extra_cols_body');



function user_sortable_columns( $columns ) {
    $columns['household_member_name'] = 'Additional Member';
    return $columns;
}

add_filter( 'manage_users_sortable_columns', 'user_sortable_columns' );

add_action( "pre_get_users", function ( $WP_User_Query ) {

if ( isset( $WP_User_Query->query_vars["orderby"] )
    && ( "household_member_name" === $WP_User_Query->query_vars["orderby"] )
) {
    $WP_User_Query->query_vars["meta_key"] = "household_member_name";
    $WP_User_Query->query_vars["orderby"] = "meta_value";
}

}, 10, 1 );


//Add other columns to Users List Header
function my_pmpro_manage_users_columns($columns) {
    $columns['member_number'] = 'Member #';
    return $columns;

    
}
add_filter('manage_users_columns', 'my_pmpro_manage_users_columns');
 
//Add other columns to Users List Rows 
function my_pmpro_manage_users_custom_column($value, $column_name, $user_id) {
    $theuser = get_userdata( $user_id );
        if ( 'member_number' == $column_name )
		return $theuser->member_number;
    return $value;

}
add_action('manage_users_custom_column', 'my_pmpro_manage_users_custom_column', 10, 3);




/** Use the email address as username with PMPro checkout. You'll also have to hide the username fields at checkout using CSS or a custom checkout page template.
    Check for level as well to make sure we're on checkout page.*/

function my_init_email_as_username()
{
  
  if(empty($_REQUEST['level']))
    return;
  
  if(!empty($_REQUEST['bemail']))
    $_REQUEST['username'] = $_REQUEST['bemail'];
    
  if(!empty($_POST['bemail']))
    $_POST['username'] = $_POST['bemail'];
    
  if(!empty($_GET['bemail']))
    $_GET['username'] = $_GET['bemail'];
}
add_action('init', 'my_init_email_as_username');                                




/**
 * Convert capital letters to lowercase and replace all spaces with an underscore when 
 * new users register for Paid Memberships Pro.
 * Add this code to your PMPro Customizations Plugin -  
 */
 
 function my_custom_user_registration_changes( $userdata ) {
	$userdata['user_login'] = str_replace(' ', '_', strtolower( $userdata['user_login'] ) );
	return $userdata;
}
add_filter( 'pmpro_checkout_new_user_array', 'my_custom_user_registration_changes', 10, 1 );



//Show it on the membership account page.
function pmpromn_pmpro_account_bullets_bottom()
{
	if(is_user_logged_in())
	{
		global $current_user;
		
		//get member number
		$member_number = get_user_meta($current_user->ID, "member_number", true);
		
		//if no number, generate one
		//if(empty($member_number))$member_number = generate_member_number($current_user->ID);
		
		//show it
		if(!empty($member_number))
		{
		?>
		<li><strong><?php _e("Member Number", "pmpro");?>:</strong> <?php echo $member_number?></li>
		<?php
		}
	}
}
add_action('pmpro_account_bullets_bottom', 'pmpromn_pmpro_account_bullets_bottom');





/**
 * The my_pmpro_renew_membership_shortcode is a custom function creating a renew link for members.
 * Use the shortcode [pmpro_renew_button] to display the button anywhere on your site where shortcodes are recognized.
 *
 * @return string A link containing the URL string to renew.
 */
 
function my_pmpro_renew_membership_shortcode() {
	global $current_user, $pmpro_pages;
	// Current user empty (i.e. not logged in)
	if ( empty( $current_user ) ) {
		return;
	}
	
	$level = pmpro_getMembershipLevelForUser( $current_user->ID );
	// If the user does not have a membership level, don't display anything.
	if( empty( $level ) ) {
		return;
	}
	
	// CSS Styling that changes link into a button.
	?>
		<style>
			a.pmpro-renew-button {
				background-color: #BF0F35;
				border: 1px solid #333333;
				color: #fff;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 19px; 
			}
		</style>
	<?php
	
	$level_id = $level->id;
	$url = add_query_arg( 'level', $level_id, get_permalink( $pmpro_pages['checkout'] ) );
	return '<a class="pmpro-renew-button" href="' . esc_url( $url ) . '">Renew Membership</a>';
	
}
add_shortcode( 'pmpro_renew_button', 'my_pmpro_renew_membership_shortcode' );



/*
	Don't show confirm password or email fields on the checkout page.

*/
add_filter("pmpro_checkout_confirm_password", "__return_false");
add_filter("pmpro_checkout_confirm_email", "__return_false");

/*
	add member's name and avatar to the masthead on the membership account page using the Memberlite theme.
*/
function my_membership_account_before_masthead_description( ) {
	global $pmpro_pages, $current_user;
	if(!empty($pmpro_pages) && is_page($pmpro_pages['account']))
	{
		echo '<div class="text-center">' . get_avatar($current_user->ID, 128) . '</div>';
		echo '<h1 class="text-center">Welcome, ' . $current_user->display_name . '</h1>';
	}
}
add_filter('before_masthead_description', 'my_membership_account_before_masthead_description');



/*
  If a user checked option1, then add $30 for an additional member to the price.

function my_pmpro_checkout_level($level)
{
  if(!empty($_REQUEST['option1']))
  {
    $level->initial_payment = $level->initial_payment + 30;
    //$level->billing_amount = $level->billing_amount + 30;	//to update recurring payments too
  }
 
  return $level;
}
add_filter("pmpro_checkout_level", "my_pmpro_checkout_level");*/


/*
	Increase memory and execution time for WP admins
	
	You can add code to your php.ini, .htaccess, or wp-config.php
	to increase execution times and memory limits to get WordPress
	and PMPro to work when it needs more memory, time, or both.
	
	However, sometimes you only need the extra memory and time
	when doing something an admin would be doing... like exporting
	a members list or orders table.
	
	If this is the case, you can use this code to selectively
	increase the execution time and memory for admins only.
	This will make sure that normal visitors don't end up
	using more memory or apache/etc services than they need to,
	which should make your site run smoother.
*/
function my_init_memory()
{
	if(current_user_can("manage_options") || current_user_can("pmpro_memberslistcsv") || current_user_can("pmpro_orderscsv"))
	{
		ini_set('max_execution_time', 300); //300 seconds = 5 minutes
		ini_set('memory_limit', '256M');
	}
}
add_action('init', 'my_init_memory', 1);




/*
	PMPro Reports Extras 
	Title: pmpro_reports_extras
	Slug: pmpro_reports_extras
	
	For each report, add a line like:
	global $pmpro_reports;
	$pmpro_reports['slug'] = 'Title';
	
	For each report, also write two functions:
	* pmpro_report_{slug}_widget()   to show up on the report homepage.
	* pmpro_report_{slug}_page()     to show up when users click on the report page widget.
*/
global $pmpro_reports;
$pmpro_reports['sample'] = __('My Sample Report', 'pmpro-reports-extras');

function pmpro_report_sample_widget()
{	
?>
<p>Hi! I'm a sample report!</p>
<?php
}

function pmpro_report_sample_page()
{
?>
<h2>
	<?php _e('This is a Sample', 'pmpro-reports-extras');?>
</h2>
<p>This report demonstrates how to add a custom report to PMPro. Enjoy!.</p>
<hr />
<?php
}


// Hide “Discount Code” field on Membership Checkout for Specified Levels
function hide_discount_code_field_for_specific_levels($show)
{
  global $pmpro_level;
  
  if( in_array( $pmpro_level->id, array(1,2,3,4,5,6) ) )
  {
	  $show = false;
  }
  return $show;
}
add_filter('pmpro_show_discount_code', 'hide_discount_code_field_for_specific_levels');



// Remove "Status" from Account page if current membersip does not require approval.
function my_pmproa_init() {

if(!class_exists('PMPro_Approvals')) return false;

global $current_user;

if(!PMPro_Approvals::requiresApproval($current_user->membership_level->id))
remove_action( 'pmpro_account_bullets_top', array( 'PMPro_Approvals', 'pmpro_account_bullets_top' ) );
}
add_action('init', 'my_pmproa_init');


/**
 * This code gist illustrates a way to customize the format of your members phone number.
 *
 * In this example, we will change the PMPro phone number from
 *
 *  (123)456-7890
 *   to  1234567890
 *
 * Adjust this code gist to suit your needs for phone number.
 *
 * We will be hooking into the pmpro_format_phone_filter. For more on this filter, please see: https://www.paidmembershipspro.com/hook/pmpro_format_phone/
 *
 * Add this code below to your PMPro Customizations Plugin
 *  - https://www.paidmembershipspro.com/create-a-plugin-for-pmpro-customizations/
 */
function pmpro_format_my_phone( $phone ) {
    
    $r = cleanPhone( $phone );
        if ( strlen( $r ) == 11 ) {
            $r = substr( $r, 0, 1 ) . '' . substr( $r, 1, 3 ) . '' . substr( $r, 4, 3 ) . '' . substr( $r, 7, 4 );
        } elseif ( strlen( $r ) == 10 ) {
            $r = '' . substr( $r, 0, 3 ) . '' . substr( $r, 3, 3 ) . '' . substr( $r, 6, 4 );
        } elseif ( strlen( $r ) == 7 ) {
            $r = substr( $r, 0, 3 ) . '' . substr( $r, 3, 4 );
        }
        /**
         * Filter to do more or less cleaning of phone numbers.
         *
         * @since 1.8.4.4
         *
         * @param string $r The formatted phone number.
         * @param string $phone The original phone number.
         */
        return $r;
}
add_filter( 'pmpro_format_phone', 'pmpro_format_my_phone' );








/**
 * Display messages of the Original Price, Discounted Price and Amount Saved when discount code is applied to PMPro order.
 * Add this code recipe to a PMPro Customization Plugin - Display messages of the Original Price, Discounted Price and Amount Saved when discount code is applied to PMPro order
 * Various classes added to strings to allow for styling - ".pmpro-discorig-message", ".pmpro-orginal-price", ".pmpro-discount-price", ".pmpro-save-price"
 *
 * [my_pmpro_applydiscountcode_return_js] Display original price and discount when a discount code is applied.
 * @param  string $discount_code    [description]
 * @param  integer $discount_code_id [description]
 * @param  integer $level_id         [description]
 * @param  integer $code_level       [description]
 * @return void
 */
function my_pmpro_applydiscountcode_return_js( $discount_code, $discount_code_id, $level_id, $code_level ) {
	// Get the original level.
	$level = pmpro_getLevel( $level_id );
	// Format prices.
	$original_price   = pmpro_formatPrice( $level->initial_payment );
	$discounted_price = pmpro_formatPrice( $code_level->initial_payment );
	$discount         = $level->initial_payment - $code_level->initial_payment;
	$discount         = pmpro_formatPrice( $discount );
	// Build HTML.
	$html  = "'<div class=\"pmpro-discorig-message pmpro-original-price\">The original due is {$original_price}. </div>";
	$html .= "<div class=\"pmpro-discorig-message pmpro-discount-price\">Adding a Household Additional Member is {$discounted_price}. </div>";
	/*$html .= "<div class=\"pmpro-discorig-message pmpro-save-price\">You save {$discount}.</div>'";*/
	?>
		
			jQuery("#pmpro_level_cost").html(<?php echo $html; ?>);
		
	<?php
}
add_action( 'pmpro_applydiscountcode_return_js', 'my_pmpro_applydiscountcode_return_js', 10, 4 );




/*Hide Discount Code Field for non-Household member accounts 
function hide_discount_code_field_for_specific_levels($show)
{
  global $pmpro_level;
  
  if( in_array( $pmpro_level->id, array(1,2,3,4,5,6) ) )
  {
	  $show = false;
  }
  return $show;
}
add_filter('pmpro_show_discount_code', 'hide_discount_code_field_for_specific_levels');*/


/*Only let level 7 members sign up if they use a discount code.
  Place this code in your active theme's functions.php or a custom plugin.
*/
function my_pmpro_registration_checks_require_code_to_register($pmpro_continue_registration)
{
  //only bother if things are okay so far
	if(!$pmpro_continue_registration)
		return $pmpro_continue_registration;

	//level = 7 and there is no discount code, then show an error message
	global $pmpro_level, $discount_code;
	
  //if($pmpro_level->id == 7 && (empty($discount_code) || trim(strtoupper($discount_code)) != "REQUIRED_CODE_IN_UPPERCASE")) //use this conditional to check for a specific code.
  if($pmpro_level->id == 7 && empty($discount_code))
	{
		pmpro_setMessage("You must use a valid activation code to register as a Household Additional Member..", "pmpro_error");
		return false;
	}
	
	return $pmpro_continue_registration;
}
add_filter("pmpro_registration_checks", "my_pmpro_registration_checks_require_code_to_register");



/*
	Default some PMPro fields based on other user meta.
	
	Add this code to your active theme's functions.php or a custom plugin.
*/
function get_user_metadata_pmpro_prepop($value, $user_id, $meta_key, $single)
{	
	//fields to sync, make sure there are no loops in this
	$sync_fields = array(
		'pmpro_bfirstname' => 'First Name',
		'pmpro_blastname' => 'Last Name',
		'pmpro_baddress1' => 'Address 1',
		'pmpro_baddress2' => 'Address 2',
		'pmpro_bcity' => 'City',
		'pmpro_bstate' => 'State',
		'pmpro_bzipcode' => 'Zipcode',
		'pmpro_bphone' => 'Phone',
	);
	
	//is this a field we try to sync?
	if(!empty($sync_fields[$meta_key]))
	{
		//get the actual meta field
		$meta_cache = wp_cache_get($user_id, 'user_meta');
		if ( !$meta_cache ) {
			$meta_cache = update_meta_cache( 'user', array( $user_id ) );
			$meta_cache = $meta_cache[$user_id];
		}
		
		//only lookup the other value if the meta field is empty
		if(empty($meta_cache[$meta_key]))
		{
			$value = get_user_meta($user_id, $sync_fields[$meta_key], $single);
		}
	}

	return $value;
}
add_filter('get_user_metadata', 'get_user_metadata_pmpro_prepop', 10, 4);


