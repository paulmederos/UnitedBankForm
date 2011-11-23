<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>United Bank ATM Survey</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- CSS concatenated and minified via ant build script-->
	<link rel="stylesheet" href="css/style.css">
	<!-- end CSS-->
	<script src="jquery-1.6.2.js"></script>
</head>

<body>
	<div id="timeline"></div>
	<div id="container">
		<div class="form_wrapper clearfix">
			<h2>1. ATM Site and Contact Information</h2>
			<p style="border-bottom:1px dashed #999; padding-bottom: 1em;">The information in this section is to be provided by the client.  For Site Contact, please provide person who will answer vendor questions and provide site access.</p>
			<form id="first_form" action="" class="clearfix">
				<div class="form_field">
					<label>Site Name</label>
					<input id="site_name" name="site_name" type="text" />
				</div>
				
				<div class="form_field">
					<label>Street Address</label>
					<input id="street_address" name="street_address" type="text" />
				</div>

				<div class="form_field">
					<label>City, State, Zip</label>
					<input id="city_state_zip" name="city_state_zip" type="text" />
				</div>

				<div class="form_field">
					<label>Site Main Phone</label>
					<input id="site_main_phone" name="site_main_phone" type="text" />
				</div>
				
				<div class="form_field">
					<label>Site Contact Name</label>
					<input id="site_contact_name" name="site_contact_name" type="text" />
				</div>
				
				<div class="form_field">
					<label>Site Contact Phone</label>
					<input id="site_contact_phone" name="site_contact_phone" type="text" />
				</div>
				
				<div class="form_field">
					<label>Site Hours (Business Hours)</label>
					<input id="site_hours" name="site_hours" type="text" />
				</div>
				
				<div class="form_field">
					<label>Site Access Restriction Details</label>
					<input id="site_access_restriction" name="site_access_restriction" type="text" />
				</div>

				<div class="form_field">
					<label>ATM Hours (Available to Public)</label>
					<input id="atm_hours" name="atm_hours" type="text" />
				</div>

				<div class="form_field">
					<label>ATM is located On/Off Premise</label>
					<input id="atm_location_premise" name="atm_location_premise" type="text" />
				</div>
				
				<div class="form_field last_field">
					<label>Business Hours?</label>
					<input type="radio" checked="checked" checked="checked" name="b_hours" value="yes" />Yes
					<input type="radio" name="b_hours" value="no" />No
					<input type="radio" name="b_hours" value="not_avail" />N/A						
				</div>
				
				<input class="unsaved" type="submit" id="step1_submit" value="Save Step 1" />
			</form>
		</div>
		
		<!-- 	Second form		-->
		
		<div class="form_wrapper clearfix">
			<h2>2. ATM Communication and Power Information</h2>
			<form id="second_form" action="" class="clearfix">
				<div class="form_field">
					<label>Is ATM hard-wired?</label>
					<input type="radio" checked="checked" name="hard_wired" value="yes" />Yes
					<input type="radio" name="hard_wired" value="no" />No
					<input type="radio" name="hard_wired" value="not_avail" />N/A
				</div>
				
				<div class="form_field">
					<label>Is power for ATM dedicated?</label>
					<input type="radio" checked="checked" name="dedicated_power" value="yes" />Yes
					<input type="radio" name="dedicated_power" value="no" />No
					<input type="radio" name="dedicated_power" value="not_avail" />N/A
				</div>
				
				<div class="form_field">
					<label>If ATM plugs into Outlet, is other equipment using same outlet?</label>
					<input type="radio" checked="checked" name="other_equipment_same_outlet" value="yes" />Yes
					<input type="radio" name="other_equipment_same_outlet" value="no" />No
					<input type="radio" name="other_equipment_same_outlet" value="not_avail" />N/A
				</div>
				
				<div class="form_field">
					<label><i>If yes, can it be moved?</i></label>
					<input type="radio" checked="checked" name="same_outlet_be_moved" value="yes" />Yes
					<input type="radio" name="same_outlet_be_moved" value="no" />No
					<input type="radio" name="same_outlet_be_moved" value="not_avail" />N/A
				</div>
				
				<div class="form_field">
					<label>Max capacity of Electrical circuit (Amps):</label>
					<input id="max_capacity_circuit" name="max_capacity_circuit" type="text" placeholder="in Amps"/>
				</div>
				
				<div class="form_field">
					<label>Are there two (2) LAN drops?</label>
					<input type="radio" checked="checked" name="lan_drops" value="yes" />Yes
					<input type="radio" name="lan_drops" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If no, distance to LAN room (server room):</i></label>
					<input id="distance_to_lan" name="distance_to_lan" type="text" />
				</div>
				
				<div class="form_field">
					<label>Are there any obstacles in the way?</label>
					<input id="onstacles_to_lan" name="onstacles_to_lan" type="text" />
				</div>
				
				<div class="form_field">
					<label><i>If yes, list obstacles:</i></label>
					<input id="obstacls_to_lan_list" name="obstacls_to_lan_list" type="text" />
				</div>
				
				<div class="form_field">
					<label>Do any existing LAN drops need to be redone or replaced?</label>
					<input id="lan_drops_redone" name="lan_drops_redone" type="text" />
				</div>
				
				<div class="form_field last_field">
					<label><i>If yes, why?</i></label>
					<input id="lan_drops_redone_why" name="lan_drops_redone_why" type="text" />
				</div>
				
				<input type="submit" class="unsaved" id="step2_submit" value="Save Step 2" />
			</form>
		</div>
		
		<!-- 	Third form		-->
		
		<div class="form_wrapper clearfix">
			<h2>3. ATM ADA Compliance</h2>
			<form id="third_form" action="" class="clearfix">
				<div class="form_field">
					<label>Is there a ramp from the road to access the sidewalk?</label>
					<input type="radio" checked="checked" name="ramp_from_road" value="yes" />Yes
					<input type="radio" name="ramp_from_road" value="no" />No
				</div>
				
				<div class="form_field">
					<label>Is there a ramp from the sidewalk to access the ATM?</label>
					<input type="radio" checked="checked" name="ramp_from_sidewalk" value="yes" />Yes
					<input type="radio" name="ramp_from_sidewalk" value="no" />No
				</div>	
				
				<div class="form_field">
					<label>Any obstructions in the way? I.E. trashcans, landscaping</label>
					<input type="radio" checked="checked" name="obstructions" value="yes" />Yes
					<input type="radio" name="obstructions" value="no" />No
				</div>	
				
				<div class="form_field last_field">
					<label>Is the pathway leading to the ATM level?</label>
					<input type="radio" checked="checked" name="pathway" value="yes" />Yes
					<input type="radio" name="pathway" value="no" />No
				</div>
								
				<input type="submit" class="unsaved" id="step3_submit" value="Save Step 3" />
			</form>
		</div>
		
		<!-- 	Fourth form		-->
		
		<div class="form_wrapper clearfix">
			<h2>4. Security Surveillance Equipment</h2>
			<form id="fourth_form" action="" class="clearfix">
				<div class="form_field">
					<label>Is a Surveillance system present?</label>
					<input type="radio" checked="checked" name="surveillance_present" value="yes" />Yes
					<input type="radio" name="surveillance_present" value="no" />No
					<input type="radio" name="surveillance_present" value="not_avail" />N/A
				</div>
				
				<div class="form_field">
					<label>Existing surveillance system:</label>
					<input type="checkbox" name="existing_surveillance" value="branch_VCR" />Branch VCR
					<input type="checkbox" name="existing_surveillance" value="independent_VCR" />Indep. VCR
					<input type="checkbox" name="existing_surveillance" value="branch DVR" />Branch DVR
					<input type="checkbox" name="existing_surveillance" value="independent DVR" />Indep. DVR
				</div>	
				
				<div class="form_field">
					<label>Is there one (1) LAN drop for DVR/VCR system?</label>
					<input type="radio" checked="checked" name="lan_drop_vcr_dvr" value="yes" />Yes
					<input type="radio" name="lan_drop_vcr_dvr" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If no, distance to LAN (server room):</i></label>
					<input id="distance_to_lan2" name="distance_to_lan2" type="text" />
				</div>	
				
				<div class="form_field">
					<label>Is the pathway leading to the ATM level?</label>
					<input type="radio" checked="checked" name="pathway" value="yes" />Yes
					<input type="radio" name="pathway" value="no" />No
				</div>
				
				<div class="form_field">
					<label>Are there any obstacles in the way?</label>
					<input type="radio" checked="checked" name="obstacles" value="yes" />Yes
					<input type="radio" name="obstacles" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If yes, list obstacles:</i></label>
					<input id="obstacles_lan" name="obstacles_lan" type="text" />
				</div>
				
				<div class="form_field">
					<label>Do any existing LAN drops need to be redone or replaced?</label>
					<input type="radio" checked="checked" name="lan_redone_replaced" value="yes" />Yes
					<input type="radio" name="lan_redone_replaced" value="no" />No
				</div>
				
				<div class="form_field last_field">
					<label><i>If yes, explain why:</i></label>
					<input id="lan_redone_replaced_why" name="lan_redone_replaced_why" type="text" />
				</div>					
								
				<input type="submit" class="unsaved" id="step4_submit" value="Save Step 4" />
			</form>
		</div>
		
		<!-- 	Fifth form		-->
		
		<div class="form_wrapper clearfix">
			<h2>5. Alarm Panel</h2>
			<form id="fifth_form" action="" class="clearfix">
				<div class="form_field">
					<label>Is there one (1) LAN drop for the alarm panel?</label>
					<input type="radio" checked="checked" name="lan_drop_alarm" value="yes" />Yes
					<input type="radio" name="lan_drop_alarm" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If no, distance to LAN (server room):</i></label>
					<input id="distance_to_lan_alarm" name="distance_to_lan_alarm" type="text" />
				</div>	
				
				<div class="form_field">
					<label>Are there any obstacles in the way?</label>
					<input type="radio" checked="checked" name="obstacles_alarm" value="yes" />Yes
					<input type="radio" name="obstacles_alarm" value="no" />No
				</div>
				
				<div class="form_field">
					<label>Do any existing LAN drops need to be redone or replaced?</label>
					<input type="radio" checked="checked" name="lan_redone_alarm" value="yes" />Yes
					<input type="radio" name="lan_redone_alarm" value="no" />No
				</div>
				
				<div class="form_field last_field">
					<label><i>If yes, explain why:</i></label>
					<input id="lan_redone_replaced_why2" name="lan_redone_replaced_why2" type="text" />
				</div>	

				<input type="submit" class="unsaved" id="step5_submit" value="Save Step 5" />
			</form>
		</div>
		
		<!-- 	Sixth form		-->
		
		<div class="form_wrapper clearfix">
			<h2>6. Fire Panel</h2>
			<form id="sixth_form" action="" class="clearfix">
				<div class="form_field">
					<label>Is there one (1) LAN drop for the fire panel?</label>
					<input type="radio" checked="checked" name="lan_drop_fire" value="yes" />Yes
					<input type="radio" name="lan_drop_fire" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If no, distance to LAN (server room):</i></label>
					<input id="distance_to_lan_fire" name="distance_to_lan_fire" type="text" />
				</div>	
				
				<div class="form_field">
					<label>Are there any obstacles in the way?</label>
					<input type="radio" checked="checked" name="obstacles_fire" value="yes" />Yes
					<input type="radio" name="obstacles_fire" value="no" />No
				</div>
				
				<div class="form_field">
					<label>Do any existing LAN drops need to be redone or replaced?</label>
					<input type="radio" checked="checked" name="lan_redone_fire" value="yes" />Yes
					<input type="radio" name="lan_redone_fire" value="no" />No
				</div>
				
				<div class="form_field last_field">
					<label><i>If yes, explain why:</i></label>
					<input id="lan_redone_fire_why" name="lan_redone_fire_why" type="text" />
				</div>	

				<input type="submit" class="unsaved" id="step6_submit" value="Save Step 6" />
			</form>
		</div>
		
		<!-- 	Seventh form		-->
		
		<div class="form_wrapper clearfix">
			<h2>7. Vault Panel</h2>
			<form id="seventh_form" action="" class="clearfix">
				<div class="form_field">
					<label>Is a phone present?</label>
					<input type="radio" checked="checked" name="vault_phone" value="yes" />Yes
					<input type="radio" name="vault_phone" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If yes, is it active?</i></label>
					<input type="radio" checked="checked" name="vault_phone_active" value="yes" />Yes
					<input type="radio" name="vault_phone_active" value="no" />No
				</div>
				
				<div class="form_field">
					<label>Do any existing LAN drops need to be redone or replaced?</label>
					<input type="radio" checked="checked" name="lan_redone_vault" value="yes" />Yes
					<input type="radio" name="lan_redone_vault" value="no" />No
				</div>
				
				<div class="form_field last_field">
					<label><i>If yes, explain why:</i></label>
					<input id="lan_redone_vault_why" name="lan_redone_vault_why" type="text" />
				</div>	

				<input type="submit" class="unsaved" id="step7_submit" value="Save Step 7" />
			</form>
		</div>
		
		<!-- 	Eight form		-->
		
		<div class="form_wrapper clearfix">
			<h2>8. Branch Capture Machine</h2>
			<form id="eigth_form" action="" class="clearfix">
				<div class="form_field">
					<label>Is there sufficient counter top space?</label>
					<input type="radio" checked="checked" name="sufficient_counter_space" value="yes" />Yes
					<input type="radio" name="sufficient_counter_space" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If no, suggest a new location and note:</i></label>
					<input id="counter_location" name="counter_location" type="text" />
				</div>
				
				<div class="form_field">
					<label>Is there an existing electrical supply?</label>
					<input type="radio" checked="checked" name="electrical_supply" value="yes" />Yes
					<input type="radio" name="electrical_supply" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If no, distance to panel?</i></label>
					<input id="electrical_panel_distance" name="electrical_panel_distance" type="text" />
				</div>
				
				<div class="form_field">
					<label>Are there any obstacles in the way?</label>
					<input type="radio" checked="checked" name="obstacles_electrical" value="yes" />Yes
					<input type="radio" name="obstacles_electrical" value="no" />No
				</div>
				
				<div class="form_field last_field">
					<label><i>If yes, list obstacles:</i></label>
					<input id="obstacles_electrical_list" name="obstacles_electrical_list" type="text" />
				</div>

				<input type="submit" class="unsaved" id="step8_submit" value="Save Step 8" />
			</form>
		</div>
		
		<!-- 	Ninth form		-->
		
		<div class="form_wrapper clearfix">
			<h2>9. Multi Function Printer</h2>
			<form id="ninth_form" action="" class="clearfix">
				<div class="form_field">
					<label>Is there sufficient floor space?</label>
					<input type="radio" checked="checked" name="sufficient_floor_space" value="yes" />Yes
					<input type="radio" name="sufficient_floor_space" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If no, suggest a new location and note:</i></label>
					<input id="printer_location" name="printer_location" type="text" />
				</div>
				
				<div class="form_field">
					<label>Is there an existing electrical supply?</label>
					<input type="radio" checked="checked" name="printer_supply" value="yes" />Yes
					<input type="radio" name="printer_supply" value="no" />No
				</div>
				
				<div class="form_field">
					<label><i>If no, distance to panel?</i></label>
					<input id="printer_panel_distance" name="printer_panel_distance" type="text" />
				</div>
				
				<div class="form_field">
					<label>Are there two (2) existing LAN drops?</label>
					<input type="radio" checked="checked" name="obstacles_electrical" value="yes" />Yes
					<input type="radio" name="obstacles_electrical" value="no" />No
				</div>
				
				<div class="form_field last_field">
					<label><i>If no, distance to LAN room (server room):</i></label>
					<input id="lan_distance_printer" name="lan_distance_printer" type="text" />
				</div>

				<input type="submit" class="unsaved" id="step9_submit" value="Save Step 9" />
			</form>
		</div>

		<!-- 	Tenth form		-->
		
		<div class="form_wrapper clearfix">
			<h2>10. LAN Room</h2>
			<form id="tenth_form" action="" class="clearfix">
				<div class="form_field">
					<label>How many unused network ports?</label>
					<input id="unused_ports" name="unused_ports" type="text" placeholder="# of ports"/>
				</div>
				
				<div class="form_field">
					<label>Is a UPS (uninterruptible power supply) in place?</label>
					<input type="radio" checked="checked" name="ups" value="yes" />Yes
					<input type="radio" name="ups" value="no" />No
				</div>
				
				<div class="form_field">
					<label>Is there any existing plumbing around server equipment?</label>
					<input type="radio" checked="checked" name="plumbing" value="yes" />Yes
					<input type="radio" name="plumbing" value="no" />No
				</div>
				
				<div class="form_field last_field">
					<label><i>If yes, elaborate?</i></label>
					<input id="plumbing_elaboration" name="plumbing_elaboration" type="text" />
				</div>

				<input type="submit" class="unsaved" id="step10_submit" value="Save Step 10" />
			</form>
		</div>
		
		<!-- 	Final form		-->
		
		<div id="final_form" class="form_wrapper clearfix">
			<h2>Final Notes and Submission</h2>
			<form action="" class="clearfix">
				<div class="form_field last_field">
					<label>Additional Comments:</label>
					<p style="clear:both;">Please note any damage to the kiosk, enclosure, surround, or topper, if present. Please also Include photos of the ATM, ATM room, path from point of delivery to location of ATM, telco, electrical outlets, and security equipment, as well as drawings with specific dimensions of the existing ATM, shape and dimensions of ATM room, placement and distance to other equipment in the ATM room and nearby door swings, noting specific concerns with regard to ATM maintenance clearances.</p>
					<textarea name="comments" placeholder="Comment here."></textarea>
				</div>

				<input type="submit" class="unsaved" id="step11_submit" value="Check all & finish!" />
			</form>
		</div>
	</div> <!--! end of #container -->
	
	<div id="results" class="results">
	</div>
		

	<script>
		$(document).ready( start );
		
		function start() {
			// create listeners 
			$("#first_form").submit( sendFormFields );
			// $("#step2_submit").click( function() { alert( "clicked!" ); return false; } );
			
			$("#first_form").submit( function() { alert( "this has been submitted! ---- " + $(this).serialize() ); });
		}
		
		function sendFormFields() {
			
			// build post data
			var form_data = "";
			
			$("form").each( function() {
				if( form_data == "" ) { 
					form_data = $(this).serialize();
				}
				else {
					form_data += "&" + $(this).serialize();
				}
			} );
			
			$.post("create_table.php", form_data, function( data ){
				$("#results").html( data );
			});
			
			return false;
		}
	
	</script>

</body>
</html>
