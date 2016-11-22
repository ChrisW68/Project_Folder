import React, { Component } from 'react';
import { Button, Card, CardSection, Input } from './commons';

class LoginForm extends Component {
	/* Text typed in the fields exist lives a 
	piece of state in the state component */
	state = { email: ''};

	render() {
		return (
			<Card>
				<CardSection>
					<Input 
						placeholder="user@gmail.com" //A example for placeholder
						label="Email: "
						value={this.state.email}
						/* Any time the user types in the field
						the fact or function is passed as a prop into Input 
						that was created */
						onChangeText={email => this.setState({ email })}
					/>
				</CardSection>

				<CardSection />

				<CardSection>
					<Button>
						Log In
					</Button>
				</CardSection>
			</Card>
		);
	}
}

export default LoginForm;