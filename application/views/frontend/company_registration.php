<link rel="stylesheet" href="public/admin/css/screenuser.css?v=1" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->
<!--  checkbox styling script -->
<script src="public/admin/js/jquery/ui.core.js" type="text/javascript"></script>
<script src="public/admin/js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="public/admin/js/jquery/jquery.bind.js" type="text/javascript"></script>
<script src="public/admin/js/jquery/jquery_main.js"  type="text/javascript"></script>
<script src="public/admin/js/jquery/jquery.validate.js"  type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function() {	

	var container = $('div.error-inner');
	var validator1 = $("#myform").validate({
	                    //FOR THIS Option You will have to use jquery.metadata.js 
	//highlight:false,
	//unhighlight:false,
	rules: {
		introduction_for_investors:{
			required: true
		},
		title:{
			required: true
		},
		is_fname_confidential: {
			required: true
		},
		first_name: {
			required: true
		},
		is_lname_confidential: {
			required: true
		},
		last_name: {
			required: true
		},
		company_name: {
			required: true
		 },
		other: {
			required: true
		},
		address: {
			required: true
		},
		city: {
			required: true
		},
		state: {
			required: true
		},
		zipcode: {
			required: true
		},
		phone: {
			required: true,
			 minlength: 10,
			 number : true
		},
		email1: {
			required: true,
			email: true 
		},
		email2: {
				email: true 	
				},
		facebook_url_personal: {
			required: true,
			url: true,		
					},	
		vkontekte_address_personal: {
			required: true,
			url: true,
			},
		facebook_url_company: {
			required: true,
			url: true,
			},
	odnoklassniki_address_personal: {
			required: true,
			url: true,
			},
		  vkontekte_address_company: {
			required: true,
			url: true,
			},
			linkedin_url: {
			required: true,
			url: true,
			},
			odnoklassniki_address_company: {
			required: true,
			url: true,
			},
			twitter: {
			required: true,
			url: true,
			},
			company_details:{
			required: true
		},
		company_docs:{
			required: true,
					},
		business_plans:{
			required: true,
					},			
		financial_uploads:{
			required: true,
					},
		min_amount_requested:{
			required: true,
		investment_towards:{
			required: true,
					},					},
		ideal_investor:{
			required: true,
					},
	bios_pics1:{
			required: true,
					},
	bios_pics2:{
		required: true,
		},
		bios_pics3:{
		required: true,
		},
		bios_pics4:{
		required: true,
		},
		bios_pics5:{
		required: true,
		},
		strategy_details:{
		required: true,
		},
		current_valuation:{
		required: true,
		},
		major_assets:{
		required: true,
		},
		marketing_material1:{
		required: true,
		},
		marketing_material2:{
		required: true,
		},
		marketing_material3:{
		required: true,
		},
		marketing_material4:{
		required: true,
		},
		marketing_material5:{
		required: true,
		},
		feedback_upload:{
		required: true,
		},
		feedback_text:{
		required: true,
		},
		short_term_goals:{
		required: true,
		},
		competitors:{
		required: true,
		},
		companies_you_emulate:{
		required: true,
		},
		market_research:{
		required: true,
		},
		},
		
		

	messages:{
	
	introduction_for_investors: {
			required: "<td><div class='error-left'></div><div class='error-inner'>This field is required.</div></td>"
		},
		title:{
			required: "<td><div class='error-left'></div><div class='error-inner'>This field is required.</div></td>"
		},
		is_fname_confidential:{
			required: "<td><div class='error-left'></div><div class='error-inner'>This field is required.</div></td>"
		},
	   first_name:{
			required: "<td><div class='error-left'></div><div class='error-inner'>The first_name field is required.</div></td>"
		},
		is_lname_confidential:{
			required: "<td><div class='error-left'></div><div class='error-inner'>This field is required.</div></td>"
		},
		last_name:{
			required: "<td><div class='error-left'></div><div class='error-inner'>The last_name field is required.</div></td>"
		},
		company_name:{
			required: "<td><div class='error-left'></div><div class='error-inner'>The last_name field is required.</div></td>"
		},
		other: {
			required: "<td><div class='error-left'></div><div class='error-inner'>This field is required.</div></td>"
		},

		address:{
			required: "<td><div class='error-left'></div><div class='error-inner'>This field is required.</div></td>"
		},
		city: {
			required: "<td><div class='error-left'></div><div class='error-inner'>The city field is required.</div></td>"
		 },
		state: {
			required: "<td><div class='error-left'></div><div class='error-inner'>The city field is required.</div></td>"
		},
	zipcode: {
			required: "<td><div class='error-left'></div><div class='error-inner'>The city field is required.</div></td>"
				},
		phone: {
			required: "<td><div class='error-left'></div><div class='error-inner'>The city field is required.</div></td>",
			 minlength: "<td><div class='error-left'></div><div class='error-inner'>please  enter atleast 10 charecter Phone number.</div></td>",
			number : "<td><div class='error-left'></div><div class='error-inner'>please  enter a valid Phone number</div></td>"
				}, 
		email1:{
              required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
              email:    "<td><div class='error-left'></div><div class='error-inner'>please enter a valid email address.</div></td>",
       		    },	
		email2: {
				email: "<td><div class='error-left'></div><div class='error-inner'>please enter a valid email address.</div></td>",	
				},
	facebook_url_personal: {
			required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
			url: "<td><div class='error-left'></div><div class='error-inner'>Please enter the valid url.</div></td>",
		},
	 vkontekte_address_personal: {
			required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
			url: "<td><div class='error-left'></div><div class='error-inner'>Please enter the valid url.</div></td>",
			},
	facebook_url_company: {
		required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
			url: "<td><div class='error-left'></div><div class='error-inner'>Please enter the valid url.</div></td>",
							},
	odnoklassniki_address_personal: {
			required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
			url: "<td><div class='error-left'></div><div class='error-inner'>Please enter the valid url.</div></td>",
			},
	vkontekte_address_company: {
	required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
	url: "<td><div class='error-left'></div><div class='error-inner'>Please enter the valid url.</div></td>",
	},
	linkedin_url: {
		    required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
			url: "<td><div class='error-left'></div><div class='error-inner'>Please enter the valid url.</div></td>",
			},
		 odnoklassniki_address_company: {
					required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
					url: "<td><div class='error-left'></div><div class='error-inner'>Please enter the valid url.</div></td>",
					},
			twitter: {
		    required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
			url: "<td><div class='error-left'></div><div class='error-inner'>Please enter the valid url.</div></td>",
			},
	company_details:{
			required: "<td><div class='error-left'></div><div class='error-inner'>The  field is required.</div></td>",
					},
	  company_docs:{
			required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
					},
		business_plans:{
			required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
					},
		financial_uploads:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		min_amount_requested:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		investment_towards:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		ideal_investor:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		bios_pics1:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		bios_pics2:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		bios_pics3:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		bios_pics4:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		bios_pics5:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		strategy_details:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		current_valuation:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		major_assets:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		marketing_material1:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		marketing_material2:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		marketing_material3:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		marketing_material4:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		marketing_material5:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		feedback_upload :{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		feedback_text :{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		short_term_goals :{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		competitors:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		companies_you_emulate :{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},
		market_research :{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'>The  field is required.</div></td>",
		},				
	} 
		 
});
	 
	
});
</script>
<!--  styled select box script version 2 --> 

</head>


<div class="rightdivsite">
  <div class="clear" style="height:14px"></div>
 <div class="videodiv">

       <div class="fucher_cont">
      <div class="box"> 
      <div class="box-heading">Company Registration </div></div>
      <div class="box" >

          <?php 
		  $attributes = array('class' => 'company', 'id' => 'myform');
		  echo form_open('company/compregsave',$attributes);?>

            <fieldset>
              <legend>Please fill the form to complete the registration </legend>
              <?php
              if ($this->session->flashdata('message') != ''){
                  echo '<div class="box success">'.$this->session->flashdata('message').'</div>';
              } elseif(validation_errors()) {
                  echo  '<div class="warning">'.validation_errors('<p>').'</div>';

               } ?>

                   <div class="content" style="width:100%">
                        <?php $latts = array(
                            'class' => 'label',
                        ); ?>
                        
                        <?php $atts = array(
                            'name' => 'introduction_for_investors',
                            'id'   => 'introduction_for_investors',
                            'rows' => '3',
							'cols' => '35',
                            'value' => set_value('introduction_for_investors'),
                        ); ?>
                        <p style="text-decoration:none">
                        <?php 
						echo form_label('Please check box next to categories that you would like to keep confidential until later-stage investment processes, when given the option.  Please keep in mind, however, that the less information you give out, the harder it will be to garner interest in open forums we present and through crowdsourcing/group financing .  All direct contact details will be kept private automatically until a separate contract is signed to release them to investors ready to finance you and your project.',$latts);
						?>
                        
                        </p>

                         <p>
                           <?php echo form_label('*First of all, please describe in 100 words how you would like to be introduced to investors?', 'introduction_investors', $latts); ?><br/>
                           <?php echo form_textarea($atts); ?>
                         </p>
                         
                          <?php $options = array(
							  'Mr'  => 'Mr',
							  'Miss'=> 'Miss',
							  'Mrs' => 'Mrs',
							  'Dr' => 'Dr',
							); ?>

                         <p>
                         
                           <?php
						   $attributes = array('class' => 'title', 'id' => 'title');
						    echo form_label('*Title:', 'title'); ?><br/>
                           <?php echo form_dropdown('title',$options,'Mr',$attributes); ?>
                         </p>

                         <?php $atts = array(
                            'name' => 'first_name',
                            'id'   => 'first_name',
                            'size' => '35',
                            'value' => set_value('first_name'),
                        ); ?>

                          <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*First Name:', 'first_name', $latts); ?>
                           
                           <?php
						   $latts1 = array(
                            'style' => 'margin-left:10px',
                            );
						   echo form_label('Confidential:', 'confidential', $latts1); 
                           $data = array(
										'name'        => 'is_fname_confidential',
										'id'          => 'is_fname_confidential',
										'value'       => 'accept',
										'checked'     => FALSE,
										);
									
									echo form_checkbox($data); ?>
                           <br/>
                           <?php echo form_input($atts); ?>
                           </div>
                         
                           <?php $atts = array(
                            'name' => 'last_name',
                            'id'   => 'last_name',
                            'size' => '35',
                            'value' => set_value('last_name'), ); ?>
                         

                         <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('*Last Name:', 'last_name', $latts); ?>
                            <?php
						   $latts2 = array(
                            'style' => 'margin-left:10px',
                            );
						   echo form_label('Confidential:', 'confidential', $latts1); 
                           $data = array(
										'name'        => 'is_lname_confidential',
										'id'          => 'is_lname_confidential',
										'value'       => 'accept',
										'checked'     => FALSE,
										);
							echo form_checkbox($data); ?>
                           <br/>
                           <?php echo form_input($atts); ?>
                         </div>

                        <?php $atts = array(
                            'name' => 'company_name',
                            'id'   => 'company_name',
                            'size' => '35',
                            'value' => set_value('company_name'),
                        ); ?>

                        <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*Company/Project Name:', 'company_name', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>

                          <?php $type_options = array(
								
								'New Media' => 'New Media', 
								'Design and Publishing Software' => 'Design and Publishing Software', 
								'Digital Advertising/Marketing Technology' => 'Digital Advertising/Marketing Technology', 
								'Dating and Matchmaking'=> 'Dating and Matchmaking', 
								'On-Line Commerce' => 'On-Line Commerce', 
								'Digital Audio and Visual' => 'Digital Audio and Visual', 
								'Search Engine/SEO techs' => 'Search Engine/SEO techs', 
								'Gaming'=> 'Gaming', 
								'VoIP'=> 'VoIP', 
								'Social Networking Site/App' => 'Social Networking Site/App', 
								'Internet Security' => 'Internet Security', 
								'Internet Access' => 'Internet Access',  
								'Mobile Internet' => 'Mobile Internet', 
								'Mobile Content' => 'Mobile Content', 
								'Mobile Deivices' => 'Mobile Deivices',
								'Mobile Marketing' => 'Mobile Marketing', 
								'Satellites' => 'Satellites', 
								'IPTV' => 'IPTV', 
								'Digital TV' => 'Digital TV',  
								'Software' => 'Software', 
								'Anti-Virus Programs' => 'Anti-Virus Programs', 
								'Location-Based technology' => 'Location-Based technology',
								'Wimax' => 'Wimax', 
								'LTE' => 'LTE', 
								'Other' => 'Other'
							); ?>

                        <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*Type:', 'type', $latts); ?><br/>
                           <?php 
						   $attributes = array('class' => 'type', 'id' => 'type');
						   echo form_multiselect('type',$type_options,'Individual','', $attributes); ?>
                         </p>

                         <?php $atts = array(
                            'name' => 'other',
                            'id'   => 'other',
                            'size' => '35',
                        ); ?>
                        <p>  
                           <?php echo form_label('Other:', 'other', $latts); ?><br/>
                           <?php echo form_password($atts); ?>
                        </p>
                         <?php $atts = array(
                            'name' => 'address',
                            'id'   => 'address',
                            'size' => '35',
                            'value' => set_value('address'),
                        ); ?>
                        
                        <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*Address:', 'address', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                         
                           <?php $atts = array(
                            'name' => 'city',
                            'id'   => 'city',
                            'size' => '35',
                            'value' => set_value('city'),
                        ); ?>

                         <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('*City:', 'city', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'state',
                            'id'   => 'state',
                            'size' => '35',
                            'value' => set_value('state'),
                        ); ?>
                       
                        <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*State:', 'state', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                         
                           <?php $atts = array(
                            'name' => 'zipcode',
                            'id'   => 'zipcode',
                            'size' => '35',
                            'value' => set_value('zipcode'),
                        ); ?>

                         <div style="float:right;margin-bottom:10px;">
                           <?php echo form_label('*Zipcode:', 'zipcode', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'phone',
                            'id'   => 'phone',
                            'size' => '35',
                            'value' => set_value('phone'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px;width:100%">
                           <?php echo form_label('*Phone:', 'phone', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                      
                          <?php $atts = array(
                            'name' => 'email1',
                            'id'   => 'email1',
                            'size' => '35',
                            'value' => set_value('email1'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*Email1:', 'email1', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'email2',
                            'id'   => 'email2',
                            'size' => '35',
                            'value' => set_value('email2'),
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('Email2:', 'email2', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                        
                          <?php $atts = array(
                            'name' => 'facebook_url_personal',
                            'id'   => 'facebook_url_personal',
                            'size' => '35',
                            'value' => set_value('Facebook_url_personal'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('Personal Facebook Address:', 'facebook_url_personal', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'facebook_url_company',
                            'id'   => 'facebook_url_company',
                            'size' => '35',
                            'value' => set_value('facebook_url_company'),
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('Company Facebook Address:', 'facebook_url_company', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                          <?php $atts = array(
                            'name' => 'vkontekte_address_personal',
                            'id'   => 'vkontekte_address_personal',
                            'size' => '35',
                            'value' => set_value('vkontekte_address_personal'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('Personal Vkontekte Address:', 'vkontekte_address_personal', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'vkontekte_address_company',
                            'id'   => 'vkontekte_address_company',
                            'size' => '35',
                            'value' => set_value('vkontekte_address_company'),
                        ); ?>
                        <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('Company Vkontekte Address:', 'vkontekte_address_company', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                             <?php $atts = array(
                            'name' => 'odnoklassniki_address_personal',
                            'id'   => 'odnoklassniki_address_personal',
                            'size' => '35',
                            'value' => set_value('odnoklassniki_address_personal'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('Personal Odnoklassniki Address:', 'odnoklassniki_address_personal', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'odnoklassniki_address_company',
                            'id'   => 'odnoklassniki_address_company',
                            'size' => '35',
                            'value' => set_value('odnoklassniki_address_company'),
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('Company Odnoklassniki Address:', 'odnoklassniki_address_company', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                        
                         <?php $atts = array(
                            'name' => 'linkedin_url',
                            'id'   => 'linkedin_url',
                            'size' => '35',
                            'value' => set_value('linkedin_url'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('Linkedin:', 'linkedin_url', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'twitter',
                            'id'   => 'twitter',
                            'size' => '35',
                            'value' => set_value('twitter'),
                        ); ?>
                        <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('Twitter:', 'twitter', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                        <?php $atts = array(
                            'name' => 'company_details',
                            'id'   => 'company_details',
                            'rows' => '7',
							'cols' => '60',
                            'value' => set_value('company_details'),
                        ); ?>
                   		 <div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*Please describe in 500 words or less what makes your company or project exceptionally unique:', $latts); ?><br/>
                       <?php echo form_textarea($atts); ?>
                        </div>
                        <div style="float:left;width:100%;margin-bottom:10px;">  
                           <?php echo form_label('Is your company registered?:', 'usertype', $latts); ?><br/>
                           
                          <?php $data = array(
                            'name'        => 'is_company_registered',
                            'id'          => 'true',
                            'value'       => 'true',
                            'checked'     => TRUE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="margin: 0 12px 0 4px; vertical-align: text-bottom;"> True </span>
                    
                          <?php $data = array(
                            'name'        => 'is_company_registered',
                            'id'          => 'false',
                            'value'       => 'false',
                            'checked'     => FALSE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="vertical-align: text-bottom;"> False </span>
                        </div>
                        <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*If so, please upload Company Registration Docs:
', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'company_docs',
                            'id'   => 'company_docs',
                            'size' => '35',
                            'value' => set_value('company_docs'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        </div>
                       <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('Business Plan Upload (if you have one):
', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'business_plans',
                            'id'   => 'business_plans',
                            'size' => '35',
                            'value' => set_value('business_plans'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        </div>
                        
                        <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('Financials Upload (any and all you may have):
', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'financial_uploads',
                            'id'   => 'financial_uploads',
                            'size' => '35',
                            'value' => set_value('financial_uploads'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        </div>
                       
                           <?php $atts = array(
                            'name' => 'min_amount_requested',
                            'id'   => 'min_amount_requested',
                            'size' => '35',
                            'value' => set_value('min_amount_requested'),
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px;width:100%;">
                           <?php echo form_label('*Minimum Investment sum requested:', 'odnoklassniki_address_company', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                          <?php $atts = array(
                            'name' => 'investment_towards',
                            'id'   => 'investment_towards',
                            'size' => '70',
                            'value' => set_value('investment_towards'),
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px;width:100%;">
                           <?php echo form_label('*Investment will go towards:', 'investment_towards', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                        <div style="float:left;width:100%;margin-bottom:10px;">  
                           <?php echo form_label('*Are you interested in participating in crowdsourcing/group financing?', 'interested_in_incrowdsourcing', $latts); ?><br/>
                           
                          <?php $data = array(
                            'name'        => 'interested_in_incrowdsourcing',
                            'id'          => 'true',
                            'value'       => 'true',
                            'checked'     => TRUE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="margin: 0 12px 0 4px; vertical-align: text-bottom;"> True </span>
                    
                          <?php $data = array(
                            'name'        => 'interested_in_incrowdsourcing',
                            'id'          => 'false',
                            'value'       => 'false',
                            'checked'     => FALSE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="vertical-align: text-bottom;"> False </span>
                        </div>
                        <div style="float:left;width:100%;margin-bottom:10px;">  
                           <?php echo form_label('*Are you interested in participating in on-line courses about business development?', 'interested_in_bd', $latts); ?><br/>
                           
                          <?php $data = array(
                            'name'        => 'interested_in_bd',
                            'id'          => 'true',
                            'value'       => 'true',
                            'checked'     => TRUE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="margin: 0 12px 0 4px; vertical-align: text-bottom;"> True </span>
                    
                          <?php $data = array(
                            'name'        => 'interested_in_bd',
                            'id'          => 'false',
                            'value'       => 'false',
                            'checked'     => FALSE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="vertical-align: text-bottom;"> False </span>
                        </div>
                         <div style="float:left;width:100%;margin-bottom:10px;">  
                         IF YOU SAID YES, PLEASE CHECK THIS BOX TO ACKNOWLEDGE THE FACT THAT, DURING YOUR CROWD-FUNDING SESSION, ALL YOUR INFORMATION, EXCEPT CONTACT DETAILS WILL BE ON DISPLAY TO THE PUBLIC AND ALL FUNDERS WILL RECEIIVE YOUR CONTACT DETAILS AFTER THE FUNDING.  
                          
                        </div>
                           <?php $investor_options = array(
									'Individual'=>'Individual',
									'Group' => 'Group',
									'Incubator' => 'Incubator',
									'Accelerator' => 'Accelerator',
									'Venture capital fund' => 'Venture capital fund',
									'Institutional investor' => 'Institutional investor',
									'Experienced in sector' => 'Experienced in sector',
									'Experienced in country' => 'Experienced in country',
									'Region' => 'Region',
									'Any' => 'Any',
							
							); ?>

                           <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*Investor preference :', 'investor_preference', $latts); ?><br/>
                           <?php echo form_multiselect('investor_preference',$investor_options,'',''); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'ideal_investor',
                            'id'   => 'ideal_investor',
                            'rows' => '4',
							'cols' => '50',
                            'value' => set_value('ideal_investor'),
                        ); ?>

                        <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*Please describe your ideal investor in detail (200 words or less)', $latts); ?><br/>
                           <?php echo form_textarea($atts); ?>
                       </div>
                      <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('If you do not have a business plan/financials or they do not include the following information, please answer:)', $latts); ?><br/>
                      </div>
                     <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*Bios and pics of Main Players, both Listed in Registration Material (and otheriwise) )', $latts); ?><br/>
                            <?php $atts = array(
                            'name' => 'bios_pics1',
                            'id'   => 'bios_pics1',
                            'size' => '35',
                            'value' => set_value('bios_pics1'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        <?php $atts = array(
                            'name' => 'bios_pics2',
                            'id'   => 'bios_pics2',
                            'size' => '35',
                            'value' => set_value('bios_pics2'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        <?php $atts = array(
                            'name' => 'bios_pics3',
                            'id'   => 'bios_pics3',
                            'size' => '35',
                            'value' => set_value('bios_pics3'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        <?php $atts = array(
                            'name' => 'bios_pics4',
                            'id'   => 'bios_pics4',
                            'size' => '35',
                            'value' => set_value('bios_pics4'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        <?php $atts = array(
                            'name' => 'bios_pics5',
                            'id'   => 'bios_pics5',
                            'size' => '35',
                            'value' => set_value('bios_pics5'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                      </div> 
                         <?php $atts = array(
                            'name' => 'strategy_details',
                            'id'   => 'strategy_details',
                            'rows' => '5',
							'cols' => 60,
                            'value' => set_value('strategy_details'),
                        ); ?>
                      <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('Brief strategy description:', $latts); ?><br/>
                           <?php echo form_textarea($atts); ?>
                       </div> 
                          <?php $atts = array(
                            'name' => 'current_valuation',
                            'id'   => 'current_valuation',
                            'rows' => '5',
							'cols' => 60,
                            'value' => set_value('current_valuation'),
                        ); ?>
                      <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('What is your current valuation you are attaching to your company/project and how have you roughly determined this?', $latts); ?><br/>
                           <?php echo form_textarea($atts); ?>
                       </div> 
                         <?php $atts = array(
                            'name' => 'major_assets',
                            'id'   => 'major_assets',
                            'rows' => '5',
							'cols' => 60,
                            'value' => set_value('major_assets'),
                        ); ?>
                      <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*What are its major existing assets?:', $latts); ?><br/>
                           <?php echo form_textarea($atts); ?>
                       </div> 
                      <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*Please upload all marketing materials you have for your project/company, including videos, slide presentations, VUIs, etc.', $latts); ?><br/>
                            <?php $atts = array(
                            'name' => 'marketing_material1',
                            'id'   => 'marketing_material1',
                            'size' => '35',
                            'value' => set_value('marketing_material1'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        <?php $atts = array(
                            'name' => 'marketing_material2',
                            'id'   => 'marketing_material2',
                            'size' => '35',
                            'value' => set_value('marketing_material2'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        <?php $atts = array(
                            'name' => 'marketing_material3',
                            'id'   => 'marketing_material3',
                            'size' => '35',
                            'value' => set_value('marketing_material3'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        <?php $atts = array(
                            'name' => 'marketing_material4',
                            'id'   => 'marketing_material4',
                            'size' => '35',
                            'value' => set_value('marketing_material4'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        <?php $atts = array(
                            'name' => 'marketing_material5',
                            'id'   => 'marketing_material5',
                            'size' => '35',
                            'value' => set_value('marketing_material5'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                      </div> 
                      <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*Please include all positive press/feedback from professionals you have about your company .', $latts); ?><br/>
                            <?php $atts = array(
                            'name' => 'feedback_upload',
                            'id'   => 'feedback_upload',
                            'size' => '35',
                            'value' => set_value('feedback_upload'),
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        <?php $atts = array(
                            'name' => 'feedback_text',
                            'id'   => 'feedback_text',
                            'rows' => '5',
							'cols' => 60,
                            'value' => set_value('feedback_text'),
                        ); ?>
                         <br/>
                           <?php echo form_textarea($atts); ?>
                      </div> 
                      
                      <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*What are you short term goals for the company/project company?.', $latts); ?><br/>
                          
                        <?php $atts = array(
                            'name' => 'short_term_goals',
                            'id'   => 'short_term_goals',
                            'rows' => '5',
							'cols' => 60,
                            'value' => set_value('short_term_goals'),
                        ); ?>
                         <br/>
                           <?php echo form_textarea($atts); ?>
                      </div> 
                      <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*What companies/entrepreneurs do you emulate?.', $latts); ?><br/>
                          
                        <?php $atts = array(
                            'name' => 'companies_you_emulate',
                            'id'   => 'companies_you_emulate',
                            'rows' => '5',
							'cols' => 60,
                            'value' => set_value('companies_you_emulate'),
                        ); ?>
                         <br/>
                           <?php echo form_textarea($atts); ?>
                      </div> 
                       <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*What companies would you consider to be competitors to your own?', $latts); ?><br/>
                          
                        <?php $atts = array(
                            'name' => 'competitors',
                            'id'   => 'competitors',
                            'rows' => '5',
							'cols' => 60,
                            'value' => set_value('competitors'),
                        ); ?>
                         <br/>
                           <?php echo form_textarea($atts); ?>
                      </div> 
                      
                       <div style="float:left;width:100%;margin-bottom:10px;"> 
                           <?php echo form_label('*What market research can you provide to support your company\'s potential in your country, the region, and abroad?', $latts); ?><br/>
                          
                        <?php $atts = array(
                            'name' => 'market_research',
                            'id'   => 'market_research',
                            'rows' => '5',
							'cols' => 60,
                            'value' => set_value('market_research'),
                        ); ?>
                         <br/>
                           <?php echo form_textarea($atts); ?>
                      </div> 

                       <?php $atts = array(
                              'name'    => 'companyreg',
                              'value'   => 'Submit',
                              'class'   => 'button',
                           ); ?>
                        <div style="float:left;width:100%;margin-bottom:10px;">  
                            <span> <?php echo form_submit($atts); ?></span> 
                          
                      </div>
                       
                 </div>
            </fieldset>
         <?php echo form_close(); ?>

    </div>
    </div>
            
             
      </div>
 
 </div>
 
 </div>
</div>
<div class="clear"></div>