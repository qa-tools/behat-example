Feature: Login
	In order to use the website site
	As a website user
	I need to login successfully

	@javascript @login @failing-login
	Scenario: Failing login due wrong password
		Given the user visits the "Login Page"
		When the user enters user and invalidpassword
		And the login should fail

	@javascript @login @successful-login
	Scenario: Successful login of user
		Given the user visits the "Login Page"
		When the user enters user and validpassword
		And the login should succeed