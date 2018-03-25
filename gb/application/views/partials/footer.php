<div id="gotoTop" class="icon-angle-up"></div>
<script src="<?php echo base_url();?>assets/signature_pad-master/example/js/signature_pad.js"></script>
<script src="<?php echo base_url();?>assets/signature_pad-master/example/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/select-togglebutton-js/select-togglebutton.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/functions.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/components/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/demos/travel/js/datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/components/timepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/components/bs-editable.js"></script>
<script type="text/javascript" src="http://vitalets.github.io/x-editable/assets/select2/select2.js"></script>
<script src="http://vitalets.github.io/x-editable/assets/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
<script src="http://vitalets.github.io/x-editable/assets/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/components/daterangepicker.js"></script>
<script type="text/javascript">
	$(function() {
		$('.travel-date-group .default').datepicker({
			autoclose: true,
			startDate: "today",
		});
		$('.travel-date-group .today').datepicker({
			autoclose: true,
			startDate: "today",
			todayHighlight: true
		});
		$('.travel-date-group .past-enabled').datepicker({
			autoclose: true,
		});
		$('.travel-date-group .format').datepicker({
			autoclose: true,
			format: "dd-mm-yyyy",
		});
		$('.travel-date-group .autoclose').datepicker();
		$('.travel-date-group .disabled-week').datepicker({
			autoclose: true,
			daysOfWeekDisabled: "0"
		});
		$('.travel-date-group .highlighted-week').datepicker({
			autoclose: true,
			daysOfWeekHighlighted: "0"
		});
		$('.travel-date-group .mnth').datepicker({
			autoclose: true,
			minViewMode: 1,
			format: "mm/yy"
		});
		$('.travel-date-group .multidate').datepicker({
			multidate: true,
			multidateSeparator: " , "
		});
		$('.travel-date-group .input-daterange').datepicker({
			autoclose: true,
			format: "yyyy-mm-dd",
		});
		$('.travel-date-group .inline-calendar').datepicker();
		$('.datetimepicker').datetimepicker({
			showClose: true
		});
		$('.datetimepicker1').datetimepicker({
			format: 'LT',
			showClose: true
		});
		$('.datetimepicker2').datetimepicker({
			inline: true,
			sideBySide: true
		});
	});
	$(function() {
		$(".daterange1").daterangepicker({
			"buttonClasses": "button button-rounded button-mini nomargin",
			"applyClass": "button-color",
			"cancelClass": "button-light"
		});
		$(".daterange2").daterangepicker({
			"opens": "center",
			timePicker: true,
			timePickerIncrement: 30,
			locale: {
				format: 'MM/DD/YYYY h:mm A'
			},
			"buttonClasses": "button button-rounded button-mini nomargin",
			"applyClass": "button-color",
			"cancelClass": "button-light"
		});
		$(".daterange3").daterangepicker({
			singleDatePicker: true,
			showDropdowns: true
		},
		function(start, end, label) {
			var years = moment().diff(start, 'years');
			alert("You are " + years + " years old.");
		});
		function cb(start, end) {
			$(".reportrange span").html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		}
		cb(moment().subtract(29, 'days'), moment());
		$(".reportrange").daterangepicker({
			"buttonClasses": "button button-rounded button-mini nomargin",
			"applyClass": "button-color",
			"cancelClass": "button-light",
			ranges: {
				  'Today': [moment(), moment()],
				  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				  'This Month': [moment().startOf('month'), moment().endOf('month')],
				  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			}
		}, cb);
		$(".daterange4").daterangepicker({
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			},
			"buttonClasses": "button button-rounded button-mini nomargin",
			"applyClass": "button-color",
			"cancelClass": "button-light"
		});
		$(".daterange4").on('apply.daterangepicker', function(ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
		});
		$(".daterange4").on('cancel.daterangepicker', function(ev, picker) {
			$(this).val('');
		});
	});
