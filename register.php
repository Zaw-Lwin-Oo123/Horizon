<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<title>Cash Flow System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/bggradient.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<style>
	a:hover { color:#33ccff; }
	a{
	text-decoration: none;
	outline: none;
	color:gold;
    }
</style>

</head>
<body style="background-image: url('https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;font-family: 'Poppins', sans-serif; background-attachment: fixed;" >
	<h1 class="display-4 text-center text-light pt-3">Cash Flow System</h1>

<form action="insert_reg_data.php" method="POST" class="mt-3" id="registration_form">
	<div class="formb">
		<div class="container text-light rgba-gradient">
			<h2 class="display-5 text-center">Register</h2>
			<!-- <a href="documentation.php" class="text-light" style="float:right;margin-top: -35px;">Documentation</a> -->
			<br>
			<!-- <label>Profile</label>
			<br>
			<input  type="file" class="form-control" value="Choose image" name="image" accept="image/x-png,image/gif,image/jpeg" required>
			<br> -->
			<label>Name</label>
			<br>
			<input type="text" class="form-control" name="name" placeholder="Enter your name" maxlength="20" required>
			<br>
			<label>Email</label>
			<br>
			<input type="email" class="form-control" name="email" placeholder="Enter your email" maxlength="25" required>
			<br>
			<label>Password</label>
			<br>
			<input type="password" class="form-control" name="password"
			pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$" title="Password must contain at least 8 characters, including UPPER/lowercase,special characters and numbers"
			placeholder="Enter your password" id="password" data-toggle="password" required
			onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');" 
			>
			<br>
			<div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked >
		    <label class="form-check-label" for="exampleCheck1">I have read and agree <a href="" data-toggle="modal" data-target="#termCondition">Terms and Condition</a>.</label>
		    </div>
			<button type="submit" id= "register" class="btn btn-primary" disabled="disabled" >Sign Up</button>
			<br>
			<div class="form-group text-center">
				<a href="login.php" class="text-light">Already have account?</a>
			</div>
		</div>
	</div>
</form>
<script>
	$('#registration_form input[required]').on('input propertychange paste change', function() {

	var empty = $('#registration_form').find('input[required]').filter(function() {
		return this.value == '';
	});

	$('#register').prop('disabled', (empty.length));

});
</script>
<div class="modal" tabindex="1" role="dialog" id="termCondition">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title">Terms and Condition</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label>Terms and Condition for Cash Flow System</label>
            <br>
            <p>
			Horizon Inc. ("Horizon") understands that your privacy is important to you and that you care about how your information is used. We respect and value the privacy of everyone who visits Our Site and will only collect and use information in ways that are useful to you and in a manner consistent with your rights and Our obligations under the law. This Policy applies to Our use of any and all data collected by us in relation to your use of Our Site. Please read this Privacy Policy carefully and ensure that you understand it. Your acceptance of Our Privacy Policy is deemed to occur upon your first use of Our Site. If you do not accept and agree with this Privacy Policy, you must stop using Our Site immediately.</p>
			<hr>

			<h5>1. Definitions and Interpretation</h5>
			<p>In this Policy the following terms shall have the following meanings:</p>

			<ul><li>"Account" means an account required to access and/or use certain areas and features of Our Site;</li>
			<li>"Cookie" means a small text file placed on your computer or device by Our Site when you visit certain parts of Our Site and/or when you use certain features of Our Site. Details of the Cookies used by Our Site are set out in section 12, below;</li>
			<li>"Our Site" means this website;</li>
			<li>"Law" means the relevant parts of the Privacy and Electronic Communications (EC Directive) Regulations 2020 as amended and</li>
			<li>"We/Us/Our" means Cashflow Inc., a Delaware Corporation with an address of ItVision Hub Co., Hledan Road,Hledan Kyaung Ashae, Kamaryut Tsp, Yangon.</li></ul>
			<hr>
			<h5>2. Information About Us</h5>
			<li>Our Site, https://www.itvisionlab.com, is owned and operated by cashflow Inc., a Delaware Corporation with an address of ItVision Hub Co., Hledan Road,Hledan Kyaung Ashae, Kamaryut Tsp, Yangon.</li>
			<hr>

			<h5>3. Scope – What Does This Policy Cover?</h5>
			<p>This Privacy Policy applies only to your use of Our Site. It does not extend to any websites that are linked to from Our Site (whether We provide those links or whether they are shared by other users). We have no control over how your data is collected, stored or used by other websites and We advise you to check the privacy policies of any such websites before providing any data to them.</p>
			<hr>

			<h5>4. What Data Do We Collect?</h5>
			<p>Some data will be collected automatically by Our Site (for further details, please see section 12 on Our site), other data will only be collected if you voluntarily submit it and consent to Myanmar using it for the purposes set out in section 5, for example, when signing up for an Account. Depending upon your use of Our Site, We may collect some or all of the following data:</p>

			<ol><li>Name;</li>
			<li>business/company name;</li>
			<li>job title;</li>
			<li>contact information such as email addresses and telephone numbers;</li>
			<li>demographic information such as post code, preferences and
			 interests;</li>
			<li>financial information such as credit / debit card numbers;</li>
			<li>IP address (automatically collected);</li>
			<li>web browser type and version (automatically collected);</li>
			<li>operating system (automatically collected);</li>
			<li>a list of URLs starting with a referring site, your activity on Our Site, and the site you exit to (automatically collected);</li>
			</ol>
			<hr>
			<h5>5. How Do We Use Your Data?</h5>
			<ol><li>For more details on security see section 6, below.</li>
			<li>We use your data to provide the best possible services to you. This includes:</li>
			<ol><li>Providing and managing your Account;</li>
			<li>Providing and managing your access to Our Site;</li>
			<li>Personalizing and tailoring your experience on Our Site;</li>
			<li>Supplying Our products and services to you;</li>
			<li>Personalizing and tailoring Our products and services for you;</li>
			<li>Responding to communications from you;</li>
			<li>Supplying you with email newsletters that you have subscribed to (you may unsubscribe or opt-out at any time by clicking the Unsubscribe or Opt-Out link in each email);</li>
			<li>Market research;</li>
			<li>Analyzing your use of Our Site and gathering feedback to enable Myanmar to continually improve Our Site and your user experience;</li></ol>
			<li>In some cases, the collection of data may be a statutory or contractual requirement, and We will be limited in the products and services We can provide you without your consent for Myanmar to be able to use such data.</li>
			<li>With your permission and/or where permitted by law, We may also use your data for marketing purposes which may include contacting you by email, telephone or post with information, news and offers on Our products and services.</li>
			<li>Under GDPR we will ensure that your personal data is processed lawfully, fairly, and transparently, without adversely affecting your rights. We will only process your personal data if at least one of the following basis applies:</li>
			<ol><li>you have given consent to the processing of your personal data for one or more specific purposes;</li>
			<li>processing is necessary for the performance of a contract to which you are a party or in order to take steps at the request of you prior to entering into a contract;</li>
			<li>processing is necessary for compliance with a legal obligation to which we are subject;</li>
			<li>processing is necessary to protect the vital interests of you or of another natural person;</li>
			<li>processing is necessary for the performance of a task carried out in the public interest or in the exercise of official authority vested in the controller; and/or</li>
			<li>processing is necessary for the purposes of the legitimate interests pursued by us or by a third party, except where such interests are overridden by the fundamental rights and freedoms of the data subject which require protection of personal data, in particular where the data subject is a child.</li></ol></ol><hr>

			<h5>6. How and Where Do We Store Your Data?</h5>
			<ol><li>We only keep your data for as long as We need to in order to use it as described above in section 5, and/or for as long as We have your permission to keep it. In any event, We will conduct an annual review to ascertain whether we need to keep your data. Your data will be deleted if we no longer need it in accordance with the terms of our Data Retention Policy. Our Data Retention Policies are:</li>

			<li>  You are deemed to accept and agree to this by using Our Site and submitting information to Myanmar. If We do store or transfer data outside the EEA, We will take all reasonable steps to ensure that your data is treated as safely and securely as it would be within the EEA and under the GDPR. Such steps may include, but not be limited to, the use of legally binding contractual terms between Myanmar and any third parties.</li>
			<li>Data security is of great importance to Myanmar.and to protect your data We have put in place suitable physical, electronic and managerial procedures to safeguard and secure data collected through Our Site.
			Notwithstanding the security measures that We take, it is important to remember that the transmission of data via the internet may not be completely secure and that you are advised to take suitable precautions when transmitting to Myanmar data via the internet.</li></ol><hr>


			<h5>7. What Happens If Our Business Changes Hands?</h5>
			<ol><li>We may, from time to time, expand or reduce Our business and this may involve the sale and/or the transfer of control of all or part of Our business. Data provided by users will, where it is relevant to any part of Our business so transferred, be transferred along with that part and the new owner or newly controlling party will, under the terms of this Privacy Policy, be permitted to use the data for the purposes for which it was originally collected by Myanmar.</li>
			<li>In the event that any of your data is to be transferred in such a manner, you will be contacted in advance and informed of the changes.</li></ol><hr>

			<h5>8. How Can You Control Your Data?</h5>
			<p>When you submit information via Our Site, you may be given options to restrict Our use of your data. We aim to give you strong controls on Our use of your data (including the ability to opt-out of receiving emails from Myanmar which you may do by unsubscribing using the links provided in Our emails and/or at the point of providing your details and/or by managing your Account).</p><hr>

			<h3>9. Your Right to Withhold Information and Your Right to Withdraw Information After You Have Given it</h3>
			<ol><li>You may access Our Site without providing any data at all. However, to use all features and functions available on Our Site you may be required to submit or allow for the collection of certain data.</li>
			<li>You may restrict your internet browser’s use of Cookies. For more information, see section 12.</li>
			<li>You may withdraw your consent for Myanmar to use your personal data as set out in section in 5 at any time by contacting  Myanmar the details set out in section 15, and We will delete Your data from Our systems. However, you acknowledge this may limit Our ability to provide the best possible products and services to you.</li></ol><hr>

			<h5>10. How Can You Access Your Data?</h5>
			<p>You have the legal right to ask for a copy of any of your personal data held by Myanmar  (where such data is held). Please contact Myanmar for more details at using the contact details below in section 15.</p><hr>


			<h3>11. Summary of Your Rights under GDPR</h3>
			<p>Under the GDPR, you have:</p>

			<ol><li>the right to request access to, deletion of or correction of, </li>
			<li>the right to complain to a supervisory authority;</li>
			<li>be informed of what data processing is taking place;</li>
			<li>the right to restrict processing;</li>
			<li>the right to data portability;</li>
			<li>object to processing of your personal data;</li>
			<li>rights with respect to automated decision-making and profiling (see section 14 below).</li></ol>
			<p>To enforce any of the foregoing rights or if you have any other questions about Our Site or this Privacy Policy, please contact Myanmar using the details set out in section 15 below.</p><hr>

			<h5>12. Automated Decision-Making and Profiling</h5>
			<p>14.1 In the event that We use personal data for the purposes of automated decision-making and those decisions have a legal (or similarly significant effect) on You, You have the right to challenge to such decisions under GDPR, requesting human intervention, expressing their own point of view, and obtaining an explanation of the decision from Myanmar.</p>

			<p>12.2 The right described in section 12.1 does not apply in the following circumstances:</p>

			<ol><li>The decision is necessary for the entry into, or performance of, a contract between the You and Myanmar;</li>
			<li>The decision is authorized by law; or</li>
			<li>You have given you explicit consent.</li></ol>
			<p>12.3 Where We use your personal data for profiling purposes, the following shall apply:</p>

			<ol><li>Clear information explaining the profiling will be provided, including its significance and the likely consequences;</li>
			<li>Appropriate mathematical or statistical procedures will be used;</li>
			<li>Technical and organizational measures necessary to minimize the risk of errors and to enable such errors to be easily corrected shall be implemented; and</li>
			<li>All personal data processed for profiling purposes shall be secured in order to prevent discriminatory effects arising out of profiling.</li></ol><hr>


			<h5>13 Changes to Our Privacy Policy</h5>
			<p>We may change this Privacy Policy as we may deem necessary from time to time, or as may be required by law. Any changes will be immediately posted on Our Site and you will be deemed to have accepted the terms of the Privacy Policy on your first use of Our Site following the alterations. We recommend that you check this page regularly to keep up-to-date.</p>
		 </div>
		</div>
	</div>
</div>
</body>
</html>

