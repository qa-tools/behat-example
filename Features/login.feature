Feature: Login
	In order to use the website site
	As a website user
	I need to login successfully

	@javascript @login @failing-login
	Scenario: Failing login due wrong password
		Given I'm on 'Login Page'
		When I login with 'username' and 'wrong password'
		Then I should be on 'Login page'
		And I should see 'Invalid username or password!' error message

	@javascript @login @successful-login
	Scenario: Successful login of user
		Given I'm on 'Login Page'
		When I login with 'username' and 'password'
		Then I should be on 'Account Page'