</script>
<script>
	$(document).ready(function() {
		$('.bt-editable').editable({
			showbuttons: false,
			});
		$('.bt-sex').editable({
			showbuttons: false,
			prepend: "not selected",
			source: [
				{value: 1, text: 'Male'},
				{value: 2, text: 'Female'}
			],
			display: function(value, sourceData) {
				var colors = {"": "gray", 1: "green", 2: "blue"},
				elem = $.grep(sourceData, function(o){return o.value == value;});
				if(elem.length) {
					$(this).text(elem[0].text).css("color", colors[value]);
				} else {
					$(this).empty();
				}
			}
		});
		$('.bt-group').editable({
			showbuttons: false,
			source: [
				{value: 1, text: 'Service'},
				{value: 2, text: 'Admin'},
				{value: 3, text: 'Support'},
				{value: 4, text: 'Customer'}
			],
		});
		$('.bt-event').editable({
			showbuttons: 'bottom',
			placement: 'right',
			combodate: {
				firstItem: 'name'
			}
		});
		$('.bt-state').editable({
			value: 'California',
			typeahead: {
				name: 'state',
				local: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]
			}
		});
		$('.bt-comments').editable({
			showbuttons: 'bottom'
		});
		$('.bt-fruits').editable({
			pk: 1,
			limit: 3,
			source: [
				{value: 1, text: 'banana'},
				{value: 2, text: 'peach'},
				{value: 3, text: 'apple'},
				{value: 4, text: 'watermelon'},
				{value: 5, text: 'orange'}
			]
		});
		$('.bt-tags').editable({
			inputclass: 'input-large',
			select2: {
				tags: ['html', 'javascript', 'css', 'ajax'],
				tokenSeparators: [",", " "]
			}
		});
		var countries = [];
		$.each({"BD": "Bangladesh", "BE": "Belgium", "BF": "Burkina Faso", "BG": "Bulgaria", "BA": "Bosnia and Herzegovina", "BB": "Barbados", "WF": "Wallis and Futuna", "BL": "Saint Bartelemey", "BM": "Bermuda", "BN": "Brunei Darussalam", "BO": "Bolivia", "BH": "Bahrain", "BI": "Burundi", "BJ": "Benin", "BT": "Bhutan", "JM": "Jamaica", "BV": "Bouvet Island", "BW": "Botswana", "WS": "Samoa", "BR": "Brazil", "BS": "Bahamas", "JE": "Jersey", "BY": "Belarus", "O1": "Other Country", "LV": "Latvia", "RW": "Rwanda", "RS": "Serbia", "TL": "Timor-Leste", "RE": "Reunion", "LU": "Luxembourg", "TJ": "Tajikistan", "RO": "Romania", "PG": "Papua New Guinea", "GW": "Guinea-Bissau", "GU": "Guam", "GT": "Guatemala", "GS": "South Georgia and the South Sandwich Islands", "GR": "Greece", "GQ": "Equatorial Guinea", "GP": "Guadeloupe", "JP": "Japan", "GY": "Guyana", "GG": "Guernsey", "GF": "French Guiana", "GE": "Georgia", "GD": "Grenada", "GB": "United Kingdom", "GA": "Gabon", "SV": "El Salvador", "GN": "Guinea", "GM": "Gambia", "GL": "Greenland", "GI": "Gibraltar", "GH": "Ghana", "OM": "Oman", "TN": "Tunisia", "JO": "Jordan", "HR": "Croatia", "HT": "Haiti", "HU": "Hungary", "HK": "Hong Kong", "HN": "Honduras", "HM": "Heard Island and McDonald Islands", "VE": "Venezuela", "PR": "Puerto Rico", "PS": "Palestinian Territory", "PW": "Palau", "PT": "Portugal", "SJ": "Svalbard and Jan Mayen", "PY": "Paraguay", "IQ": "Iraq", "PA": "Panama", "PF": "French Polynesia", "BZ": "Belize", "PE": "Peru", "PK": "Pakistan", "PH": "Philippines", "PN": "Pitcairn", "TM": "Turkmenistan", "PL": "Poland", "PM": "Saint Pierre and Miquelon", "ZM": "Zambia", "EH": "Western Sahara", "RU": "Russian Federation", "EE": "Estonia", "EG": "Egypt", "TK": "Tokelau", "ZA": "South Africa", "EC": "Ecuador", "IT": "Italy", "VN": "Vietnam", "SB": "Solomon Islands", "EU": "Europe", "ET": "Ethiopia", "SO": "Somalia", "ZW": "Zimbabwe", "SA": "Saudi Arabia", "ES": "Spain", "ER": "Eritrea", "ME": "Montenegro", "MD": "Moldova, Republic of", "MG": "Madagascar", "MF": "Saint Martin", "MA": "Morocco", "MC": "Monaco", "UZ": "Uzbekistan", "MM": "Myanmar", "ML": "Mali", "MO": "Macao", "MN": "Mongolia", "MH": "Marshall Islands", "MK": "Macedonia", "MU": "Mauritius", "MT": "Malta", "MW": "Malawi", "MV": "Maldives", "MQ": "Martinique", "MP": "Northern Mariana Islands", "MS": "Montserrat", "MR": "Mauritania", "IM": "Isle of Man", "UG": "Uganda", "TZ": "Tanzania, United Republic of", "MY": "Malaysia", "MX": "Mexico", "IL": "Israel", "FR": "France", "IO": "British Indian Ocean Territory", "FX": "France, Metropolitan", "SH": "Saint Helena", "FI": "Finland", "FJ": "Fiji", "FK": "Falkland Islands (Malvinas)", "FM": "Micronesia, Federated States of", "FO": "Faroe Islands", "NI": "Nicaragua", "NL": "Netherlands", "NO": "Norway", "NA": "Namibia", "VU": "Vanuatu", "NC": "New Caledonia", "NE": "Niger", "NF": "Norfolk Island", "NG": "Nigeria", "NZ": "New Zealand", "NP": "Nepal", "NR": "Nauru", "NU": "Niue", "CK": "Cook Islands", "CI": "Cote d'Ivoire", "CH": "Switzerland", "CO": "Colombia", "CN": "China", "CM": "Cameroon", "CL": "Chile", "CC": "Cocos (Keeling) Islands", "CA": "Canada", "CG": "Congo", "CF": "Central African Republic", "CD": "Congo, The Democratic Republic of the", "CZ": "Czech Republic", "CY": "Cyprus", "CX": "Christmas Island", "CR": "Costa Rica", "CV": "Cape Verde", "CU": "Cuba", "SZ": "Swaziland", "SY": "Syrian Arab Republic", "KG": "Kyrgyzstan", "KE": "Kenya", "SR": "Suriname", "KI": "Kiribati", "KH": "Cambodia", "KN": "Saint Kitts and Nevis", "KM": "Comoros", "ST": "Sao Tome and Principe", "SK": "Slovakia", "KR": "Korea, Republic of", "SI": "Slovenia", "KP": "Korea, Democratic People's Republic of", "KW": "Kuwait", "SN": "Senegal", "SM": "San Marino", "SL": "Sierra Leone", "SC": "Seychelles", "KZ": "Kazakhstan", "KY": "Cayman Islands", "SG": "Singapore", "SE": "Sweden", "SD": "Sudan", "DO": "Dominican Republic", "DM": "Dominica", "DJ": "Djibouti", "DK": "Denmark", "VG": "Virgin Islands, British", "DE": "Germany", "YE": "Yemen", "DZ": "Algeria", "US": "United States", "UY": "Uruguay", "YT": "Mayotte", "UM": "United States Minor Outlying Islands", "LB": "Lebanon", "LC": "Saint Lucia", "LA": "Lao People's Democratic Republic", "TV": "Tuvalu", "TW": "Taiwan", "TT": "Trinidad and Tobago", "TR": "Turkey", "LK": "Sri Lanka", "LI": "Liechtenstein", "A1": "Anonymous Proxy", "TO": "Tonga", "LT": "Lithuania", "A2": "Satellite Provider", "LR": "Liberia", "LS": "Lesotho", "TH": "Thailand", "TF": "French Southern Territories", "TG": "Togo", "TD": "Chad", "TC": "Turks and Caicos Islands", "LY": "Libyan Arab Jamahiriya", "VA": "Holy See (Vatican City State)", "VC": "Saint Vincent and the Grenadines", "AE": "United Arab Emirates", "AD": "Andorra", "AG": "Antigua and Barbuda", "AF": "Afghanistan", "AI": "Anguilla", "VI": "Virgin Islands, U.S.", "IS": "Iceland", "IR": "Iran, Islamic Republic of", "AM": "Armenia", "AL": "Albania", "AO": "Angola", "AN": "Netherlands Antilles", "AQ": "Antarctica", "AP": "Asia/Pacific Region", "AS": "American Samoa", "AR": "Argentina", "AU": "Australia", "AT": "Austria", "AW": "Aruba", "IN": "India", "AX": "Aland Islands", "AZ": "Azerbaijan", "IE": "Ireland", "ID": "Indonesia", "UA": "Ukraine", "QA": "Qatar", "MZ": "Mozambique"}, function(k, v) {
			countries.push({id: k, text: v});
		});
		$('.bt-country').editable({
			source: countries,
			select2: {
				width: 200,
				placeholder: 'Select country',
				allowClear: true
			}
		});
	});
</script>
<script>
	function myFunction() {
    	window.print();
	}
</script>