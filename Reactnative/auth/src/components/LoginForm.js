import React, { Component } from 'react';
import { View } from 'react-native';
import { Button, Card, CardSection } from './commons';

class LoginForm extends Component {
	render() {
		return (
			<Card>
				<CardSection />
				<CardSection />
				<CardSection>
					<Button>
						Log in, Please!
					</Button>
				</CardSection>
			</Card>
		);
	}
}

export default LoginForm;