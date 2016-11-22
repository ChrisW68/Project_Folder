import React, { Component } from 'react';
import { Button, Card, CardSection, Input } from './commons';

class LoginForm extends Component {
	/* Text typed in the fields exist lives a 
	piece of state in the state component */
	state = { text: ''};

	render() {
		return (
			<Card>
				<CardSection>
					<Input 
						value={this.state.text}
						onChangeText={text => this.setState({ text })}
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