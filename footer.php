	<footer class="footer" id="footer">
		<div class="parallax_background parallax-window " data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">
				
				<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a  style="color:black;" href="index.php">TurnStiles &nbsp;<img src="images/logo.jpg" width="50" height="50"></a>
							</div>
							<div style="color:black;" class="copyright ">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to <a href="index.php">TurnStiles</a>

</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-4 footer_col">
						<div class="footer_contact">
							<div class="icon_box_title">Quick Contact</div>
							<div class="footer_contact_form_container">
								<form action="quickcon.php" class="footer_contact_form" id="footer_contact_form" method="POST">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" name="name" class="footer_contact_input" placeholder="Name" id="name" pattern="[a-zA-Z]{5,}" title="Insert only letters" required="required">
										<input type="email" name="email" class="footer_contact_input" placeholder="E-mail" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter a valid email address like abc@xyz.com" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" name="message" placeholder="Message" id="msg" required="required"></textarea>
									<button class="footer_contact_button" onclick="myFunction();">send message</button>
								</form>
								<script type="text/javascript">
									function myFunction() {
										var answer = confirm("Do you want to continue?")
										if(document.footer_contact_form.name.value="")
										{
											alert("Please enter name");
										}
										if(document.footer_contact_form.mail.value="")
										{
											alert("Please enter email");
										}
										if(document.footer_contact_form.msg.value="")
										{
											alert("Please enter message");
										}	
										{
										if (answer){
											alert("Your Complaint is placed!");
											window.location = "index.php";
										}
										else{
											alert("Thank You!")
										}
									}
								</script>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-5 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Customer Care Hours</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Thursday</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Friday</div>
									<div class="ml-auto">8.00 - 18.30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>